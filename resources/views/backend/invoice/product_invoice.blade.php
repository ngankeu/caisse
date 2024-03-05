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
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Facture client</a></li>
                                           
                                            
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Facture client</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 

<div class="row">
<div class="col-12">
<div class="card">
    <div class="card-body">
        <!-- Logo & title -->
        <div class="clearfix">
            <div class="float-start">
                <div class="auth-logo">
                    <div class="logo logo-dark">
                        <span class="logo-lg">
                            <img src="{{ asset('backend/assets/images/LOGO.png') }}" alt="" height="22">
                        </span>
                    </div>

                    <div class="logo logo-light">
                        <span class="logo-lg">
                            <img src="{{ asset('backend/assets/images/LOGO.png') }}" alt="" height="22">
                        </span>
                    </div>
                </div>
            </div>
            <div class="float-end">
                <h4 class="m-0 d-print-none">Facture</h4>
            </div>
        </div>
            
                <div class="row">
                    <div class="col-md-6">
                        <div class="mt-3">
                            <p><b>Bonjour, {{ $customer->name }}</b></p>
                            <p>Nous vous remercions d'avoir effectué un achat au sein de notre magasin, nous serions ravis de collaborer avec vous!!!</p>
                        </div>

                </div><!-- end col -->
                <div class="col-md-4 offset-md-2">
                    <div class="mt-3 float-end">
                        <p><strong>Date de commande : </strong> <span class="float-end"> &nbsp;&nbsp;&nbsp;&nbsp;Généré par le systéme </span></p>
                        <p><strong>Statut de la commande : </strong> <span class="float-end"><span class="badge bg-danger">Non payé</span></span></p>
                        <p><strong>Numéro de facture : </strong> <span class="float-end">&nbsp; Généré par le systéme </span></p>
                    </div>
                </div><!-- end col -->
            </div>
            <!-- end row -->

            <div class="row mt-3">
                <div class="col-sm-6">
                    <h6>Adresse de facturation</h6>
                    <address>

                        <abbr title="address">Adresse:</abbr> {{ $customer->address }}<br>
                        <br>
    {{--<abbr title="Phone">Nom de la boutique:</abbr> {{ $customer->shopname }}<br>--}}
    <abbr title="Phone">Téléphone:</abbr> {{ $customer->phone }}<br>
    {{--<abbr title="Phone">E-mail:</abbr> {{ $customer->email }}<br>--}}
                    </address>
                </div> <!-- end col -->

               
            </div> 
            <!-- end row -->

            <div class="row">
                <div class="col-12">
                    <div class="table-responsive">
        <table class="table mt-4 table-centered">
            <thead>
            <tr><th>#</th>
                <th>Item</th>
                <th style="width: 10%">Qté</th>
                <th style="width: 10%">Coût unitaire</th>
                <th style="width: 10%" class="text-end">Total</th>
            </tr></thead>
            <tbody>
            @php
            $sl = 1;
            @endphp

            @foreach($contents as $key=> $item)
            <tr>
                <td>{{ $sl++ }}</td>
                <td>
                    <b>{{ $item->name }}</b> <br/>

                </td>
                <td>{{ $item->qty }}</td>
                <td>{{ str_replace(',', '.', number_format($item->price, 0)) }}FCFA</td>
                <td class="text-end">{{ str_replace(',', '.', number_format($item->price * $item->qty, 0)) }}FCFA</td>
            </tr>
            @endforeach

            </tbody>
        </table>
                    </div> <!-- end table-responsive -->
                </div> <!-- end col -->
            </div>
            <!-- end row -->

            <div class="row">
                <div class="col-sm-6">
                    <div class="clearfix pt-5">
                        <h6 class="text-muted">Notes:</h6>

                        
                    </div>
                </div> <!-- end col -->
                <div class="col-sm-6">
                    <div class="float-end">
    <p><b>Sous-total:</b> <span class="float-end">{{ Cart::subtotal() }} F CFA</span></p>
    <p><b>T.V.A (00%):</b> <span class="float-end"> &nbsp;&nbsp;&nbsp; {{ Cart::tax() }} F CFA</span></p>
    <h3>{{ Cart::total() }} F CFA</h3>
                    </div>
                    <div class="clearfix"></div>
                </div> <!-- end col -->
            </div>
            <!-- end row -->

            <div class="mt-4 mb-1">
                <div class="text-end d-print-none">
                    <a href="javascript:window.print()" class="btn btn-primary waves-effect waves-light"><i class="mdi mdi-printer me-1"></i> Imprimer</a>
   <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#signup-modal">Créer une facture </button>
                </div>
            </div>
        </div>
    </div> <!-- end card -->
</div> <!-- end col -->
</div>
                        <!-- end row --> 
                        
                    </div> <!-- container -->

                </div> <!-- content -->



          <!-- Signup modal content -->
<div id="signup-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-body"> 
            	<div class="text-center mt-2 mb-4 ">
            			<div class="auth-logo">
            				<h3>Facture de {{ $customer->name }}</h3>
            				<h3>Montant total   {{ Cart::total() }} F CFA</h3>
            			</div>
            	</div>




  <form class="px-3" method="post" action="{{ url('/final-invoice') }}">
                    @csrf

                    <div class="mb-3">
             <label for="username" class="form-label">Paiement</label>
    

    <select name="payment_status" class="form-select" id="example-select">
                    <option selected disabled >Sélectionnez Paiement</option>
                    
        <option value="Paiement en espèces">Paiement en espèces</option>
        <option value="Par Orange Money">Par Orange Money</option>
        <option value="Par MTN Money">Par MTN Money</option>
                   
                </select>
                    </div>
      <div class="mb-3">
          <label for="username" class="form-label">OM ou MOMO</label>
          <input class="form-control" type="text" name="mobile" placeholder="numéro de transfert">
      </div>

                        <div class="mb-3">
             <label for="username" class="form-label">Payez maintenant</label>
     <input class="form-control" type="text" name="pay" placeholder="Saisir le montant">
                    </div>

 

   <input type="hidden" name="customer_id" value="{{ $customer->id }}">
   <input type="hidden" name="order_date" value="{{ date('d-F-Y') }}">
   <input type="hidden" name="order_status" value="pending">
  <input type="hidden" name="total_products" value="{{ Cart::count() }}">
  <input type="hidden" name="sub_total" value="{{ Cart::subtotal() }}">
  <input type="hidden" name="vat" value="{{ Cart::tax() }}">
  <input type="hidden" name="total" value="{{ Cart::total() }}">




      <div class="mb-3 text-center">
     <button class="btn btn-primary" type="submit">Complétez la commande </button>
                    </div>

                </form>

            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
         





@endsection