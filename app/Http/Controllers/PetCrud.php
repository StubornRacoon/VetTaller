<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pet;

class PetCrud extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /*
        * HACER ESTO PARA COMUNICAR UNA VISTA A UNA BASE DE DATOS, "index"(ES UNA RUTA) ES EL NOMBRE DE UN HTML CON EL CRUD QUE MODIFICARA LOS DATOS
        */
        return view('petLayouts.index',[
        'Pets' => Pet::all()
      ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('petLayouts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $pet = new Pet();
      $pet ->nombre =$request->get('nombre');
      $pet->edad =$request->get('edad');
      $pet ->raza =$request->get('raza');
      $pet->familia =$request->get('familia');
      $pet->cliente_id =$request->get('cliente_id');
      $pet->save();

      return redirect('petLayouts.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //PARA VISTA PARA MOSTRAR DATOS
        $pet = Pet::findOrFail($id);
        return view('petLayouts.show',[
        'Pets' => $pet
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
        $pet = Pet::findOrFail($id);
        return view('petLayouts.edit',[
        'Pets' => $pet
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
        $pet = Pet::findOrFail($id);
        $pet ->nombre =$request->get('nombre');
        $pet->edad =$request->get('edad');
        $pet ->raza =$request->get('raza');
        $pet->familia =$request->get('familia');
        $pet->cliente_id =$request->get('cliente_id');
        $pet->save();

        return redirect('petLayouts.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pet = Pet::findOrFail($id);
        $pet->delete();
        return redirect('petLayouts.index');
    }
}
