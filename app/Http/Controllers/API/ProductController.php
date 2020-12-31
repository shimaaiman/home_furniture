<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Product;
use Illuminate\Http\Request;
use \Validator;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::select('id','name','price','code')->where('price','>','50')->get();
        $count = count($products);

        return Response([
            'status' => 'success',
            'count' => $count,
            'data' => $products

        ]);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'name' => 'required|max:50',
            'code'=>'required|unique:products|integer',
            'body' => 'required',
            'category_id' => 'required|integer',
            
        ];


        $messages = [
            'name.required' => 'The Post title field should be entered',
            'name.max' => 'Title should not be more than 50 character',
            'code.unique' => 'Post code should not duplicated'
        ];

        $validator = Validator::make($request->all(),$rules,$messages);
        
        if($validator->fails()){
            return Response([
                'status' => 'error',
                'errors' => $validator->errors()
            ]);
        }

        $product = Product::Create([
            'name' => $request -> name,
            'body' => $request -> body,
            'description' => $request-> description,
            'price' => $request -> price,
            'code' => $request -> code,
            'category_id' => $request -> category_id,

        ]);

        return Response([
            'status' => 'product crated successfully',
            'product' => $product

        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return Response([
            'status' => 'success',
            'date' => $product 
        ]);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $rules = [
            'name' => 'required|max:50',
            'code'=>'required|unique:products|integer',
            'body' => 'required',
            'category_id' => 'required|integer',
            
        ];


        $messages = [
            'name.required' => 'The Post title field should be entered',
            'name.max' => 'Title should not be more than 50 character',
            'code.unique' => 'Post code should not duplicated'
        ];

        $validator = Validator::make($request->all(),$rules,$messages);
        
        if($validator->fails()){
            return Response([
                'status' => 'error',
                'errors' => $validator->errors()
            ]);
        }


        $product -> name = $request -> name;
        $product -> body => $request -> body,
        $product -> description = $request -> description;
        $product -> price = $request -> price;
        $product -> code = $request -> code;
        $product -> category_id = $request -> category_id;

        $product -> save();

        return Response([
            'status' => 'product updated successfully',
            'product' => $product'body' => $request -> body,

        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product -> delete();

        return Response([
            'status' => 'product deleted successfully',
            'data' => $product
        ]);
    }
}
