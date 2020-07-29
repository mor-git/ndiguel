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
                        <h2 class="pageheader-title">Liste des Matricules</h2>
                        <p class="pageheader-text">Nulla euismod urna eros, sit amet scelerisque torton lectus vel mauris facilisis faucibus at enim quis massa lobortis rutrum.</p>
                        <div class="page-breadcrumb">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Liste des Matricules</li>
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
            <div style="text-align : right; margin-right : 12px;"><a href="{{ url('/camion')}}" class="btn btn-outline-primary">Nouveau Matricule</a></div><br>
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
                                        <th class="border-0">Carte Grise</th>
                                        <th class="border-0">Assurance</th>
                                        <th class="border-0">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($camions as $camion)
                                    <tr>
                                        <td>1</td>
                                        <td>{{$camion->matricule}}</td>
                                        @if($camion)
                                        <td><a href="{{ url('')}}">Date Carte Grise</a></td>
                                        @else
                                        <td style="background-color: red;"><a href="{{ url('')}}">Date Carte Grise</a></td>
                                        @endif
                                        <td><a href="{{ url('')}}">Date Assurance</a></td>
                                        <td>
                                            <a href="" >
                                                <i class='fas fa-edit' style='font-size:20px;color:blue;'></i>
                                            </a>&nbsp;&nbsp;
                                            <a href="" >
                                                <i class='fas fa-trash-alt' style='font-size:20px;color:red'></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                                    <tr>
                                        <td colspan="12"></a></td>
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
    