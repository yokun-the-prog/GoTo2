<li class="nav-item">
    <a href="{{Route('location.index')}}"
       class="nav-link {{ Request::is('location*') ? 'active' : '' }}">
        <p>見どころ紹介</p>
    </a>
</li>

<li class="nav-item">
<a href="{{Route('trip.index')}}"
       class="nav-link {{ Request::is('trip*') ? 'active' : '' }}">
        <p>旅の計画</p>
    </a>
</li>

<li class="nav-item">
<a href="{{Route('history.index')}}"
       class="nav-link {{ Request::is('history*') ? 'active' : '' }}">
        <p>旅の履歴</p>
    </a>
</li>


<li class="nav-item">
<a href="{{Route('review.index')}}"
       class="nav-link {{ Request::is('review*') ? 'active' : '' }}">
        <p>口コミ投稿</p>
    </a>
</li>



<!-- 修正前
<li class="nav-item">
    <a href="{{ route('posts.index') }}"
       class="nav-link {{ Request::is('posts*') ? 'active' : '' }}">
        <p>Posts</p>
    </a>
</li> -->
<li class="nav-item">
    <a href="{{ route('createTransports.index') }}"
       class="nav-link {{ Request::is('createTransports*') ? 'active' : '' }}">
        <p>Create Transports</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('userDivisions.index') }}"
       class="nav-link {{ Request::is('userDivisions*') ? 'active' : '' }}">
        <p>User Divisions</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('photorallyDivisions.index') }}"
       class="nav-link {{ Request::is('photorallyDivisions*') ? 'active' : '' }}">
        <p>Photorally Divisions</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('transportDivisions.index') }}"
       class="nav-link {{ Request::is('transportDivisions*') ? 'active' : '' }}">
        <p>Transport Divisions</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('users.index') }}"
       class="nav-link {{ Request::is('users*') ? 'active' : '' }}">
        <p>Users</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('tours.index') }}"
       class="nav-link {{ Request::is('tours*') ? 'active' : '' }}">
        <p>Tours</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('tourFilePaths.index') }}"
       class="nav-link {{ Request::is('tourFilePaths*') ? 'active' : '' }}">
        <p>Tour File Paths</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('erratumDivisions.index') }}"
       class="nav-link {{ Request::is('erratumDivisions*') ? 'active' : '' }}">
        <p>Erratum Divisions</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('tags.index') }}"
       class="nav-link {{ Request::is('tags*') ? 'active' : '' }}">
        <p>Tags</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('spots.index') }}"
       class="nav-link {{ Request::is('spots*') ? 'active' : '' }}">
        <p>Spots</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('spotFilepaths.index') }}"
       class="nav-link {{ Request::is('spotFilepaths*') ? 'active' : '' }}">
        <p>Spot Filepaths</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('spotTags.index') }}"
       class="nav-link {{ Request::is('spotTags*') ? 'active' : '' }}">
        <p>Spot Tags</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('destinations.index') }}"
       class="nav-link {{ Request::is('destinations*') ? 'active' : '' }}">
        <p>Destinations</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('tourFilepaths.index') }}"
       class="nav-link {{ Request::is('tourFilepaths*') ? 'active' : '' }}">
        <p>Tour Filepaths</p>
    </a>
</li>


