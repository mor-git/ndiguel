<?php

namespace App\Http\Controllers;

use App\Camion;
use Illuminate\Http\Request;

class CamionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexCamion()
    {
        $camions = Camion::all();
        return view('camions.showCamion',['camions' => $camions]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createCamion()
    {
        return view('camions.addCamion');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeCamion(Request $request)
    {
        $matricule = $request->input('matricule');
        $camion = new Camion();
        $camion->matricule = $matricule;
        $camion->save();
        
        return redirect('/showCamions');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Camion  $camion
     * @return \Illuminate\Http\Response
     */
    public function showCamion(Camion $camion)
    {
        $camions = Camion::all();
        return view('camions.showCamion', ['camions' => $camions]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Camion  $camion
     * @return \Illuminate\Http\Response
     */
    public function editCamion(Camion $camion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Camion  $camion
     * @return \Illuminate\Http\Response
     */
    public function updateCamion(Request $request, Camion $camion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Camion  $camion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Camion $camion)
    {
        //
    }
}
