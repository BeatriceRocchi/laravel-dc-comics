<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comic;
use App\Functions\Helper;
use App\Http\Requests\ComicRequest;

class ComicsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comics = Comic::all();
        return view('comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $text = 'Compila tutti i campi del form con i dati richiesti per aggiungere il fumetto nell\'archivio di DC Comics';
        $btn_text = 'Aggiungi fumetto';
        $route = route('comics.store');
        $method = 'POST';
        $comic = null;
        return view('comics.create-edit', compact('text', 'btn_text', 'route', 'method', 'comic'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ComicRequest $request)
    {
        $form_data = $request->all();

        $new_comic = new Comic();

        $form_data['slug'] = Helper::generateSlug($form_data['title'], new Comic());

        $new_comic->fill($form_data);

        $new_comic->save();

        return redirect()->route('comics.show', $new_comic);
    }

    /**
     * Display the specified resource.
     */
    public function show(Comic $comic)
    {
        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comic $comic)
    {
        $text = 'Edita i campi del form per modificare i dati del fumetto nell\'archivio di DC Comics';
        $btn_text = 'Modifica fumetto';
        $route = route('comics.update', $comic);
        $method = 'PUT';
        return view('comics.create-edit', compact('comic', 'text', 'btn_text', 'route', 'method'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ComicRequest $request, Comic $comic)
    {
        $form_data = $request->all();

        if ($form_data['title'] !== $comic->title) {
            $form_data['slug'] = Helper::generateSlug($form_data['title'], new Comic());
        } else {
            $form_data['slug'] = $comic->slug;
        }

        $comic->update($form_data);

        return redirect()->route('comics.show', $comic);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();

        return redirect()->route('comics.index')->with('delete_msg', 'Il fumetto ' . $comic->title . ' è stato eliminato dall\'archivio');
    }
}
