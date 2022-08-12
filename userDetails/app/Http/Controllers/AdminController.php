<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\invoice;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    protected $product;
    public function dashboard()
    {
        return view('admin.dashboard.dashboard');
    }

    public function addProduct()
    {
        return view('admin.dashboard.add');
    }

    public function newProduct(Request $request)
    {
        Product::createProduct($request);
        return back()->with('message', 'Product Saved Successfully');
    }

    public function manageProduct()
    {
        return view('admin.dashboard.manage', [
            'products' => Product::orderBy('created_at', 'DESC')->get(),
            ]);
    }
    public function updateProduct($id)
    {
        return view('admin.dashboard.edit', [
            'product' => Product::find($id),
            ]);
    }
    public function updateProductInfo(Request $request, $id)
    {
        Product::updateProduct($request, $id);
        return redirect('/manage-product')->with('message', 'Product Updated Successfully');
    }

    public function deleteProduct($id)
    {
        $this->product = Product::find($id);
        if ($this->product->image) {
            unlink($this->product->image);
        }
        $this->product->delete();
        return back()->with('message', 'Product Updated Successfully');
    }

    public function seeBILL()
    {
        return view('admin.dashboard.bills');
    }

    public function createBILL(Request $request){
        $cb1 =new invoice;
        $cb1->Patient=$request->input('Patient');
        $cb1->Referred_by=$request->input('Referred_by');
        $cb1->Bill_date=$request->input('Bill_date');
        $cb1->Delivery_date=$request->input('Delivery_date');
        $cb1->Delivery_time=$request->input('Delivery_time');
        $cb1->Remarks=$request->input('Remarks');
        $cb1->Sub_total=$request->input('Sub_total');
        $cb1->Tax=$request->input('tax2');
        $cb1->Discount=$request->input('Discount_Bill');
        $cb1->Net_Payable=$request->input('Net_Payable');
        $cb1->Received_Ammount=$request->input('Received_Ammount');
        $cb1->Pay_Via=$request->input('Pay_Via');
        $cb1->Remarks2=$request->input('Remarks2');
        $cb1->save();
         
        //echo "Hello";
        return view('billNxtPg');
       
    }

    public function billNxtPg(){

        return view('billNxtPg');
    }


   


    
}
