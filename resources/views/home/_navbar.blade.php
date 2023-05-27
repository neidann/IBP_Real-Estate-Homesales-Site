<div class="nav-item" >
    <div class="container" style="max-width: 1600px">
        <div class="nav-depart">
            <div class="depart-btn">
                <i class="ti-menu"></i>
                <span>All Categories</span>
                <ul class="depart-hover">
                    @foreach($categories as $category)
                        <li @once class="active" @endonce>
                            <a href="{{route('home.category.property',['id' => $category->id, 'slug' => $category->slug])}}">{{$category->title}}</a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
        <nav class="nav-menu mobile-menu">
            <ul>
                <li class="{{Route::currentRouteName()== 'home.index' ? 'active' : '' }}"><a href="{{route('home.index')}}">Home</a></li>
                <li class="{{Route::currentRouteName()== 'home.properties' ? 'active' : '' }}"><a href="{{route('home.properties')}}">Properties</a></li>
                <li class="{{Route::currentRouteName()== 'home.contact' ? 'active' : '' }}" ><a href="{{route('home.contact')}}">Contact</a></li>
                <li class="{{Route::currentRouteName()== 'home.references' ? 'active' : '' }}" ><a href="{{route('home.references')}}">References</a></li>
                <li class="{{Route::currentRouteName()== 'home.about' ? 'active' : '' }}" ><a href="{{route('home.about')}}">About</a></li>
               <!-- <li><a href="#">Pages</a>
                    <ul class="dropdown">
                        <li><a href="./blog-details.html">Blog Details</a></li>
                        <li><a href="./shopping-cart.html">Shopping Cart</a></li>
                        <li><a href="./check-out.html">Checkout</a></li>
                        <li><a href="./faq.html">Faq</a></li>
                        <li><a href="./register.html">Register</a></li>
                        <li><a href="./login.html">Login</a></li>
                    </ul>
                </li>
                -->
            </ul>
        </nav>
        <div id="mobile-menu-wrap"></div>
    </div>
</div>
