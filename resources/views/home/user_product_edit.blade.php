
@section('title','Edit Product')
<script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>

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

                        <h3> <div align="center"><p>Edit Product </p> </div></h3>
                        <ol class="breadcrumb">
                            <li><a href="{{route('homepage')}}">HOME</a></li>
                            <li><a href="#"> </a> </li>
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
                <div class="card-body">
                    <div class="card">
                        <form class="form p-t-20" action="{{route('user_product_update',['id'=>$data->id])}}"
                              method="POST">
                            @csrf
                            <div class="form-group">
                                <label>Category</label>
                                <select class="form-control select2" name="category_id" style="width: 40%">
                                    @foreach($datalist as $rs)
                                        <option value="{{ $rs->id }}"
                                                @if($rs->id == $data->parent_id) selected="selected" @endif>
                                            {{\App\Http\Controllers\Admin\CategoryController::getParentsTree($rs,$rs->title)}}}
                                        </option>
                                    @endforeach

                                </select>

                            </div>
                            <div class="form-group">
                                <label for="pwd1">Title</label>
                                <div class="input-group mb-3">

                                    <input type="text" id="title" name="title" value="{{$data->title}}"
                                           class="form-control" placeholder="Title" aria-label="Password"
                                           aria-describedby="basic-addon3">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="pwd1">keywords</label>
                                <div class="input-group mb-3">

                                    <input type="text" name="keywords" value="{{$data->keywords}}" class="form-control"
                                           placeholder="Keywords" aria-label="Password"
                                           aria-describedby="basic-addon3">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="pwd1">Description</label>
                                <div class="input-group mb-3">

                                    <input type="text" name="description" value="{{$data->description}}"
                                           class="form-control" placeholder="Description" aria-label="Password"
                                           aria-describedby="basic-addon3">
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Status</label>
                                <select class="form-control select2" name="status" style="width: 10%">
                                    <option selected="selected">{{$data->status}}</option>
                                    <option>False</option>
                                    <option>True</option>

                                </select>
                            </div>

                            <div class="form-group">
                                <label for="pwd1">Price</label>
                                <div class="input-group mb-3">

                                    <input type="number" name="price" value="{{$data->price}}" class="form-control"
                                           placeholder="price" aria-label="Password"
                                           aria-describedby="basic-addon3">
                                </div>
                            </div>


                            <div class="form-group">
                                <label for="pwd1">area</label>
                                <div class="input-group mb-3">

                                    <input type="number" name="area" value="{{$data->area}}" class="form-control"
                                           placeholder="area" aria-label="Password"
                                           aria-describedby="basic-addon3">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="pwd1">location</label>
                                <div class="input-group mb-3">

                                    <input type="text" name="location" value="{{$data->location}}" class="form-control"
                                           placeholder="location" aria-label="Password"
                                           aria-describedby="basic-addon3">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="pwd1">floor</label>
                                <div class="input-group mb-3">

                                    <input type="number" name="floor" value="{{$data->floor}}" class="form-control"
                                           placeholder="floor" aria-label="Password"
                                           aria-describedby="basic-addon3">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="pwd1">room</label>
                                <div class="input-group mb-3">

                                    <input type="number" name="room" value="{{$data->room}}" class="form-control"
                                           placeholder="room" aria-label="Password"
                                           aria-describedby="basic-addon3">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="pwd1">bathroom</label>
                                <div class="input-group mb-3">

                                    <input type="text" name="bathroom" value="{{$data->bathroom}}" class="form-control"
                                           placeholder="bathroom" aria-label="Password"
                                           aria-describedby="basic-addon3">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="pwd1">balcony</label>
                                <div class="input-group mb-3">

                                    <input type="text" name="balcony" value="{{$data->balcony}}" class="form-control"
                                           placeholder="balcony" aria-label="Password"
                                           aria-describedby="basic-addon3">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="pwd1">heating</label>
                                <div class="input-group mb-3">

                                    <input type="text" name="heating" value="{{$data->heating}}" class="form-control"
                                           placeholder="heating" aria-label="Password"
                                           aria-describedby="basic-addon3">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="pwd1">garden</label>
                                <div class="input-group mb-3">

                                    <input type="text" name="garden" value="{{$data->garden}}" class="form-control"
                                           placeholder="garden" aria-label="Password"
                                           aria-describedby="basic-addon3">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="pwd1">garage</label>
                                <div class="input-group mb-3">

                                    <input type="text" name="garage" value="{{$data->garage}}" class="form-control"
                                           placeholder="garage" aria-label="Password"
                                           aria-describedby="basic-addon3">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="pwd1">detail</label>
                                <div class="input-group mb-3">

                                      <textarea name="detail" id="detail"
                                                class="detail"> value="{{$data->detail}}" </textarea>
                                    <script>
                                        CKEDITOR.replace( 'detail' );
                                    </script>

                                </div>
                            </div>

                            <div class="form-group">
                                <label>Image</label>
                                <div class="input-group mb-3">
                                    <input type="file" name="image">

                                    @if ($data->image)
                                        <img src="{{Storage::url($data->image)}}" height="30" alt="">
                                    @endif
                                </div>
                            </div>


                            <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Update
                                Product
                            </button>

                        </form>
                    </div>
                </div>


            </row>
        </div>
    </section>
@include('home._footer')
