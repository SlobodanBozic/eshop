<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Product;
use DB;
use Illuminate\Support\Facades\Input;
use Auth;
use App\User;

class ProductController extends Controller
{
  /**
   * Create a new controller instance.
   *
   * @return void
   */
  public function __construct()
  {
      //$this->middleware('auth', ['except' => ['index','show']]);

  }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $title = "Home Page";
      $products = DB::table('products')->paginate(10);

      return view('pages.index')->with('products',$products)->with('title',$title);
    }

    public function getQuickView()
    {
      $product =  Product::findOrFail(Input::get('uid'));

      $user_id = $product->user_id;
      $user_data = DB::table('users')->where('id',$user_id)->first();

      $countOfPublishedbyUser = DB::table('products')->where('user_id',$user_id)->count();

      return view('inc.modal')->with('product',$product)->with('users',$user_data)->with(['total'=>$countOfPublishedbyUser]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $this->validate($request,
      [
        'title' => 'required',
        'description' => 'required',
        'list_price' => 'required',
        'price' => 'required',
        'product_image' => 'image|nullable|max:1999'
      ]);

      // Handle File Uplaoad
      if($request->hasFile('product_image')){

        // Get filename with the extension
        $fileNameWithExt = $request->file('product_image')->getClientOriginalName();

        // Get just fileName
        $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
        // Get just extension
        $extension = $request->file('product_image')->getClientOriginalExtension();
        //FileName to store
        $fileNameToStore = $fileName.'_'.time().'.'.$extension;
        // Upload Image
        $path = $request->file('product_image')->storeAs('public/product_images', $fileNameToStore);
      }else{
        $fileNameToStore = 'noImage.jpg';
      }

      // Create Product
      $product = new Product;
      $product->title = $request->input('title');
      $product->description = $request->input('description');
      $product->list_price = $request->input('list_price');
      $product->price = $request->input('price');
      $product->product_image = $fileNameToStore;
      $product->user_id = auth()->user()->id;
      $product->save();

      return redirect('dashboard')->with('success','Product Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::find($id);
        return view('products.show')->with('product',$product);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);

        // Check for correct user
        if(auth()->user()->id !== $product->user_id){
          return redirect('/')->with('error', 'Unauthorized Page');
        }
        return view('products.edit')->with('product', $product);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $this->validate($request,
      [
        'title' => 'required',
        'description' => 'required',
        'list_price' => 'required',
        'price' => 'required',
      ]);

      // Handle File Uplaoad
      if($request->hasFile('product_image')){

        // Get filename with the extension
        $fileNameWithExt = $request->file('product_image')->getClientOriginalName();
        // Get just fileName
        $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
        // Get just extension
        $extension = $request->file('product_image')->getClientOriginalExtension();
        //FileName to store
        $fileNameToStore = $fileName.'_'.time().'.'.$extension;
        // Upload Image
        $path = $request->file('product_image')->storeAs('public/product_images', $fileNameToStore);
      }

      // Create Product
      $product = Product::find($id);
      $product->title = $request->input('title');
      $product->body = $request->input('description');
      $product->list_price = $request->input('list_price');
      $product->price = $request->input('list_price');

        if($request->hasFile('product_image')){
          $product->product_image;
        }

      $product->save();
      return redirect('dashboard')->with('success','Product Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);

        // Check for correct user
        if(auth()->user()->id !== $product->user_id){
          return redirect('/dashboard')->with('error', 'Unauthorized Page');
        }
        if($product->product_image != 'noImage.jpg'){
          // Delete Image
          Storage::delete('public/product_images/'.$product->product_image);
        }
        $product->delete();
        return redirect('dashboard')->with('success','Product Removed');
    }
}
