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
      <a href="{{ route('add.advance.salary') }}" class="btn btn-primary rounded-pill waves-effect waves-light">Ajouter un salaire anticipé</a>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Tous les salaires anticipés</h4>
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
                                <th>Mois</th>
                                <th>Salaire</th>
                                <th>Avance</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                    
    
        <tbody>
        	@foreach($salary as $key=> $item)
            <tr>
                <td>{{ $key+1 }}</td>
                <td> <img src="{{ asset($item->employee->image) }}" style="width:50px; height: 40px;"> </td>
                <td>{{ $item['employee']['name'] }}</td>
                <td>{{ $item->month }}</td>
                <td>{{ str_replace(',', '.', number_format($item['employee']['salary'], 0)) }} F CFA</td>


                <td>

                    @if($item->advance_salary == NULL )
                        <p>Aucune avance</p>
                    @else
                        {{ str_replace(',', '.', number_format($item->advance_salary, 0)) }} F CFA
                    @endif

                  </td>
                <td>
<a href="{{ route('edit.advance.salary',$item->id) }}" class="badge bg-success">Modifier</a>
<a href="{{ route('delete.advance.salary',$item->id) }}" class="badge bg-danger" id="delete">Effacer</a>

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