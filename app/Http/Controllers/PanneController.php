<?php

namespace App\Http\Controllers;

use App\Panne;
use App\Camion;
use Illuminate\Http\Request;

class PanneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexPanne()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createPanne()
    {
        $camions = Camion::all();
        return view('pannes.addPanne', ['camions' => $camions]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storePanne(Request $request)
    {
        $params = $request->except(['_token']);

        $panne = new Panne();
        $panne->camion_id = $params['camion'];
        $panne->pannes    = $params['description'];
        $panne->montant   = $params['montant'];
        $panne->save();

        return redirect('/showPanne');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Panne  $panne
     * @return \Illuminate\Http\Response
     */
    public function showPanne(Panne $panne)
    {
        $pannes = Panne::all();
        return view('pannes.showPanne', ['pannes' => $pannes]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Panne  $panne
     * @return \Illuminate\Http\Response
     */
    public function editPanne(Panne $panne)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Panne  $panne
     * @return \Illuminate\Http\Response
     */
    public function updatePanne(Request $request, Panne $panne)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Panne  $panne
     * @return \Illuminate\Http\Response
     */
    public function destroyPanne(Panne $panne)
    {
        //
    }
}
