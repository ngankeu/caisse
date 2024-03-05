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
                                    <h4 class="page-title">Salaire du mois dernier</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                     
                    
                    <table id="basic-datatable" class="table dt-responsive nowrap w-100">
                        <thead>
                            <tr>
                                <th>Sl</th>
                                <th>Image</th>
                                <th>Nom</th>

                                <th>Salaire</th>
                                <th>Statut</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                    
    
        <tbody>
        	@foreach($paidsalary as $key=> $item)
            <tr>
                <td>{{ $key+1 }}</td>
                <td> <img src="{{ asset($item->employee->image) }}" style="width:50px; height: 40px;"> </td>
                <td>{{ $item['employee']['name'] }}</td>

                <td>{{ number_format($item['employee']['salary'], 0, ',', ' ') }} F CFA</td>

                <td><span class="badge bg-success"> Complètement payé </span> </td>
                <td>
                    <a href="{{ route('month.payHistoryDetail', ['id' => $item->id]) }}" class="badge bg-success">Historique</a>
                    <a href="{{ route('delete.history.salary',$item->id) }}" class="badge bg-danger" id="delete">Effacer</a>

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