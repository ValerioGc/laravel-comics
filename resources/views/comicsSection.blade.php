@extends('layout.app')

@section('page-title', 'DC Comics')

@section('homepage')
    @include('JumboSection')
    <div class="comics-list-container">
        <!-- Titolo Sezione -->
        <h2 class="comics-section-title brand-style">Current Series</h2>
        <!-- Fumetti -->
        <ul class="comics-list">
                        @foreach($comicsList as $comics)
                        <li class="comics-card">
                            <a href="#">
                                <img src="{{$comics['thumb']}}" alt="'Copertina ' . {{$comics['series']}} " />
                                <span class="price">Price</span>
                            </a>
                            <h3>Load More</h3>
                        </li>
                        @endforeach
        </ul>
        <!-- bottone carica altro -->
        <a class="button brand-style" href="#">Load More</a>
    </div>
    @include('comicsLinks')
@endsection



