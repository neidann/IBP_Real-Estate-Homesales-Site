@extends("layouts.admin")
@section("content")
    <table class="table table-bordered table-dark text-white table-hover">
        <tbody>
        <tr>
            <th>ID</th>
            <td>{{ $category->id }}</td>
        </tr>
        <tr>
            <th>Title</th>
            <td>{{ $category->title }}</td>
        </tr>
        <tr>
            <th>Description</th>
            <td>{{ $category->description }}</td>
        </tr>
        <tr>
            <th>Image</th>
            <td>{{ $category->image }}</td>
        </tr>
        <tr>
            <th>Slug</th>
            <td>{{ $category->slug }}</td>
        </tr>
        <tr>
            <th>Status</th>
            <td>{{ $category->status }}</td>
        </tr>
        <tr>
            <th>Created At</th>
            <td>{{ $category->created_at }}</td>
        </tr>
        <tr>
            <th>Actions</th>
            <td>
                <a href="{{ route('admin.category.edit', ['id' => $category->id]) }}" class="btn btn-info">
                    <i class="fas fa-edit"></i>
                </a>
                <a href="{{ route('admin.category.destroy', ['id' => $category->id]) }}" class="btn btn-danger">
                    <i class="nav-icon fas fa-trash"></i>
                </a>
            </td>
        </tr>
        </tbody>
    </table>

@endsection
