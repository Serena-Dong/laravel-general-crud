<?php

namespace App\Http\Controllers;

use App\Models\Card;
use Illuminate\Http\Request;

class CardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cards = Card::all();
        return view('index', compact('cards'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('cards.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $card = Card::findOrFail($id);
        return view('cards.show', compact('card'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $cards = Card::findOrFail($id);
        return view('cards.edit', compact('cards'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->all();

        $cards = Card::findOrFail($id);
        $cards->fill($data);
        $cards->save();

        return to_route('cards.show', $cards->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // $cards = Card::findOnFail($id);
        // $cards->delete();

        // return to_route('index')
        //     ->with('message', "'$cards->series' has been successfully removed")
        //     ->with('type', 'success')
        //     -with()
    }
}
