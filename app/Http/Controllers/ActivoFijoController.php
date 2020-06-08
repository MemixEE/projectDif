<?php

namespace App\Http\Controllers;

use App\ActivoFijo;
use Illuminate\Http\Request;

class ActivoFijoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $activoF = ActivoFijo::latest()->paginate(5);

        return view('activoFijo.home',compact('activoF'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('activofijo.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        ActivoFijo::create([
            'tipo'=>request('tipo'),
            'descripcion'=>request('descripcion'),
            'numSerie'=>request('numSerie'),
            'resguardo'=>request('resguardo'),
            'valorAdqui'=>request('valorAdquisitivo'),
            'verificado'=>request('verificado'),
            'id_trabajador'=>request('id_trabajador')
        ]);
        return redirect()->route('activoFijo.index')->with('succes','Añadido correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ActivoFijo  $activoFijo
     * @return \Illuminate\Http\Response
     */
    public function show(ActivoFijo $activoFijo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ActivoFijo  $activoFijo
     * @return \Illuminate\Http\Response
     */
    public function edit(ActivoFijo $activoFijo)
    {
        return view('activofijo.edit',compact('activoFijo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ActivoFijo  $activoFijo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ActivoFijo $activoFijo)
    {
        $activoFijo->update([
          'tipo'=>request('tipo'),
          'descripcion'=>request('descripcion'),
          'numSerie'=>request('numSerie'),
          'resguardo'=>request('resguardo'),
          'valorAdqui'=>request('valorAdquisitivo'),
          'verificado'=>request('verificado'),
          'id_trabajador'=>request('id_trabajador'),
        ]);
        return redirect()->route('activoFijo.index')->with('succes','Actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ActivoFijo  $activoFijo
     * @return \Illuminate\Http\Response
     */
    public function destroy(ActivoFijo $activoFijo)
    {
        $activoFijo->delete();
        return redirect()->route('activoFijo.index')->with('succes','Actualizado correctamente');
    }
}
