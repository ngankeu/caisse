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
      <a href="{{ route('add.roles.permission') }}" class="btn btn-primary rounded-pill waves-effect waves-light">Ajout des Rôles dans l'autorisation </a>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Autorisation de tous les rôles</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                     
                    
                    <table  class="table dt-responsive nowrap w-100">
                        <thead>
                            <tr>
                                <th>Sl</th>
                                <th>Nom des rôles </th>
                                <th>Nom de l'autorisation </th>
                                <th width="18%">Action</th>
                            </tr>
                        </thead>
                    
    
        <tbody>
        	@foreach($roles as $key=> $item)
            <tr>
                <td>{{ $key+1 }}</td> 
                <td>{{ $item->name }}</td>
                <td> 
                @foreach($item->permissions as $perm)
     <span class="badge rounded-pill bg-danger"> {{ $perm->name }} </span>
                @endforeach

                </td> 
                <td width="18%">
<a href="{{ route('admin.edit.roles',$item->id) }}" class="btn btn-blue rounded-pill waves-effect waves-light">Modifier</a>
<a href="{{ route('admin.delete.roles',$item->id) }}" class="btn btn-danger rounded-pill waves-effect waves-light" id="delete">Effacer</a>

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