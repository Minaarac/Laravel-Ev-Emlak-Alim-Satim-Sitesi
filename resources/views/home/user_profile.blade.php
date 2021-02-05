@extends('layouts.home')

@section('title','User Profile')


@section('content')


    <section id="aa-property-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="aa-property-header-inner">
                        <h2>User Page</h2>
                        <ol class="breadcrumb">
                            <li><a href="{{route('homepage')}}">HOME</a></li>
                            <li> <a href="#"> </a> User Profile</li>
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
                        @include('profile.show')

                    </div>
                </div>
            </row>
        </div>
    </section>

@endsection
