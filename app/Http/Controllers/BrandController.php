<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $brands = count(Brand::all());
        
        $products = count(Product::all());

        // return $products;

        return view('admin.brand.brandIndex', compact(['brands', 'products']));

        

    }

    public function brands() {
        $brands = Brand::all();

        

        return view('admin.brand.brandAll', compact(['brands']));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.brand.brandCreate');
    }



    ##############################Dynamic Brand Categories ###################

    public function dynamicBrandCategoriesMen(string $id){

        // $brand = Brand::findOrFail($id);

        // $subCategories = $brand->products->pluck('subCategory')->unique();


        // //return $subCategories;
        

        // return view('base.dynamicBrandCategoriesMen', compact(['subCategories']));

        $brand = Brand::find($id);

        if (!$brand) {
            return view('brand.not_found', compact('id'));
        }

        // Use the Eloquent relationship to access the related products
        $products = $brand->products;

        // Initialize arrays to store categories and thumbnails
        $categories = [];
        $thumbnails = [];

        foreach ($products as $product) {
            // Retrieve the category and thumbnail for each product
            $categories[] = $product->subCategory;
            $thumbnails[] = $product->thumbnail;
        }

        // Ensure that categories and thumbnails are unique
        $uniqueCategories = array_unique($categories);
        $uniqueThumbnails = array_unique($thumbnails);

        return view('base.dynamicBrandCategoriesMen', compact('brand', 'uniqueCategories', 'uniqueThumbnails'));
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([

            'brandName' => ['required','min:1', 'max:20'],
            'thumbnail' => ['required'],
        ]);


        

        try{

            if($request->hasfile('thumbnail')){
                $image = $request->file('thumbnail');
                $imageName = time() . '_' . $image->getClientOriginalName();
                Storage::disk('public')->putFileAs('images', $image, $imageName);
            }

            Brand::create([

                'brandName' => $request->input('brandName'),
                'brandImage' => $imageName,
            ]);

            return redirect()->route('brand.index')->with('msg', 'New Brand Added Successfully');
            
    
        } catch(\Exception $e) {
            return redirect()->back()->with('msg', 'Failed ! Could Not Add The Brand');
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
