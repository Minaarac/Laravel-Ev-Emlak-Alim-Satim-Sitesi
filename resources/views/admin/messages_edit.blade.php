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

    <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <div class="container-fluid">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h4 class="text-themecolor">Message Detail </h4>
                    @include('home.message')
                </div>
                <div class="col-md-7 align-self-center text-right">
                    <div class="d-flex justify-content-end align-items-center">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">Blank Page</li>
                        </ol>
                        <button type="button" class="btn btn-info d-none d-lg-block m-l-15"><i
                                class="fa fa-plus-circle"></i> Create New
                        </button>
                    </div>
                </div>
            </div>
            <!--*******************************-->
            <div class="card body-primary">
                <div class="card-header bg-info">
                    <h4 class="m-b-0 text-white"></h4>
                </div>
                <div class="card-body">
                    <div class="card">
                        <form class="form p-t-20" action="{{route('admin_message_update',['id'=>$data->id])}}"
                              method="POST">
                            @csrf

                            <table id="myTable" class="table table-bordered table-striped">
                                <tr>
                                    <th>Id</th> <td>{{$data -> id}} </td>
                                </tr>
                                    <th>Name</th><td>{{$data -> name}} </td>
                                </tr>
                                <tr>
                                    <th>Email</th> <td>{{$data -> email}} </td>
                                <tr>
                                </tr>
                                    <th>Phone</th>  <td>{{$data -> phone}} </td>
                                <tr>
                                </tr>
                                    <th>Subject</th>  <td>{{$data -> subject}} </td>
                                <tr>
                                </tr>
                                    <th>Message</th>    <td>{{$data -> message}} </td>
                                <tr>
                                </tr>
                                    <th>Admin Note</th>
                               <td>
                                <textarea name="note" id="editor1"
                                          class="ckeditor"> value="{{$data->note}}" </textarea>
                               </td>
                                <ta>
                                    <td></td> <td>

                                        <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Update
                                            Message
                                        </button> </td>
                            </table>


                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
