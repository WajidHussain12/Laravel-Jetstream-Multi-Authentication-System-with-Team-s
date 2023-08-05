<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\item;
use App\Models\Product;
use BaconQrCode\Renderer\Path\Move;
use Illuminate\Http\Request;

class SellerController extends Controller
{
    public function sellerdashboard()
    {
        return view('layouts.seller');
    }

    public function productquantity()
    {
        return view('components.sellercomponents.sellerregister');
    }

    public function seller_dashboard_main()
    {
        return view('components.sellercomponents.sellerdashboardmain');
    }


    public function category_list()
    {
        $category = Category::all();
        return view('components.sellercomponents.showcategories', compact('category'));
    }


    public function addproduct()
    {
        $category = Category::all();
        $category_item_name = item::all();
        return view('components.sellercomponents.addproduct',compact('category','category_item_name'));
    }

    public function insertproduct(Request $request)
    {
        $product = new Product();
        if ($request->hasfile('prod_image')) {
            $file = $request->file('prod_image');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;
            $file->move('assets/uploads/products', $filename);
            $product->prod_image =  $filename;


        }


        $product->cat_id = $request->input('catid');
        $product->prod_name = $request->input('prod_name');
        $product->prod_small_description = $request->input('prod_small_description');
        $product->prod_long_description = $request->input('prod_long_description');
        $product->original_price = $request->input('original_price');
        $product->selling_price = $request->input('selling_price');
        $product->prod_qty = $request->input('prod_qty');
        $product->prod_tax = $request->input('prod_tax');
        $product->prod_status = $request->input('prod_status');
        $product->prod_trending = $request->input('prod_trending');
        $product->prod_meta_title = $request->input('prod_meta_title');
        $product->prod_meta_keywords = $request->input('prod_meta_keywords');
        $product->prod_meta_description = $request->input('prod_meta_description');
        $product->save();
        return redirect()->route('manageproducts')->with('status','Product Added Successfully');
    }


    public function manageproducts(){
        $product = Product::all();
        return view ('components.sellercomponents.manageproducts',compact('product'));
    }
}
