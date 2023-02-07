<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Products;
class testController extends Controller
{
    

    public function insertform(){
        return view('welcome');
        }
     public function insert(Request $request){
        $products = new Products;
        $products->nume = $request->fnume;
        $products->descriere = $request->descriere;
        $products->pret = $request->pret;
        $products->save();
        return redirect('productData');
       
        } 



        function DataTableIndex(){
        $productData = Products::all();
        return view('DataTable',['productData'=>$productData]);
       
        }
}

