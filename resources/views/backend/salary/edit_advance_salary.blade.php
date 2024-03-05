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
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Modifier le salaire anticipé</a></li>
                                            
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Modifier le salaire anticipé</h4>
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
        <form method="post" action="{{ route('advance.salary.update') }}" >
        	@csrf

            <input type="hidden" name="id" value="{{ $salary->id }}">

            <h5 class="mb-4 text-uppercase"><i class="mdi mdi-account-circle me-1"></i> Modifier le salaire anticipé</h5>

            <div class="row">

 
 <div class="col-md-6">
        <div class="mb-3">
            <label for="firstname" class="form-label">Nom de l'employé   </label>
           <select name="employee_id" class="form-select @error('employee_id') is-invalid @enderror" id="example-select">
                    <option selected disabled >Sélectionnez un employé </option>
                    @foreach($employee as $item)
                    <option value="{{  $item->id }}" {{ $item->id == $salary->employee_id ? 'selected' : '' }}>{{  $item->name }}</option>
                    @endforeach
                </select> 
        </div>
    </div>


 <div class="col-md-6">
        <div class="mb-3">
            <label for="firstname" class="form-label">Salaire du mois     </label>
           <select name="month" class="form-select @error('month') is-invalid @enderror" id="example-select">
<option selected disabled >Sélectionnez un mois </option>
<option value="Janvier" {{ $salary->month == 'Janvier' ? 'selected' : '' }}>Janvier</option>
<option value="Février"{{ $salary->month == 'Février' ? 'selected' : '' }}>Février</option>
<option value="Mars"{{ $salary->month == 'Mars' ? 'selected' : '' }}>Mars</option>
<option value="Avril"{{ $salary->month == 'Avril' ? 'selected' : '' }}>Avril</option>
<option value="Mai"{{ $salary->month == 'Mai' ? 'selected' : '' }}>Mai</option>
<option value="Juin"{{ $salary->month == 'Juin' ? 'selected' : '' }}>Juin</option>
<option value="Juillet"{{ $salary->month == 'Juillet' ? 'selected' : '' }}>Juillet</option>
<option value="Août"{{ $salary->month == 'Août' ? 'selected' : '' }}>Août</option>
<option value="Septembre"{{ $salary->month == 'Septembre' ? 'selected' : '' }}>September</option>
<option value="Octobre"{{ $salary->month == 'Octobre' ? 'selected' : '' }}>Octobre</option>
<option value="Novembre"{{ $salary->month == 'Novembre' ? 'selected' : '' }}>Novembre</option>
<option value="Décembre"{{ $salary->month == 'Décembre' ? 'selected' : '' }}>Décembre</option>
                </select>
                 @error('month')
      <span class="text-danger"> {{ $message }} </span>
            @enderror
         
        </div>
    </div>


      <div class="col-md-6">
        <div class="mb-3">
            <label for="firstname" class="form-label">Année de salaire   </label>
           <select name="year" class="form-select @error('year') is-invalid @enderror" id="example-select">
    <option selected disabled >Sélectionnez l'année </option>
    <option value="2024" {{ $salary->year == '2024' ? 'selected' : '' }} >2024</option>
    <option value="2025" {{ $salary->year == '2025' ? 'selected' : '' }}>2025</option>
    <option value="2026" {{ $salary->year == '2026' ? 'selected' : '' }}>2026</option>
    <option value="2027" {{ $salary->year == '2027' ? 'selected' : '' }}>2027</option>
    <option value="2028" {{ $salary->year == '2028' ? 'selected' : '' }}>2028</option>
    <option value="2029" {{ $salary->year == '2029' ? 'selected' : '' }}>2029</option>
                </select>
                 @error('year')
      <span class="text-danger"> {{ $message }} </span>
            @enderror
         
        </div>
    </div>


 <div class="col-md-6">
        <div class="mb-3">
            <label for="firstname" class="form-label">Avance sur salaire    </label>
            <input type="text" name="advance_salary" class="form-control @error('advance_salary') is-invalid @enderror" value="{{ $salary->advance_salary }}"   >
             @error('advance_salary')
      <span class="text-danger"> {{ $message }} </span>
            @enderror
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

 


@endsection