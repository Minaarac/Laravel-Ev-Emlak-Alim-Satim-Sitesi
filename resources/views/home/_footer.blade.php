@php
    $setting=\App\Http\Controllers\HomeController::getsetting()
@endphp

<!-- Footer -->
<footer id="aa-footer">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="aa-footer-area">
                    <div class="row">
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="aa-footer-left">
                                <p>Designed by <a rel="nofollow" href="http://www.markups.io/">{{$setting->company}}</a></p>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="aa-footer-middle">

                                     @if($setting->facebook != null)  <a href="{{$setting->facebook}}" target="_blank" ><i class="fa fa-facebook"></i></a> @endif

                                    @if($setting->twitter != null)<a href="{{$setting->twitter}}" target="_blank" ><i class="fa fa-twitter"></i></a>@endif

                                    @if($setting->instagram != null)<a href="{{$setting->instagram}}" target="_blank" ><i class="fa fa-instagram"></i></a>@endif

                                    @if($setting->youtube != null)<a href="{{$setting->youtube}}" target="_blank" ><i class="fa fa-youtube"></i></a>@endif

                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <div class="aa-footer-right">
                                <a href="#">Home</a>
                                <a href="#">Support</a>
                                <a href="#">License</a>
                                <a href="#">FAQ</a>
                                <a href="#">Privacy & Term</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- / Footer -->



<!-- jQuery library -->
<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> -->
<script src="{{ asset('assets')}}/js/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="{{ asset('assets')}}/js/bootstrap.js"></script>
<!-- slick slider -->
<script type="text/javascript" src="{{ asset('assets')}}/js/slick.js"></script>
<!-- Price picker slider -->
<script type="text/javascript" src="{{ asset('assets')}}/js/nouislider.js"></script>
<!-- mixit slider -->
<script type="text/javascript" src="{{ asset('assets')}}/js/jquery.mixitup.js"></script>
<!-- Add fancyBox -->
<script type="text/javascript" src="{{ asset('assets')}}/js/jquery.fancybox.pack.js"></script>
<!-- Custom js -->
<script src="{{ asset('assets')}}/js/custom.js"></script>
