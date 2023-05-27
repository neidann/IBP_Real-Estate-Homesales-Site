<!-- Header Section Begin -->
<header class="header-section">
    <div class="header-top">
        <div class="container">
            <div class="ht-left">
                <div class="mail-service">
                    <i class=" fa fa-envelope"></i>
                    real.estate.agency@gmail.com
                </div>
                <div class="phone-service">
                    <i class=" fa fa-phone"></i>
                    +90 551 111 11 11
                </div>
            </div>
            <div class="ht-right">
                @auth
                    <a href="{{route('profile.edit')}}" class="login-panel mx-2"><i class="fa fa-user"></i>Profile</a>
                @else
                    <a href="{{route('login')}}" class="login-panel mx-2"><i class="fa fa-user"></i>Login</a>
                    <a href="{{route('register')}}" class="login-panel mx-2"><i class="fa fa-user"></i>Register</a>
                @endauth
                <div class="lan-selector">
                    <select class="language_drop" name="countries" id="countries" style="width:300px;">
                        <option value='yt' data-image="{{asset('home')}}/img/flag-1.jpg" data-imagecss="flag yt"
                                data-title="English">English</option>
                        <option value='yu' data-image="{{asset('home')}}/img/flag-2.jpg" data-imagecss="flag yu"
                                data-title="Bangladesh">German </option>
                    </select>
                </div>
                <div class="top-social">
                    <a href="#"><i class="ti-facebook"></i></a>
                    <a href="#"><i class="ti-twitter-alt"></i></a>
                    <a href="#"><i class="ti-linkedin"></i></a>
                    <a href="#"><i class="ti-pinterest"></i></a>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="inner-header">
            <div class="row">
                <div class="col-lg-2 col-md-2">
                    <div class="logo">
                        <a href="{{route('home.index')}}">
                            <img src="{{asset('home')}}/img/logo.png" alt="{{$settings->description}}" >
                        </a>
                    </div>
                </div>
                <div class="col-lg-7 col-md-7">
                    @livewire('home-search')
                </div>
                <div class="col-lg-3 text-right col-md-3">
                    <ul class="nav-right">
                        <li class="heart-icon">
                            <a href="#">
                                <i class="fa fa-bell"></i>
                                <span>1</span>
                            </a>
                        </li>
                        <li class="cart-icon">
                            <a href="{{route('cart.index')}}">
                                <i class="icon_bag_alt"></i>
                                <span>{{count($userCart)}}</span>
                            </a>
                            <div class="cart-hover">
                                <div class="select-items">
                                    <table>
                                        <tbody>
                                        @foreach($userCart as $item)
                                        <tr>
                                            <td class="si-pic"><img src="{{Storage::url($item->property->card_img)}}" width="100" alt=""></td>
                                            <td class="si-text">
                                                <div class="product-selected">
                                                    <p>{{$item->property->low_price}}₺</p>
                                                    <h6>{{$item->property->title}}</h6>
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <div class="select-button">
                                    <a href="{{route('cart.index')}}" class="primary-btn checkout-btn">OPEN CART</a>
                                </div>
                            </div>
                        </li>
                        @if($userCartTotalPrice>0)
                        <li class="cart-price">{{$userCartTotalPrice}}₺</li>
                        @endif
                    </ul>
                </div>
            </div>
        </div>
    </div>
  @include('home._navbar')
</header>
<!-- Header End -->
