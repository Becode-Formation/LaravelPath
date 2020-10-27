<?php

namespace App\Http\Controllers;

use App\Resto;
use Illuminate\Http\Request;

class RestoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $restaurant = Resto::get();
         return view('blog.index', compact('restaurant')); // Pas de $ dans le compact
        // dd($restaurant);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Resto  $resto
     * @return \Illuminate\Http\Response
     */
    public function show(Resto $resto, $id)
    {
        $resto = Resto::findOrFail($id);
        return view('blog.post', compact('$resto'));
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Resto  $resto
     * @return \Illuminate\Http\Response
     */
    public function edit(Resto $resto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Resto  $resto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Resto $resto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Resto  $resto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Resto $resto)
    {
        //
    }
}
