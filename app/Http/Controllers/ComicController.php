<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ComicController extends Controller
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
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // codice per validare la nostra richiesta
        // fare i controlli opportuni per far sì che i dati siano validi prima di essere inseriti nel db

        $this->validation($request->all());
        
        // creo un nuovo fumetto con i dati ricevuti attraverso la richiesta POST del form

        $newComic = new Comic();

        $newComic->title = $request->title;
        $newComic->description = $request->description;
        $newComic->thumb = $request->thumb;
        $newComic->price = $request->price;
        $newComic->series = $request->series;
        $newComic->sale_date = $request->sale_date;
        $newComic->type = $request->type;
        $newComic->artists = $request->artists;
        $newComic->writers = $request->writers;

        $newComic->save();

        // dd($newComic);

        return redirect()->route('comics.show', $newComic->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(Comic $comic)
    {
        // prelevare il fumetto in base all id
        // $comic = Comic::find($id);

        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comic $comic)
    {
        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comic $comic)
    {
        $this->validation($request->all());
        
        // codice per modificare il record 
        $comic->title = $request->title;
        $comic->description = $request->description;
        $comic->thumb = $request->thumb;
        $comic->price = $request->price;
        $comic->series = $request->series;
        $comic->sale_date = $request->sale_date;
        $comic->type = $request->type;
        $comic->artists = $request->artists;
        $comic->writers = $request->writers;

        $comic->save();

        return redirect()->route('comics.show', $comic->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();

        return redirect()->route('comics.index');
    }


    // creiamo una funzione privata per i controlli di validazione e la comunicazione dei messaggi di errore
    // che poi richiameremo per il metodo store e il metodo update
    private function validation($data) {

        // quando facciamo l'import di questa classe dobbiamo fare attenzione ad importare quello presente in Support\Facades.
        $validator = Validator::make($data, [
            'title' => 'required|max:255',
            'description' => 'required|max:1000',
            'thumb' => 'required',
            'price' => 'required|max:7',
            'series' => 'required|max:100',
            'sale_date' => 'required',
            'type' => 'required|max:100',
        ], [
            'title.required' => 'Il titolo deve essere inserito',
            'title.max' => "Il titolo deve avere massimo :max caratteri",
            'description.max' => "La descrizione deve avere massimo :max caratteri",
            'description.required' => 'La descrizione deve essere inserita',
            'thumb.required' => "L'immagine deve essere inserita",
            'price.required' => 'Il prezzo deve essere inserito',
            'price.max' => "Il prezzo deve avere massimo :max caratteri",
            'series.required' => 'La serie deve essere inserito',
            'series.max' => "La serie deve avere massimo :max caratteri",
            'sale_date.required' => "La data di pubblicazione deve essere inserita",
            'type.required' => 'Il tipo deve essere inserito',
            'type.max' => "Il tipo deve avere massimo :max caratteri",

            // 'max' => "Il campo :attribute deve avere massimo :max caratteri", // possiamo creare messaggi generali per regole condivise tra più campi
            // 'required' => "Il campo :attribute deve avere inserito", // possiamo creare messaggi generali per regole condivise tra più campi
            
        ])->validate();
        // tramite il metodo validate() controlliamo delle regole scelte da noi per i vari campi che riceviamo dal form
        // in caso le validazioni non vadano a buon fine (ne basta una sbagliata), laravel in automatico farà tornare l'utente indietro
        // e fornirà alla pagina precedente le indicazioni sull'errore
        

    }
}


