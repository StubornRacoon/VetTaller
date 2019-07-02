<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;
class ClienteCrud extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //idem as the description on PedCrud
        return view('clienteLayouts.index',[
          'Clientes' => Cliente::all()
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
      $cliente = new Cliente();
      $cliente ->id=$request->get('id');
      $cliente ->nombre =$request->get('nombre');
      $cliente->edad =$request->get('edad');
      $cliente ->numero =$request->get('numero');
      $cliente->correo =$request->get('correo');
      $cliente->save();

      return redirect('clienteLayouts.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cliente = Cliente::findOrFail($id);
        return view('clienteLayouts.show',[
        'Clientes' => $cliente
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
      $cliente = Cliente::findOrFail($id);
      return view('clienteLayouts.edit',[
      'Clientes' => $cliente
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
      $cliente = Cliente::findOrFail($id);
      $cliente ->id=$request->get('id');
      $cliente ->nombre =$request->get('nombre');
      $cliente->edad =$request->get('edad');
      $cliente->numero =$request->get('numero');
      $cliente->correo =$request->get('correo');
      $cliente->save();

      return redirect('clienteLayouts.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $cliente = Cliente::findOrFail($id);
      $cliente->delete();
      return redirect('clienteLayouts.index');
    }
}
