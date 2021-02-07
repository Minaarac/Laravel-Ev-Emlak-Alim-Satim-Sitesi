
@section('title', 'Contact-' .  $setting->title)

@section('description') {{ $setting->description }} @endsection

@section('keywords',$setting->keywords)
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
                        <h3> <div align="center"><p>Contact Page</p> </div></h3>
                        <ol class="breadcrumb">
                            <li><a href="{{route('homepage')}}">HOME</a></li>
                            <li> <a href="#"> </a> Contact</li>
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
                   <h3 class="asside-title"> İletişim Bilgileri </h3>

                   {!! $setting->contact !!}

               </div>


                <div class="col-md-4">
                    <h3 class="asside-title">  İletişim Formu </h3>
                    @include('home.message')

                    <div class="aa-contact-form">
                        <form class="contactform" action="{{route('sendmessage')}}" method="post">
                            @csrf
                            <p class="comment-form-name">
                                <label for="name">Name&Surname <span class="required">*</span></label>
                                <input type="text" name="name" value="" size="20" required="required">
                            </p>

                            <p class="comment-form-phone">
                                <label for="phone">Phone <span class="required">*</span></label>
                                <input type="phone" name="phone" value="" aria-required="true" required="required">
                            </p>
                            <p class="comment-form-email">
                                <label for="email">Email <span class="required">*</span></label>
                                <input type="email" name="email" value="" aria-required="true" required="required">
                            </p>
                            <p class="comment-form-url">
                                <label for="subject">Subject</label>
                                <input type="text" name="subject">
                            </p>
                            <p class="comment-form-comment">
                                <label for="comment">Message</label>
                                <textarea class="input"  name="message" cols="45" rows="5" placeholder="Your Message"></textarea>
                            </p>
                            <p class="form-submit">
                                <input type="submit" name="submit" class="aa-browse-btn" value="Send Message">
                            </p>
                        </form>
                    </div>



                </div>

                <div class="col-md-12">
                    <div class="aa-error-area">
                        <h4> </h4>

                    </div>
                </div>
            </row>
        </div>
    </section>
@include('home._footer')
