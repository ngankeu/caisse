@extends('admin_dashboard')
@section('admin')

 <div class="content">

                    <!-- Start Content-->
                    <div class="container-fluid">
                        
                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
      <a href="{{ route('add.expense') }}" class="btn btn-primary rounded-pill waves-effect waves-light">Ajouter une dépense </a>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Dépense d'aujourd'hui</h4>
                                </div>
                            </div>
                        </div>     
 

                        <!-- end page title --> 

    @php
    $date = date("d-m-Y");
    $expense = App\Models\Expense::where('date',$date)->sum('amount');

    @endphp


    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                     
           <h4 class="header-title"> Dépense d'aujourd'hui </h4>
                    <h4 style="color:white; font-size: 30px;" align="center"> Total : {{ str_replace(',', '.', number_format($totalExpense, 0)) }} F CFA</h4>


                    <table id="basic-datatable" class="table dt-responsive nowrap w-100">
                        <thead>
                            <tr>
                                <th>Sl</th>
                                <th>Détails</th>
                                <th>Montant</th>
                                <th>Date</th>
                                <th>Année</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                    
    
        <tbody>
        	@foreach($today as $key=> $item)
            <tr>
                <td>{{ $key+1 }}</td>
                <td>{{ $item->details }}</td>
                <td>{{ str_replace(',', '.', number_format($item->amount, 0)) }} F CFA</td> <!-- Formatage sans décimales, avec remplacement de la virgule par un point -->
                <td>{{ $item->date }}</td>
                <td>{{ $item->year }}</td> 
                <td>
<a href="{{ route('edit.expense',$item->id) }}" class="btn btn-blue rounded-pill waves-effect waves-light">Modifier</a>

                </td>
            </tr>
            @endforeach
        </tbody>
                    </table>

                </div> <!-- end card body-->
            </div> <!-- end card -->
        </div><!-- end col-->
    </div>
    <!-- end row-->


                      
                        
                    </div> <!-- container -->

                </div> <!-- content -->


@endsection 