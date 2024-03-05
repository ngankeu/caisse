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
                                    <h4 class="page-title">En attente d'échéance</h4>
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
                                <th>Total</th>
                                <th>Payer</th>
                                <th>Exigible</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                    
    
        <tbody>
        	@foreach($alldue as $key=> $item)
            <tr>
                <td>{{ $key+1 }}</td>
                {{--<td> <img src="{{ asset($item->customer->image) }}" style="width:50px; height: 40px;"> </td>--}}
                {{--<td>{{ $item['customer']['name'] }}</td>--}}
                <td>{{ $item->order_date }}</td>
                <td>{{ $item->payment_status }}</td>
               <td> <span class="badge bg-soft-success"> {{ str_replace(',', '.', number_format($item->total, 0)) }}FCFA</span> </td>
                <td> <span class="badge bg-primary"> {{ str_replace(',', '.', number_format($item->pay, 0)) }}FCFA</span> </td>
               <td> <span class="badge bg-danger"> {{ str_replace(',', '.', number_format($item->due, 0)) }}FCFA</span> </td>
                <td>


<a href="{{ route('order.details',$item->id) }}" class="badge bg-soft-pink"> Détails </a>

  <button type="button" class="badge bg-soft-warning" data-bs-toggle="modal" data-bs-target="#signup-modal" id="{{ $item->id }}" onclick="orderDue(this.id)" >Montant à payer </button>

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



                 <!-- Signup modal content -->
<div id="signup-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-body"> 
                <div class="text-center mt-2 mb-4 ">
                        <div class="auth-logo">
                            
                            <h3> Payer le montant exigible</h3>
                        </div>
                </div>
 

  <form class="px-3" method="post" action="{{ route('update.due') }}">
                    @csrf
    
    <input type="hidden" name="id" id="order_id">
    <input type="hidden" name="pay" id="pay">

       <div class="mb-3">
             <label for="username" class="form-label">Payez maintenant</label>
     <input class="form-control" type="text" name="due" id="due"  >
          </div>
 

                    <div class="mb-3 text-center">
     <button class="btn btn-primary" type="submit">Mise à jour du montant exigible </button>
                    </div>

                </form>

            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<script type="text/javascript">
        
        function orderDue(id) {
            $.ajax({
                type: 'GET',
                url: '/order/due/'+id,
                dataType: 'json',
                success:function(data){
                    // console.log(data)
                    $('#due').val(data.due);
                    $('#pay').val(data.pay);
                    $('#order_id').val(data.id);
                }
            })
        }


</script>


@endsection 