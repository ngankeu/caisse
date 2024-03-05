<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Facture</title>

<style type="text/css">
    * {
        font-family: Verdana, Arial, sans-serif;
    }
    table{
        font-size: x-small;
    }
    tfoot tr td{
        font-weight: bold;
        font-size: x-small;
    }
    .gray {
        background-color: lightgray
    }
    .font{
      font-size: 15px;
    }
    .authority {
        /*text-align: center;*/
        float: right
    }
    .authority h5 {
        margin-top: -10px;
        color: green;
        /*text-align: center;*/
        margin-left: 35px;
    }
    .thanks p {
        color: green;;
        font-size: 16px;
        font-weight: normal;
        font-family: serif;
        margin-top: 20px;
    }
</style>

</head>
<body>

  <table width="100%" style="background: #F7F7F7; padding:0 20px 0 20px;">
    <tr>
        <td valign="top">
          <!-- {{-- <img src="" alt="" width="150"/> --}} -->
              <?php $image_path = '/upload/TGV2.png'; ?>
              <img src="{{ public_path() . $image_path }}" width="200" height="100">

        </td>
        <td align="right">
            <pre class="font" >
              Descente NIKI CENTRAL face MAHAL
            Deuxième couloir à gauche, Boutique au fond <br>
               Tel: 693 87 55 15 / 675 02 26 84 <br>
              
            </pre>
        </td>
    </tr>

  </table>


  <table width="100%" style="background:white; padding:2px;"></table>

  <table width="100%" style="background: #F7F7F7; padding:0 5 0 5px;" class="font">
    <tr>
        <td>
          <p class="font" style="margin-left: 20px;">
           <strong>Nom du client:</strong> {{ $order->customer->name }}  <br>

           <strong>Téléphone du client:</strong> {{ $order->customer->phone }}   <br>
          
           <strong>Adresse: {{ $order->customer->address }} </strong>

            
         </p>
        </td>
        <td>
          <p class="font">
            <h3><span style="color: green;">Facture:</span> # {{ $order->invoice_no }}  </h3>
            Date de commande:  {{ $order->order_date }} <br>
            Commande:  {{ $order->order_status }} <br>
            Statut de paiement: {{ $order->payment_status }}  <br>
            Mobile transfert: {{ $order->mobile }}  <br>
            Paiement total :   {{ str_replace(',', '.', number_format($order->pay, 0)) }} F CFA <br>
            Montant exigible :  {{ str_replace(',', '.', number_format($order->due, 0)) }} F CFA </span>

         </p>
        </td>
    </tr>
  </table>
  <br/>
<h3>Article(s)</h3>


  <table width="100%">
    <thead style="background-color: green; color:#FFFFFF;">
      <tr class="font">
         <th>Image </th>
        <th>Nom de l'article</th>
        <th>Description</th>
        <th>Quantité</th>
        <th>Code article</th>
        <th>Total(+TVA)</th>
      </tr>
    </thead>
    <tbody>

     @foreach($orderItem as $item)
      <tr class="font">
        <td align="center">
            <img src="{{ asset($item->product->product_image) }}" height="50px" width="50px" alt="">

        </td>
        <td align="center"> {{ $item->product->product_name }} </td>

        <td align="center"> {{ $item->product->product_description}} </td>
        <td align="center"> {{ $item->quantity }} </td>


          <td align="center"> {{ $item->product->product_code }} </td>
          <td>{{ str_replace(',', '.', number_format($item->total, 0)) }}FCFA</td>
      </tr>
      @endforeach
    </tbody>
  </table>
  <br>
  <table width="100%" style=" padding:0 10px 0 10px;">
    <tr>
        <td align="right" >
<h2><span style="color: green;">Sous-total:</span> {{ str_replace(',', '.', number_format($order->total, 0)) }} F CFA</h2>
<h2><span style="color: green;">Total:</span>{{ str_replace(',', '.', number_format($order->total, 0)) }} F CFA</h2>
            {{-- <h2><span style="color: green;">Full Payment PAID</h2> --}}
        </td>
    </tr>
  </table>
  <div class="thanks mt-3">
    <p>Merci d'avoir acheté des produits ..!!</p>
  </div>
  <div class="authority float-right mt-5">
      <p>-----------------------------------</p>
      <h5>Signature du promoteur:</h5>
    </div>
</body>
</html>