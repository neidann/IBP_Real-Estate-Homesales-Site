<!-- Women Banner Section Begin -->
<section class="women-banner spad mt-5">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3">
                <div class="product-large set-bg bg-warning" data-setbg="{{asset('home')}}/img/pane.png">
                    <h2>{{$category}}</h2>
                    <a href="#">Discover More</a>
                </div>
            </div>
            <div class="col-lg-8 offset-lg-1">
                <div class="product-slider owl-carousel">
                    @foreach($properties as $property)
                    <div class="product-item">
                        <div class="pi-pic">
                            <img src="{{Storage::url($property->card_img)}}" alt="{{$property->img_text}}">
                            <div class="sale">Sale</div>
                            <div class="icon">
                                <i class="icon_heart_alt"></i>
                            </div>
                            <ul>
                                <li class="w-icon active"><a href="#"><i class="icon_bag_alt"></i></a></li>
                                <li class="quick-view"><a href="#">+ Quick View</a></li>
                                <li class="w-icon"><a href="#"><i class="fa fa-random"></i></a></li>
                            </ul>
                        </div>
                        <div class="pi-text">
                            <div class="catagory-name">{{$property->category->title}}</div>
                            <a href="#">
                                <h5>{{$property->title}}</h5>
                            </a>
                            <div class="product-price">
                                {{$property->low_price}}
                                <span> {{$property->high_price}}</span>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</section>
<!-- Women Banner Section End -->
