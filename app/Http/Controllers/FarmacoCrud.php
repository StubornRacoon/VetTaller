<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Farmaco;

class FarmacoCrud extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      return view('farmacoLayouts.index',[
        'Farmacos'=> Farmaco::all()
      ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('farmacoLayouts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $farmaco = new Pet();
      $farmaco ->id = $request->get('id');
      $farmaco ->nombre =$request->get('nombre');
      $farmaco->codigo =$request->get('codigo');
      $farmaco ->tipo =$request->get('tipo');
      $farmaco->cantidad =$request->get('cantidad');
      $farmaco->save();

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
        $farmaco = Farmaco::findOrFail($id);
        return view('farmacoLayouts.show',[
        'Farmacos' => $farmaco
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $farmaco = Farmaco::findOrFail($id);
        return view('farmacoLayouts.edit',[
          'Farmacos' => $farmaco
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
      $farmaco = Farmaco::findOrFail($id);
      $farmaco ->id =$request->get('id');
      $farmaco->nombre =$request->get('nombre');
      $farmaco ->codigo =$request->get('codigo');
      $farmaco->tipo =$request->get('tipo');
      $farmaco->cantidad =$request->get('cantidad');
      $farmaco->save();

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
      $farmaco = Farmaco::findOrFail($id);
      $farmaco->delete();
      return redirect('farmacoLayouts.index');
    }
}
