<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Game;

class GameController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $game = Game::all();
        return view('games.index', compact('game'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('games.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Game $request)
    {
        $request->validate(
            [
                'judul'     => 'required',
                'deskripsi' => 'required',
                'harga'     => 'required',
                'stok'      => 'required',
            ],
        );

        $game = new Game();
        $game->judul     = $request->judul;
        $game->deskripsi = $request->deskripsi;
        $game->harga     = $request->harga;
        $game->stok      = $request->stok;
        $game->save();

        // Game::create($request->all());
        return redirect()->route('games.index')->with('success', 'game berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Game $game)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Game $game)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($request, Game $game)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Game $game)
    {
        //
    }
}
