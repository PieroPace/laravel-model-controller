@extends('layout.base')

@section('content')
<div class="cards">
    @foreach ($movies as $movie)
        <div class="card">
            <h1><span class="white">Titolo: </span>{{ $movie -> title }}</h1>
            <h3><span class="white">Titolo originale: </span>{{ $movie -> original_title}}</h3>
            <h4><span class="white">Nazione: </span>{{ $movie -> nationality}}</h4>
            <h4><span class="white">Data di uscita: </span>{{ $movie -> date}}</h4>
            <h5><span class="white">Voto: </span>{{ $movie -> vote }}</h5>
        </div>
    @endforeach
</div>
@endsection
