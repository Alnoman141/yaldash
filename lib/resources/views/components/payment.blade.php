<!-- Payment Content-->
<div class="tab-pane" style="display:block;">
    <div class="row">

        <div class="col-lg-8">
            <h4 class="mt-2">Payment Selection</h4>

            <p class="text-muted mb-4">We support the following payment methods.</p>

            <div class="border p-3 mb-3 rounded">
                <div class="row">
                    <div class="col-sm-8">
                        <div class="custom-control custom-radio">
                            <input type="radio" id="BillingOptRadio1" name="billingOptions" class="custom-control-input" checked>
                            <label class="custom-control-label font-16 font-weight-bold" for="BillingOptRadio1">Pay with Visa</label>
                        </div>
                        <p class="mb-0 pl-3 pt-1">Accepted in more than 200 countries and territories, Visa branded cards offer a secure and reliable way to pay for what you need
                        </p>
                    </div>
                    <div class="col-sm-4 text-sm-right mt-3 mt-sm-0">
                        <img src="{{\Yasser\LaravelDashboard\Helper\Assets::loadImg('Visa_1156753.png')}}" height="90" width="90">
                    </div>
                </div>
            </div>

            <div class="border p-3 mb-3 rounded">
                <div class="row">
                    <div class="col-sm-8">
                        <div class="custom-control custom-radio">
                            <input type="radio" id="BillingOptRadio2" name="billingOptions" class="custom-control-input" checked>
                            <label class="custom-control-label font-16 font-weight-bold" for="BillingOptRadio2">Pay with MasterCard</label>
                        </div>
                        <p class="mb-0 pl-3 pt-1">Mastercard is a leading global payments & technology company that connects consumers, businesses, merchants, issuers & governments around the world.
                        </p>
                    </div>
                    <div class="col-sm-4 text-sm-right mt-3 mt-sm-0">
                        <img src="{{\Yasser\LaravelDashboard\Helper\Assets::loadImg('Mastercard_1156750.png')}}" height="90" width="90">
                    </div>
                </div>
            </div>

            <stripe-component route="{{ route('dashboard.checkout.charges') }}" csrf="{{ session()->token() }}" stripekey="{{ config('services.stripe.key') }}" amount="{{\Yasser\LaravelDashboard\Helper\Helper::amount()}}"></stripe-component>
        </div>


        <!-- end col -->

        <div class="col-lg-4">
            <div class="border p-3 mt-4 mt-lg-0 rounded">
                <h4 class="header-title mb-3">Order Summary</h4>

                <div class="table-responsive">

                    {{$slot}}

                </div>
                <!-- end table-responsive -->

            </div>
            <!-- end border-->

        </div>
        <!-- end col -->

    </div>
    <!-- end row-->

</div>
