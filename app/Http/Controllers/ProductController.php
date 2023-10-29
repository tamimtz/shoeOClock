<?php

namespace App\Http\Controllers;


use App\Models\Brand;
use App\Models\Product;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
   

        
       return view('base.products');
    }

    public function allProducts(){

        $products = Product::orderBy('id', 'desc')->paginate(10);

        

        return view('base.allProducts', compact(['products']));
    }
    /**
     * Show the form for creating a new resource.
     */

    public function menBrands() {

        

        $brandMen = Brand::all();
        
        
        $uniqueBrandIds = $brandMen->flatMap(function ($brand) {
            return $brand->products
                ->where('gender', 'men')
                ->pluck('brand_id');
        })->unique();
        
        

        $brands = Brand::whereIn('id', $uniqueBrandIds->toArray())->get();


        
        return view('base.menBrands', compact(['brands']));
        


        
    }

    public function menBrandsCategoriesNike() {

        return view('men.menBrandsCategoriesNike');
    }


    public function menHome(){

        $products = Product::where('gender', 'men')->paginate(10);

        return view('men.menHome', compact(['products']));

    } 


     //#################################################### CAtegory Wise Browsing #########################################################

     public function menTrainers() {

        $menTrainers = Product::where('subCategory', 'Trainers')->get();



        return view('men.menTrainers', compact(['menTrainers']));
    }


    public function nikeMenSports(){

        

    }


    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $check = $request->input('size');
        $euCheck = $request->input('euSize');

        return $euCheck . $check;
        
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $product = Product::find($id);

        $cart = Cart::content();

        $imageArray = explode(", ",$product->allImages);

       
       // return $imageArray;

        return view('base.viewProduct', compact(['product','imageArray','cart']));

        
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



 //     $product =Product::find(1);

    //    // $tag = tag::where('name', 'men')->first(); //get

    //     $tag = tag::find(1);

    //     foreach ($tag-> menProducts as $prod){
    //         echo $prod;
    //     }
    //    // return $tag;

    //    // $product->tags()->save($tag); //saving the tag 

    //    foreach ($product->tags as $men)

    //    echo $men->id;



    ////////////////////////////WOMEN SECTION //////////////////////////////

    public function womenBrands() {

        $brandWomen = Brand::all();
        
        
        $uniqueBrandIds = $brandWomen->flatMap(function ($brand) {
            return $brand->products
                ->where('gender', 'women')
                ->pluck('brand_id');
        })->unique();
        
        

        $brands = Brand::whereIn('id', $uniqueBrandIds->toArray())->get();


        
        return view('base.womenBrands', compact(['brands']));
        
    

        
    }

}