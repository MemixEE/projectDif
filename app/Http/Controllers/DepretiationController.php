<?php

namespace App\Http\Controllers;

use App\Depretiation;
use Illuminate\Http\Request;

class DepretiationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $depreciations = Depretiation::latest()->paginate(5);

      return view('depreciaciones.index',compact('depreciations'))
          ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('depreciaciones.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Depretiation::create($request->all());

      return redirect()->route('depretiations.index')
                     ->with('success','depreciaiones created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Depretiation  $depretiation
     * @return \Illuminate\Http\Response
     */
    public function show(Depretiation $depretiation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Depretiation  $depretiation
     * @return \Illuminate\Http\Response
     */
    public function edit(Depretiation $depretiation)
    {
        return view('depreciaciones.edit',compact('depretiation'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Depretiation  $depretiation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Depretiation $depretiation)
    {

        $depretiation->update([
          'id_activofijo'=>request('id_activofijo'),
          'tipo'=>request('tipo'),
          'descripcion'=>request('descripcion'),
          'montoOriginal'=>request('montoOriginal'),
          'vidaUtil'=>request('vidaUtil'),
          'porcenjate'=>request('porcenjate'),
          'total'=>request('total'),
          'porDepreciar'=>request('porDepreciar'),
          'depreciacionAc'=>request('depreciacionAc')
        ]);

      return redirect()->route('depretiations.index')
            ->with('success','depreciaciones update successfully');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Depretiation  $depretiation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Depretiation $depretiation)
    {
         $depretiation->delete();

        return redirect()->route('depretiations.index')
                        ->with('success','Product deleted successfully');
    }
}
