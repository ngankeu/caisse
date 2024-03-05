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
                                <li class="breadcrumb-item"><a href="{{ route('pending.order') }}">Vers les commandes en attente </a></li>

                            </ol>
                        </div>
                        <h4 class="page-title">Détails de la commande</h4>
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
                                <form method="post" action="{{ route('order.status.update') }}" enctype="multipart/form-data">
                                    @csrf

                                    <input type="hidden" name="id" value="{{ $order->id }}">

                                    <h5 class="mb-4 text-uppercase"><i class="mdi mdi-account-circle me-1"></i> Détails de la commande</h5>

                                    <div class="row">


                                        {{--<div class="col-md-6">--}}
                                            {{--<div class="mb-3">--}}
                                                {{--<label for="firstname" class="form-label">Image client</label>--}}
                                                {{--<img id="showImage" src="{{ asset($order->customer->image ) }}" class="rounded-circle avatar-lg img-thumbnail"--}}
                                                     {{--alt="profile-image">--}}

                                            {{--</div>--}}
                                        {{--</div>--}}


                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="firstname" class="form-label">Nom du client</label>
                                                <p class="text-danger"> {{ $order->customer->name }} </p>
                                            </div>
                                        </div>



                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="firstname" class="form-label">Email client</label>
                                                <p class="text-danger"> {{ $order->customer->email }} </p>
                                            </div>
                                        </div>


                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="firstname" class="form-label">Téléphone du client</label>
                                                <p class="text-danger"> {{ $order->customer->phone }} </p>
                                            </div>
                                        </div>


                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="firstname" class="form-label">Date de commande </label>
                                                <p class="text-danger"> {{ $order->order_date }} </p>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="firstname" class="form-label">Facture de commande</label>
                                                <p class="text-danger"> {{ $order->invoice_no }} </p>
                                            </div>
                                        </div>




                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="firstname" class="form-label">Statut de paiement </label>
                                                <p class="text-danger"> {{ $order->payment_status }} </p>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="firstname" class="form-label">Montant payé </label>
                                                <p class="text-danger">{{ str_replace(',', '.', number_format($order->pay, 0)) }} F CFA</p>

                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="firstname" class="form-label">Numéro de transfert </label>
                                                <p class="text-danger"> {{ $order->mobile }} </p>

                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="firstname" class="form-label">Montant exigible </label>
                                                <p class="text-danger"> {{ str_replace(',', '.', number_format($order->due , 0)) }} F CFA</p>

                                            </div>
                                        </div>




                                    </div> <!-- end row -->



                                    <div class="text-end">
                                        <button type="submit" class="btn btn-success waves-effect waves-light mt-2"><i class="mdi mdi-content-save"></i> Valider la commande </button>
                                    </div>
                                </form>
                            </div>
                            <!-- end settings content-->


                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">


                                        <table class="table dt-responsive nowrap w-100">
                                            <thead>
                                            <tr>
                                                <th>Photo</th>
                                                <th>Nom</th>
                                                <th>Description</th>
                                                <th>Qté</th>
                                                <th>Prix</th>
                                                <th>Total(+tva)</th>
                                            </tr>
                                            </thead>


                                            <tbody>
                                            @foreach($orderItem as $item)
                                                <tr>

                                                    <td> <img src="{{ asset($item->product->product_image) }}" style="width:50px; height: 40px;"> </td>
                                                    <td>{{ $item->product->product_name }}</td>
                                                    <td>{{ $item->product->product_description }}</td>
                                                    <td>{{ $item->quantity }}</td>
                                                    <td>{{ $item->product->product_code }}</td>
                                                    <td>{{ str_replace(',', '.', number_format($item->total, 0)) }} F CFA</td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>

                                    </div> <!-- end card body-->
                                </div> <!-- end card -->
                            </div><!-- end col-->

















                        </div>
                    </div> <!-- end card-->

                </div> <!-- end col -->
            </div>
            <!-- end row-->

        </div> <!-- container -->

    </div> <!-- content -->




@endsection