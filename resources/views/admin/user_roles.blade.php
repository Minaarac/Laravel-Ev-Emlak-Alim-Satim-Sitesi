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


<div class="card-body">
    <div class="card">
        <div class="body">
            <h3 class="card-title">User Role</h3>
            @include('home.message')
            <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                <tr>
                    <th>Id</th> <td>{{ $data->id }}</td>
                </tr>
                <tr>
                    <th>Name</th> <td>{{ $data->name }}</td>
                </tr>
                <tr>
                    <th>Address</th> <td>{{ $data->address }}</td>
                </tr>
                <tr>
                    <th>Email</th> <td>{{ $data->email }}</td>
                </tr>
                <tr>
                    <th>Roles</th>
                    <td>
                        <table>
                            @foreach($data->roles as $row)
                                <tr>
                                    <td>{{ $row->name }}</td>
                                    <td> -> </td>
                                    <td>
                                        <a href="{{route('admin_user_role_delete', ['userid'=> $data->id, 'roleid'=> $row->id])}}" onclick="return confirm('Delete! Are you sure?')"><img src="{{asset('assets/admin/images')}}/delete.png" height="25"></a>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    </td>
                </tr>
                <tbody>
                <td>
                    <form id="form_validation" action="{{ route('admin_user_role_add', ['id' => $data->id]) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <select name="roleid">
                            @foreach($datalist as $rs)
                                <option value="{{$rs->id}}"> {{$rs->name}} </option>
                            @endforeach
                        </select>
                        <button class="btn btn-primary waves-effect" type="submit">Add Role</button>
                    </form>
                </td>
                </tbody>
            </table>
        </div>
    </div>
</div>
</body>
</html>
