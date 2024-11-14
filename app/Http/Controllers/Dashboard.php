<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\Products_Details;
use Illuminate\Support\Facades\DB;

class Dashboard extends Controller
{
    public function index(Request $request)
    {
        return view('dashboard.index');
    }

    public function products()
    {
        $prod = Products::All();
        return view('dashboard.products', ['prod' => $prod]);
    }

    public function create_newproducts(Request $request)
    {
        $prod = Products::create([
            'name' => $request->productname,
            'Description' => $request->description,
        ]);

        $prod->save();
        return Redirect()->route('products');
    }

    public function delete()
    {
        $id = $_GET['id_product'];
        $p = products::find($id);
        $p->delete();
    }
    public function update(Request $request)
    {
        products::where('id', $request->id)
            ->update(['name' => $request->name, 'Description' => $request->description]);
        return redirect()->route('products');
    }
    public function edit($id)
    {
        $products = products::find($id);
        return view('dashboard.edit', ['products' => $products]);
    }
    public function create_new_details(Request $request)
    {

        $product_details = Products_Details::Create([
            'id_products' => $request->product_no,
            'price' => $request->price,
            'color' => $request->color,
            'qty' => $request->qty,
            'image' => $request->img
        ]);
        $product_details->save();
        return redirect()->route('showdet');
    }

    public function showproduct_details()
    {
        $prod = products::All();
        $producdetails = DB::table('products')
            ->join('products__details', 'products.id', '=', 'products__details.id_products')
            ->get();
        return view('dashboard.product_details', ['prod' => $prod, 'producdetails' => $producdetails]);
    }
}
