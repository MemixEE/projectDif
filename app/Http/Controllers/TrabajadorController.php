<?php

namespace App\Http\Controllers;

use App\Trabajador;
use Illuminate\Http\Request;

class TrabajadorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $traba = Trabajador::latest()->paginate(5);

        return view('trabajadors.index',compact('traba'))
            ->with('i', (request()->input('page', 1) - 1) * 5);    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('trabajadors.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

       $request->validate([
          'responsable' => 'required',
          'puesto' => 'required',
          'departamento' => 'required',
          'tipoDeContrato' => 'required',
      ]);

       Trabajador::create($request->all());

       return redirect()->route('trabajadores.index')
                      ->with('success','trabajador created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Trabajador  $trabajador
     * @return \Illuminate\Http\Response
     */
    public function show(Trabajador $trabajador)
    {

      return view('trabajadores.create');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Trabajador  $trabajador
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $trabajador = Trabajador::find($id);
      return view('trabajadors.edit',compact('trabajador'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Trabajador  $trabajador
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $trabajador = Trabajador::find($id);

        $trabajador->responsable = $request->get('responsable');
        $trabajador->puesto = $request->get('puesto');
        $trabajador->departamento = $request->get('departamento');
        $trabajador->tipoDeContrato = $request->get('tipoDeContrato');
        $trabajador->save();
        return redirect()->route('trabajadores.index')
              ->with('success','Trabajador update successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Trabajador  $trabajador
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $trabajador = Trabajador::find($id);
      $trabajador->delete();
     return redirect()->route('trabajadores.index')
           ->with('success','Trabajador deleted successfully');
    }
}
