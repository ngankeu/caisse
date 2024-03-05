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
      <a href="{{ route('add.employee') }}" class="btn btn-primary rounded-pill waves-effect waves-light">Ajouter un employé </a>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Tous les employés</h4>
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
                                <th>Photo</th>
                                <th>Nom</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Salaire</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                    
    
        <tbody>
        	@foreach($employee as $key=> $item)
            <tr>
                <td>{{ $key+1 }}</td>
                <td> <img src="{{ asset($item->image) }}" style="width:50px; height: 40px;"> </td>
                <td>{{ $item->name }}</td>
                <td>{{ $item->email }}</td>
                <td>{{ $item->phone }}</td>
                {{--@if(Auth::user()->can('employee.edit'))--}}
                <td>{{ str_replace(',', '.', number_format($item->salary, 0)) }} F CFA</td>
                {{--@endif--}}
                <td>
{{--   @if(Auth::user()->can('employee.edit'))                  --}}
<a href="{{ route('edit.employee',$item->id) }}" class="badge bg-success">Modifier</a>
{{--@endif--}}

 {{--@if(Auth::user()->can('employee.delete'))--}}
<a href="{{ route('delete.employee',$item->id) }}" class="badge bg-danger" id="delete">Effacer</a>
{{--@endif--}}
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