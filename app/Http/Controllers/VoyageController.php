<?php

namespace App\Http\Controllers;

use App\Voyage;
use App\Camion;
use Illuminate\Http\Request;

class VoyageController extends Controller
{
    /**  
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexVoyage()
    {
        $voyages = Voyage::all();
        return view('index', ['voyages' => $voyages]);
    }

    public function infosVoyages()
    {
        $voyages = Voyage::all();
        return view('voyages.infoVoyage', ['voyages' => $voyages]);
    }
    public function infoVoyage($id)
    {
        $voyage = Voyage::find($id);
        return view('voyages.infoPourUneVoyage', ['voyage' => $voyage]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createVoyage()
    {
        $camions = Camion::all();
        return view('voyages.addVoyage',['camions' => $camions]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeVoyage(Request $request)
    {
        $params = $request->except(['_token']);
        
        $voyage = new Voyage();
        $voyage->camion_id = $params['camion'];
        $voyage->nombreBL = $params['nombreBL'];
        $voyage->destination = $params['destination'];
        $voyage->produit = $params['produit'];
        $voyage->quantite = $params['quantite'];
        $voyage->prixUnitaire = $params['prixUnitaire'];
        $voyage->carburant = $params['carburant'];
        $voyage->frais = $params['frais'];
        $voyage->pontBascule = $params['pontBascule'];
        $voyage->rapido = $params['rapido'];
       
        if($params['quantite'] !== null && $params['prixUnitaire'] !== null)
        {
            $quantite = $params['quantite'];
            $prixUnitaire = $params['prixUnitaire'];
            $montantBrute = $quantite * $prixUnitaire;
            $retenues = $montantBrute * 5/100;
            $net = $montantBrute - $retenues;


            $voyage->montantBrute = $montantBrute;
            $voyage->retenues = $retenues;
            $voyage->net = $net;
       }
        //dd($voyage);
        $voyage->save();
        return redirect('/showVoyage');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Voyage  $voyage
     * @return \Illuminate\Http\Response
     */
    public function showVoyage(Voyage $voyage)
    {
        $voyages = Voyage::all();
        $camions  = Camion::all();
        return view('voyages.showVoyage', ['voyages' => $voyages, 'camions' => $camions]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Voyage  $voyage
     * @return \Illuminate\Http\Response
     */
    public function editVoyage(Voyage $voyage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Voyage  $voyage
     * @return \Illuminate\Http\Response
     */
    public function updateVoyage(Request $request, Voyage $voyage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Voyage  $voyage
     * @return \Illuminate\Http\Response
     */
    public function destroy(Voyage $voyage)
    {
        //
    }
}
