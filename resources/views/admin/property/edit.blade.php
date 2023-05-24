@extends("layouts.admin")
@section("content")
    <form action="{{route('admin.category.update',['id' => 1])}}" method="POST">
        @csrf

        <button type="submit">Update Category</button>
    </form>
@endsection
