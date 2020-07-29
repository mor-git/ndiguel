@extends('layouts.layout')

@section('contenu')
<!-- ============================================================== -->
<!-- wrapper  -->
<!-- ============================================================== -->
<div class="dashboard-wrapper">
    <div class="dashboard-ecommerce">
        <div class="container-fluid dashboard-content ">
            <!-- ============================================================== -->
            <!-- pageheader  -->
            <!-- ============================================================== -->
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="page-header">
                        <h2 class="pageheader-title">Voyages Effectués</h2>
                        <p class="pageheader-text">Nulla euismod urna eros, sit amet scelerisque torton lectus vel mauris facilisis faucibus at enim quis massa lobortis rutrum.</p>
                        <div class="page-breadcrumb">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Liste des Voyages</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- end pageheader  -->
            <!-- ============================================================== -->

            <!-- ============================================================== -->
            <!-- recent orders  -->
            <!-- ============================================================== -->
            <div style="text-align : right; margin-right : 12px;">
                <a href="{{ url('/infos')}}" class="btn btn-outline-primary float-right">View Details</a>
            </div><br><br><br>
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="card">
                    <h5 class="card-header">Recent Orders</h5>
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class="bg-light">
                                    <tr class="border-0">
                                    <th class="border-0">#</th>
                                        <th class="border-0">Matricules</th>
                                        <th class="border-0">Nombre.BL</th>
                                        <th class="border-0">Destinations</th>
                                        <th class="border-0">Produits</th>
                                        <th class="border-0">Quantité</th>
                                        <th class="border-0">P.Unitaire</th>
                                        <th class="border-0">Montant.B</th>
                                        <!-- <th class="border-0">Retenues 5%</th> -->
                                        <th class="border-0">Net</th>
                                        <th class="border-0">Carburant</th>
                                        <th class="border-0">Frais</th> 
                                        <!-- <th class="border-0">Pont Bascule</th>
                                        <th class="border-0">Rapido</th> -->
                                    </tr>
                                </thead>
                                <tbody>
                                @if($voyages ?? '' )
                                @foreach($voyages as $voyage)
                                    <tr>
                                        <td>1</td>
                                        <td>{{ $voyage->camions->matricule }}</td>
                                        <td>{{ $voyage->nombreBL }}</td>
                                        <td>{{ $voyage->destination }}</td>
                                        <td>{{ $voyage->produit }}</td>
                                        <td>{{ $voyage->quantite }}</td>
                                        <td>{{ $voyage->prixUnitaire }}</td>
                                        <td>{{ $voyage->montantBrute }}</td>
                                        <!-- <td>{{ $voyage->retenues }}</td> -->
                                        <td>{{ $voyage->net }}</td>
                                        <td>{{ $voyage->carburant }}</td>
                                        <td>{{ $voyage->frais }}</td>
                                        <!-- <td>{{ $voyage->pontBascule }}</td>
                                        <td>{{ $voyage->rapido }}</td> -->
                                    </tr>
                                @endforeach
                                @endif
                                    <tr style="text-align : right;">
                                        <td colspan="12"><a href="#" ></a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- end recent orders  -->
            <!-- ============================================================== -->
    </div>
</div>
<!-- ============================================================== -->
<!-- end wrapper  -->
<!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- end main wrapper  -->
<!-- ============================================================== -->
@endsection
    