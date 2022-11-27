<?php

namespace App\Http\Controllers;

use App\Models\Autores;
use Illuminate\Http\Request;

class AutoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $autores=Autores::all();
        return view('autores.index',compact('autores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('autores.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request);
       
        $autor = Autores::create(['nombre' => $request->input('nombre'),
                                'apellidoPaterno' => $request->input('apellidoPaterno'),
                                'apellidoMaterno' => $request->input('apellidoMaterno')]);
        
        return redirect()->route('autores.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Autores  $autores
     * @return \Illuminate\Http\Response
     */
    public function show(Autores $autores)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Autores  $autores
     * @return \Illuminate\Http\Response
     */
    public function edit(Autores $autore)
    {
            return view('autores.edit',compact('autore'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Autores  $autores
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Autores $autore)
    {
        $autore->update(['nombre' => $request->input('nombre'),
                                'apellidoPaterno' => $request->input('apellidoPaterno'),
                                'apellidoMaterno' => $request->input('apellidoMaterno')]);
        
        return redirect()->route('autores.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Autores  $autores
     * @return \Illuminate\Http\Response
     */
    public function destroy(Autores $autore)
    {
        $autore->delete();
        return redirect()->route('autores.index');
    }
}
