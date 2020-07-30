@extends("LaravelDashboard::home")

@section("content")

    @component("LaravelDashboard::components.navbar")

        <div class="page-header row no-gutters py-4">
            <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
                <span class="text-uppercase page-subtitle">Dashboard</span>
                <h3 class="page-title" style="margin-top:10px;">Manage Overview</h3>
            </div>

        @endcomponent

            <!-- Default Light Table -->

            <div class="row">

                <div class="col">

                    <manage-component show="{{ route('post.index') }}" type="posts" delete="{{ route('dashboard.manage.index') }}" token="{{ session()->token() }}" route="{{ route('dashboard.manage.jsonData') }}" show="{{ route('post.index') }}"></manage-component>

                    <br>

                    <manage-component show="{{ route('dashboard.store.index') }}" type="products" delete="{{ route('dashboard.manage.index') }}" token="{{ session()->token() }}" route="{{ route('dashboard.manage.jsonData') }}" show="{{ route('post.index') }}"></manage-component>

                </div>


            </div>

            <!-- End Default Light Table -->

        </div>

        <!-- footer -->

        @component("LaravelDashboard::components.footer",["top"=>"50px"])

            <div class="col-md-3 col-sm-6 footer-col">
                <h6 class="heading7">Social Media</h6>
                <ul class="footer-social">
                    <li><i class="fa fa-linkedin social-icon linked-in" aria-hidden="true"></i></li>
                    <li><i class="fa fa-facebook social-icon facebook" aria-hidden="true"></i></li>
                    <li><i class="fa fa-twitter social-icon twitter" aria-hidden="true"></i></li>
                    <li><i class="fa fa-google-plus social-icon google" aria-hidden="true"></i></li>
                </ul>
            </div>

        @endcomponent

        <!-- end footer-->

@endsection

