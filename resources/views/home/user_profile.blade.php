
@section('title','User Profile')

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
                        <h2> <div align="center"><p> User Page </p> </div></h2>
                        <ol class="breadcrumb">
                            <li><a href="{{route('homepage')}}">HOME</a></li>
                            <li> <a href=""> </a> User Profile</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- End Proerty header  -->
    <section id="aa-error">
        <div class="container">
            <row>
                @include('home.usermenu')
                <div class="col-md-12">
                    <div class="">

                    </div>
                    @include('profile.show')

                </div>
            </row>
        </div>
    </section>
@include('home._footer')


