<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductCategoryController extends Controller
{
    public function create(Request $request){
       $attribute = $request->except('_token');
       $tableName = $request->get('table');
       if($tableName=='categories'){
            $message = Category::create($attribute);
       }
       else{
            $message =  Product::create($attribute);            
       }
              
      return redirect()->back();

    }

    public function update(Request $request){
        // dd('test');

        $attribute =["name"=>'wow'];
        // dd( $attribute);
        $tableName = 'categories';
        $rowId = 1 ;
        if($tableName=='categories'){
             $response = Category::find($rowId);
            $response->update($attribute);
            return response(['message'=>'done']);
        }
        else{
            //  $message =  Product::create($attribute);            
        }
               
       return redirect()->back();
 
     }
    
}
