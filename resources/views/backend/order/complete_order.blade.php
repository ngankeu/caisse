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
      
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Les commandes complétes</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                     
                    
                    <table id="basic-datatable" class="table dt-responsive nowrap w-100">
                        <thead>
                            <tr>
                                <th>Sl</th>
                                {{--<th>Image</th>--}}
                                {{--<th>Nom</th>--}}
                                <th>Date de commande</th>
                                <th>Paiement</th>
                                <th>Facture</th>
                                <th>Payer</th>
                                <th>Statut</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                    
    
        <tbody>
        	@foreach($orders as $key=> $item)
            <tr>
                <td>{{ $key+1 }}</td>
                {{--<td> <img src="{{ asset($item->customer->image) }}" style="width:50px; height: 40px;"> </td>--}}
                {{--<td>{{ $item['customer']['name'] }}</td>--}}
                <td>{{ $item->order_date }}</td>
                <td>{{ $item->payment_status }}</td>
                <td>{{ $item->invoice_no }}</td>
                <td>{{ str_replace(',', '.', number_format($item->pay, 0)) }} F CFA</td>
                <td> <span class="badge bg-success">{{ $item->order_status }}</span> </td>
                <td>
<a href="{{ url('order/invoice-download/'.$item->id) }}" class="badge bg-soft-warning"> Facture PDF </a>

                </td>
            </tr>
            @endforeach
        </tbody>
                    </table>

                </div> <!-- end card body-->
            </div> <!-- end card -->
        </div><!-- end col-->
    </div>
    <!-- end row-->


                      
                        
                    </div> <!-- container -->

                </div> <!-- content -->


@endsection 