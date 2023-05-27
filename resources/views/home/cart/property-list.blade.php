@extends("layouts.home")
@section("content")
    <!-- Product Shop Section Begin -->
    <section class="product-shop spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-8 order-2 order-lg-1 produts-sidebar-filter">
                    <div class="filter-widget">
                        <h4 class="fw-title">Categories</h4>
                        <ul class="filter-catagories">
                            @foreach($categories as $category)
                            <li><a href="{{route('home.category.property',['id' => $category->id,'slug' => $category->slug])}}">{{$category->title}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-lg-9 order-1 order-lg-2">

                    <div class="product-list">
                        <div class="row">
                            @foreach($properties as $property)
                                <div class="col-lg-4 col-sm-6">
                                    <div class="product-item">
                                        <div class="pi-pic">
                                            <img src="{{Storage::url($property->card_img)}}" alt="">
                                            <div class="sale pp-sale">Sale</div>

                                            <ul>
                                                <li class="w-icon active"><a href="#"><i class="icon_bag_alt"></i></a>
                                                </li>
                                                <li class="quick-view"><a href="{{route('home.properties_detail',['id' => $property->id])}}">+ Quick View</a></li>
                                                <li class="w-icon"><a href="#"><i class="fa fa-random"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="pi-text">
                                            <div class="catagory-name">{{$property->category->title}}</div>
                                            <a href="#">
                                                <h5>{{$property->title}}</h5>
                                            </a>
                                            <div class="product-price">
                                                {{$property->low_price}} ₺ <span>{{$property->high_price}}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    @if(isset($ispaginated))
                        <div class="loading-more text-warning d-flex justify-content-center">
                            {{$properties->links()}}
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </section>
    <!-- Product Shop Section End -->
@endsection
