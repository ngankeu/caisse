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

   <a href="{{ route('import.product') }}" class="btn btn-info rounded-pill waves-effect waves-light">Importer </a>
   &nbsp;&nbsp;&nbsp;
   <a href="{{ route('export') }}" class="btn btn-danger rounded-pill waves-effect waves-light">Exporter </a>
   &nbsp;&nbsp;&nbsp;

      <a href="{{ route('add.product') }}" class="btn btn-primary rounded-pill waves-effect waves-light">Ajouter un produit </a>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Tous les produits</h4>
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
                                <th>Catégorie</th>
                                <th>Fournisseur</th>
                                <th>Code</th>
                                <th>Stock</th> 
                            </tr>
                        </thead>
                    
    
        <tbody>
        	@foreach($product as $key=> $item)
            <tr>
                <td>{{ $key+1 }}</td>
                <td> <img src="{{ asset($item->product_image) }}" style="width:50px; height: 40px;"> </td>
                <td>{{ $item->product_name }}</td>
                <td>{{ $item['category']['category_name'] }}</td>
                <td>{{ $item['supllier']['name'] }}</td>
                <td>{{ $item->product_code }}</td>
                <td> <button class="btn btn-warning waves-effect waves-light">{{ $item->product_store }}</button> </td>
      
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