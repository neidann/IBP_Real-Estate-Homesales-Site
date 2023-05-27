@extends("layouts.admin")
@section("content")
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-1 m-3">
                <a href="{{ route('admin.property.create') }}" type="button" class="btn btn-block bg-gradient-primary btn-sm">Create Property</a>
            </div>
        </div>
        @livewire('property')
    </div>
@endsection
