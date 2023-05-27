@extends("layouts.home")
@section("content")
    <!-- Hero Section Begin -->
    <section class="hero-section">
        <div class="hero-items owl-carousel">
            <div class="single-hero-items set-bg" data-setbg="{{asset('home')}}/img/slider1.png">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5">
                            <span>House, Villa</span>
                            <h1>REAL ESTATE</h1>

                            <a href="#" class="primary-btn">BUY HOUSE ONLİNE!</a>
                        </div>
                    </div>
                    <div class="off-card">
                        <h2>Sale <span>49%</span></h2>
                    </div>
                </div>
            </div>
            <div class="single-hero-items set-bg" data-setbg="{{asset('home')}}/img/slider2.png" style="object-fit: contain">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5">
                            <span>Special Design, Architecture</span>
                            <h1>Modern Houses</h1>
                            <a href="#" class="primary-btn">BUY HOUSE ONLİNE!</a>
                        </div>
                    </div>
                    <div class="off-card">
                        <h2>Sale <span>50%</span></h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    @foreach($categories as $category)
        @if($loop->iteration%2===0)
            @include('home.components.products-pane',['properties' => $category->properties, 'category' => $category->title])
        @else
            @include('home.components.products-pane2',['properties' => $category->properties, 'category' => $category->title])
        @endif
    @endforeach
@endsection
