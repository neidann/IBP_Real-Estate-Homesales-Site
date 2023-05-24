@extends("layouts.admin")
@section("content")
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-1 m-3">
                <a href="{{route('admin.category.create')}}" type="button" class="btn btn-block bg-gradient-primary btn-sm">Create Category</a>
            </div>
        </div>
        <div class="row">
            <table class="table table-bordered table-dark text-white table-hover">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Image</th>
                    <th>Slug</th>
                    <th>Status</th>
                    <th>Created At</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($categories as $category)
                    <tr>
                        <td>{{ $category->id }}</td>
                        <td>{{ $category->title }}</td>
                        <td>{{ $category->description }}</td>
                        <td>
                            <img src="{{Storage::url($category->image)}}" width="100"  alt="" />
                        </td>
                        <td>{{ $category->slug }}</td>
                        <td>{{ $category->status }}</td>
                        <td>{{ $category->created_at }}</td>
                        <td>
                            <a href="{{route('admin.category.show',['id' => $category->id])}}" class="btn btn-primary">  <i class="fas fa-eye"></i></a>
                            <a href="{{route('admin.category.edit',['id' => $category->id])}}" class="btn btn-info"> <i class="fas fa-edit"></i> </a>
                            <a href="{{route('admin.category.destroy',['id' => $category->id])}}" class="btn btn-danger"> <i class="nav-icon fas fa-trash"></i></a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection
