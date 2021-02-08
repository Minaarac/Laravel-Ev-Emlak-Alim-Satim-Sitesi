
@section('title',$data->title)

@section('description') {{ $data->description }} @endsection

@section('keywords',$data->keywords)

    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <meta name="description" content="@yield('description')">
    <meta name="keywords" content="@yield('keywords')">
    <meta name="author" content="Mina Arac Property">

    <!-- Favicon -->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">

    <!-- Font awesome -->
    <link href="{{ asset('assets')}}/css/font-awesome.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="{{ asset('assets')}}/css/bootstrap.css" rel="stylesheet">
    <!-- slick slider -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets')}}/css/slick.css">
    <!-- price picker slider -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets')}}/css/nouislider.css">
    <!-- Fancybox slider -->
    <link rel="stylesheet" href="{{ asset('assets')}}/css/jquery.fancybox.css" type="text/css" media="screen" />
    <!-- Theme color -->
    <link id="switcher" href="{{ asset('assets')}}/css/theme-color/default-theme.css" rel="stylesheet">

    <!-- Main style sheet -->
    <link href="{{ asset('assets')}}/css/style.css" rel="stylesheet">


    <!-- Google Font -->
    <link href='https://fonts.googleapis.com/css?family=Vollkorn' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

    @include('home._header')

    <section id="aa-error-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="aa-error-area">
                        <h3> <div align="center"><p>Product Detail </p> </div></h3>
                        <ol class="breadcrumb">
                            <li><a href="{{route('homepage')}}">HOME</a></li>
                            <li> {{ \App\Http\Controllers\Admin\CategoryController::getParentsTree($data->category,$data->category->title) }}  </li>
                            <li> <a href="#"> </a> {{$data->title}}</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="aa-error">
        <div class="container">
            <row>
                <div class="col-md-8">
                    <div class="aa-properties-content">
                        <div class="aa-properties-details-img">
                            <img src="{{Storage::url($data->image)}}" style="height: 400px" alt="img">
                            <img src="{{ asset('assets')}}/img/agents/agent-1.jpeg"style="height: 400px" alt="img">
                            <img src= "{{ asset('assets')}}/img/agents/agent-2.jpeg"style="height: 400px" alt="img">
                        </div>

                        <!-- Start properties content body -->
                        @foreach($datalist as $rs)
                        <div class="aa-properties-details">
                            <div class="aa-properties-details-img">

                            </div>
                            @endforeach
                            <div class="aa-properties-info">
                                <h2>{{$data->title}}</h2>
                                <span class="aa-price" {{$data->price}}>$65000</span>
                                <p>{{$data->description}}</p>

                                <p>{!! $data->detail !!}</p>

                                <h4>Propery Features</h4>
                                <ul>
                                    <li>4 Bedroom</li>
                                    <li>3 Baths</li>
                                    <li>Kitchen</li>
                                    <li>Air Condition</li>
                                    <li>Belcony</li>
                                    <li>Gym</li>
                                    <li>Garden</li>
                                    <li>CCTV</li>
                                    <li>Children Play Ground</li>
                                    <li>Comunity Center</li>
                                    <li>Security System</li>
                                </ul>
                                <h4> <div align="center">Property Video </div> </h4>
                                <iframe width="100%" height="480" src="https://www.youtube.com/embed/CegXQps0In4" frameborder="0" allowfullscreen></iframe>
                                <h4><div align="center">Property Map </div></h4>
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6851.201919469417!2d-86.11773906635584!3d33.47324776828677!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x888bdb60cc49c571%3A0x40451ca6baf275c7!2s36008+AL-77%2C+Talladega%2C+AL+35160%2C+USA!5e0!3m2!1sbn!2sbd!4v1460452919256" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                            </div>
                            <!-- Properties social share -->

                            <!-- Nearby properties -->
                            <div class="aa-nearby-properties">
                                <div class="aa-title">
                                    <h2>Nearby Properties</h2>
                                    <span></span>
                                </div>
                                <div class="aa-nearby-properties-area">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <article class="aa-properties-item">
                                                <a class="aa-properties-item-img" href="#">
                                                    <img alt="img" src="{{ asset('assets')}}/img/item/1.jpg">
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
                                                        <h3><a href="#">Best of</a></h3>
                                                        <p> </p>
                                                    </div>
                                                    <div class="aa-properties-detial">
                            <span class="aa-price">
                              $35000
                            </span>
                                                        <a class="aa-secondary-btn" href="#">View Details</a>
                                                    </div>
                                                </div>
                                            </article>
                                        </div>
                                        <div class="col-md-6">
                                            <article class="aa-properties-item">
                                                <a class="aa-properties-item-img" href="#">
                                                    <img alt="img" src="{{ asset('assets')}}/img/item/2.jpg">
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
                                                        <h3><a href="#">Best of</a></h3>
                                                        <p></p>
                                                    </div>
                                                    <div class="aa-properties-detial">
                          <span class="aa-price">
                            $35000
                          </span>
                                                        <a class="aa-secondary-btn" href="#">View Details</a>
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
<!-- / Properties  -->                <!-- Start properties sidebar -->
                <div class="col-md-4">
                    <aside class="aa-properties-sidebar">
                        <!-- Start Single properties sidebar -->
                        <div class="aa-properties-single-sidebar">
                            <h3>Properties Search</h3>
                            <form action="">
                                <div class="aa-single-advance-search">
                                    <input type="text" placeholder="Type Your Location">
                                </div>
                                <div class="aa-single-advance-search">
                                    <select id="" name="">
                                        <option selected="" value="0">Category</option>
                                        <option value="1">Flat</option>
                                        <option value="2">Land</option>
                                        <option value="3">Plot</option>
                                        <option value="4">Commercial</option>
                                    </select>
                                </div>
                                <div class="aa-single-advance-search">
                                    <select id="" name="">
                                        <option selected="" value="0">Type</option>
                                        <option value="1">Flat</option>
                                        <option value="2">Land</option>
                                        <option value="3">Plot</option>
                                        <option value="4">Commercial</option>
                                    </select>
                                </div>
                                <div class="aa-single-advance-search">
                                    <select id="" name="">
                                        <option selected="" value="0">Type</option>
                                        <option value="1">Flat</option>
                                        <option value="2">Land</option>
                                        <option value="3">Plot</option>
                                        <option value="4">Commercial</option>
                                    </select>
                                </div>
                                <div class="aa-single-filter-search">
                                    <span>AREA (SQ)</span>
                                    <span>FROM</span>
                                    <span id="skip-value-lower" class="example-val">30.00</span>
                                    <span>TO</span>
                                    <span id="skip-value-upper" class="example-val">100.00</span>
                                    <div id="aa-sqrfeet-range" class="noUi-target noUi-ltr noUi-horizontal noUi-background">
                                    </div>
                                </div>
                                <div class="aa-single-filter-search">
                                    <span>PRICE ($)</span>
                                    <span>FROM</span>
                                    <span id="skip-value-lower2" class="example-val">30.00</span>
                                    <span>TO</span>
                                    <span id="skip-value-upper2" class="example-val">100.00</span>
                                    <div id="aa-price-range" class="noUi-target noUi-ltr noUi-horizontal noUi-background">
                                    </div>
                                </div>
                                <div class="aa-single-advance-search">
                                    <input type="submit" value="Search" class="aa-search-btn">
                                </div>
                            </form>
                        </div>
                        <!-- Start Single properties sidebar -->
                        <div class="aa-properties-single-sidebar">
                            <h3>Populer Properties</h3>
                            <div class="media">
                                <div class="media-left">
                                    <a href="#">
                                        <img class="media-object" src="{{ asset('assets')}}/img/item/1.jpg"style="height: 200px" alt="img">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading"><a href="#"></a></h4>
                                    <p></p>
                                    <span>$65000</span>
                                </div>
                            </div>
                            <div class="media">
                                <div class="media-left">
                                    <a href="#">
                                        <img class="media-object" src="{{ asset('assets')}}/img/item/2.jpg" style="height: 200px"  alt="img">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading"><a href="#"></a></h4>
                                    <p> </p>
                                    <span>$65000</span>
                                </div>
                            </div>
                            <div class="media">
                                <div class="media-left">
                                    <a href="#">
                                        <img class="media-object" src="{{ asset('assets')}}/img/item/3.jpeg" style="height: 100px" alt="img">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading"><a href="#"></a></h4>
                                    <p></p>
                                    <span>$65000</span>
                                </div>
                            </div>
                        </div>
                    </aside>
                </div>

                <div class="col-md-12">
                    <div class="aa-error-area"></div>


                </div>

            </row>
        </div>
    </section>

@include('home._footer')
