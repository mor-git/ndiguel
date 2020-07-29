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
                        <h2 class="pageheader-title">Panne </h2>
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
                    <h5 class="card-header">Enrégistrement Panne</h5>
                    <div class="card-body">
                        <form method="post" action="{{url('/addPanne')}}" id="validationform" data-parsley-validate="" novalidate="">
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
                                <label class="col-12 col-sm-3 col-form-label text-sm-right">Description Panne</label>
                                <div class="col-12 col-sm-8 col-lg-6">
                                    <textarea name="description" required="" class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-12 col-sm-3 col-form-label text-sm-right">Montant</label>
                                <div class="col-12 col-sm-8 col-lg-6">
                                    <input type="text" name="montant" required="" data-parsley-maxlength="6" placeholder="Montant dépensé en Fcfa." class="form-control">
                                </div>
                            </div>
                            <div class="form-group row text-right">
                                <div class="col col-sm-10 col-lg-9 offset-sm-1 offset-lg-0">
                                    <button type="submit" class="btn btn-space btn-primary">Valider</button>
                                    <button type="reset" class="btn btn-space btn-secondary">Annuler</button>
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
