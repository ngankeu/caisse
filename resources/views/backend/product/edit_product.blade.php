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
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Modifier le produit</a></li>
                                            
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Modifier le produit</h4>
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
        <form id="myForm" method="post" action="{{ route('product.update') }}" enctype="multipart/form-data">
        	@csrf

            <input type="hidden" name="id" value="{{ $product->id }}">

            <h5 class="mb-4 text-uppercase"><i class="mdi mdi-account-circle me-1"></i> Modifier le produit</h5>

            <div class="row">


    <div class="col-md-6">
        <div class="form-group mb-3">
            <label for="firstname" class="form-label">Nom du produit</label>
            <input type="text" name="product_name" class="form-control" value="{{ $product->product_name }}"   >
           
        </div>
    </div>


              <div class="col-md-6">
        <div class="form-group mb-3">
            <label for="firstname" class="form-label">Catégorie</label>
            <select name="category_id" class="form-select" id="example-select">
                    <option selected disabled >Choisir une catégorie </option>
                    @foreach($category as $cat)
        <option value="{{ $cat->id }}" {{ $cat->id == $product->category_id ? 'selected' : ''  }} >{{ $cat->category_name }}</option>
                     @endforeach
                </select>
           
        </div>
    </div>

          <div class="col-md-6">
        <div class="form-group mb-3">
            <label for="firstname" class="form-label">Fournisseur </label>
            <select name="supplier_id" class="form-select" id="example-select">
                    <option selected disabled >Ssélectionnez Fournisseur </option>
                    @foreach($supplier as $sup)
        <option value="{{ $sup->id }}"  {{ $sup->id == $product->supplier_id ? 'selected' : ''  }}>{{ $sup->name }}</option>
                     @endforeach
                </select>
           
        </div>
    </div>




              <div class="col-md-6">
        <div class="form-group mb-3">
            <label for="firstname" class="form-label">Code produit    </label>
            <input type="text" name="product_code" class="form-control "  value="{{ $product->product_code }}"   >
            
           </div>
        </div>


     
              <div class="col-md-6">
        <div class="form-group mb-3">
            <label for="firstname" class="form-label">Petite description    </label>
            <input type="text" name="product_description" class="form-control "   value="{{ $product->product_description }}"  >
            
           </div>
        </div>


              <div class="col-md-6">
        <div class="form-group mb-3">
            <label for="firstname" class="form-label">Produit en stock    </label>
            <input type="text" name="product_store" class="form-control "  value="{{ $product->product_store }}"   >
            
           </div>
        </div>



    


              <div class="col-md-6">
        <div class="form-group mb-3">
            <label for="firstname" class="form-label">Date d'achat   </label>
            <input type="date" name="buying_date" class="form-control "  value="{{ $product->buying_date }}"   >
            
           </div>
        </div>

    
              <div class="col-md-6">
        <div class="form-group mb-3">
            <label for="firstname" class="form-label">Date d'expiration    </label>
            <input type="date" name="expire_date" class="form-control "  value="{{ $product->expire_date }}"   >
            
           </div>
        </div>

    
              <div class="col-md-6">
        <div class="form-group mb-3">
            <label for="firstname" class="form-label">Prix ​​d'achat  </label>
            <input type="text" name="buying_price" class="form-control "  value="{{ $product->buying_price }}"   >
            
           </div>
        </div>


    
              <div class="col-md-6">
        <div class="form-group mb-3">
            <label for="firstname" class="form-label">Prix ​​de vente   </label>
            <input type="text" name="selling_price" class="form-control "  value="{{ $product->selling_price }}"   >
            
           </div>
        </div>


     

   <div class="col-md-12">
<div class="form-group mb-3">
        <label for="example-fileinput" class="form-label">Image client</label>
        <input type="file" name="product_image" id="image" class="form-control">
         
    </div>
 </div> <!-- end col -->


   <div class="col-md-12">
<div class="mb-3">
        <label for="example-fileinput" class="form-label"> </label>
        <img id="showImage" src="{{ asset($product->product_image) }}" class="rounded-circle avatar-lg img-thumbnail"
                alt="profile-image">
    </div>
 </div> <!-- end col -->



            </div> <!-- end row -->
 
        
            
            <div class="text-end">
                <button type="submit" class="btn btn-success waves-effect waves-light mt-2"><i class="mdi mdi-content-save"></i> Sauvegarder</button>
            </div>
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
    $(document).ready(function (){
        $('#myForm').validate({
            rules: {
                product_name: {
                    required : true,
                }, 
                category_id: {
                    required : true,
                }, 
                supplier_id: {
                    required : true,
                }, 
                product_code: {
                    required : true,
                },
                product_description: {
                    required : true,
                }, 
                product_store: {
                    required : true,
                }, 
                buying_date: {
                    required : true,
                }, 
                expire_date: {
                    required : true,
                }, 
                buying_price: {
                    required : true,
                }, 
                selling_price: {
                    required : true,
                }, 
                product_image: {
                    required : true,
                },  
            },
            messages :{
                product_name: {
                    required : 'Veuillez entrer le nom du produit',
                }, 
                category_id: {
                    required : 'Veuillez sélectionner une catégorie',
                },
                supplier_id: {
                    required : 'Veuillez sélectionner un fournisseur',
                },
                product_code: {
                    required : 'Veuillez entrer le code produit',
                },
                product_description: {
                    required : 'Veuillez entrer une description du produit,
                },
                product_store: {
                    required : 'Veuillez entrer le produit enregistré',
                },
                buying_date: {
                    required : 'Veuillez sélectionner la date d achat',
                },
                expire_date: {
                    required : 'Veuillez sélectionner la date d expiration',
                },
                buying_price: {
                    required : 'Veuillez entrer le prix d achat',
                },
                selling_price: {
                    required : 'Veuillez entrer le prix de vente',
                },
                product_image: {
                    required : 'Veuillez sélectionner l image du produit',
                }, 

            },
            errorElement : 'span', 
            errorPlacement: function (error,element) {
                error.addClass('invalid-feedback');
                element.closest('.form-group').append(error);
            },
            highlight : function(element, errorClass, validClass){
                $(element).addClass('is-invalid');
            },
            unhighlight : function(element, errorClass, validClass){
                $(element).removeClass('is-invalid');
            },
        });
    });
    
</script>


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