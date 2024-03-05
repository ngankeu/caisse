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
      <a href="{{ route('add.advance.salary') }}" class="btn btn-primary rounded-pill waves-effect waves-light">Ajouter un salaire anticipé </a>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Les salaires à régler...</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">{{ date("F Y") }}</h4>
                    
                    <table id="basic-datatable" class="table dt-responsive nowrap w-100">
                        <thead>
                            <tr>
                                <th>Sl</th>
                                <th>Image</th>
                                <th>Nom</th>
                                <th>Mois</th>
                                <th>Salaire</th>
                                <th>Avance</th>
                                <th>Débit</th>
                                <th>Action</th>
                            </tr>
                        </thead>


                        <tbody>
                        @foreach($employee as $key => $item)
                            <tr>
                                <td>{{ $key+1 }}</td>
                                <td> <img src="{{ asset($item->image) }}" style="width:50px; height: 40px;"> </td>
                                <td>{{ $item->name }}</td>
                                <td><span class="badge bg-info"> {{ date("F", strtotime('-1 month')) }} </span> </td>
                                <td> {{ str_replace(',', '.', number_format($item->salary, 0)) }} F CFA </td>
                                <td>
                                    @if($item->advance)
                                        {{ str_replace(',', '.', number_format($item->advance->advance_salary, 0)) }} F CFA
                                    @else
                                        <p>Aucune avance</p>
                                    @endif
                                </td>

                                <td>
                                    @php
                                        $amount = $item->salary - ($item['advance']['advance_salary'] ?? 0);
                                    @endphp
                                    <strong class="badge bg-primary">{{ str_replace(',', '.', number_format($amount, 0)) }} F CFA </strong>

                                </td>
                                <td>
                                    <a href="{{ route('pay.now.salary',$item->id) }}" class="badge bg-danger">Payer Maintenant</a>
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