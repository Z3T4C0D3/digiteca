<?php

namespace App\Http\Controllers;

use App\Models\Libros;
use Illuminate\Http\Request;
use App\Models\Categorias;
use App\Models\Editoriales;
use App\Models\Autores;
use App\Models\LibrosAutores;
use App\Models\Ejemplares;
class LibrosController extends Controller
{
    function __construct()
    {
         $this->middleware('permission:ver-libro|crear-libro|editar-libro|borrar-libro', ['only' => ['index']]);
         $this->middleware('permission:crear-libro', ['only' => ['create','store']]);
         $this->middleware('permission:editar-libro', ['only' => ['edit','update']]);
         $this->middleware('permission:borrar-libro', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function welcome(){
        $libros = Libros::all();
        return view('libros.welcome', compact('libros'));
    }
    public function index()
    {
        $libros = Libros::all();
        return view('libros.index', compact('libros'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorias=Categorias::all();
        $editoriales=Editoriales::all();
        $autores=Autores::all();
        return view('libros.create',compact("categorias","editoriales","autores"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());
        $libro=Libros::Create($request->all());


        foreach ($request->idAutor as $autor) {
            //dd($autor);
            $asigna_autor=LibrosAutores::Create(['idLibro'=>$libro->id,
                        'idAutor'=>$autor]);
        }

        for($i=1;$i<=$request->num_copia;$i++){
            Ejemplares::Create(['libros_id'=>$libro->id,'num_copia'=>$i,]);
        }

        return redirect()->route('libros.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Libros  $libros
     * @return \Illuminate\Http\Response
     */
    public function show(Libros $libros)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Libros  $libros
     * @return \Illuminate\Http\Response
     */
    public function edit(Libros $libro)
    {
        $categorias=Categorias::all();
        $editoriales=Editoriales::all();
        $autores=Autores::all();
        return view('libros.edit', compact('libro','categorias','editoriales','autores'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Libros  $libros
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Libros $libro)
    {
        $libro->update(['Titulo' => $request->input('Titulo'),
                        'Codigo'=>$request->input('Codigo'),
                        'idCategoria'=>$request->input('idCategoria'),
                        'idEditorial'=>$request->input('idEditorial')]);
        return redirect()->route('libros.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Libros  $libros
     * @return \Illuminate\Http\Response
     */
    public function destroy(Libros $libro)
    {
        $libro->delete();
        return redirect()->route('libros.index');
    }
}
