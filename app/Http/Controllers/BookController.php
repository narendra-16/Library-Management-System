<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Product;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    $products=Product::get();
    return view ('products.index',['products'=>$products]);    
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {    
    return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    // Process to validate data 
     $request->validate([
     'id'=> 'required',
    'name'=>'required',
    'author'=>'required',
    'role'=>'required'
]); 
    // Code to insert data into database 
    $product=new Product;
    $product->id=$request->id;
    $product->name=$request->name;
    $product->author=$request->author;
    $product->role=$request->role;
    $product->save();
    return back()->withSuccess('Data has entered successfully');
    }

   
    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id){
    $products=Product::where('id',$id)->first();
    return view ('products.edit',['products'=>$products]);
    }
    public function update (Request $request,$id){    
    // Process to validate data 
    $request->validate([
     'id'=> 'required',
    'name'=>'required',
    'author'=>'required',
    'role'=>'required'
]); 
    $product=Product::where('id',$id)->first();
    $product->id=$request->id;
    $product->name=$request->name;
    $product->author=$request->author;
    $product->role=$request->role;
    $product->save();
    return back()->withSuccess('Data has updated successfully'); 
    }
    public function destroy ($id){
    $product=Product::where('id',$id)->first();
    $product->delete();
    return back()->withSuccess('Data has deleted successfully');
    }      
}
