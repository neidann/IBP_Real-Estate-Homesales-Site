@extends("layouts.admin")
@section("content")
    <div class="container-fluid">
        <div class="row bg-dark p-4 rounded">
            <form class="w-100" action="{{ route('admin.settings.update', ['id' => $settings->id]) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="company_name">Company Name</label>
                    <input type="text" name="company_name" id="company_name" class="form-control" value="{{ $settings->company_name }}">
                    @error('company_name')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea name="description" id="description" class="form-control" rows="4">{{ $settings->description }}</textarea>
                    @error('description')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="logo">Logo</label>
                    <input type="file" name="logo" id="logo" class="form-control">
                    @error('logo')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="contact_page">Contact Page</label>
                    <textarea name="contact_page" id="contact_page" class="form-control" rows="4">{{ $settings->contact_page }}</textarea>
                    @error('contact_page')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="references_page">References Page</label>
                    <textarea name="references_page" id="references_page" class="form-control" rows="4">{{ $settings->references_page }}</textarea>
                    @error('references_page')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="about_page">About Page</label>
                    <textarea name="about_page" id="about_page" class="form-control" rows="4">{{ $settings->about_page }}</textarea>
                    @error('about_page')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <button class="btn btn-primary" type="submit">Update</button>
            </form>
        </div>
    </div>

@endsection
