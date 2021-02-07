@extends('layouts.home')

@section('title',$data->title . 'Property list')

@section('description') {{ $data->description }} @endsection

@section('keywords',$data->keywords)


@section('content')

    <section id="aa-property-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="aa-property-header-inner">
                        <h2>Blank Page</h2>
                        <ol class="breadcrumb">
                            <li><a href="{{route('homepage')}}">HOME</a></li>
                            <li> <a href="#"> </a> {{ \App\Http\Controllers\Admin\CategoryController::getParentsTree($data,$data->title) }} > Satılık Konutlar</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="aa-error">
        <div class="container">
            <row>

                <section id="aa-properties">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="aa-properties-content">
                                    <!-- start properties content head -->
                                    <div class="aa-properties-content-head">
                                        <div class="aa-properties-content-head-left">
                                            <form action="" class="aa-sort-form">
                                                <label for="">Sort by</label>
                                                <select name="">
                                                    <option value="1" selected="Default">Default</option>
                                                    <option value="2">Name</option>
                                                    <option value="3">Price</option>
                                                    <option value="4">Date</option>
                                                </select>
                                            </form>
                                            <form action="" class="aa-show-form">
                                                <label for="">Show</label>
                                                <select name="">
                                                    <option value="1" selected="12">6</option>
                                                    <option value="2">12</option>
                                                    <option value="3">24</option>
                                                </select>
                                            </form>
                                        </div>
                                        <div class="aa-properties-content-head-right">
                                            <a id="aa-grid-properties" href="#"><span class="fa fa-th"></span></a>
                                            <a id="aa-list-properties" href="#"><span class="fa fa-list"></span></a>
                                        </div>
                                    </div>

                                     @foreach($datalist as $rs)
                                    <div class="aa-properties-content-body">
                                        <ul class="aa-properties-nav">
                                            <li>
                                                <article class="aa-properties-item">
                                                    <a class="aa-properties-item-img" href="#">
                                                        <img alt="img" style="height: 200px" src="{{Storage::url($rs->image)}}">
                                                    </a>
                                                    <div class="aa-tag for-rent">
                                                        For Sale
                                                    </div>
                                                    <div class="aa-properties-item-content">
                                                        <div class="aa-properties-info">
                                                            <span>5 Rooms</span>
                                                            <span>2 Beds</span>
                                                            <span>3 Baths</span>
                                                            <span>1100 SQ FT</span>
                                                        </div>
                                                        <div class="aa-properties-about">
                                                            <h3><a href="#">{{$rs->title}}</a></h3>
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim molestiae vero ducimus quibusdam odit vitae.</p>
                                                        </div>
                                                        <div class="aa-properties-detial"><span class="aa-price" {{$rs->price}}>{{$rs->price}}</span>
                                                            <a class="aa-secondary-btn" href="{{route('product',['id'=>$rs->id])}}">View Details</a>
                                                        </div>
                                                    </div>
                                                </article>
                                            </li>
                                        </ul>
                                    </div>
                                    @endforeach


                                        <div class="col-md-4">
                                            <aside class="aa-properties-sidebar">
                                        <div class="aa-properties-single-sidebar">
                                            <h3>Properties Search</h3>
                                            <form action="">
                                                <div class="aa-single-advance-search">
                                                    <input type="text" placeholder="Type Your Location">
                                                </div>
                                                <div class="aa-single-advance-search">
                                                    <select id="" name="">
                                                        <option selected="" value="0">Category</option>
                                                        <option value="1">Flat</option>
                                                        <option value="2">Land</option>
                                                        <option value="3">Plot</option>
                                                        <option value="4">Commercial</option>
                                                    </select>
                                                </div>
                                                <div class="aa-single-advance-search">
                                                    <select id="" name="">
                                                        <option selected="" value="0">Type</option>
                                                        <option value="1">Flat</option>
                                                        <option value="2">Land</option>
                                                        <option value="3">Plot</option>
                                                        <option value="4">Commercial</option>
                                                    </select>
                                                </div>
                                                <div class="aa-single-advance-search">
                                                    <select id="" name="">
                                                        <option selected="" value="0">Type</option>
                                                        <option value="1">Flat</option>
                                                        <option value="2">Land</option>
                                                        <option value="3">Plot</option>
                                                        <option value="4">Commercial</option>
                                                    </select>
                                                </div>
                                                <div class="aa-single-filter-search">
                                                    <span>AREA (SQ)</span>
                                                    <span>FROM</span>
                                                    <span id="skip-value-lower" class="example-val">30.00</span>
                                                    <span>TO</span>
                                                    <span id="skip-value-upper" class="example-val">100.00</span>
                                                    <div id="aa-sqrfeet-range" class="noUi-target noUi-ltr noUi-horizontal noUi-background">
                                                    </div>
                                                </div>
                                                <div class="aa-single-filter-search">
                                                    <span>PRICE ($)</span>
                                                    <span>FROM</span>
                                                    <span id="skip-value-lower2" class="example-val">30.00</span>
                                                    <span>TO</span>
                                                    <span id="skip-value-upper2" class="example-val">100.00</span>
                                                    <div id="aa-price-range" class="noUi-target noUi-ltr noUi-horizontal noUi-background">
                                                    </div>
                                                </div>
                                                <div class="aa-single-advance-search">
                                                    <input type="submit" value="Search" class="aa-search-btn">
                                                </div>
                                            </form>
                                        </div>
                                            </aside>
                                        </div>

                                        <div class="col-md-12">
                                                    <div class="aa-error-area">
                                                    </div>
                                                </div>


                </section>
            </row>
        </div>
    </section>
@endsection
