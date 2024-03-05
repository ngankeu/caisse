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
                                <a class="btn btn-primary rounded-pill waves-effect waves-light"  href="{{ route('month.salary') }}">Vers les salaires du mois </a>

                            </ol>
                        </div>
                        <h4 class="page-title">Salaire payé </h4>
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

                                <h5 class="mb-4 text-uppercase"><i class="mdi mdi-account-circle me-1"></i> Salaire à payer </h5>

                                <div class="row">


                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="firstname" class="form-label">Nom de l'employé<span class="text-danger">*</span></label>
                                            <!-- Utiliser la relation 'employee' pour accéder au nom de l'employé -->
                                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name', $paySalary->employee->name) }}" readonly>
                                            @error('name')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="firstname" class="form-label">Paiement effectué le :<span class="text-danger">*</span></label>
                                            <!-- Utiliser la relation 'employee' pour accéder au nom de l'employé -->
                                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="created_at" name="created_at" value="{{ old('name', $paySalary->employee->created_at) }}" readonly>
                                            @error('created_at')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="firstname" class="form-label">Avance sur salaire : <span class="text-danger">*</span></label>
                                            <!-- Utiliser la relation 'advance' pour accéder à l'avance sur salaire -->
                                            <input class="form-control bg-white" value="{{ $paySalary->advance_salary ? $paySalary->advance_salary : 'No Advance' }}" readonly>
                                            @error('advance_salary')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                            @error('name')
                                            <span class="text-danger"> {{ $message }} </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="firstname" class="form-label">Reste du salaire à payer: </label>
                                            <!-- Vérifier si $paySalary->advance n'est pas null avant d'accéder à advance_salary -->
                                            <input class="form-control bg-white" value="{{ $paySalary->due_salary }}" readonly>
                                            @error('due_salary')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </div>


                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="firstname" class="form-label">Salaire de l'employé <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control @error('salary') is-invalid @enderror" id="salary" name="salary" value="{{ str_replace(',', '.', number_format($paySalary->employee->salary, 0)) }} F CFA" readonly>
                                            @error('salary')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </div>












                                </div> <!-- end row -->
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