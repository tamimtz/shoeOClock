<?php

namespace App\Http\Controllers;

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

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.addProducts');
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
        'sizeUK' =>['required'],
        'sizeEU'=>['required'],
        'descriptionTitle' => ['required'],
        'description' => ['required'],
        

       ]);



      try{

        if($request->hasfile('thumbnail')){
            $image = $request->file('thumbnail');
            $imageName = $image->getClientOriginalName();
            Storage::disk('public')->putFileAs('images', $image, $imageName);
        }

        if($request->hasFile('images')){

            $allImages = [];

            foreach($request->file('images') as $singleImage ){

                $singleImageName = time() . '_' . $singleImage->getClientOriginalName();

                Storage::disk('public')->putFileAs('images', $singleImage, $singleImageName);


                $allImages[]= $singleImageName; //getting all image name into the array 
            }
        }


        // gotta convert the array to sting if i want to save it on the database 
        $allImagesString = implode(', ', $allImages);


        Product::create([
            'productName' => $request->input('productName'),
            'thumbnail' => $imageName,
            'price' => $request->input('price'),
            'googleProductId' => $request->input('googleProductId'),
            'gender' => $request->input('gender'),
            'category' => $request->input('category'),
            'subCategory' => $request->input('subCategory'),
            'color'=> $request->input('color'),
            'sizeUk' =>$request->input('sizeUK'),
            'sizeEu'=>$request->input('sizeEU'),
            'descriptionTitle' => $request->input('descriptionTitle'),
            'description' => $request->input('description'),
            'specification' => $request->input('specification'),
            'allImages' => $allImagesString,
    
         ]);


         return redirect()->route('manage.create')->with('msg', 'Product Added Successfully ');

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
