@extends('layouts.main')

@section('content')
    <div class="container">

        <div class="comic-details my-5 d-flex align-items-center">
            <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
            <div class="mx-5">
                <h1>{{ $comic->title }}</h1>
                <h3>{{ $comic->series }} &bull; {{ $comic->sale_date }} &bull; {{ $comic->type }} </h3>
                <h2 class="text-end">{{ $comic->price }}</h2>
                <p class="py-4">{!! $comic->description !!}</p>
                <h6>Grafici:</h6>
                <p>{{ $comic->artists }}</p>
                <h6>Scrittori:</h6>
                <p>{{ $comic->writers }}</p>
                <a href="{{ route('comics.index') }}" class="btn btn-primary">Torna all'archivio</a>
            </div>
        </div>
    </div>
@endsection

@section('title')
    {{ $comic->series }}
@endsection
