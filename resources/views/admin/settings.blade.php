@extends("layouts.admin")
@section("content")
    <form action="{{route('admin.settings.update')}}" method="POST">
        @csrf
        <button type="submit">Update Settings</button>
    </form>
@endsection
