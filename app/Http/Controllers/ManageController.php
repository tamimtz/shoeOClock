<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ManageController extends Controller
{
    /**
     * Display a listing of the resource.
     */


    public function __construct() {
        $this->middleware('auth');
    } 

    public function index()
    {
        //
    }



    public function manageProducts(){


        $products = count(Product::all());

        

        return view('admin.manageProducts', compact(['products']));
    }
    
    public function newProduct() {

        return view('admin.newProduct');
    }



    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $brands = Brand::all();

        return view('admin.addProducts', compact(['brands']));
    }

    public function newShoes(){

        return view('admin.addShoes');
    }

    public function newWatches(){


        $brands = Brand::all();
        return view('admin.addWatches', compact(['brands']));
    }

    public function newGarments(){
        $brands = Brand::all();

        return view('admin.addGarments', compact(['brands']));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

       
       
       
        
     $request->validate([

        'productName' => ['required','min:5' ,'max:100'],
        'thumbnail' => ['required'],
        'googleProductId' => ['required', 'numeric'],
        'gender' => ['required'],
        'category' => ['required'],
        'subCategory' => ['required'],
        'color'=> ['required'],
        'euSize' =>['required'],
        'size'=>['required'],
        'descriptionTitle' => ['required'],
        'description' => ['required'],
        'brand_id' =>['required'],
         'd_price' => ['numeric', 'gt:0'],
        

       ]);
        
     
      
       try{

        if($request->hasfile('thumbnail')){
            $image = $request->file('thumbnail');
            $imageName = $image->getClientOriginalName();
            Storage::disk('public')->putFileAs('images/products/thumbnails', $image, $imageName);
        }

        if($request->hasFile('images')){

            $allImages = [];

            foreach($request->file('images') as $singleImage ){

                $singleImageName = time() . '_' . $singleImage->getClientOriginalName();

                Storage::disk('public')->putFileAs('images/products/shoes', $singleImage, $singleImageName);


                $allImages[]= $singleImageName; //getting all image name into the array 
            }
        }


        // gotta convert the array to sting if i want to save it on the database 
        $allImagesString = implode(', ', $allImages);

        //converting array data to string for database store for shoe sizes

        $size = implode(',', $request->input('size'));
        $euSize = implode(',', $request->input('euSize'));

        $discount =  $request->input('d_price');
        

        Product::create([
            'productName' => $request->input('productName'),
            'thumbnail' => $imageName,
            'price' => $request->input('price'),
            'discount_price' => $discount,
            'googleProductId' => $request->input('googleProductId'),
            'gender' => $request->input('gender'),
            'category' => $request->input('category'),
            'subCategory' => $request->input('subCategory'),
            'color'=> $request->input('color'),
            'sizeUk' =>$size,
            'sizeEu'=>$euSize,

            'descriptionTitle' => $request->input('descriptionTitle'),
            'description' => $request->input('description'),
            'specification' => $request->input('specification'),
            'allImages' => $allImagesString,
            'brand_id' => $request->input('brand_id'),
            
    
         ]);


         return redirect()->route('manage.create')->with('msg', 'Product Added Successfully ');

        } catch(\Exception $e) {
            return redirect()->back()->with('msg', 'Failed ! Could Not Add The Product');
        }


       

    

    }


    // new watch entry 

    public function storeWatches(Request $request)
    {

        
       
       
        
     $request->validate([

        'productName' => ['required','min:5' ,'max:100'],
        'thumbnail' => ['required'],
        'googleProductId' => ['required', 'numeric'],
        'gender' => ['required'],
        'category' => ['required'],
        'subCategory' => ['required'],
        'color'=> ['required'],
        // 'euSize' =>['required'],
        'size'=>['required'],
        'descriptionTitle' => ['required'],
        'description' => ['required'],
        'brand_id' =>['required'],
         'd_price' => ['numeric', 'gt:0'],
        

       ]);
        
       
      
       try{

        if($request->hasfile('thumbnail')){
            $image = $request->file('thumbnail');
            $imageName = $image->getClientOriginalName();
            Storage::disk('public')->putFileAs('images/products/thumbnails', $image, $imageName);
        }

        if($request->hasFile('images')){

            $allImages = [];

            foreach($request->file('images') as $singleImage ){

                $singleImageName = time() . '_' . $singleImage->getClientOriginalName();

                Storage::disk('public')->putFileAs('images/products/watches', $singleImage, $singleImageName);


                $allImages[]= $singleImageName; //getting all image name into the array 
            }
        }


        // gotta convert the array to sting if i want to save it on the database 
        $allImagesString = implode(', ', $allImages);

        //converting array data to string for database store for shoe sizes

        $size = implode(',', $request->input('size'));
       

        $discount =  $request->input('d_price');
        

        Product::create([
            'productName' => $request->input('productName'),
            'thumbnail' => $imageName,
            'price' => $request->input('price'),
            'discount_price' => $discount,
            'googleProductId' => $request->input('googleProductId'),
            'gender' => $request->input('gender'),
            'category' => $request->input('category'),
            'subCategory' => $request->input('subCategory'),
            'color'=> $request->input('color'),
            'sizeUk' =>$size,
            'sizeEu'=>0,

            'descriptionTitle' => $request->input('descriptionTitle'),
            'description' => $request->input('description'),
            'specification' => $request->input('specification'),
            'allImages' => $allImagesString,
            'brand_id' => $request->input('brand_id'),
            
    
         ]);
         

         return redirect()->route('manage.newWatches')->with('msg', 'Product Added Successfully ');

        } catch(\Exception $e) {
            return redirect()->back()->with('msg', 'Failed ! Could Not Add The Product');
        }


       

    

    }
// Store Garments items //

public function storeGarments(Request $request)
    {

        
       
       
        
     $request->validate([

        'productName' => ['required','min:5' ,'max:100'],
        'thumbnail' => ['required'],
        'googleProductId' => ['required', 'numeric'],
        'gender' => ['required'],
        'category' => ['required'],
        'subCategory' => ['required'],
        'color'=> ['required'],
        // 'euSize' =>['required'],
        'size'=>['required'],
        'descriptionTitle' => ['required'],
        'description' => ['required'],
        'brand_id' =>['required'],
         'd_price' => ['numeric', 'gt:0'],
        

       ]);
        
       
      
       try{

        if($request->hasfile('thumbnail')){
            $image = $request->file('thumbnail');
            $imageName = $image->getClientOriginalName();
            Storage::disk('public')->putFileAs('images/products/thumbnails', $image, $imageName);
        }

        if($request->hasFile('images')){

            $allImages = [];

            foreach($request->file('images') as $singleImage ){

                $singleImageName = time() . '_' . $singleImage->getClientOriginalName();

                Storage::disk('public')->putFileAs('images/products/garments', $singleImage, $singleImageName);


                $allImages[]= $singleImageName; //getting all image name into the array 
            }
        }


        // gotta convert the array to sting if i want to save it on the database 
        $allImagesString = implode(', ', $allImages);

        //converting array data to string for database store for shoe sizes

        $size = implode(',', $request->input('size'));
       

        $discount =  $request->input('d_price');
        

        Product::create([
            'productName' => $request->input('productName'),
            'thumbnail' => $imageName,
            'price' => $request->input('price'),
            'discount_price' => $discount,
            'googleProductId' => $request->input('googleProductId'),
            'gender' => $request->input('gender'),
            'category' => $request->input('category'),
            'subCategory' => $request->input('subCategory'),
            'color'=> $request->input('color'),
            'sizeUk' =>$size,
            'sizeEu'=>0,

            'descriptionTitle' => $request->input('descriptionTitle'),
            'description' => $request->input('description'),
            'specification' => $request->input('specification'),
            'allImages' => $allImagesString,
            'brand_id' => $request->input('brand_id'),
            
    
         ]);
         

         return redirect()->route('manage.newWatches')->with('msg', 'Product Added Successfully ');

        } catch(\Exception $e) {
            return redirect()->back()->with('msg', 'Failed ! Could Not Add The Product');
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
