@extends('layouts.home')

@section('title', 'References-' .  $setting->title)

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
                            <li> <a href="#"> </a> References</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="aa-error">
        <div class="container">
            <row>

                {!! $setting->references !!}

                <div class="col-md-12">
                    <div class="aa-error-area">
                        <h4> </h4>

                    </div>
                </div>
            </row>
        </div>
    </section>


@endsection
