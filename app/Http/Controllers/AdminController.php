<?php

namespace App\Http\Controllers;

use App\Models\Catagory;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
class AdminController extends Controller
{
    //Handelling catagory view
    public function view_catagory(){
        $data = Catagory::all();
        return view('admin.catagory',compact('data'));
    }

    // Adding catagory
    public function add_catagory(Request $request){
        $data = new Catagory;
        $data->catagory_name = $request->catagory_name;
        $data->save();
        return redirect()->back()->with('message','Catagory Added Successfully');
    }
    // Adding product
    public function add_product(Request $request){
        $product = new Product;

        $product->title = $request->title;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->quantity = $request->quantity;
        $product->discount_price = $request->discount_price;
        $product->catagory = $request->catagory;

        $image = $request->image;
        $imageName = "IMG-".uniqid().'.'.$image->getClientOriginalExtension();
        $request->image->move('product',$imageName);

        $product->image = $imageName;

        $product->save();
        return redirect()->back()->with('message','Product Added Successfully');
    }

    // Deleting cagagory
    public function delete_catagory($id){
        $data = Catagory::find($id);
        $data->delete();
        return redirect()->back()->with('message','Catagory Deleted Successfully');
    }
    // Deleting product
    public function delete_product($id){
        $data = Product::find($id);
        // Deleting old image
        $oldImagePath = "product/".$data->image;
        if(File::exists($oldImagePath)){
            File::delete($oldImagePath);
        }
        $data->delete();
        return redirect()->back()->with('message','Product Deleted Successfully');
    }
    // Updating the product
    public function update_product($id){
        $product = Product::find($id);
        $catagory = Catagory::all();
        return view('admin.update_product',compact('product','catagory'));
    }

    // Adding and viewing products
    public function view_product(){
        $catagory = Catagory::all();
        return view('admin.products',compact('catagory'));
    }

    // saving updated data of product
    public function save_update_product(Request $request,$id){
        $product = Product::find($id);
        $catagory = Catagory::all();
        $product->title = $request->title;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->quantity = $request->quantity;
        $product->discount_price = $request->discount_price;
        $product->catagory = $request->catagory;

        $image = $request->image;
        if ($image) {
            $imageName = "IMG-".uniqid().'.'.$image->getClientOriginalExtension();
            $request->image->move('product',$imageName);
            // Deleting old image
            $oldImagePath = "product/".$product->image;
            if(File::exists($oldImagePath)){
                File::delete($oldImagePath);
            }
            $product->image = $imageName;
        }

        $product->save();
        return redirect()->back()->with('message','Product Updated Successfully');
    }
    public function show_product(){
        $product = Product::all();
        return view('admin.show_product',compact('product'));
    }

    public function view_orders(){

        $order = Order::all();
        return view('admin.orders',compact('order'));
    }

    public function delivered($id)
    {
        $order = Order::find($id);
        $order->delivery_status = "Delivered";
        $order->payment_status = "Paid";
        $order->save();
        return redirect()->back()->with('message','Delivery status Updated Successfully');
    }

}
