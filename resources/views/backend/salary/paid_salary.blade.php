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
                                <li class="breadcrumb-item"><a href="{{ route('pay.salary') }}">Retour </a></li>

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
                                <form action="{{ route('employe.salary.store') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $employee->id }}">

                                    <h5 class="mb-4 text-uppercase"><i class="mdi mdi-account-circle me-1"></i> Salaire à payer </h5>

                                    <div class="row">


                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="firstname" class="form-label">Nom de l'employé<span class="text-danger">*</span></label>
                                                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name', $employee->name) }}" readonly>
                                                @error('name')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="firstname" class="form-label">Date du paiement <span class="text-danger">*</span>   </label>

                                                <input type="date" name="salary_month" class="form-control">
                                                @error('date')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>


                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="firstname" class="form-label">Salaire de l'employé <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control @error('salary') is-invalid @enderror" id="salary" name="salary" value="{{ str_replace(',', '.', number_format($employee->salary, 0)) }} F CFA" readonly>
                                                @error('salary')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="firstname" class="form-label">Avance sur salaire : <span class="text-danger">*</span></label>
                                                <!-- Vérifier si l'avance sur salaire existe pour cet employé -->
                                                @if ($employee->advance)
                                                    <input type="text" class="form-control @error('advance_salary') is-invalid @enderror" id="advance_salary" name="advance_salary" value="{{ $employee->advance->advance_salary ? str_replace(',', '.', number_format($employee->advance->advance_salary, 0)) . ' F CFA' : 'Aucune avance' }}" readonly>
                                                @else
                                                    <span class="text-muted">Aucune avance sur salaire</span>
                                                @endif

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
                                                <input type="text" class="form-control @error('due_salary') is-invalid @enderror" id="due_salary" name="due_salary" value="{{ str_replace(',', '.', number_format($employee->salary - $employee->advance->advance_salary, 0)) }} F CFA" readonly>

                                                @error('due_salary')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>



                                    </div> <!-- end row -->



                                    <div class="text-end">
                                        <button type="submit" class="badge bg-success"><i class="mdi mdi-content-save"></i> Effectué le paiement</button>

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