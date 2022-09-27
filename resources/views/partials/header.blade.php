 <header class="appHeader">
    <div class="logo">
        <img src="{{asset('img/dc-logo.png')}}" alt="Logo DC Comics">
    </div>
    <nav>
        <ul class="navLink-container">
{{--            @foreach($links as $items)--}}
{{--            <li>--}}
{{--                <a --}}{{-- href="{{route($items['name'])}}" --}}
{{--                   class="navLink {{Request::route()->getName() == $items['name']?'active':''}}">{{$items['name']}}</a>--}}
{{--            </li>--}}
{{--            @endforeach--}}
            <li>
                <a class="navLink {{Request::route()->getName() == 'Characters'?'active':''}}">Characters</a>
            </li>
            <li>
                <a class="navLink {{Request::route()->getName() == 'Comics'?'active':''}}">Comics</a>
            </li>
            <li>
                <a class="navLink {{Request::route()->getName() == 'Movies'?'active':''}}">Movies</a>
            </li>
            <li>
                <a class="navLink {{Request::route()->getName() == 'TV'?'active':''}}">TV</a>
            </li>
            <li>
                <a class="navLink {{Request::route()->getName() == 'Games'?'active':''}}">Games</a>
            </li>
            <li>
                <a class="navLink {{Request::route()->getName() == 'Collectables'?'active':''}}">Collectables</a>
            </li>
            <li>
                <a class="navLink {{Request::route()->getName() == 'Videos'?'active':''}}">Videos</a>
            </li>
            <li>
                <a class="navLink {{Request::route()->getName() == 'Fans'?'active':''}}">Fans</a>
            </li>
            <li>
                <a class="navLink {{Request::route()->getName() == 'News'?'active':''}}">News</a>
            </li>
            <li>
                <a class="navLink {{Request::route()->getName() == 'Shop'?'active':''}}">Shop</a>
            </li>
        </ul>
    </nav>
</header>
