<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Customer;
use Gloudemans\Shoppingcart\Facades\Cart;


class PosController extends Controller
{
    public function Pos(){

        $todaydate = Carbon::now();

        $product = Product::where('expire_date', '>', $todaydate)->latest()->get();
        $customer = Customer::latest()->get();
        return view('backend.pos.pos_page',compact('product','customer'));

    } // End Method


    public function AddCart(Request $request){

        Cart::add([
            'id' => $request->id,
            'name' => $request->name,
            'qty' => $request->qty,
            'price' => $request->price,
            'weight' => 20,
            'options' => ['size' => 'large']]);


        $notification = array(
            'message' => 'Article ajouté avec succès',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);


    } // End Method


    public function AllItem(){

        $product_item = Cart::content();

        return view('backend.pos.text_item',compact('product_item'));

    } // End Method


    public function CartUpdate(Request $request,$rowId){

        $qty = $request->qty;
        $update = Cart::update($rowId,$qty);

        $notification = array(
            'message' => 'Panier mis à jour avec succès',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);

    } // End Method


    public function CartRemove($rowId){

        Cart::remove($rowId);

        $notification = array(
            'message' => 'Panier supprimé avec succès',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);

    } // End Method


    public function CreateInvoice(Request $request){

        $contents = Cart::content();
        $cust_id = $request->customer_id;
        $customer = Customer::where('id',$cust_id)->first();
        return view('backend.invoice.product_invoice',compact('contents','customer'));

    } // End Method


}
