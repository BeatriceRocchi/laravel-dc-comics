@extends('layouts.main')

@section('content')
    <div class="container my-5">
        <h5 class="my-4 text-center">{{ $text }}</h5>

        @if ($errors->any())
            <div class="alert alert-danger" role="alert">
                Nella compilazione del form sono stati commessi i seguenti errori:
                <ul class="m-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ $route }}" method="POST">
            @csrf
            @method($method)
            <div class="row g-3 my-4">
                <div class="col-6">
                    <label for="title" class="form-label">Titolo</label>
                    <input name="title" type="text" class="form-control @error('title') is-invalid @enderror"
                        id="title" value="{{ old('title', $comic?->title) }}">
                    @error('title')
                        <div id="title" class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="col-6">
                    <label for="series" class="form-label">Serie</label>
                    <input name="series" type="text" class="form-control @error('series') is-invalid @enderror"
                        id="series" value="{{ old('series', $comic?->series) }}">
                    @error('series')
                        <div id="series" class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="col-4">
                    <label for="type" class="form-label">Tipo</label>
                    <input name="type" type="text" class="form-control @error('type') is-invalid @enderror"
                        id="type" value="{{ old('type', $comic?->type) }}">
                    @error('type')
                        <div id="type" class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="col-4">
                    <label for="sale_date" class="form-label">Data di vendita</label>
                    <input name="sale_date" type="date" class="form-control @error('sale_date') is-invalid @enderror"
                        id="sale_date" value="{{ old('sale_date', $comic?->sale_date) }}">
                    @error('sale_date')
                        <div id="sale_date" class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="col-4">
                    <label for="price" class="form-label">Prezzo</label>
                    <input name="price" type="number" min="0" step=".01"
                        class="form-control @error('price') is-invalid @enderror" id="price"
                        value="{{ old('price', $comic?->price) }}">
                    @error('price')
                        <div id="price" class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="col-12">
                    <label for="thumb" class="form-label">Immagine</label>
                    <input name="thumb" type="text" class="form-control @error('thumb') is-invalid @enderror"
                        id="thumb" value="{{ old('thumb', $comic?->thumb) }}">
                    @error('thumb')
                        <div id="thumb" class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="col-6">
                    <label for="artists" class="form-label">Grafici</label>
                    <textarea name="artists" id="artists" rows="2" class="form-control">{{ old('artists', $comic?->artists) }}</textarea>
                </div>

                <div class="col-6">
                    <label for="writers" class="form-label">Scrittori</label>
                    <textarea name="writers" id="writers" rows="2" class="form-control">{{ old('writers', $comic?->writers) }}</textarea>
                </div>

                <div class="col-12">
                    <label for="description" class="form-label">Descrizione</label>
                    <textarea name="description" id="description" rows="5"
                        class="form-control @error('description') is-invalid  @enderror">{{ old('description', $comic?->description) }}</textarea>
                </div>
            </div>

            <button type="submit" class="btn btn-primary">{{ $btn_text }}</button>
            <button type="reset" class="btn btn-light">Cancella</button>
        </form>
    </div>
@endsection

@section('title')
    {{ $btn_text }}
@endsection
