<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Exception;

class APIController extends Controller
{

    public function APIListProducts()
    {
        try {
            $products = Product::select('prod_id','prod_name','prod_price','cat_name')
                            ->join('categories','categories.cat_id','products.prod_cat')
                            ->get();
            return response()->json($products,200);
        } catch (Exception $exception) {
            return response()->json([
                'error' => true,
                'msg' => 'Ocurrio un error al momento de la consulta. Intente nuevamente en unos minutos'
            ],500);
        }
    }

    public function APIGetProduct($id)
    {
        try {
            $product = Product::select('prod_id','prod_name','prod_price','cat_name')
                            ->join('categories','categories.cat_id','products.prod_cat')
                            ->where('products.prod_id',$id)
                            ->first();
            if(!empty($product)){
                return response()->json($product,200);
            } else {
                return response()->json([
                    'msg' => 'Producto no encontrado'
                ],404);
            }
        } catch (Exception $exception) {
            return response()->json([
                'error' => true,
                'msg' => 'Ocurrio un error al momento de la consulta. Intente nuevamente en unos minutos'
            ],500);
        }
    }

    public function APICreateProduct(Request $request)
    {
        
    }
    
}
