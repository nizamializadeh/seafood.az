@extends('frontend.index')
@section('content')
    <!-- START MAIN CONTENT -->
    <main class="main-content">
        <!-- START CART SECTION-->
        <div class="cr-section cart-section pt--150 pb--110 bg--white">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="table-responsive mb--30">

                            @if(session()->has('success_message'))
                                <div class="alert alert-success">
                                    {{ session()->get('success_message') }}
                                </div>
                                @endif

                            @if(Cart::count() > 0)
                                <h2>{{ Cart::count() }} item(s) in Shopping Cart</h2>


                            <table class="table cart-table text-center">
                                <!-- Table Head -->
                                <thead>
                                <tr>
                                    {{--<th class="number">#</th>--}}
                                    <th class="image">image</th>
                                    <th class="name">product name</th>
                                    <th class="qty">quantity</th>
                                    <th class="price">price</th>
                                    <th class="total">Total</th>
                                    <th class="remove">remove</th>
                                </tr>
                                </thead>
                                <!-- Table Body -->
                                <tbody>
                                @foreach(Cart::content() as $item)
                                    @php
                                        $link_product = str_slug($item->model->product_name_en, '_')
                                    @endphp
                                <tr>
                                    {{--<td><span class="cart-number">1</span></td>--}}
                                    <td><a href="{{ url('/product/'.$item->id.'/'.$link_product) }}" class="cart-pro-image"><img src="{{ '/images/'.$item->model->product_image }}" alt="" /></a></td>
                                    <td><a href="{{ url('/product/'.$item->id.'/'.$link_product) }}" class="cart-pro-title">{{ $item->model->product_name_az }}</a></td>
                                    <td><p class="cart-pro-price">{{ $item->qty  }} X</p></td>
                                    <td><p class="cart-pro-price">{{ $item->model->price }} AZN</p></td>
                                    <td><p class="cart-price-total">{{ Cart::subtotal() }} AZN</p></td>
                                    <td>
                                        <form action="{{ route('cart.destroy', $item->rowId) }}" method="POST">
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}

                                            <button type="submit" class="cart-pro-remove"><i class="fa fa-trash-o"></i></button>
                                        </form>

                                    </td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>

                        <div class="row pt--30">
                            <!-- Cart Action -->
                            <div class="cart-action col-lg-4 col-md-6 col-12 mb--30">
                                <a href="shop-right-sidebar.html" class="cr-btn cr-btn--sm cr-round cr-round--lg">Continiue Shopping</a>
                                <button class="cr-btn cr-btn--sm cr-round cr-round--lg">update cart</button>
                            </div>

                            <!-- Cart Cuppon -->
                            <div class="cart-cuppon col-lg-4 col-md-6 col-12 mb--30">

                            </div>

                            <!-- Cart Checkout Progress -->
                            <div class="cart-checkout-process col-lg-4 col-md-6 col-12 mb--30">
                                <h4 class="small-title">Process Checkout</h4>
                                <p><span>Subtotal</span><span>{{ Cart::subtotal() }}</span></p>
                                <h5><span>Grand total</span><span>{{ Cart::total() }}</span></h5>
                                <button class="cr-btn cr-btn--sm cr-round cr-round--lg">process to checkout</button>
                            </div>

                        </div>

                        @else
                            <h4>No items in Cart</h4>

                            <a href="{{ url('/shop') }}" class="cr-btn cr-btn--sm cr-round cr-round--lg">Continue Shopping</a>

                            @endif
                    </div>
                </div>
            </div>
        </div><!-- START CART SECTION-->

        <!-- START NEWSLETTER AREA -->
        <section class="cr-section newsletter-area bg--pattern ptb--130">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 offset-lg-1">
                        <div class="newsletter text-center">
                            <div class="newsletter__content">
                                <h2>You can updated with us by Subscribing our newsletter</h2>
                                <h5>So! why you’r late? let’s start subscription...</h5>
                            </div>
                            <div class="newsletter__form">
                                <form action="#">
                                    <input type="text" placeholder="Enter yur email here...">
                                    <button type="submit"><img src="images/icons/fish-send-icon.png" alt=""></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- END NEWSLETTER AREA -->
    </main><!-- END MAIN CONTENT -->
    @endsection