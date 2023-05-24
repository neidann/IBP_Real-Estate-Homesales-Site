@extends("layouts.admin")
@section("content")
    <form action="{{route('admin.slider.store')}}" method="POST">
        @csrf

        <button type="submit">Create</button>
    </form>
@endsection
