@extends("layouts.home")
@section("content")
    <!-- Shopping Cart Section Begin -->
    <section class="checkout-section spad">
        <div class="container">
            <form action="#" class="checkout-form">
                <div class="row">
                    <div class="col-lg-6">
                        <h4>Biling Details</h4>
                        <div class="row">
                            <div class="col-lg-12">
                                <label for="name">Name</label>
                                <input type="text" id="name">
                            </div>
                            <div class="col-lg-12">
                                <label for="card-number">Credit Card Number<span>*</span></label>
                                <input type="text" id="card-number">
                            </div>
                            <div class="col-lg-6">
                                <label for="expiration-month">Expiration Month<span>*</span></label>
                                <input type="text" id="expiration-month">
                            </div>
                            <div class="col-lg-6">
                                <label for="expiration-year">Expiration Year<span>*</span></label>
                                <input type="text" id="expiration-year">
                            </div>
                            <div class="col-lg-12">
                                <label for="cvv">CVV/CVC<span>*</span></label>
                                <input type="text" id="cvv">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">

                        <div class="place-order">
                            <h4>Your Order</h4>
                            <div class="order-total">
                                <ul class="order-table">
                                    <li>Product <span>Total</span></li>
                                    <?php $total=0; ?>
                                    @foreach($userCart as $item)
                                        {{$total += $item->property->low_price}}
                                        <li class="fw-normal">{{$item->property->title}} x 1 <span> {{$item->property->low_price}}₺</span></li>
                                    @endforeach

                                </ul>
                                <h6 class="my-4">Total Price With Tax: {{$total}}₺</h6>
                                <div class="order-btn">
                                    <button type="submit" class="site-btn place-btn">Place Order</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <!-- Shopping Cart Section End -->
@endsection
