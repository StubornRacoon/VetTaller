<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Receta;

class RecetaCrud extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('recetaLayouts.index',[
          'Recetas' => Receta::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('recetaLayouts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $receta = new Pet();
      $receta ->nombre =$request->get('id');
      $receta->save();

      return redirect('recetaLayouts.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $receta = Recetas::findOrFail($id);
        return view('recetaLayouts.show',[
          'Recetas' => $receta
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $receta = Recetas::findOrFail($id);
        return view('recetaLayouts.edit',[
          'Recetas' => $receta
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $receta = Receta::findOrFail($id);
        $receta ->id = $request->get('id');
        $receta->save();

        return redirect('recetaLayouts.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $receta = Receta::findOrFail($id);
        $receta->delete();
        return redirect('recetaLayouts.index');
    }
}
