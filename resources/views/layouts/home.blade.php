<html>
<!--Head-->
@include("home._head")
</html>
<body>
<!-- Page Preloder -->
<div id="preloder">
    <div class="loader"></div>
</div>

@section("header")
    @include('home._header')
@show
<!--Content-->
@section("content")
@show
@include('home.components.brands')
<!--Footer-->
@section("footer")
    @include("home._footer")
@show
<!--Scripts-->
@include("home._scripts")
</body>
