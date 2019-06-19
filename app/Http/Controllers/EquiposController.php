<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EquiposController extends Controller
{
    private $arrayEquipos = array(
        array(
            'nombre' => 'Equipo1',
            'dt' => 'D.T. 1',
            'escudo' => 'http://ximg.es/200x300/000/fff&text=equipo1'
             ),
      array(
            'nombre' => 'Equipo2',
            'dt' => 'D.T. 2',
            'escudo' => 'http://ximg.es/200x300/000/fff&text=equipo2'
             ),
      array(
            'nombre' => 'Equipo3',
            'dt' => 'D.T. 3',
            'escudo' => 'http://ximg.es/200x300/000/fff&text=equipo3'
             ),
      array(
            'nombre' => 'Equipo4',
            'dt' => 'D.T. 4',
            'escudo' => 'http://ximg.es/200x300/000/fff&text=equipo4'
             ),
    
    );
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('equipos.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('equipos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('equipos.show', array('id' => $id));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('equipos/edit')->with('id', $id);
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
