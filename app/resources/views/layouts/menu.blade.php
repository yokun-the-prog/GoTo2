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
