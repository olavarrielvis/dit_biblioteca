<?php

namespace App\Http\Controllers;

use App\Libro;
use App\Categoria;
use Illuminate\Http\Request;

class LibroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $libros = Libro::all();
        $categorias =  Categoria::all();
        return view('libro.index', compact('libros','categorias') );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorias =  Categoria::all();
        return view('libro.create', compact('categorias'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datos = request()->except('_token');

        Libro::insert($datos); 
        return redirect("libros");
        //return json_encode($datos);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Libro  $libro
     * @return \Illuminate\Http\Response
     */
    public function show( $categoria)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Libro  $libro
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        $libro = Libro::findOrFail($id);
        $categorias =  Categoria::all();
        return view('libro.edit', compact('libro','categorias'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Libro  $libro
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        $datos = request()->except(['_token','_method']);
        Libro::where("id","=",$id)->update($datos);
        return redirect("libros");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Libro  $libro
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        Libro::destroy($id);
        return redirect("libros");
    }


    public function filtro(Request $r)
    {
        $libros = Libro::all();
        if($r->input("categoria_id") == 0)
            $libros = Libro::all();
        else
            $libros = Libro::where("categoria_id","=", $r->input("categoria_id"))->get();

        $seleccionado = $r->input("categoria_id");
        $categorias =  Categoria::all();
        return view('libro.index', compact('libros','categorias','seleccionado') );
    }
}
