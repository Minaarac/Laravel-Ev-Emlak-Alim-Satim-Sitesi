@php
    $setting=\App\Http\Controllers\HomeController::getsetting()
@endphp

@extends('layouts.home')

@section('title',$setting->title)

@section('description') {{ $setting->description }} @endsection

@section('keywords',$setting->keywords)


@section('content')
    @include('home._slide')
    <!-- eretewg -->
    <!-- Advance Search -->
    <section id="aa-advance-search">
        <div class="container">
            <div class="aa-advance-search-area">
                <div class="form">
                    <div class="aa-advance-search-top">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="aa-single-advance-search">

                                    <div class="aa-single-advance-search">
                                        <form action="{{route('getproduct')}}" method="post">
                                            @csrf
                                            @livewire('search')
                                            <input class="aa-search-btn" type="submit" value="search">
                                        </form>
                                        @livewireScripts
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="aa-advance-search-bottom">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="aa-single-filter-search">
                                    <span>AREA (SQ)</span>
                                    <span>FROM</span>
                                    <span id="skip-value-lower" class="example-val">30.00</span>
                                    <span>TO</span>
                                    <span id="skip-value-upper" class="example-val">100.00</span>
                                    <div id="aa-sqrfeet-range"
                                         class="noUi-target noUi-ltr noUi-horizontal noUi-background">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="aa-single-filter-search">
                                    <span>PRICE ($)</span>
                                    <span>FROM</span>
                                    <span id="skip-value-lower2" class="example-val">30.00</span>
                                    <span>TO</span>
                                    <span id="skip-value-upper2" class="example-val">100.00</span>
                                    <div id="aa-price-range"
                                         class="noUi-target noUi-ltr noUi-horizontal noUi-background">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- / Advance Search -->

    <!-- About us -->
    <section id="aa-about-us">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="aa-about-us-area">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="aa-about-us-left">
                                    <img src=" {{ asset('assets')}}/img/about-us.jpeg" alt="image">
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="aa-about-us-right">
                                    <div class="aa-title">
                                        <h2><a href="{{route('aboutus')}}"> About Us </a></h2>
                                        <li><b> Mina Arac Property Ankara’daki genel merkezi sahiplex ile Türkiye’nin
                                                “Yeşil Ofis” seçilen ilk e-ticaret şirketi unvanına sahip.

                                                İşine tutkuyla bağlı profesyonel insan kaynağı, güçlü teknolojik
                                                altyapısı ve müşteri odaklı hizmet anlayışı ile sahibinden.com,
                                                kullanıcılarının hayatlarına dokunarak değer yaratmak, hayallerine
                                                ulaşmalarına aracılık etmek ve en iyi deneyimleri yaşatmak için tüm
                                                gücüyle çalışmaya devam ediyor.</b></li>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- / About us -->

    <!-- Latest property -->

        <section id="aa-latest-property">

            <div class="container">
                @foreach($last as $rs)
                <div class="aa-latest-property-area">
                    <div class="aa-title">
                        <h2>Latest Properties</h2>
                        <span></span>
                        <p></p>
                    </div>
                    <div class="aa-latest-properties-content">
                        <div class="row">
                            <div class="col-md-4">
                                <article class="aa-properties-item">
                                    <a href="#" class="aa-properties-item-img">
                                        <img src="{{Storage::url($rs->image)}}" style="height: 200px" alt="img">
                                    </a>
                                    <div class="aa-tag for-sale">
                                        For Sale
                                    </div>
                                    <div class="aa-properties-item-content">
                                        <div class="aa-properties-info">
                                            <span>5 Rooms</span>
                                            <span>2 Beds</span>
                                            <span>3 Baths</span>
                                            <span>1100 SQ FT</span>
                                        </div>
                                        <div class="aa-properties-about">
                                            <h3><a href="#">{{$rs->title}}</a></h3>
                                            <p></p>
                                        </div>
                                        <div class="aa-properties-detial">
                                            <span class="aa-price" {{$rs->price}} >{{$rs->price}}</span>
                                            <a class="aa-secondary-btn" href="{{route('product',['id'=>$rs->id])}}">View
                                                Details</a>
                                        </div>
                                    </div>
                                </article>
                            </div>
                        </div>
                    </div>

                @endforeach

                <!-- / Latest property -->

                    <!-- Service section -->
                    <section id="aa-service">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="aa-service-area">
                                        <div class="aa-title">
                                            <h2>Our Service</h2>
                                            <span></span>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum sit
                                                ea nobis quae vero voluptatibus.</p>
                                        </div>
                                        <!-- service content -->
                                        <div class="aa-service-content">
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <div class="aa-single-service">
                                                        <div class="aa-service-icon">
                                                            <span class="fa fa-home"></span>
                                                        </div>
                                                        <div class="aa-single-service-content">
                                                            <h4><a href="#">Property Sale</a></h4>
                                                            <p>Lorem ipsum dolor sit amet, consectetur
                                                                adipisicing elit. Iusto repellendus quasi
                                                                asperiores itaque dolorem at.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="aa-single-service">
                                                        <div class="aa-service-icon">
                                                            <span class="fa fa-check"></span>
                                                        </div>
                                                        <div class="aa-single-service-content">
                                                            <h4><a href="#">Property Rent</a></h4>
                                                            <p>Lorem ipsum dolor sit amet, consectetur
                                                                adipisicing elit. Iusto repellendus quasi
                                                                asperiores itaque dolorem at.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="aa-single-service">
                                                        <div class="aa-service-icon">
                                                            <span class="fa fa-crosshairs"></span>
                                                        </div>
                                                        <div class="aa-single-service-content">
                                                            <h4><a href="#">Property Development</a></h4>
                                                            <p>Lorem ipsum dolor sit amet, consectetur
                                                                adipisicing elit. Iusto repellendus quasi
                                                                asperiores itaque dolorem at.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="aa-single-service">
                                                        <div class="aa-service-icon">
                                                            <span class="fa fa-bar-chart-o"></span>
                                                        </div>
                                                        <div class="aa-single-service-content">
                                                            <h4><a href="#">Market Analysis</a></h4>
                                                            <p>Lorem ipsum dolor sit amet, consectetur
                                                                adipisicing elit. Iusto repellendus quasi
                                                                asperiores itaque dolorem at.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- / Service section -->

                    <!-- Promo Banner Section -->
                    <section id="aa-area">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="aa-error-area">
                                        <h3>Find Your Best Property</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus,
                                            ex illum corporis quibusdam numquam quisquam optio explicabo.
                                            Officiis odit quia odio dignissimos eius repellat id!</p>
                                        <a href="#" class="aa-view-btn">View Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- / Promo Banner Section -->

                    <!-- Our Agent Section-->
                    <section id="aa-agents">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="aa-agents-area">
                                        <div class="aa-title">
                                            <h2>Our Agents</h2>
                                            <span></span>
                                            <p></p>
                                        </div>
                                        <!-- agents content -->
                                        <div class="aa-agents-content">
                                            <ul class="aa-agents-slider">
                                                <li>
                                                    <div class="aa-single-agents">
                                                        <div class="aa-agents-img">
                                                            <img src=" {{ asset('assets')}}/img/agents/2.jpg"
                                                                 alt="agent member image">
                                                        </div>
                                                        <div class="aa-agetns-info">
                                                            <h4><a href="#">Dennis Smith</a></h4>
                                                            <span>Top Agent</span>
                                                            <div class="aa-agent-social">
                                                                <a href="#"><i class="fa fa-facebook"></i></a>
                                                                <a href="#"><i class="fa fa-twitter"></i></a>
                                                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                                                <a href="#"><i
                                                                        class="fa fa-google-plus"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="aa-single-agents">
                                                        <div class="aa-agents-img">
                                                            <img src=" {{ asset('assets')}}/img/agents/3.jpg"
                                                                 alt="agent member image">
                                                        </div>
                                                        <div class="aa-agetns-info">
                                                            <h4><a href="#">Adam Barney</a></h4>
                                                            <span>Expert Agent</span>
                                                            <div class="aa-agent-social">
                                                                <a href="#"><i class="fa fa-facebook"></i></a>
                                                                <a href="#"><i class="fa fa-twitter"></i></a>
                                                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                                                <a href="#"><i
                                                                        class="fa fa-google-plus"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="aa-single-agents">
                                                        <div class="aa-agents-img">
                                                            <img src=" {{ asset('assets')}}/img/agents/4.jpg"
                                                                 alt="agent member image">
                                                        </div>
                                                        <div class="aa-agetns-info">
                                                            <h4><a href="#">Paul Walker</a></h4>
                                                            <span>Director</span>
                                                            <div class="aa-agent-social">
                                                                <a href="#"><i class="fa fa-facebook"></i></a>
                                                                <a href="#"><i class="fa fa-twitter"></i></a>
                                                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                                                <a href="#"><i
                                                                        class="fa fa-google-plus"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="aa-single-agents">
                                                        <div class="aa-agents-img">
                                                            <img src=" {{ asset('assets')}}/img/agents/5.jpg"
                                                                 alt="agent member image">
                                                        </div>
                                                        <div class="aa-agetns-info">
                                                            <h4><a href="#">Maggie Smith</a></h4>
                                                            <span>Jr. Agent</span>
                                                            <div class="aa-agent-social">
                                                                <a href="#"><i class="fa fa-facebook"></i></a>
                                                                <a href="#"><i class="fa fa-twitter"></i></a>
                                                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                                                <a href="#"><i
                                                                        class="fa fa-google-plus"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="aa-single-agents">
                                                        <div class="aa-agents-img">
                                                            <img src=" {{ asset('assets')}}/img/agents/6.jpg"
                                                                 alt="agent member image">
                                                        </div>
                                                        <div class="aa-agetns-info">
                                                            <h4><a href="#">Julia Smith</a></h4>
                                                            <span>Top Agent</span>
                                                            <div class="aa-agent-social">
                                                                <a href="#"><i class="fa fa-facebook"></i></a>
                                                                <a href="#"><i class="fa fa-twitter"></i></a>
                                                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                                                <a href="#"><i
                                                                        class="fa fa-google-plus"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- / Our Agent Section-->

                    <!-- Client Testimonial -->
                    <section id="aa-client-testimonial">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="aa-client-testimonial-area">
                                        <div class="aa-title">
                                            <h2>What Client Say</h2>
                                            <span></span>
                                            <p></p>
                                        </div>
                                        <!-- testimonial content -->
                                        <div class="aa-testimonial-content">
                                            <!-- testimonial slider -->
                                            <ul class="aa-testimonial-slider">
                                                <li>
                                                    <div class="aa-testimonial-single">
                                                        <div class="aa-testimonial-img">
                                                            <img
                                                                src=" {{ asset('assets')}}/img/testimonial-1.png"
                                                                alt="testimonial img">
                                                        </div>
                                                        <div class="aa-testimonial-info">
                                                            <p>Lorem ipsum dolor sit amet, consectetur
                                                                adipisicing elit. Cupiditate consequuntur
                                                                ducimus cumque iure modi nesciunt recusandae
                                                                eligendi vitae voluptatibus, voluptatum tempore,
                                                                ipsum nisi perspiciatis. Rerum nesciunt fuga ab
                                                                natus, dolorem?</p>
                                                        </div>
                                                        <div class="aa-testimonial-bio">
                                                            <p>David Muller</p>
                                                            <span>Web Designer</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="aa-testimonial-single">
                                                        <div class="aa-testimonial-img">
                                                            <img
                                                                src=" {{ asset('assets')}}/img/testimonial-3.png"
                                                                alt="testimonial img">
                                                        </div>
                                                        <div class="aa-testimonial-info">
                                                            <p>Lorem ipsum dolor sit amet, consectetur
                                                                adipisicing elit. Cupiditate consequuntur
                                                                ducimus cumque iure modi nesciunt recusandae
                                                                eligendi vitae voluptatibus, voluptatum tempore,
                                                                ipsum nisi perspiciatis. Rerum nesciunt fuga ab
                                                                natus, dolorem?</p>
                                                        </div>
                                                        <div class="aa-testimonial-bio">
                                                            <p>David Muller</p>
                                                            <span>Web Designer</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="aa-testimonial-single">
                                                        <div class="aa-testimonial-img">
                                                            <img
                                                                src=" {{ asset('assets')}}/img/testimonial-2.png"
                                                                alt="testimonial img">
                                                        </div>
                                                        <div class="aa-testimonial-info">
                                                            <p>Lorem ipsum dolor sit amet, consectetur
                                                                adipisicing elit. Cupiditate consequuntur
                                                                ducimus cumque iure modi nesciunt recusandae
                                                                eligendi vitae voluptatibus, voluptatum tempore,
                                                                ipsum nisi perspiciatis. Rerum nesciunt fuga ab
                                                                natus, dolorem?</p>
                                                        </div>
                                                        <div class="aa-testimonial-bio">
                                                            <p>David Muller</p>
                                                            <span>Web Designer</span>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Client Testimonial -->

                    <!-- Client brand -->
                    <section id="aa-client-brand">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="aa-client-brand-area">
                                        <ul class="aa-client-brand-slider">
                                            <li>
                                                <div class="aa-client-single-brand">
                                                    <img src=" {{ asset('assets')}}/img/client-brand-1.png"
                                                         alt="brand image">
                                                </div>
                                            </li>
                                            <li>
                                                <div class="aa-client-single-brand">
                                                    <img src=" {{ asset('assets')}}/img/client-brand-2.png"
                                                         alt="brand image">
                                                </div>
                                            </li>
                                            <li>
                                                <div class="aa-client-single-brand">
                                                    <img src=" {{ asset('assets')}}/img/client-brand-3.png"
                                                         alt="brand image">
                                                </div>
                                            </li>
                                            <li>
                                                <div class="aa-client-single-brand">
                                                    <img src=" {{ asset('assets')}}/img/client-brand-5.png"
                                                         alt="brand image">
                                                </div>
                                            </li>
                                            <li>
                                                <div class="aa-client-single-brand">
                                                    <img src=" {{ asset('assets')}}/img/client-brand-4.png"
                                                         alt="brand image">
                                                </div>
                                            </li>
                                            <li>
                                                <div class="aa-client-single-brand">
                                                    <img src=" {{ asset('assets')}}/img/client-brand-1.png"
                                                         alt="brand image">
                                                </div>
                                            </li>
                                            <li>
                                                <div class="aa-client-single-brand">
                                                    <img src=" {{ asset('assets')}}/img/client-brand-2.png"
                                                         alt="brand image">
                                                </div>
                                            </li>
                                            <li>
                                                <div class="aa-client-single-brand">
                                                    <img src=" {{ asset('assets')}}/img/client-brand-3.png"
                                                         alt="brand image">
                                                </div>
                                            </li>
                                            <li>
                                                <div class="aa-client-single-brand">
                                                    <img src=" {{ asset('assets')}}/img/client-brand-5.png"
                                                         alt="brand image">
                                                </div>
                                            </li>
                                            <li>

                                                <div class="aa-client-single-brand">
                                                    <img src=" {{ asset('assets')}}/img/client-brand-4.png"
                                                         alt="brand image">
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- / Client brand -->

                    <!-- Latest blog -->
                    <section id="aa-latest-blog">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="aa-latest-blog-area">
                                        <div class="aa-title">
                                            <h2>Latest News</h2>
                                            <span></span>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe
                                                magni, est harum repellendus. Accusantium, nostrum!</p>
                                        </div>
                                        <div class="aa-latest-blog-content">
                                            <div class="row">
                                                <!-- start single blog -->
                                                <div class="col-md-4">
                                                    <article class="aa-blog-single">
                                                        <figure class="aa-blog-img">
                                                            <a href="#"><img
                                                                    src=" {{ asset('assets')}}/img/blog-img-1.jpg"
                                                                    alt="img"></a>
                                                            <span class="aa-date-tag">15 April, 16</span>
                                                        </figure>
                                                        <div class="aa-blog-single-content">
                                                            <h3><a href="#">Lorem ipsum dolor sit amet,
                                                                    consectetur.</a></h3>
                                                            <p>Lorem ipsum dolor sit amet, consectetur
                                                                adipisicing elit. Optio est quaerat magnam
                                                                exercitationem voluptas, voluptatem sed quam ab
                                                                laborum voluptatum tempore dolores itaque,
                                                                molestias vitae.</p>
                                                            <div class="aa-blog-single-bottom">
                                                                <a href="#" class="aa-blog-author"><i
                                                                        class="fa fa-user"></i> Admin</a>
                                                                <a href="#" class="aa-blog-comments"><i
                                                                        class="fa fa-comment-o"></i>6</a>
                                                            </div>
                                                        </div>

                                                    </article>
                                                </div>
                                                <!-- start single blog -->
                                                <div class="col-md-4">
                                                    <article class="aa-blog-single">
                                                        <figure class="aa-blog-img">
                                                            <a href="#"><img
                                                                    src=" {{ asset('assets')}}/img/blog-img-2.jpg"
                                                                    alt="img"></a>
                                                            <span class="aa-date-tag">15 April, 16</span>
                                                        </figure>
                                                        <div class="aa-blog-single-content">
                                                            <h3><a href="#">Lorem ipsum dolor sit amet,
                                                                    consectetur.</a></h3>
                                                            <p>Lorem ipsum dolor sit amet, consectetur
                                                                adipisicing elit. Optio est quaerat magnam
                                                                exercitationem voluptas, voluptatem sed quam ab
                                                                laborum voluptatum tempore dolores itaque,
                                                                molestias vitae.</p>
                                                            <div class="aa-blog-single-bottom">
                                                                <a href="#" class="aa-blog-author"><i
                                                                        class="fa fa-user"></i> Admin</a>
                                                                <a href="#" class="aa-blog-comments"><i
                                                                        class="fa fa-comment-o"></i>6</a>
                                                            </div>
                                                        </div>
                                                    </article>
                                                </div>


                                                <!-- start single blog -->
                                                <div class="col-md-4">
                                                    <article class="aa-blog-single">
                                                        <figure class="aa-blog-img">
                                                            <a href="#"><img
                                                                    src=" {{ asset('assets')}}/img/blog-img-3.jpg"
                                                                    alt="img"></a>
                                                            <span class="aa-date-tag">15 April, 16</span>
                                                        </figure>
                                                        <div class="aa-blog-single-content">
                                                            <h3><a href="#">Lorem ipsum dolor sit amet,
                                                                    consectetur.</a></h3>
                                                            <p>Lorem ipsum dolor sit amet, consectetur
                                                                adipisicing elit. Optio est quaerat magnam
                                                                exercitationem voluptas, voluptatem sed quam ab
                                                                laborum voluptatum tempore dolores itaque,
                                                                molestias vitae.</p>
                                                            <div class="aa-blog-single-bottom">
                                                                <a href="#" class="aa-blog-author"><i
                                                                        class="fa fa-user"></i> Admin</a>
                                                                <a href="#" class="aa-blog-comments"><i
                                                                        class="fa fa-comment-o"></i>6</a>
                                                            </div>
                                                        </div>
                                                    </article>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                </div>
            </div>
            </div>
        </section>


        <!-- / Latest blog -->
@endsection
