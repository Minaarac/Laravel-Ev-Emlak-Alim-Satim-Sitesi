
@section('title','My Announcements')

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
                        <h3> <div align="center"><p>User Product </p> </div></h3>
                        <ol class="breadcrumb">
                            <li><a href="{{route('homepage')}}">HOME</a></li>
                            <li><a href="#"> </a> Blank</li>
                        </ol>
                    </div>
                </div>
                @include('home.usermenu')
            </div>
        </div>
    </section>

    <section id="aa-error">
        <div class="container">
            <row>


                <div class="row page-titles" >
                    <div class="col-md-5 align-self-center">
                        <h4 class="text-themecolor"> </h4>
                    </div>
                    <div class="col-md-7 align-self-center text-right">
                        <div class="d-flex justify-content-end align-items-center">
                            <a href="{{route('user_product_add')}}" class="btn btn-info d-none d-lg-block m-l-15"><i
                                    class="fa fa-plus-circle"></i> Add Product </a>
                            @include('home.message')
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">

                                <div class="card">
                                    <div class="card-body">
                                        <div class="table-responsive m-t-40">
                                            <table id="myTable" class="table table-bordered table-striped">
                                                <thead>
                                                <tr>
                                                    <th>id</th>
                                                    <th>Category Id</th>
                                                    <th>Title(s)</th>
                                                    <th>Keywords</th>
                                                    <th>Description</th>
                                                    <th>Status</th>
                                                    <th>Price</th>
                                                    <th>Area</th>
                                                    <th>Location</th>
                                                    <th>Floor</th>
                                                    <th>Room</th>
                                                    <th>Bathroom</th>
                                                    <th>Balcony</th>
                                                    <th>Heating</th>
                                                    <th>Garden</th>
                                                    <th>Garage</th>
                                                    <th>Detail</th>
                                                    <th>Image</th>
                                                    <th>Image Gallery</th>
                                                    <th>Edit</th>
                                                    <th>Delete</th>
                                                </tr>

                                                </thead>
                                                <tbody>
                                                @foreach($datalist as $rs)
                                                    <tr>
                                                        <td>{{$rs -> id}} </td>
                                                        <td>{{\App\Http\Controllers\Admin\CategoryController::getParentsTree($rs->category,$rs->category->title)}}</td>
                                                        <td>{{$rs -> title}} </td>
                                                        <td>{{$rs -> keywords}} </td>
                                                        <td>{{$rs -> description}}</td>
                                                        <td>{{$rs -> status}} </td>
                                                        <td>{{$rs -> price}} </td>
                                                        <td>{{$rs -> area}} </td>
                                                        <td>{{$rs -> location}} </td>
                                                        <td>{{$rs -> floor}} </td>
                                                        <td>{{$rs -> room}} </td>
                                                        <td>{{$rs -> bathroom}} </td>
                                                        <td>{{$rs -> balcony}} </td>
                                                        <td>{{$rs -> heating}} </td>
                                                        <td>{{$rs -> garden}} </td>
                                                        <td>{{$rs -> garage}} </td>
                                                        <td>{{$rs -> detail}} </td>
                                                        <td>

                                                            @if ($rs->image)
                                                                <img src="{{Storage::url($rs->image)}}" height="30"
                                                                     alt="">
                                                            @endif
                                                        </td>
                                                        <td>
                                                            <a href="{{route('user_image_add',['product_id'=> $rs->id])}}"
                                                               onclick="return window.open(this.href, '','top=50 left=100 width=1100,height=700')">
                                                                <img
                                                                    src="{{asset('assets/admin/images')}}/gallery-3.jpg"
                                                                    height="25"> </a></td>
                                                        <td><a href="{{route('user_product_edit',['id'=> $rs->id])}}"
                                                               onclick=""> <img
                                                                    src="{{asset('assets/admin/images')}}/edit.png"
                                                                    height="25"> </a>
                                                        </td>
                                                        <td>
                                                            <a href="{{route('user_product_delete', ['id'=> $rs->id])}}"
                                                               onclick="return confirm('Delete! Are you sure ?')"> <img
                                                                    src="{{asset('assets/admin/images')}}/delete.png"
                                                                    height="25"> </a>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </table>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>


            </row>
        </div>
    </section>
@include('home._footer')
