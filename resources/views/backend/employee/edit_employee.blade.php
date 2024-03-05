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
                                            <a class="btn btn-primary rounded-pill waves-effect waves-light" href="{{ route('all.employee') }}">Vers tous les employés</a>
                                            
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Modifier un employé</h4>
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
        <form method="post" action="{{ route('employee.update') }}" enctype="multipart/form-data">
        	@csrf

            <input type="hidden" name="id" value="{{ $employee->id }}">

            <h5 class="mb-4 text-uppercase"><i class="mdi mdi-account-circle me-1"></i> Modifier un employé</h5>

            <div class="row">


    <div class="col-md-6">
        <div class="mb-3">
            <label for="firstname" class="form-label">Nom de l'employé</label>
            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ $employee->name }}"  >
             @error('name')
      <span class="text-danger"> {{ $message }} </span>
            @enderror
        </div>
    </div>


              <div class="col-md-6">
        <div class="mb-3">
            <label for="firstname" class="form-label">Email de l'employé</label>
            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"   value="{{ $employee->email }}"  >
             @error('email')
      <span class="text-danger"> {{ $message }} </span>
            @enderror
        </div>
    </div>




              <div class="col-md-6">
        <div class="mb-3">
            <label for="firstname" class="form-label">Téléphone de l'employé    </label>
            <input type="text" name="phone" class="form-control @error('phone') is-invalid @enderror"  value="{{ $employee->phone }}"   >
             @error('phone')
      <span class="text-danger"> {{ $message }} </span>
            @enderror
        </div>
    </div>


      <div class="col-md-6">
        <div class="mb-3">
            <label for="firstname" class="form-label">Adresse de l'employé   </label>
            <input type="text" name="address" class="form-control @error('address') is-invalid @enderror"  value="{{ $employee->address }}"   >
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
    <option value="1 Year" {{ $employee->experience == '1 an' ? 'selected' : '' }} >1 an</option>
    <option value="2 Year"  {{ $employee->experience == '2 ans' ? 'selected' : '' }}>2 ans</option>
    <option value="3 Year" {{ $employee->experience == '3 ans' ? 'selected' : '' }}>3 ans</option>
    <option value="4 Year" {{ $employee->experience == '4 ans' ? 'selected' : '' }}>4 ans</option>
    <option value="5 Year" {{ $employee->experience == '5 ans' ? 'selected' : '' }}>5 ans</option>
                </select>
                 @error('experience')
      <span class="text-danger"> {{ $message }} </span>
            @enderror
         
        </div>
    </div>


 <div class="col-md-6">
        <div class="mb-3">
            <label for="firstname" class="form-label">Salaire de l'employé   </label>
            <input type="text" name="salary" class="form-control @error('salary') is-invalid @enderror"   value="{{ $employee->salary }}"  >
             @error('salary')
      <span class="text-danger"> {{ $message }} </span>
            @enderror
        </div>
    </div>

     <div class="col-md-6">
        <div class="mb-3">
            <label for="firstname" class="form-label">Vacances de l'employé    </label>
            <input type="text" name="vacation" class="form-control @error('vacation') is-invalid @enderror"  value="{{ $employee->vacation }}"   >
             @error('vacation')
      <span class="text-danger"> {{ $message }} </span>
            @enderror
        </div>
    </div>


     <div class="col-md-6">
        <div class="mb-3">
            <label for="firstname" class="form-label">Quartier de l'employé    </label>
            <input type="text" name="city" class="form-control @error('city') is-invalid @enderror"  value="{{ $employee->city }}"   >
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
        <img id="showImage" src="{{  asset($employee->image) }}" class="rounded-circle avatar-lg img-thumbnail"
                alt="profile-image">
    </div>
 </div> <!-- end col -->



            </div> <!-- end row -->
 
        
            
            <div class="text-end">
                <button type="submit" class="badge bg-success"><i class="mdi mdi-content-save"></i> Sauvegarder</button>
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