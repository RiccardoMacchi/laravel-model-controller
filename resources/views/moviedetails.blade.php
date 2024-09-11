{{-- questa view estende il file main.blade.php che è dentro la cartella view/layouts --}}
@extends('layouts.main')

@section('content')
    <div class="container my-5">
        <div class="card text-center">
            <div class="card-header">
                Dettagli del Film: <b>{{ $movie_details->title }}</b>
            </div>
            <div class="card-body">
                <h5 class="card-title">Titolo Originale: {{ $movie_details->original_title }}</h5>
                <span>Nazionalità: {{ $movie_details->nationality }}</span>
                <h5>Data di Uscita: {{ $movie_details->date }}</h5>
            </div>
            <div class="card-footer text-muted">
                <h4>Voto: {{ $movie_details->vote }}</h4>
                <a class="btn btn-warning" href="{{ route('home') }}">TORNA AI FILM</a>
            </div>
        </div>
    </div>
@endsection


@section('titlePage')
    chi siamo
@endsection
