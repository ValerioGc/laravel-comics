 <header class="appHeader">
    <div class="logo">
        <img src="{{asset('img/dc-logo.png')}}" alt="Logo DC Comics">
    </div>
    <nav>
        <ul class="navLink-container">
            @foreach($links as $items)
            <li>
                <a {{-- href="{{route($items['name'])}}" --}}
                   class="navLink {{Request::route()->getName() == $items['name']?'active':''}}">{{$items['name']}}</a>
            </li>
            @endforeach
        </ul>
    </nav>
</header>
