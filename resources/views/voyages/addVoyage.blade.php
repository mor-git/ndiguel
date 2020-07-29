@extends('layouts.layout')

@section('contenu')

    <!-- ============================================================== -->
    <!-- wrapper  -->
    <!-- ============================================================== -->
    <div class="dashboard-wrapper">
        <div class="container-fluid  dashboard-content">
            <!-- ============================================================== -->
            <!-- pageheader -->
            <!-- ============================================================== -->
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="page-header">
                        <h2 class="pageheader-title">Voyage </h2>
                        <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
                        <div class="page-breadcrumb">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                    <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Forms</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Form Validations</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- end pageheader -->
            <!-- ============================================================== -->        
        <div class="row">
            <!-- ============================================================== -->
            <!-- valifation types -->
            <!-- ============================================================== -->
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="card">
                    <h5 class="card-header">Enrégistrement Voyage</h5>
                    <div class="card-body">
                        <form method="post" action="{{ url('/addVoyage') }}" id="validationform" data-parsley-validate="" novalidate="">
                            <input type="hidden" value="{{csrf_token()}}" name="_token" id="token" />
                            
                            <div class="form-group row">
                                <label class="col-12 col-sm-3 col-form-label text-sm-right" for="input-select">Matricule</label>
                                <select name="camion" class="form-control col-12 col-sm-9 col-lg-6" id="input-select">
                                    <option>Matricule voiture</option>
                                    @foreach($camions as $camion)
                                    <option value="{{ $camion->id}}">{{ $camion->matricule}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group row">
                                <label class="col-12 col-sm-3 col-form-label text-sm-right">Nombre BL</label>
                                <div class="col-12 col-sm-8 col-lg-6">
                                    <input required="" name="nombreBL" type="number" min="6" max="100" placeholder="Nombre de voyage" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-12 col-sm-3 col-form-label text-sm-right">Destination</label>
                                <div class="col-12 col-sm-8 col-lg-6">
                                    <input type="text" name="destination" required="" data-parsley-minlength="6" placeholder="Destination." class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-12 col-sm-3 col-form-label text-sm-right">Produits</label>
                                <div class="col-12 col-sm-8 col-lg-6">
                                    <input type="text" name="produit" required="" data-parsley-maxlength="6" placeholder="Produit Chargé." class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-12 col-sm-3 col-form-label text-sm-right">Quantite</label>
                                <div class="col-12 col-sm-8 col-lg-6">
                                    <input type="text" name="quantite" required="" data-parsley-length="[5,10]" placeholder="Quantité chargée en (Tonne)" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-12 col-sm-3 col-form-label text-sm-right">Prix Unitaire</label>
                                <div class="col-12 col-sm-8 col-lg-6">
                                    <input type="text" name="prixUnitaire" required="" data-parsley-min="6" placeholder="Prix Unitaire en Fcfa" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-12 col-sm-3 col-form-label text-sm-right">Carburant</label>
                                <div class="col-12 col-sm-8 col-lg-6">
                                    <input type="text" name="carburant" required="" data-parsley-max="6" placeholder="Carburant en Litre" class="form-control">
                                </div>
                            </div>
                            
                            <div class="form-group row">
                                <label class="col-12 col-sm-3 col-form-label text-sm-right">Frais</label>
                                <div class="col-12 col-sm-8 col-lg-6">
                                    <input data-parsley-type="url" type="url" name="frais" required="" placeholder="Frais en Fcfa" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-12 col-sm-3 col-form-label text-sm-right">Pont Bascule</label>
                                <div class="col-12 col-sm-8 col-lg-6">
                                    <input type="text" name="pontBascule" required="" data-parsley-max="6" placeholder="Payement Pont bascule Fcfa." class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-12 col-sm-3 col-form-label text-sm-right">Rapido</label>
                                <div class="col-12 col-sm-8 col-lg-6">
                                    <input type="text" name="rapido" required="" data-parsley-max="6" placeholder="Payement Rapido en Fcfa." class="form-control">
                                </div>
                            </div>
                            <div class="form-group row text-right">
                                <div class="col col-sm-10 col-lg-9 offset-sm-1 offset-lg-0">
                                    <button type="submit" class="btn btn-space btn-primary">Valider</button>
                                    <button class="btn btn-space btn-secondary">Annuler</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- end valifation types -->
            <!-- ============================================================== -->
        </div>
        
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- end main wrapper --> 
    <!-- ============================================================== -->
    @endsection
