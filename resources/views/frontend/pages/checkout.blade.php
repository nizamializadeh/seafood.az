@extends('frontend.index')
@section('content')
    <!-- START MAIN CONTENT -->
    <main class="main-content" style="background: white;">

        <!-- Checkout Section Start-->
        <div class="checkout-section cr-section pt--150 pb--120">
            <div class="container">
                <form action="/postcheckout" method="POST" id="payment-form">
                   {{ csrf_field() }}
                    <div class="row">
                        <div class="col-lg-6 col-12 mb-30">
                            <!-- Checkout Accordion Start -->
                            <div id="checkout-accordion">
                                <!-- Billing Method -->
                                <div class="single-accordion">
                                    <a class="accordion-head " data-toggle="collapse" data-parent="#checkout-accordion" href="#billing-method">1. billing informatioon</a>
                                    <div id="billing-method" class="collapse show">
                                        <div class="accordion-body billing-method fix">
                                                <div class="row">
                                                    <div class="col-md-6 col-12 mb--20">
                                                        <input type="text" placeholder="* First Name">
                                                    </div>
                                                    <div class="col-md-6 col-12 mb--20">
                                                        <input type="text" placeholder="* Last Name">
                                                    </div>
                                                    <div class="col-12 mb--20">
                                                        <input type="text" placeholder="Company Name">
                                                    </div>
                                                    <div class="col-12 mb--20">
                                                        <input placeholder="* Street address" type="text">
                                                    </div>
                                                    <div class="col-12 mb--20">
                                                        <input placeholder="* Apartment, suite, unit etc. (optional)" type="text">
                                                    </div>
                                                    <div class="col-12 mb--20">
                                                        <input placeholder="* Town / City" type="text">
                                                    </div>
                                                    <div class="col-md-6 col-12 mb--20">
                                                        <input type="text" placeholder="State / County">
                                                    </div>
                                                    <div class="col-md-6 col-12 mb--20">
                                                        <input placeholder="Postcode / Zip" type="text">
                                                    </div>
                                                    <div class="col-md-6 col-12 mb--20">
                                                        <input type="email" placeholder="* Email Address">
                                                    </div>
                                                    <div class="col-md-6 col-12">
                                                        <input placeholder="* Phone Number" type="text">
                                                    </div>
                                                </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Payment Method -->
                                <div class="single-accordion">
                                    <a class="accordion-head collapsed" data-toggle="collapse" data-parent="#checkout-accordion" href="#payment-method">2. Payment method</a>
                                    <div id="payment-method" class="collapse">
                                        <div class="accordion-body payment-method fix">
                                            <ul class="payment-method-list">
                                                <li class="active">check / money order</li>
                                                <li class="payment-form-toggle">credit card</li>
                                            </ul>
                                            <div class="payment-form">
                                                <div class="row">
                                                    <div class="input-box col-12">
                                                        <label for="card-element">
                                                            Credit or debit card
                                                        </label>
                                                        <div id="card-element">
                                                            <!-- A Stripe Element will be inserted here. -->
                                                        </div>
                                                        <!-- Used to display form errors. -->
                                                        <div id="card-errors" role="alert"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- Checkout Accordion Start -->
                        </div>

                        <!-- Order Details -->
                        <div class="col-lg-6 col-12 mb-30">
                            <div class="order-details-wrapper">
                                <h2>your order</h2>
                                <div class="order-details">
                                    <ul>
                                        <li><p class="strong">product</p><p class="strong">total</p></li>
                                        @if(Cart::count() > 0)
                                            @foreach(Cart::content() as $item)
                                                <li><p>{{ $item->model->product_name_az }} x{{ $item->qty }}</p><p>{{ $item->total }} AZN</p></li>
                                            @endforeach
                                        @else
                                            No items in cart
                                        @endif
                                        <li><p class="strong">order total</p><p class="strong">{{ Cart::total() }} AZN</p></li>
                                        <li><button type="submit" class="cr-btn cr-btn--sm cr-round cr-round--lg">place order</button></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div><!-- Checkout Section End-->
        <script>
            (function(){
                // Create a Stripe client.
                var stripe = Stripe('pk_test_0TCi6rzJfM3ilLw2JMpLkZo7');

// Create an instance of Elements.
                var elements = stripe.elements();

// Custom styling can be passed to options when creating an Element.
// (Note that this demo uses a wider set of styles than the guide below.)
                var style = {
                    base: {
                        color: '#32325d',
                        lineHeight: '18px',
                        fontFamily: '"Roboto", Helvetica Neue", Helvetica, sans-serif',
                        fontSmoothing: 'antialiased',
                        fontSize: '16px',
                        '::placeholder': {
                            color: '#aab7c4'
                        }
                    },
                    invalid: {
                        color: '#fa755a',
                        iconColor: '#fa755a'
                    }
                };

// Create an instance of the card Element.
                var card = elements.create('card', {
                    style: style,
                    hidePostalCode: true
                });

// Add an instance of the card Element into the `card-element` <div>.
                card.mount('#card-element');

// Handle real-time validation errors from the card Element.
                card.addEventListener('change', function(event) {
                    var displayError = document.getElementById('card-errors');
                    if (event.error) {
                        displayError.textContent = event.error.message;
                    } else {
                        displayError.textContent = '';
                    }
                });

// Handle form submission.
                var form = document.getElementById('payment-form');
                form.addEventListener('submit', function(event) {
                    event.preventDefault();

                    var options = {
                        name: document.getElementById('name_on_card').value,
                        address_line1: document.getElementById('address').value,
                        address_city: document.getElementById('city').value,
                        address_state: document.getElementById('province').value,
                        address_zip: document.getElementById('postalcode').value
                    }

                    stripe.createToken(card, options).then(function(result) {
                        if (result.error) {
                            // Inform the user if there was an error.
                            var errorElement = document.getElementById('card-errors');
                            errorElement.textContent = result.error.message;
                        } else {
                            // Send the token to your server.
                            stripeTokenHandler(result.token);
                        }
                    });
                });

                function stripeTokenHandler(token) {
                    // Insert the token ID into the form so it gets submitted to the server
                    var form = document.getElementById('payment-form');
                    var hiddenInput = document.createElement('input');
                    hiddenInput.setAttribute('type', 'hidden');
                    hiddenInput.setAttribute('name', 'stripeToken');
                    hiddenInput.setAttribute('value', token.id);
                    form.appendChild(hiddenInput);
                    // Submit the form
                    form.submit();
                }
            })();
        </script>
    </main><!-- END MAIN CONTENT -->
@endsection