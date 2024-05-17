@php
    $status = 'test';
    if ($status = 'test') {
        $title = 'Batgirl #2';
        $description =
            '“Beyond Burnside” Chapter Two: The Batgirl you know and love is going global with Eisner Award-winning and New York Times best-selling writer Hope Larson (A Wrinkle in Time, Goldie Vance) and all-star artist Rafael Albuquerque (AMERICAN VAMPIRE). In order to up her game, Babs travels to Japan on a quest to train with the most elite modern combat masters of the East. But when a chance meeting with an old friend puts a target on her back, Batgirl may need to use her new skills to solve a deadly mystery.';
        $thumb =
            'https://imgs.search.brave.com/YET9wY29Aa29TyHqlbieS9qsz3HWyNYQx-WkRqdBRX4/rs:fit:640:984:1/g:ce/aHR0cDovL2dldHlv/dXJjb21pY29uLmNv/LnVrL3dwLWNvbnRl/bnQvdXBsb2Fkcy8y/MDE2LzA4L2JhdGdp/cmwtcmViaXJ0aC0x/LWNvdmVyLmpwZw';
        $price = '19.90';
        $series = 'Batgirl';
        $type = 'comic book';
        $sale_date = '2020-01-01';
        $artists = 'Rafael Albuquerque';
        $writers = 'Hope Larson';
    }
@endphp

@extends('layouts.main')

@section('content')
    <div class="container my-5">
        <h5 class="my-4 text-center">Compila tutti i campi del form con i dati richiesti per aggiungere il fumetto
            nell'archivio di DC
            Comics</h5>
        <form action="{{ route('comics.store') }}" method="POST">
            @csrf
            <div class="row g-3 my-4">
                <div class="col-6">
                    <label for="title" class="form-label">Titolo</label>
                    <input name="title" type="text" class="form-control" id="title" value="{{ $title }}">
                </div>
                <div class="col-6">
                    <label for="series" class="form-label">Serie</label>
                    <input name="series" type="text" class="form-control" id="series" value="{{ $series }}">
                </div>
                <div class="col-4">
                    <label for="type" class="form-label">Tipo</label>
                    <input name="type" type="text" class="form-control" id="type" value="{{ $type }}">
                </div>
                <div class="col-4">
                    <label for="sale_date" class="form-label">Data di vendita</label>
                    <input name="sale_date" type="date" class="form-control" id="sale_date" value="{{ $sale_date }}">
                </div>
                <div class="col-4">
                    <label for="price" class="form-label">Prezzo</label>
                    <input name="price" type="number" min="0" step=".01" class="form-control" id="price"
                        value="{{ $price }}">
                </div>
                <div class="col-12">
                    <label for="thumb" class="form-label">Immagine</label>
                    <input name="thumb" type="text"class="form-control" id="thumb" value="{{ $thumb }}">
                </div>
                <div class="col-6">
                    <label for="artists" class="form-label">Grafici</label>
                    <textarea name="artists" id="artists" rows="2" class="form-control">{{ $artists }}</textarea>
                </div>
                <div class="col-6">
                    <label for="writers" class="form-label">Scrittori</label>
                    <textarea name="writers" id="writers" rows="2" class="form-control">{{ $writers }}</textarea>
                </div>
                <div class="col-12">
                    <label for="description" class="form-label">Descrizione</label>
                    <textarea name="description" id="description" rows="5" class="form-control">{{ $description }}</textarea>
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Aggiungi fumetto</button>
            <button type="reset" class="btn btn-light">Cancella</button>
        </form>
    </div>
@endsection

@section('title')
    Aggiungi fumetto
@endsection
