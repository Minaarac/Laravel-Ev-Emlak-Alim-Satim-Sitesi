@extends('layouts.home')

@section('title', 'Contact-' .  $setting->title)

@section('description') {{ $setting->description }} @endsection

@section('keywords',$setting->keywords)


@section('content')

    <section id="aa-property-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="aa-property-header-inner">
                        <h2>Blank Page</h2>
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



                </div>

                <div class="col-md-12">
                    <div class="aa-error-area">
                        <h4> </h4>

                    </div>
                </div>
            </row>
        </div>
    </section>


@endsection
