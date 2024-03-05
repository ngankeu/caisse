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
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Ajouter une autorisation</a></li>
                                            
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Ajouter une autorisation</h4>
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
        <form id="myForm" method="post" action="{{ route('permission.store') }}" enctype="multipart/form-data">
            @csrf

            <h5 class="mb-4 text-uppercase"><i class="mdi mdi-account-circle me-1"></i> Ajouter une autorisation</h5>

            <div class="row">


    <div class="col-md-6">
        <div class="form-group mb-3">
            <label for="firstname" class="form-label">Nom de l'autorisation</label>
            <input type="text" name="name" class="form-control"   >
           
        </div>
    </div>


              <div class="col-md-6">
        <div class="form-group mb-3">
            <label for="firstname" class="form-label">Nom de groupe </label>
            <select name="group_name" class="form-select" id="example-select">
                    <option selected disabled >Sélectionner un groupe  </option>
                   
        <option value="pos"> Facturation</option>
        <option value="employee"> Employés</option>
        <option value="customer"> Clients</option>
        <option value="supplier"> Fournisseur</option>
        <option value="salary"> Salaire </option>
        <option value="attendence"> Présence des employés </option>
        <option value="category"> Catégorie </option>
        <option value="product"> Articles </option>
        <option value="expense"> Dépenses </option>
        <option value="orders"> Commandes</option>
        <option value="stock"> Stock </option>
        <option value="roles"> Rôles</option>
        <option value="admin"> Administrateur</option>
        <option value="backup"> Sauvegarde</option>

                </select>
           
        </div>
    </div>

           


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
                name: {
                    required : true,
                }, 
                group_name: {
                    required : true,
                }, 
                
            },
            messages :{
                name: {
                    required : 'Veuillez saisir le nom de pour autorisation',
                }, 
                group_name: {
                    required : 'Veuillez sélectionner le nom du groupe',
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

 



@endsection