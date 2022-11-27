<?php

namespace App\Http\Controllers;

use App\Models\Editoriales;
use Illuminate\Http\Request;

class EditorialesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $editoriales=Editoriales::all();
        return view('editoriales.index',compact('editoriales'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('editoriales.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Editoriales::create(['nombreEditorial' => $request->input('nombreEditorial'),]);
        return redirect()->route('editoriales.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Editoriales  $editoriales
     * @return \Illuminate\Http\Response
     */
    public function show(Editoriales $editoriales)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Editoriales  $editoriales
     * @return \Illuminate\Http\Response
     */
    public function edit(Editoriales $editoriale)
    {
        return view('editoriales.edit',compact('editoriale'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Editoriales  $editoriales
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Editoriales $editoriale)
    {
        $editoriale->update(['nombreEditorial' => $request->input('nombreEditorial'),]);
        return redirect()->route('editoriales.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Editoriales  $editoriales
     * @return \Illuminate\Http\Response
     */
    public function destroy(Editoriales $editoriale)
    {
        $editoriale->delete();
        return redirect()->route('editoriales.index');
    }
}
