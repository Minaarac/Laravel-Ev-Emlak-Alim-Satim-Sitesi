<!-- Start slider  -->
<section id="aa-slider">
    <div class="aa-slider-area">
        <!-- Top slider -->
        <div class="aa-top-slider">
            @foreach($slider as $rs)
            <!-- Top slider single slide -->
            <div class="aa-top-slider-single">
                <img src=" {{Storage::url($rs->image)}}" alt="img">
                <!-- Top slider content -->
                <div class="aa-top-slider-content">
                    <span class="aa-top-slider-catg">{{$rs->title}}</span>
                    <p class="aa-top-slider-location"> <i class="fa fa-map-marker"></i>South Beach, Miami (USA)</p>
                    <span class="aa-top-slider-off">30% OFF</span>
                    <p class="aa-top-slider-price">{{$rs->price}}</p>
                    <a href="{{route('product',['id' => $rs->id,'description' => $rs->description])}}" class="aa-top-slider-btn">Read More <span class="fa fa-angle-double-right"></span></a>
                </div>
                <!-- / Top slider content -->
            </div>
            @endforeach
            <!-- / Top slider single slide -->
            <!-- Top slider single slide -->
                <!-- / Top slider content -->
            </div>
            <!-- / Top slider single slide -->
        </div>
    </div>

</section>
<!-- End slider  -->
