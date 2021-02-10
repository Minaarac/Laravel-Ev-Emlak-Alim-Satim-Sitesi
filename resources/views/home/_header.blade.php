<!-- Start header section -->
<header id="aa-header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="aa-header-area">
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-xs-6">
                            <div class="aa-header-left">
                                <div class="aa-telephone-no">
                                    <span class="fa fa-phone"></span>
                                    1-900-523-3564
                                </div>
                                <div class="aa-email hidden-xs">
                                    <span class="fa fa-envelope-o"></span> myproperty@.com
                                </div>
                            </div>
                        </div>


                        @auth()

                            <div class="col-md-6 col-sm-6 col-xs-6">
                                <div class="aa-header-right">
                                    <strong class="text-lowercase"> {{Auth::user()->name}} <i
                                            class="fa fa-caret-down"> </i> {{Auth::user()->roles->pluck('name')}} </strong>

                                </div>
                            </div>
                        @endauth
                        @guest

                            <a href="/login" class="aa-login">Login</a>
                        @endguest
                        <a href="{{route('logout')}}" class="aa-login">Logout</a>
                        <a href="/register" class="aa-login">Register</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- End header section -->
