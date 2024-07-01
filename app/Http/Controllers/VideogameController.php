<?php

namespace App\Http\Controllers;

use App\Models\Videogame;
use Illuminate\Http\Request;

class VideogameController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //query che recupera tutti i dati di Videogame (il mio model)
        $videogames = Videogame::all();

        return view('videogames.index', compact('videogames'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('videogames.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // faccio un if else cosi' se utente passa immagine allora la assegno, se no non assegno un'immagine
        if ($request->file('img')) {
            // Metodo Mass Assignment
            Videogame::create([
                'title' => $request->title,
                'description' => $request->description,
                'category' => $request->category,
                'img' => $request->file('img')->store('public/videogames'),
            ]);
        }
        else {
            Videogame::create([
                'title' => $request->title,
                'description' => $request->description,
                'category' => $request->category,
            ]);
        }

        return redirect(route('homepage'))->with('message', 'Videogame Inserito');
    }

    /**
     * Display the specified resource.
     */
    public function show(Videogame $videogame)
    {
        //
        return view('videogames.show', compact('videogame'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Videogame $videogame)
    {
        // vista edit che si porta con se' videogame (per metterlo nella rotta)
        return view('videogames.edit', compact('videogame'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Videogame $videogame)
    {
        // Assegno alla variabile img il valore attuale dell'immagine del videogioco
        $img = $videogame->img;
        // se l'utente passa nuova img allora la sovrascrivo
        if ($request->file('img')) {
            $img = $request->file('img')->store('public/videogames');
        }
        // il metodo update funziona come il mass assignment nella store
        $videogame->update([
            'title' => $request->title,
            'description' => $request->description,
            'category' => $request->category,
            'img' => $img //salvo l'immagine, che sia quella vecchia o cambiata
        ]);
        return redirect(route('videogames.index'))->with('message', 'videogame updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Videogame $videogame)
    {
        // Il metodo delete richiamato sull'oggetto cancelliamo il record corrispondente
        $videogame->delete();

        return redirect(route('videogames.index'))->with('message', 'videogame deleted');
    }
}
