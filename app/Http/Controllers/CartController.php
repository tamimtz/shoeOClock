<?php

namespace App\Http\Controllers;


use App\Models\Product;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   

        

        $cart = Cart::content();
        $cartTotal = 0;
        foreach($cart as $item){

            
            $item->id;

            $product = Product::findOrFail($item->id);

            $thumbnails[] =  $product->thumbnail;
            $cartTotal += $item->subtotal;
        } 
        
        if (empty($thumbnails) || empty($cart)) {
            // Code to execute if $thumbnails is null or $cart is empty

            return view('cart.emptyCart');
        } else {
            return view('cart.cartView', compact(['cart', 'thumbnails','cartTotal']));
            // Code to execute if neither $thumbnails is null nor $cart is empty
        }
        

        

       
    }



    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    public function checkout() {

        return view('cart.checkout');
    }


    public function store(Request $request) {

        $product = Product::findOrFail($request->input('product_id'));

        $cart = Cart::add(
            $product->id, 
            $product->productName, 
            $request->input('quantity'),
            $product->price, 


        );

        return redirect()->back()->with('msg', 'added to cart');
    }


    public function addProductToCart(Request $request) {


        $request->validate(
            ['size' => ['required', 'not_in:0']],
            ['size.not_in' => 'Please Select A Valid Size.']
    );



        $product = Product::findOrFail($request->input('product_id'));


        return $product;

        $cart = session()->get('cart',[]);

        if (isset($cart[$product->id])) {
            $cart[$product->id]['quantity']++;
        } else {
            $cart[$product->id] = [
                "name" => $product->productName,
                "quantity" => 1,
                "price" => $product->price,
                "image" => $product->thumbnail,
            ];
        }

       

        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'product added To Cart');
    } 
    /**
     * Store a newly created resource in storage.
     */
    // public function store(Request $request)
    // {
        
    //     $request->validate([

    //         'size' => ['required', 'not_in:0']
    //     ],
        
    //     [
    //         'size.not_in' => 'Please Select A Valid Size.'
    //     ]);

    //     $product = Product::find($request->input('productId'));

      
              

        
    //     try{
    //      $cartItem = new cart([
    //         'product_id' => $product->id,
    //          'productName'=> $product->productName,
    //          'price'=> $product->price,
    //          'quantity' => $request->input('quantity'),
    //          'size' => $request->input('size'), 
    //      ]);

    //      $cartItem->save();

    //      return redirect()->back()->with('msg', $cartItem);


    //     } catch(\Exception $e){

    //         return redirect()->back()->with('msg', 'Add to cart Failed');

    //     }
        
        
        
        
       
    // }

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
        Cart::remove($id);

        return redirect()->back()->with('dlt', 'Item Removed From Cart');
    }
}
