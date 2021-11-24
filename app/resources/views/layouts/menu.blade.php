<li class="nav-item">
    <a href="{{ route('location') }}"
       class="nav-link {{ Request::is('locations*') ? 'active' : '' }}">
        <p>見どころ紹介</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('trips') }}"
       class="nav-link {{ Request::is('trips*') ? 'active' : '' }}">
        <p>旅の計画</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('histories') }}"
       class="nav-link {{ Request::is('histories*') ? 'active' : '' }}">
        <p>旅の履歴</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('reviews') }}"
       class="nav-link {{ Request::is('reviews*') ? 'active' : '' }}">
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
