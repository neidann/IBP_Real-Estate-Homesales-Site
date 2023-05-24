@extends("layouts.admin")
@section("content")
    <form action="{{route('admin.slider.update',['id' => 1])}}" method="POST">
        @csrf

        <button type="submit">Update Slider</button>
    </form>
@endsection
