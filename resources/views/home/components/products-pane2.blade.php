<!-- Man Banner Section Begin -->
<section class="man-banner spad">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-8">
                <div class="product-slider owl-carousel">
                    @foreach($properties as $property)
                        <div class="product-item">
                            <div class="pi-pic">
                                <img src="{{Storage::url($property->card_img)}}" alt="{{$property->img_text}}">
                                <div class="sale">Sale</div>

                                <ul>
                                    <li class="quick-view"><a href="{{route('home.properties_detail',['id' => $property->id])}}">+ Quick View</a></li>
                                </ul>
                            </div>
                            <div class="pi-text">
                                <div class="catagory-name">{{$property->category->title}}</div>
                                <a href="{{route('home.properties_detail',['id' => $property->id])}}">
                                    <h5>{{$property->title}}</h5>
                                </a>
                                <div class="product-price">
                                    {{$property->low_price}}₺
                                    <span> {{$property->high_price}}₺</span>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
            <div class="col-lg-3 offset-lg-1">
                <div class="product-large set-bg m-large bg-warning" data-setbg="{{asset('home')}}/img/pane.png">
                    <h2>{{$category}}</h2>
                    <a href="#">Discover More</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Man Banner Section End -->
