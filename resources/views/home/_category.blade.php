@php
    $parentCategories = \App\Http\Controllers\HomeController::categoryList()
@endphp


<div id="navbar" class="navbar-collapse collapse">
    <ul id="top-menu" class="nav navbar-nav navbar-right aa-main-nav">
        <li class="active"><a href="{{route('homepage')}}">HOME</a></li>
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="{{route('homepage')}}">ON SALE <span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
                @foreach($parentCategories as $rs)
                    <li><a href="{{route('categoryproducts',['id'=>$rs->id])}}" class="dropdown-item small text-uppercase">{{$rs->title}}</a></li>
                @endforeach
            </ul>
        </li>
        <li><a href="{{route('homepage')}}">GALLERY</a></li>

        <li><a href="{{route('contact')}}">CONTACT</a></li>
        <li><a href="{{route('references')}}">REFERENCES</a></li>
       <li><a href="{{route('myprofile')}}">USER</a></li>

    </ul>

</div>

</div>

</nav>


</section>


