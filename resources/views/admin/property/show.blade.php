@extends("layouts.admin")
@section("content")
    <style>
        iframe{
            width:100%;
        }
    </style>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <table class="table table-bordered table-dark">
                    <tbody>
                    <tr>
                        <th>Title</th>
                        <td>{{ $property->title }}</td>
                    </tr>
                    <tr>
                        <th>Description</th>
                        <td>{{ $property->description }}</td>
                    </tr>
                    <tr>
                        <th>Image</th>
                        <td>
                            <img src="{{ Storage::url($property->card_img) }}" alt="Property Image" width="200">
                        </td>
                    </tr>
                    <tr>
                        <th>Slug</th>
                        <td>{{ $property->slug }}</td>
                    </tr>
                    <tr>
                        <th>Image Gallery</th>
                        <td>
                            @foreach($property->gallery as $img)
                                <img src="{{ Storage::url($img->image) }}" alt="Property Image" width="200">
                            @endforeach
                        </td>
                    </tr>
                    <tr>
                        <th>Status</th>
                        <td>{{ $property->status }}</td>
                    </tr>
                    <tr>
                        <th>Square Feet</th>
                        <td>{{ $property->sqft }}</td>
                    </tr>
                    <tr>

                        <th>Position</th>
                        <td>{!!  $property->position  !!}</td>
                    </tr>
                    <tr>
                        <th>Rooms</th>
                        <td>
                            Oturma Odaları: {{ $property->sittingrooms }} | Yatak Odaları: {{ $property->bedrooms }} | Banyolar: {{ $property->baths }}
                        </td>
                    </tr>

                    <tr>
                        <th>Price Range</th>
                        <td>High Price: {{ $property->low_price }} ₺  - Low Price: {{ $property->high_price }} ₺</td>
                    </tr>
                    <tr>
                        <th>Address</th>
                        <td>{{ $property->address }}</td>
                    </tr>
                    <tr>
                        <th>Age</th>
                        <td>{{ $property->age }}</td>
                    </tr>
                    <tr>
                        <th>Actions</th>
                        <td>
                            <a href="{{ route('admin.property.edit', ['id' => $property->id]) }}" class="btn btn-info">
                                <i class="fas fa-edit"></i>
                            </a>
                            <form action="{{ route('admin.property.destroy', ['id' => $property->id]) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this category?')">
                                    <i class="nav-icon fas fa-trash"></i>
                                </button>
                            </form>

                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection

