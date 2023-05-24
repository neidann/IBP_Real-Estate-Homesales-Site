@extends("layouts.admin")
@section("content")
    <div class="container-fluid">
        <div class="row  bg-dark p-4 rounded">
            <form class="w-100" action="{{ route('admin.property.gallery.store',['id' => $property->id]) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="order">Order</label>
                    <input type="number" name="order" id="order" class="form-control">
                    @error('order')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="image">Image</label>
                    <input type="file" name="image" id="image" class="form-control" required>
                    @error('image')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="image_alt">Image Alt</label>
                    <input type="text" name="image_alt" id="image_alt" class="form-control">
                </div>
                <button class="btn btn-primary" type="submit">Create</button>
            </form>
        </div>
        <div class="row">
            <table class="table table-bordered table-dark text-white table-hover">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Order</th>
                    <th>Image Description(SEO)</th>
                    <th>Image Alt</th>
                    <th>Created At</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($property->gallery as $image)
                    <tr>
                        <td>{{ $image->id }}</td>
                        <td>{{ $image->order }}</td>
                        <td>{{ $image->image_alt }}</td>
                        <td>
                            <img src="{{Storage::url($image->image)}}" width="100"  alt="" />
                        </td>
                        <td>{{ $image->created_at }}</td>
                        <td>
                            <form action="{{ route('admin.property.gallery.destroy', ['id' => $image->id]) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this category?')">
                                    <i class="nav-icon fas fa-trash"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>


        </div>

    </div>
@endsection
