@extends('layouts.main')

@section('content')
    <div class="container my-5">
        <h5 class="my-4 text-center">Edita i campi del form per modificare i dati del fumetto nell'archivio di DC Comics</h5>
        <form action="{{ route('comics.update', $comic) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="row g-3 my-4">
                <div class="col-6">
                    <label for="title" class="form-label">Titolo</label>
                    <input name="title" type="text" class="form-control" id="title" value="{{ $comic->title }}">
                </div>
                <div class="col-6">
                    <label for="series" class="form-label">Serie</label>
                    <input name="series" type="text" class="form-control" id="series" value="{{ $comic->series }}">
                </div>
                <div class="col-4">
                    <label for="type" class="form-label">Tipo</label>
                    <input name="type" type="text" class="form-control" id="type" value="{{ $comic->type }}">
                </div>
                <div class="col-4">
                    <label for="sale_date" class="form-label">Data di vendita</label>
                    <input name="sale_date" type="date" class="form-control" id="sale_date"
                        value="{{ $comic->sale_date }}">
                </div>
                <div class="col-4">
                    <label for="price" class="form-label">Prezzo</label>
                    <input name="price" type="number" min="0" step=".01" class="form-control" id="price"
                        value="{{ $comic->price }}">
                </div>
                <div class="col-12">
                    <label for="thumb" class="form-label">Immagine</label>
                    <input name="thumb" type="text"class="form-control" id="thumb" value="{{ $comic->thumb }}">
                </div>
                <div class="col-6">
                    <label for="artists" class="form-label">Grafici</label>
                    <textarea name="artists" id="artists" rows="2" class="form-control">{{ $comic->artists }}</textarea>
                </div>
                <div class="col-6">
                    <label for="writers" class="form-label">Scrittori</label>
                    <textarea name="writers" id="writers" rows="2" class="form-control">{{ $comic->writers }}</textarea>
                </div>
                <div class="col-12">
                    <label for="description" class="form-label">Descrizione</label>
                    <textarea name="description" id="description" rows="5" class="form-control">{{ $comic->description }}</textarea>
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Modifica fumetto</button>
            <button type="reset" class="btn btn-light">Cancella</button>
        </form>
    </div>
@endsection

@section('title')
    Modifica fumetto
@endsection
