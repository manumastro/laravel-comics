<header class="container">
  <div class="row d-flex">
    <div class="col col-left">
      <div class="logo">
        <a href="#"><img src="{{ asset('img/dc-logopng.png') }}" alt=""></a>
      </div>
    </div>
    <div class="col col-right">
      <nav>
        <ul>
          <li><a class="{{ Route::currentRouteName() === 'characters' ? 'active' : '' }}" href="{{ route('characters') }}">Characters</a></li>
          <li><a class="{{ Route::currentRouteName() === 'comics' ? 'active' : '' }}" href="{{ route('comics') }}">Comics</a></li>
          <li><a class="{{ Route::currentRouteName() === 'movies' ? 'active' : '' }}" href="{{ route('movies') }}">Movies</a></li>
          <li><a class="{{ Route::currentRouteName() === 'tv' ? 'active' : '' }}" href="{{ route('tv') }}">Tv</a></li>
          <li><a class="{{ Route::currentRouteName() === 'games' ? 'active' : '' }}" href="{{ route('games') }}">Games</a></li>
          <li><a class="{{ Route::currentRouteName() === 'collectibles' ? 'active' : '' }}" href="{{ route('collectibles') }}">Collectibles</a></li>
          <li><a class="{{ Route::currentRouteName() === 'videos' ? 'active' : '' }}" href="{{ route('videos') }}">Videos</a></li>
          <li><a class="{{ Route::currentRouteName() === 'fans' ? 'active' : '' }}" href="{{ route('fans') }}">Fans</a></li>
          <li><a class="{{ Route::currentRouteName() === 'news' ? 'active' : '' }}" href="{{ route('news') }}">News</a></li>
          <li><a class="{{ Route::currentRouteName() === 'shop' ? 'active' : '' }}" href="{{ route('shop') }}">Shop</a></li>
        </ul>
      </nav>
    </div>
  </div>
</header>