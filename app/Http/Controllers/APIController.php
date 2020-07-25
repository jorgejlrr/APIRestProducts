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
                'error' => $exception->getMessage(),
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
                'error' => $exception->getMessage(),
                'msg' => 'Ocurrio un error al momento de la consulta. Intente nuevamente en unos minutos'
            ],500);
        }
    }

    public function APICreateProduct(Request $request)
    {
        try {
            $product = new Product;
            $product->prod_name = $request->prod_name;
            $product->prod_price = $request->prod_price;
            $product->prod_cat = $request->prod_cat;
            $product->save();
            return response()->json($product,201);
        } catch (Exception $exception) {
            return response()->json([
                'error' => $exception->getMessage(),
                'msg' => 'Ocurrio un error al momento del registro. Intente nuevamente en unos minutos'
            ],500);
        }
    }

    public function APIUpdateProduct($id, Request $request)
    {
        try {
            $product = Product::find($id);
            if (!empty($product)) {
                $product->update($request->all());
                return response()->json($product,200);
            } else {
                return response()->json([
                    'msg' => 'Producto no encontrado'
                ],404);
            }
            
        } catch (Exception $exception) {
            return response()->json([
                'error' => $exception->getMessage(),
                'msg' => 'Ocurrio un error al momento de actualizar el registro. Intente nuevamente en unos minutos'
            ],500);
        }
    }

    public function APIDeleteProduct($id)
    {
        try {
            $product = Product::find($id);
            if (!empty($product)) {
                $product->delete();
                return response()->json([
                    'msg' => 'Producto eliminado correctamente'
                ],200);
            } else {
                return response()->json([
                    'msg' => 'Producto no encontrado'
                ],404);
            }
        } catch (Exception $exception) {
            return response()->json([
                'error' => $exception->getMessage(),
                'msg' => 'Ocurrio un error al momento de eliminar el registro. Intente nuevamente en unos minutos'
            ],500);
        }
    }
    
}
