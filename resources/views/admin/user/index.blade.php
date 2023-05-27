@extends("layouts.admin")
@section("content")
    <table class="table table-hover bg-white">
        <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Password</th>
            <th>Role</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->password }}</td>
                <td>
                    <form method="post" action="{{route('admin.user.update',['id' => $user->id])}}">
                        @csrf
                        <ul class="list-group">
                            <li class="list-group-item">
                                USER <input type="radio" value="USER" name="role" @if($user->role==="USER") checked @endif/>
                            </li>
                            <li class="list-group-item">
                                ADMIN <input type="radio" value="ADMIN" name="role" @if($user->role==="ADMIN") checked @endif />
                            </li>
                            <li  class="list-group-item">
                                <button type="submit" class="btn btn-warning">Save</button>
                            </li>
                        </ul>
                    </form>
                </td>
                <td>
                    <a class="btn btn-warning"><i class="fa fa-eye"></i></a>
                    <a class="btn btn-danger"><i class="fa fa-trash"></i></a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
