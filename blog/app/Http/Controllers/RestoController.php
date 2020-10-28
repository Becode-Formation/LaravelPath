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
        return view('blog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate(request(),[
            'title' => 'required|min:5|max:20',
            'description' => 'max:200'
        ]);

        $resto = new Resto;
        $resto->title = $request->title;
        $resto->description = $request->description;
        $resto->save();
        return redirect('/');

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
    public function edit(Resto $resto, $id)
    {
        $resto = Resto::findOrFail($id);

        return view('blog.edit', compact('resto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Resto  $resto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Resto $resto, $id)
    {   
        // Validate to be sure it's not a malicious script
        $this->validate(request(), [
            'title' => 'required|min:5|max:20',
            'description' => 'max:200'
        ]);

        // On chercher l'id et on update toutes les requêtes
        Resto::find($id)->update($request->all());
        return redirect('/');
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
