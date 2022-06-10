<div class="UpBarr">
    <div class="container">
        <div class="row">
            <div class="col d-flex justify-content-end">
                <ul class="text-uppercase d-flex mb-0 p-3 text-light">
                    <li>dc power™visa®</li>
                    <li class="ms-3">additional dc sites <span>&#8964;</span></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- /.UpBarr -->

<div class="DownBarr">
    <div class="container">
        <div class="row">
            <div class="col">
                <img src="../img/dc-logo.png" alt="logo comics">
            </div>
            <!-- /.col logo -->
            <div class="col-9 d-flex">
                <nav class="nav align-items-center flex-nowrap">
                    <a class="nav-link {{ Route::currentRouteName() === 'home' ? 'active' : '' }}" href="{{route('home')}}">home</a>
                    <a class="nav-link {{ Route::currentRouteName() === 'characters' ? 'active' : '' }}" href="{{route('characters')}}">characters</a>
                    <a class="nav-link {{ Route::currentRouteName() === 'comics' ? 'active' : '' }}" href="{{route('comics')}}">comics</a>
                    <a class="nav-link {{ Route::currentRouteName() === 'movies' ? 'active' : '' }}" href="{{route('movies')}}">movies</a>
                    <a class="nav-link {{ Route::currentRouteName() === 'tv' ? 'active' : '' }}" href="{{route('tv')}}">tv</a>
                    <a class="nav-link {{ Route::currentRouteName() === 'games' ? 'active' : '' }}" href="{{route('games')}}">games</a>
                    <a class="nav-link {{ Route::currentRouteName() === 'collectibles' ? 'active' : '' }}" href="{{route('collectibles')}}">collectibles</a>
                    <a class="nav-link {{ Route::currentRouteName() === 'videos' ? 'active' : '' }}" href="{{route('videos')}}">videos</a>
                    <a class="nav-link {{ Route::currentRouteName() === 'fans' ? 'active' : '' }}" href="{{route('fans')}}">fans</a>
                    <a class="nav-link {{ Route::currentRouteName() === 'news' ? 'active' : '' }}" href="{{route('news')}}">news</a>
                    <a class="nav-link {{ Route::currentRouteName() === 'shop' ? 'active' : '' }}" href="{{route('shop')}}">shop</a>
                </nav>
            </div>
            <!-- /.col navBar -->
            <div class="col">
                serch
            </div>
            <!-- /.col search -->
        </div>
    </div>
</div>
<!-- /.navBarr -->