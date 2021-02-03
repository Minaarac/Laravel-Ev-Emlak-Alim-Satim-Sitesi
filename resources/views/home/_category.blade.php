@php
    $parentCategories = \App\Http\Controllers\HomeController::categoryList()
@endphp

<div id="navbar" class="navbar-collapse collapse">
    <ul id="top-menu" class="nav navbar-nav navbar-right aa-main-nav">
        <li class="active"><a href="index.html">HOME</a></li>
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="properties.html">SATILIK <span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
                @foreach($parentCategories as $rs)
                    <li><a class="dropdown-item small text-uppercase">{{$rs->title}}</a></li>
                @endforeach
            </ul>
        </li>
        <li><a href="gallery.html">GALLERY</a></li>
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="blog-archive.html">BLOG <span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
                <li><a href="blog-archive.html">BLOG</a></li>
                <li><a href="blog-single.html">BLOG DETAILS</a></li>
            </ul>
        </li>
        <li><a href="contact.html">CONTACT</a></li>
        <li><a href="404.html">404 PAGE</a></li>
    </ul>
</div><!--/.nav-collapse -->
</div>
</nav>
</section>
