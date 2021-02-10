@auth()

    <div class="aa-blog-sidebar-single">
        <h3>User Panel</h3>
        <ul class="aa-blog-catg">
            <li><a href="{{route('myprofile')}}"> My Profile </a></li>
            <li>My Review</li>
            <li>My Message</li>
            <li><a href="{{route('user_products')}}"> My Announcements </a></li>
            <li> My Favourites</li>
            <li><a href="{{route('logout')}}"> Logout </a></li>
            @php
                $userRoles = Auth::user()->roles->pluck('name');
            @endphp

            @if($userRoles->contains('admin'))
                <li><a href="{{route('admin_home')}}" target="_blank"> Admin Panel</a></li>
            @endif

        </ul>
    </div>
@endauth
