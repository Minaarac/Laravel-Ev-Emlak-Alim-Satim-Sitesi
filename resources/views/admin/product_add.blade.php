@extends('layouts.admin')
@section('title','Admin Panel Home Page')

@section('content')

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
                    <h4 class="text-themecolor">Product Add </h4>
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
                    <h4 class="m-b-0 text-white">Form with view only</h4>
                </div>
                <div class="card-body">
                    <div class="card">
                        <form class="form p-t-20" action="{{route('admin_product_store')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label >Parent</label>
                                <select class="form-control select2" name="parent_id" style="width: 100%">
                                    @foreach($datalist as $rs)
                                        <option value="{{ $rs->id}}">{{ $rs->title}}</option>
                                    @endforeach

                                </select>

                            </div>
                            <div class="form-group">
                                <label for="pwd1">Title</label>
                                <div class="input-group mb-3">

                                    <input type="text" id="title" name="title" class="form-control" placeholder="Title" aria-label="Password"
                                           aria-describedby="basic-addon3">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="pwd1">Keywords</label>
                                <div class="input-group mb-3">

                                    <input type="text" name="keywords" class="form-control" placeholder="Keywords" aria-label="Password"
                                           aria-describedby="basic-addon3">
                                </div>

                            </div>
                            <div class="form-group">
                                <label for="pwd1">Description</label>
                                <div class="input-group mb-3">

                                    <input type="text" name="description" class="form-control" placeholder="Description" aria-label="Password"
                                           aria-describedby="basic-addon3">
                                </div>
                            </div>


                            <div class="form-group">
                                <label>Status</label>
                                <select class="form-control select2" name="status" style="width: 100%">
                                    <option selected="selected">True</option>
                                    <option>False</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="pwd1">area</label>
                                <div class="input-group mb-3">

                                    <input type="number" name="area" value="0" class="form-control" placeholder="area" aria-label="Password"
                                           aria-describedby="basic-addon3">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="pwd1">location</label>
                                <div class="input-group mb-3">

                                    <input type="text" name="location" class="form-control" placeholder="location" aria-label="Password"
                                           aria-describedby="basic-addon3">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="pwd1">floor</label>
                                <div class="input-group mb-3">

                                    <input type="number" name="floor" value="0" class="form-control" placeholder="floor" aria-label="Password" aria-describedby="basic-addon3">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="pwd1">room</label>
                                <div class="input-group mb-3">

                                    <input type="number" name="room" value="5" class="form-control" placeholder="room" aria-label="Password" aria-describedby="basic-addon3">
                                </div>
                            </div>


                            <div class="form-group">
                                <label for="pwd1">bathroom</label>
                                <div class="input-group mb-3">

                                    <input type="text" name="bathroom" class="form-control" placeholder="bathroom" aria-label="Password"
                                           aria-describedby="basic-addon3">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="pwd1">balcony</label>
                                <div class="input-group mb-3">

                                    <input type="text" name="balcony" class="form-control" placeholder="balcony" aria-label="Password"
                                           aria-describedby="basic-addon3">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="pwd1">heating</label>
                                <div class="input-group mb-3">

                                    <input type="text" name="heating" value="5" class="form-control" placeholder="heating" aria-label="Password"
                                           aria-describedby="basic-addon3">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="pwd1">garden</label>
                                <div class="input-group mb-3">

                                    <input type="text" name="garden" class="form-control" placeholder="garden" aria-label="Password"
                                           aria-describedby="basic-addon3">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="pwd1">garage</label>
                                <div class="input-group mb-3">

                                    <input type="text" name="garage" class="form-control" placeholder="garage" aria-label="Password"
                                           aria-describedby="basic-addon3">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="pwd1">Detail</label>
                                <div class="input-group mb-3">

                                </div>
                            </div>

                            <div class="form-group">
                                <label>Image</label>
                                <div class="input-group mb-3">

                                    <input type="file" name="image">
                                </div>
                            </div>


                            <button type="submit" class="btn btn-success waves-effect waves-light m-r-10"> Add Product</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>

@endsection

