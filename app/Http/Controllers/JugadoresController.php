<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JugadoresController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('jugadores.index')
            ->with('arrayJugadores', $this->arrayJugadores);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        return view('jugadores.show', array('id' => $id));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('jugadores.edit', array('id' => $id));
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

     private $arrayJugadores = array(
        array(
            'foto' => 'http://ximg.es/100x100/100/000/fff&text=jugador1',
            'nombre' => 'Pepito1',
            'posicion' => 'volante',
            'numero' => 10,
            'equipo' => 'Equipo1',
        ),
        array(
            'foto' => 'http://ximg.es/100x100/100/000/fff&text=jugador1',
            'nombre' => 'Pepito2',
            'posicion' => 'portero',
            'numero' => 10,
            'equipo' => 'Equipo1',
        ),
        array(
            'foto' => 'http://ximg.es/100x100/100/000/fff&text=jugador1',
            'nombre' => 'Pepito3',
            'posicion' => 'delantero',
            'numero' => 10,
            'equipo' => 'Equipo1',
        ),
        array(
            'foto' => 'http://ximg.es/100x100/100/000/fff&text=jugador1',
            'nombre' => 'Pepito4',
            'posicion' => 'defensa',
            'numero' => 10,
            'equipo' => 'Equipo1',
        )
    );
}
