@extends('layouts.main')

@section('content')
    <div class="container">
        <div class="row row-cols-4 my-5">
            @forelse ($comics as $comic)
                <div class="col my-3">
                    <div class="card card-custom h-100">
                        <img src="{{ $comic->thumb }}" class="card-img-top" alt="{{ $comic->title }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $comic->title }}</h5>
                            <p class="card-text">{{ $comic->series }}</p>
                            <div class="cta-box d-flex justify-content-around">
                                <a href="{{ route('comics.show', $comic) }}" class="btn btn-primary"><i
                                        class="fa-solid fa-info"></i></a>
                                <a href="{{ route('comics.edit', $comic) }}" class="btn btn-primary"><i
                                        class="fa-solid fa-pen"></i></a>
                                <a href="#" class="btn btn-primary"><i class="fa-solid fa-trash"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <h2>Nessun fumetto trovato</h2>
            @endforelse
        </div>
    </div>
@endsection

@section('title')
    Archivio fumetti
@endsection
