<html>
<head>
    <title> Image Gallery </title>
    <link href="{{ asset('assets')}}/admin/assets/node_modules/morrisjs/morris.css" rel="stylesheet">
    <!--Toaster Popup message CSS -->
    <link href="{{ asset('assets')}}/admin/assets/node_modules/toast-master/css/jquery.toast.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{ asset('assets')}}/admin/dist/css/style.min.css" rel="stylesheet">
    <!-- Dashboard 1 Page CSS -->
    <link href="{{ asset('assets')}}/admin/dist/css/pages/dashboard1.css" rel="stylesheet">
</head>
<body>


<div class="container-fluid">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h4 class="text-themecolor">{{$data->title}} </h4>
                </div>

            </div>
            <!--*******************************-->
            <div class="card body-primary">
                <div class="card-header bg-info">
                    <h4 class="m-b-0 text-white">Add Image</h4>
                </div>

                <div class="card-body">
                    <div class="card">
                        <form class="form p-t-20" action="{{route('admin_image_store',['product_id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="pwd1">Title</label>
                                <div class="input-group mb-3">

                                    <input type="text" id="title" name="title" class="form-control" placeholder="Title" aria-label="Password"
                                           aria-describedby="basic-addon3">
                                </div>
                            </div>


                            <div class="form-group">
                                <label>Image</label>
                                <div class="input-group mb-3">

                                    <input type="file" name="image">
                                </div>
                            </div>


                            <button type="submit" class="btn btn-success waves-effect waves-light m-r-10"> Add Image</button>

                        </form>

                        <table id="myTable" class="table table-bordered table-striped">
                          <thead>
                          <tr>
                            <th>id</th>
                            <th>Title</th>
                            <th>Image</th>
                            <th>Actions</th>
                          </tr>
                          </thead>
                        <tbody>
                        @foreach($images as $rs)
                            <tr>
                                <td>{{$rs -> id}} </td>
                                <td>{{$rs -> title}}</td>
                               <td>
                                   @if ($rs->image)
                                       <img src="{{Storage::url($rs->image)}}" height="60" alt="">
                                   @endif
                               </td>
                                <td>
                                    <a href="{{route('admin_image_delete', ['id'=> $rs->id,'product_id'=>$data->id])}}" onclick="return confirm('Delete! Are you sure ?')">
                                        <img src="{{asset('assets/admin/images')}}/delete.png" height="25"> </a>
                                </td>
                            </tr>
                            @endforeach
                            </table>
                        </tbody>



                        </thead>
                    </div>
                </div>
            </div>
        </div>
</div>
</body>
</html>
