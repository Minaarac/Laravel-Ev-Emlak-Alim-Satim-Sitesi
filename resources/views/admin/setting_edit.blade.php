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
                    <h4 class="text-themecolor">Setting Edit </h4>
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

                        <form class="form p-t-20" action="{{route('admin_setting_update')}}"
                              method="POST" enctype="multipart/form-data">
                            @csrf


                            <div class="row">
                                <div class="card card-primary card-tabs col-12">
                                    <div class="card-header p-0 pt-1">
                                        <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active" id="custom-tabs-one-general-tab" data-toggle="pill" href="#custom-tabs-one-general" role="tab" aria-controls="custom-tabs-one-home" aria-selected="true">General</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="custom-tabs-one-smpt-tab" data-toggle="pill" href="#custom-tabs-one-smpt" role="tab" aria-controls="custom-tabs-one-smpt" aria-selected="false">Smtp Email</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="custom-tabs-one-social-tab" data-toggle="pill" href="#custom-tabs-one-social" role="tab" aria-controls="custom-tabs-one-social" aria-selected="false">Social Media</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="custom-tabs-one-about-tab" data-toggle="pill" href="#custom-tabs-one-about" role="tab" aria-controls="custom-tabs-one-about" aria-selected="false">About Us</a>
                                            </li>

                                            <li class="nav-item">
                                                <a class="nav-link" id="custom-tabs-one-contact-tab" data-toggle="pill" href="#custom-tabs-one-contact" role="tab" aria-controls="custom-tabs-one-contact" aria-selected="false">Contact Page</a>
                                            </li>

                                            <li class="nav-item">
                                                <a class="nav-link" id="custom-tabs-one-references-tab" data-toggle="pill" href="#custom-tabs-one-references" role="tab" aria-controls="custom-tabs-one-references" aria-selected="false">References</a>
                                            </li>


                                        </ul>
                                    </div>
                                    <div class="card-body">
                                        <div class="tab-content" id="custom-tabs-one-tabContent">
                                            <div class="tab-pane fade show active" id="custom-tabs-one-general" role="tabpanel" aria-labelledby="custom-tabs-one-general-tab">
                                                <input type="hidden" id="id" name="id" value="{{$data->id}}"
                                                       class="form-control" placeholder="Title" aria-label="Password"
                                                       aria-describedby="basic-addon3">

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
                                                    <label for="pwd1">Company</label>
                                                    <div class="input-group mb-3">

                                                        <input type="text" name="company" value="{{$data->company}}" class="form-control"
                                                               placeholder="company" aria-label="Password"
                                                               aria-describedby="basic-addon3">
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label for="pwd1">Address</label>
                                                    <div class="input-group mb-3">

                                                        <input type="text" name="address" value="{{$data->address}}" class="form-control"
                                                               placeholder="address" aria-label="Password"
                                                               aria-describedby="basic-addon3">
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label for="pwd1">Phone</label>
                                                    <div class="input-group mb-3">

                                                        <input type="text" name="phone" value="{{$data->phone}}" class="form-control"
                                                               placeholder="phone" aria-label="Password"
                                                               aria-describedby="basic-addon3">
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label for="pwd1">Fax</label>
                                                    <div class="input-group mb-3">

                                                        <input type="text" name="fax" value="{{$data->fax}}" class="form-control"
                                                               placeholder="fax" aria-label="Password"
                                                               aria-describedby="basic-addon3">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="pwd1">Email</label>
                                                    <div class="input-group mb-3">

                                                        <input type="text" name="email" value="{{$data->email}}" class="form-control"
                                                               placeholder="email" aria-label="Password"
                                                               aria-describedby="basic-addon3">
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label>Status</label>
                                                    <select class="form-control select2" name="status" style="width: 100%">
                                                        <option selected="selected">{{$data->status}}</option>
                                                        <option>False</option>
                                                        <option>True</option>

                                                    </select>
                                                </div>

                                            </div>
                                            <div class="tab-pane fade" id="custom-tabs-one-smpt" role="tabpanel" aria-labelledby="custom-tabs-one-smpt-tab">
                                                <div class="form-group">
                                                    <label for="pwd1">Smtp Server</label>
                                                    <div class="input-group mb-3">

                                                        <input type="text" name="smtpserver" value="{{$data->smtpserver}}" class="form-control"
                                                               placeholder="smtpserver" aria-label="Password"
                                                               aria-describedby="basic-addon3">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="pwd1">Smtp Email</label>
                                                    <div class="input-group mb-3">

                                                        <input type="text" name="smtpemail" value="{{$data->smtpemail}}" class="form-control"
                                                               placeholder="smtpemail" aria-label="Password"
                                                               aria-describedby="basic-addon3">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="pwd1">Smtp Password</label>
                                                    <div class="input-group mb-3">

                                                        <input type="password" name="smtppassword" value="{{$data->smtppassword}}" class="form-control"
                                                               placeholder="smtppassword" aria-label="Password"
                                                               aria-describedby="basic-addon3">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="pwd1">Smtp Port</label>
                                                    <div class="input-group mb-3">

                                                        <input type="number" name="smtpport" value="{{$data->smtpport}}" class="form-control"
                                                               placeholder="smtpport" aria-label="Password"
                                                               aria-describedby="basic-addon3">
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="tab-pane fade" id="custom-tabs-one-social" role="tabpanel" aria-labelledby="custom-tabs-one-social-tab">
                                                <div class="form-group">
                                                    <label for="pwd1">Facebook</label>
                                                    <div class="input-group mb-3">

                                                        <input type="text" name="facebook" value="{{$data->facebook}}" class="form-control"
                                                               placeholder="facebook" aria-label="Password"
                                                               aria-describedby="basic-addon3">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="pwd1">Instagram</label>
                                                    <div class="input-group mb-3">

                                                        <input type="text" name="instagram" value="{{$data->instagram}}" class="form-control"
                                                               placeholder="instagram" aria-label="Password"
                                                               aria-describedby="basic-addon3">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="pwd1">Twitter</label>
                                                    <div class="input-group mb-3">

                                                        <input type="text" name="twitter" value="{{$data->twitter}}" class="form-control"
                                                               placeholder="twitter" aria-label="Password"
                                                               aria-describedby="basic-addon3">
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label for="pwd1">Youtube</label>
                                                    <div class="input-group mb-3">

                                                        <input type="text" name="youtube" value="{{$data->youtube}}" class="form-control"
                                                               placeholder="youtube" aria-label="Password"
                                                               aria-describedby="basic-addon3">
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="tab-pane fade" id="custom-tabs-one-about" role="tabpanel" aria-labelledby="custom-tabs-one-about-tab">
                                                <div class="form-group">
                                                    <label for="pwd1">About Us</label>
                                                    <div class="input-group mb-3">

                                                        <textarea id="aboutus" name="aboutus" class="ckeditor" value="{{$data->aboutus}}"> </textarea>
                                                    </div>
                                                </div>

                                            </div>

                                            <div class="tab-pane fade" id="custom-tabs-one-contact" role="tabpanel" aria-labelledby="custom-tabs-one-contact-tab">
                                                <div class="form-group">
                                                    <label for="pwd1">Contact</label>
                                                    <div class="input-group mb-3">

                                                        <textarea id="contact" name="contact" class="ckeditor"> value="{{$data->contact}}"</textarea>
                                                    </div>
                                                </div>


                                            </div>

                                            <div class="tab-pane fade" id="custom-tabs-one-references" role="tabpanel" aria-labelledby="custom-tabs-one-references-tab">
                                                <div class="form-group">
                                                    <label for="pwd1">References</label>
                                                    <div class="input-group mb-3">

                                    <textarea name="references" id="references"
                                              class="ckeditor"> value="{{$data->references}}" </textarea>

                                                    </div>
                                                </div>

                                            </div>

                                        </div>
                                    </div>

                                    <!-- /.card -->
                                </div>

                                <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Update
                                    Setting
                                </button>
                            </div>


                        </form>
                    </div>
                </div>
            </div>
        </div>

@endsection



