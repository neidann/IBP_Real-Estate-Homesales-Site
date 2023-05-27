@extends("layouts.admin")
@section("content")
    <div class="container-fluid">
        <div class="row">
            <a href="{{route('admin.property.index')}}" type="button" class="btn btn-block bg-gradient-primary btn-sm w-25 my-3">Back To Properties</a>
        </div>
        <div class="row bg-dark p-4 rounded">
            <form class="w-100" action="{{ route('admin.property.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="category">Category</label>
                    <select name="category" id="category" class="form-control">
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->title }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" id="title" class="form-control">
                    @error('title')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea name="description" id="description" class="form-control" rows="4"></textarea>
                    @error('description')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label for="card_image">Card Image</label>
                            <input type="file" name="card_image" id="card_image" class="form-control" required>
                            @error('card_image')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="image_text">Image Text</label>
                            <input type="text" name="img_text" id="image_text" class="form-control">
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-3">
                        <div class="form-group">
                            <label for="sqft">Sqft</label>
                            <input type="text" name="sqft" id="sqft" class="form-control">
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="form-group">
                            <label for="sitting_rooms">Sitting Rooms</label>
                            <input type="text" name="sitting_rooms" id="sitting_rooms" class="form-control">
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="form-group">
                            <label for="bedrooms">Bedrooms</label>
                            <input type="text" name="bedrooms" id="bedrooms" class="form-control">
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="form-group">
                            <label for="baths">Baths</label>
                            <input type="text" name="baths" id="baths" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-3">
                        <div class="form-group">
                            <label for="status">Status</label>
                            <select name="status" id="status" class="form-control">
                                <option value="active">Active</option>
                                <option value="inactive">Inactive</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="form-group">
                            <label for="high_price">High Price</label>
                            <input type="text" name="high_price" id="high_price" class="form-control">
                        </div>
                    </div>
                    <div class="col-3">

                        <div class="form-group">
                            <label for="low_price">Low Price</label>
                            <input type="text" name="low_price" id="low_price" class="form-control">
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="form-group">
                            <label for="age">Age</label>
                            <input type="text" name="age" id="age" class="form-control">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="position">Position</label>
                    <input type="text" name="position" id="position" class="form-control">
                </div>





                <div class="form-group">
                    <label for="address">Address</label>
                    <input type="text" name="address" id="address" class="form-control">
                </div>

                <button class="btn btn-primary" type="submit">Create</button>
            </form>
        </div>
    </div>
@endsection
