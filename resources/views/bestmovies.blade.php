{{-- questa view estende il file main.blade.php che è dentro la cartella view/layouts --}}
@extends('layouts.main')

@section('content')
    <div class="container my-5">
        <h1>I MIGLIORI FILM</h1>
        <div id="my_container">

            @foreach ($all_movies as $movie)
                <div class="card mb-3" style="width: 18rem;">
                    <h3>Titolo: {{ $movie->title }}</h3>
                    <div class="card-body">
                        <span>Uscita del film: {{ $movie->date }}</span>
                        <h5>Voto medio: {{ $movie->vote }}</h5>
                    </div>
                    <a class="btn btn-primary" href="">MOSTRA PIU' INFO</a>
                </div>
            @endforeach
        </div>
    </div>
@endsection
