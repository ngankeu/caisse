@extends('admin_dashboard')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

 <div class="content">

                    <!-- Start Content-->
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Détails Fournisseur</a></li>
                                            
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Détails Fournisseur</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title -->

<div class="row">
    

  <div class="col-lg-8 col-xl-12">
<div class="card">
    <div class="card-body">
                                    
                                      
                                         
                                           

    <!-- end timeline content-->

    <div class="tab-pane" id="settings">
        <form method="post" action="{{ route('supplier.update') }}" enctype="multipart/form-data">
        	@csrf

           <input type="hidden" name="id" value="{{ $supplier->id }}"> 

            <h5 class="mb-4 text-uppercase"><i class="mdi mdi-account-circle me-1"></i> Détails Fournisseur</h5>

            <div class="row">


    <div class="col-md-6">
        <div class="mb-3">
            <label for="firstname" class="form-label">Nom du fournisseur</label>
            <p class="text-danger">{{ $supplier->name }}</p>
        </div>
    </div>


              <div class="col-md-6">
        <div class="mb-3">
            <label for="firstname" class="form-label">E-mail du fournisseur</label>
               <p class="text-danger">{{ $supplier->email }}</p>
            
        </div>
    </div>




              <div class="col-md-6">
        <div class="mb-3">
            <label for="firstname" class="form-label">Téléphone du fournisseur </label>
             <p class="text-danger">{{ $supplier->phone }}</p>
        </div>
    </div>


      <div class="col-md-6">
        <div class="mb-3">
            <label for="firstname" class="form-label">Adresse du fournisseur  </label>
             <p class="text-danger">{{ $supplier->address }}</p>
        </div>
    </div>






      <div class="col-md-6">
        <div class="mb-3">
            <label for="firstname" class="form-label">Type de fournisseur   </label>
             <p class="text-danger">{{ $supplier->type }}</p>
        </div>
    </div>

 
    





            </div> <!-- end row -->
 
         
        </form>
    </div>
    <!-- end settings content-->
    
                                       
                                    </div>
                                </div> <!-- end card-->

                            </div> <!-- end col -->
                        </div>
                        <!-- end row-->

                    </div> <!-- container -->

                </div> <!-- content -->



<script type="text/javascript">
	
	$(document).ready(function(){
		$('#image').change(function(e){
			var reader = new FileReader();
			reader.onload =  function(e){
				$('#showImage').attr('src',e.target.result);
			}
			reader.readAsDataURL(e.target.files['0']);
		});
	});

</script>







@endsection