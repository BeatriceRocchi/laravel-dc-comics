@extends('layouts.main')

@section('content')
    <div class="container">
        <div class="row row-cols-1 row-cols-lg-2 my-5">
            <div class="col-12 col-lg-8">
                <div class="card mb-4">
                    <div class="card-header">
                        <h5 class="m-0">Summary archivio</h5>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">Titolo</th>
                                    <th scope="col">Serie</th>
                                    <th scope="col">Tipo</th>
                                    <th scope="col">Azioni</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($comics as $comic)
                                    <tr class="align-middle">
                                        <td>{{ $comic->title }}</td>
                                        <td>{{ $comic->series }}</td>
                                        <td>{{ $comic->type }}</td>
                                        <td>
                                            <div class="cta-box d-flex align-items-center justify-content-center">
                                                <a href="{{ route('comics.show', $comic) }}" class="btn btn-info-custom"><i
                                                        class="fa-solid fa-info"></i></a>
                                                <a href="{{ route('comics.edit', $comic) }}" class="btn btn-edit-custom"><i
                                                        class="fa-solid fa-pen"></i></a>
                                                @include('partials.delete_form')
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="col-12 col-lg-4">
                <div class="card mb-4">
                    <div class="card-header">
                        <h5 class="m-0">ToDo</h5>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="addComic">
                                <label class="form-check-label" for="addComic">
                                    Inserire fumetto Batgirl #2
                                </label>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="editComic">
                                <label class="form-check-label" for="editComic">
                                    Modificare descrizione fumetto Aquaman Vol. 4: Underworld
                                </label>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="deleteComic">
                                <label class="form-check-label" for="deleteComic">
                                    Eliminare fumetto Batman Beyond #1
                                </label>
                            </div>
                        </li>
                    </ul>
                </div>

                <div class="card mb-4">
                    <div class="card-header">
                        <h5 class="m-0">FAQ</h5>
                    </div>
                    <div class="accordion accordion-flush" id="accordionFlushExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseOne" aria-expanded="false"
                                    aria-controls="flush-collapseOne">
                                    Come aggiungere un nuovo fumetto?
                                </button>
                            </h2>
                            <div id="flush-collapseOne" class="accordion-collapse collapse"
                                data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">Per aggiungere un nuovo fumetto, cliccare su "Aggiungi fumetto"
                                    nel menu laterale di sinistra</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                    aria-controls="flush-collapseTwo">
                                    Come modificare un fumetto?
                                </button>
                            </h2>
                            <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">Per modificare un fumetto presente in archivio, cliccare
                                    sull'icona con il simbolo della matita di colore arancione. L'icona è presente
                                    in più punti della dashboard: a) a lato di ogni fumetto nel summary dell'archivio, b) in
                                    ogni card nella sezione archivio fumetti e c) sulla pagina di dettaglio di ogni fumetto
                                    raggiungibile cliccando sull'icona info in verde.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseThree" aria-expanded="false"
                                    aria-controls="flush-collapseThree">
                                    Come eliminare un fumetto?
                                </button>
                            </h2>
                            <div id="flush-collapseThree" class="accordion-collapse collapse"
                                data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">Per eliminare un fumetto presente in archivio, cliccare
                                    sull'icona con il simbolo della cestino di colore rosso. L'icona è presente
                                    in più punti della dashboard: a) a lato di ogni fumetto nel summary dell'archivio, b) in
                                    ogni card nella sezione archivio fumetti e c) sulla pagina di dettaglio di ogni fumetto
                                    raggiungibile cliccando sull'icona info in verde.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endsection

        @section('title')
            Home
        @endsection
