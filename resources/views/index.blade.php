@extends('admin_dashboard')
@section('admin')

@php
 $date = date('d-F-Y');
 $today_paid = App\Models\Order::where('order_date',$date)->sum('pay');

 $total_paid = App\Models\Order::sum('pay');
 $total_due = App\Models\Order::sum('due'); 

 $completeorder = App\Models\Order::where('order_status','complete')->get(); 

  $pendingorder = App\Models\Order::where('order_status','pending')->get(); 

@endphp

 <div class="content">

                    <!-- Start Content-->
                    <div class="container-fluid">
                        
                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <div class="page-title-right">
                                        <form class="d-flex align-items-center mb-3">
                                            <div class="input-group input-group-sm">
                                                <input type="text" class="form-control border-0" id="dash-daterange">
                                                <span class="input-group-text bg-blue border-blue text-white">
                                                    <i class="mdi mdi-calendar-range"></i>
                                                </span>
                                            </div>
                                            <a href="javascript: void(0);" class="btn btn-blue btn-sm ms-2">
                                                <i class="mdi mdi-autorenew"></i>
                                            </a>
                                            <a href="javascript: void(0);" class="btn btn-blue btn-sm ms-1">
                                                <i class="mdi mdi-filter-variant"></i>
                                            </a>
                                        </form>
                                    </div>
                                    <h4 class="page-title">Tableau de bord</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 

<div class="row">
<div class="col-md-6 col-xl-3">
    <div class="widget-rounded-circle card">
        <div class="card-body">
            <div class="row">
                <div class="col-6">
                    <div class="avatar-lg rounded-circle bg-primary border-primary border shadow">
                        <i class="fe-heart font-22 avatar-title text-white"></i>
                    </div>
                </div>
                <div class="col-">
                    <div class="text-end">
                        <h3 class="text-dark mt-1">
                            <span data-plugin="counterup">{{ str_replace(',', '.', number_format($total_paid, 0)) }}</span>FCFA

                        </h3>
                        <p class="text-muted mb-1 text-truncate">Total payé </p>
                    </div>
                </div>
            </div> <!-- end row-->
        </div>
    </div> <!-- end widget-rounded-circle-->
</div> <!-- end col-->

<div class="col-md-6 col-xl-3">
    <div class="widget-rounded-circle card">
        <div class="card-body">
            <div class="row">
                <div class="col-6">
                    <div class="avatar-lg rounded-circle bg-success border-success border shadow">
                        <i class="fe-shopping-cart font-22 avatar-title text-white"></i>
                    </div>
                </div>
                <div class="col-8                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                   ">
                      <div class="text-end">
                        <h3 class="text-dark mt-1">
                            <span data-plugin="counterup">{{ str_replace(',', '.', number_format($total_due, 0)) }}</span>FCFA
                        </h3>
                        <p class="text-muted mb-1 text-truncate">Total exigible </p>
                    </div>
                </div>
            </div> <!-- end row-->
        </div>
    </div> <!-- end widget-rounded-circle-->
</div> <!-- end col-->

<div class="col-md-6 col-xl-3">
    <div class="widget-rounded-circle card">
        <div class="card-body">
            <div class="row">
                <div class="col-6">
                    <div class="avatar-lg rounded-circle bg-info border-info border shadow">
                        <i class="fe-bar-chart-line- font-22 avatar-title text-white"></i>
                    </div>
                </div>
                <div class="col-6">
                   <div class="text-end">
                        <h3 class="text-dark mt-1"> <span data-plugin="counterup">{{ count($completeorder)  }}</span></h3>
                        <p class="text-muted mb-1 text-truncate">Complète </p>
                    </div>
                </div>
            </div> <!-- end row-->
        </div>
    </div> <!-- end widget-rounded-circle-->
</div> <!-- end col-->

<div class="col-md-6 col-xl-3">
    <div class="widget-rounded-circle card">
        <div class="card-body">
            <div class="row">
                <div class="col-6">
                    <div class="avatar-lg rounded-circle bg-warning border-warning border shadow">
                        <i class="fe-eye font-22 avatar-title text-white"></i>
                    </div>
                </div>
                <div class="col-6">
                   <div class="text-end">
                        <h3 class="text-dark mt-1"> <span data-plugin="counterup">{{ count($pendingorder)  }}</span></h3>
                        <p class="text-muted mb-1 text-truncate">En attente </p>
                    </div>
                </div>
            </div> <!-- end row-->
        </div>
    </div> <!-- end widget-rounded-circle-->
</div> <!-- end col-->
</div>
                        <!-- end row-->

                        <div class="row">
                            

                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body pb-2">
                                        <div class="float-end d-none d-md-inline-block">
                                            <div class="btn-group mb-2">
                                                <button type="button" class="btn btn-xs btn-light">Aujourd'hui</button>
                                                <button type="button" class="btn btn-xs btn-light">Hebdomadaire</button>
                                                <button type="button" class="btn btn-xs btn-secondary">Mensuelle</button>
                                            </div>
                                        </div>
    
                                        <h4 class="header-title mb-3">Analyse des ventes</h4>
    
                                        <div dir="ltr">
                                            <div id="sales-analytics" class="mt-4" data-colors="#1abc9c,#4a81d4"></div>
                                        </div>
                                    </div>
                                </div> <!-- end card -->
                            </div> <!-- end col-->
                        </div>
                        <!-- end row -->


                        <!-- end row -->
                        
                    </div> <!-- container -->

                </div> <!-- content -->
@endsection