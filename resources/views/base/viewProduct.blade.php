@extends('layouts.app')

@section('content')



@if(session('msg'))

    <div class="alert">
        <p class="alert alert-success">
            {{ session('msg') }}
        </p>
    </div> 
@endif

<div class="container">
    <div class="row">
        <div class="col-md">
            <a class="path" href="{{ route('home') }}">home</a>/
            <a class="path" href="{{ route('products.allProducts') }}">allProducts</a>/
            

            
            <a class="path" href="{{ route('products.menHome') }}">{{ $product->gender }}</a>/

            <a class="path" href="{{ route('products.show', $product->id) }}">{{ $product->productName}}</a>        
    
        </div>

        
    </div>

    
</div>




<div class="container">
    <div class="row mt-5">
        <div class="container col-md-4">
            <div class="container-mainImage ">
                <img id="main" class="main" src="{{ asset('/storage/images/'.$product->thumbnail) }}"   alt="">
            </div>
            <div class="container-smallImage">
                <div class="row mt-3">
                    @foreach ($imageArray as $index => $image)
                
                        <div class="extraImage">
                            <img id="extra{{ $index }}" class="extra" src="{{ asset('/storage/images/'.$image) }}"   alt=""> 
                        </div>
                        
                        
                        
                    @endforeach
                </div>
                
            </div>
            
        </div>

        <div class="container  col-5 me-1">
            <div class="container">
                <h1>{{ $product->productName }}</h1><br>
                <h2> ৳ {{ $product->price }}.00</h2><br>
                <h5>{{$product->descriptionTitle}}</h5>
                <p>{{ $product->description }}</p>
                {{-- <a href="{{ route('cart.addProductToCart', $product->id) }}">
                    <button class="btn btn-dark">Add To Cart</button>
                </a> --}}
                
            </div>
            <div class="container">

                @if($cart->where('id', $product->id)->count())
                    <div class="col-3">
                        <a href="{{ route('cart.index') }}">
                            <button class="btn btn-dark">In Cart</button>
                        </a>
                        
                    </div>
                @else
               
            
                    <form action="{{ route('cart.store') }}" method="post">
                        @csrf
                        <div class="row mt-2">
                            <div class="hidden">
                                <input type="hidden" name="product_id" value="{{ $product->id }}">
                            </div>

                            <div class="col-1 mt-1">
                                <label for="size">Size</label>
                            </div>
                            {{-- <div class="col-4">
                                <select class="form-control" name="size" id="">
                                    <option value="0">select size</option>
                                    <option value="1">8.5 UK</option>
                                    <option value="2">8.5 UK</option>
                                </select>
                            </div> --}}
                            
                        </div>
                        <div class="row mt-2">
                            <div class="col-2 mt-1">
                                <label for="">Quantity</label>
                            </div>
                            <div class="col-2">
                                <input name="quantity" class="form-control" type="number" value="1">
                            </div>

                            
                            
                            <div class="col-3">
                                <button type="submit" class="btn btn-dark">Add To Cart</button>
                            </div>
                        </div>

                        
                            
                    </form>
                @endif
        </div>
        

    </div>
</div>




<script src="{{ asset('scripts/viewProductZoom.js') }}" ></script>

<script>
        // Get all elements with the class 'extraImage'
        const extraImages = document.querySelectorAll('.extraImage');

        // Get the main image element
        const mainImage = document.getElementById('main');

        // Add a click event listener to each 'extraImage' element
        extraImages.forEach((extraImage, index) => {
            extraImage.addEventListener('click', () => {
                // Get the clicked image's src attribute
                const clickedImageSrc = extraImage.querySelector('img').src;

                // Set the main image's src attribute to the clicked image's src
                mainImage.src = clickedImageSrc;
            });
        });
    </script>


    
@endsection