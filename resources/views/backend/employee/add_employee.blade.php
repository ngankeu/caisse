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
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Ajout de l'employé</a></li>
                                            
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Section des employés</h4>
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
        <form method="post" action="{{ route('employee.store') }}" enctype="multipart/form-data">
        	@csrf

            <h5 class="mb-4 text-uppercase"><i class="mdi mdi-account-circle me-1"></i> Ajouter un employé</h5>

            <div class="row">

 
    <div class="col-md-6">
        <div class="mb-3">
            <label for="firstname" class="form-label">Nom de l'employé</label>
            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"   >
             @error('name')
      <span class="text-danger"> {{ $message }} </span>
            @enderror
        </div>
    </div>


              <div class="col-md-6">
        <div class="mb-3">
            <label for="firstname" class="form-label">Email de l'employé</label>
            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"   >
             @error('email')
      <span class="text-danger"> {{ $message }} </span>
            @enderror
        </div>
    </div>




              <div class="col-md-6">
        <div class="mb-3">
            <label for="firstname" class="form-label">Téléphone de l'employé    </label>
            <input type="text" name="phone" class="form-control @error('phone') is-invalid @enderror"   >
             @error('phone')
      <span class="text-danger"> {{ $message }} </span>
            @enderror
        </div>
    </div>


      <div class="col-md-6">
        <div class="mb-3">
            <label for="firstname" class="form-label">Adresse de l'employé   </label>
            <input type="text" name="address" class="form-control @error('address') is-invalid @enderror"   >
             @error('address')
      <span class="text-danger"> {{ $message }} </span>
            @enderror
        </div>
    </div>



      <div class="col-md-6">
        <div class="mb-3">
            <label for="firstname" class="form-label">Expérience employé   </label>
           <select name="experience" class="form-select @error('experience') is-invalid @enderror" id="example-select">
                    <option selected disabled >Sélectionnez l'année</option>
                    <option value="1 Year">1 an</option>
                    <option value="2 Year">2 ans</option>
                    <option value="3 Year">3 ans</option>
                    <option value="4 Year">4 ans</option>
                    <option value="5 Year">5 ans</option>
                </select>
                 @error('experience')
      <span class="text-danger"> {{ $message }} </span>
            @enderror
         
        </div>
    </div>


 <div class="col-md-6">
        <div class="mb-3">
            <label for="firstname" class="form-label">Salaire de l'employé    </label>
            <input type="text" name="salary" class="form-control @error('salary') is-invalid @enderror"   >
             @error('salary')
      <span class="text-danger"> {{ $message }} </span>
            @enderror
        </div>
    </div>

     <div class="col-md-6">
        <div class="mb-3">
            <label for="firstname" class="form-label">Vacances de l'employé   </label>
            <input type="text" name="vacation" class="form-control @error('vacation') is-invalid @enderror"   >
             @error('vacation')
      <span class="text-danger"> {{ $message }} </span>
            @enderror
        </div>
    </div>


     <div class="col-md-6">
        <div class="mb-3">
            <label for="firstname" class="form-label">Ville de l'employé   </label>
            <input type="text" name="city" class="form-control @error('city') is-invalid @enderror"   >
             @error('city')
      <span class="text-danger"> {{ $message }} </span>
            @enderror
        </div>
    </div>




   <div class="col-md-12">
<div class="mb-3">
        <label for="example-fileinput" class="form-label">Image de l'employé</label>
        <input type="file" name="image" id="image" class="form-control @error('image') is-invalid @enderror">
          @error('image')
      <span class="text-danger"> {{ $message }} </span>
            @enderror
    </div>
 </div> <!-- end col -->


   <div class="col-md-12">
<div class="mb-3">
        <label for="example-fileinput" class="form-label"> </label>
        <img id="showImage" src="{{  url('upload/no_image.jpg') }}" class="rounded-circle avatar-lg img-thumbnail"
                alt="profile-image">
    </div>
 </div> <!-- end col -->



            </div> <!-- end row -->


            {{--@if(Auth::user()->can('employee.add'))--}}
            <div class="text-end">
                <button type="submit" class="btn btn-success waves-effect waves-light mt-2"><i class="mdi mdi-content-save"></i> Sauvegarder</button>
            </div>
            {{--@endif--}}
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