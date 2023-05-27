<div>
    <div class="row">
        <input class="form-control my-3" placeholder="Search by title" wire:model="search" />
    </div>
    <div class="row">
        <table class="table table-bordered table-dark text-white table-hover">
            <thead>
            <tr>
                <th>ID</th>
                <th>User</th>
                <th>Category</th>
                <th>Title</th>
                <th>Card Image</th>
                <th>Image Gallery</th>
                <th>Status</th>
                <th>Address</th>
                <th>Age</th>
                <th>Created At</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($propertyList as $property)
                <tr>
                    <td>{{ $property->id }}</td>
                    <td>{{ $property->user->name }}</td>
                    <td>{{ $property->category->title }}</td>
                    <td>{{ $property->title }}</td>
                    <td>
                        <img src="{{ Storage::url($property->card_img) }}" width="100" alt="" />
                    </td>
                    <td class="text-center">
                        <a href="{{ route('admin.property.gallery.index', ['id' => $property->id]) }}" class="btn btn-primary">
                            <i class="fas fa-image fa-3x"></i>
                        </a>
                    </td>
                    <td>{{ $property->status }}</td>
                    <td>{{ $property->address }}</td>
                    <td>{{ $property->age }}</td>
                    <td>{{ $property->created_at }}</td>
                    <td>
                        <a href="{{ route('admin.property.show', ['id' => $property->id]) }}" class="btn btn-primary">
                            <i class="fas fa-eye"></i>
                        </a>
                        <a href="{{ route('admin.property.edit', ['id' => $property->id]) }}" class="btn btn-info">
                            <i class="fas fa-edit"></i>
                        </a>
                        <form action="{{ route('admin.property.destroy', ['id' => $property->id]) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this property?')">
                                <i class="nav-icon fas fa-trash"></i>
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    <div class="row">
        <div class="col-12 d-flex align-items-center justify-content-center">
            {{ $propertyList->links() }}
        </div>
    </div>
</div>
