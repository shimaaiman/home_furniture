<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Product;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Session;
use App\category;



class productCont extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        // Session::put('course','STW');
        // // dd(Session::get('course'));
        // if(Session::has('course')){
        //     // dd('session course found');
        // }
        
        $products=Product::paginate(5);
        
        return view('dashboard.product.index',compact('products'));
        
        
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $categories = category::all();
        // $products=Product::all();
        return view('dashboard.product.create',compact('categories'));

        
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
            'post_image' => 'required|mimes:jpeg,png,bmp,jpg'
            
        ];


        $messages = [
            'name.required' => 'The Post title field should be entered',
            'name.max' => 'Title should not be more than 50 character',
            'code.unique' => 'Post code should not duplicated'
        ];

        $validator = Validator::make($request->all(),$rules,$messages);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator->errors())->withInput();
        }


        $product=new Product();
        $product->name=$request->name;
        $product->description=$request->body;
        $product->price=$request->price;
        $product->code = $request->code;
        $product->category_id=$request->category_id;
        $productImage = $request->file('product_image');
        $fileName = time().'.'.$productImage->extension();
        $productImage->move('product_images',$fileName);
        $product->feature_image = $fileName;
        $product->large_image = $fileName;
        $product->save();
        return redirect()->route('dashboard.product.index')->with('success','Product created successffuly');
        // return redirect()->route('route.name');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $categories = Category::all();
        return view('dashboard.product.edit',compact('product','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, product $product)
    {
        $product->name=$request->name;
        $product->description=$request->body;
        $product->price=$request->price;
        $product->category_id=$request->category_id;
        $product->save();

        return redirect()->route('dashboard.product.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(product $product)
    {
        $product->delete();
        return redirect()->route('dashboard.product.index');
    }
}
