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
        $videogames = Videogame::all();
        return view('admin.admin', compact('videogames'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $videogame = new Videogame();

        return view('admin.create', compact('videogame'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate(
            [
                'title' => 'required|string|max:70|unique:videogames',
                'release_date' => 'required|date',
                'genre' => 'required|string',
                'cover' => 'nullable|url',
                'description' => 'required|string',
                'publisher' => 'required|string',
                'serial_number' => 'required|string|unique:videogames',
                'rating' => 'required|string'
            ],
            [
                'title.required' => 'Attenzione! Il titolo è obblicatorio',
                'title.max' => 'Attenzione! Il titolo deve essere lungo massimo :max caratteri',
                'title.unique' => 'Attenzione! Questo titolo esiste già',

                'release_date.required' => 'Attenzione! La data è obbligatoria',

                'genre.required' => 'Attenzione! Il genere è obbligatorio',

                'cover.url' => "L'url inserito non è valido",

                'description.required' => 'Attenzione! La descrizione è obbligatoria',

                'publisher.required' => "Attenzione! L'editore è obbligatorio",

                'serial_number.required' => 'Attenzione! Il numero seriale è obbligatorio',
                'serial_number.unique' => 'Attenzione! Questo numero seriale esiste già',

                'rating.required' => 'Attenzione! Il voto è obbligatorio',

            ]

        );

        $data = $request->all();
        $new_game = new Videogame();
        $new_game->fill($data);
        $new_game->save();
        return to_route('admin.videogames.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Videogame $videogame)
    {
        return view('admin.show', compact('videogame'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Videogame $videogame)
    {
        return view('admin.edit', compact('videogame'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Videogame $videogame)
    {
        $data = $request->all();

        $videogame->update($data);

        return redirect()->route('admin.videogames.show', $videogame->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Videogame $videogame)
    {
        $videogame->delete();
        return to_route('admin.videogames.index')->with('status', 'Videogame Soft Deleted');
    }

    // restore function 
    public function restore($id)
    {
        Videogame::withTrashed()->where('id', $id)->restore();
        return to_route('admin.admin')->with('status', 'Videogame Restored');
    }
}
