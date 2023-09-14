@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row">
        <div class="col">
            <a class="path" href="{{ route('home') }}">home</a>/
            <a class="path" href="{{ route('products.allProducts') }}">allProducts</a>/
            

            
            <a class="path" href="{{ route('products.menHome') }}">{{ $product->gender }}</a>/

            <a class="path" href="{{ route('products.show', $product->id) }}">{{ $product->productName}}</a>        
    
        </div>

        
    </div>

    
</div>


<div class="container">
    <div class="row mt-5">
        <div class="container col-4">
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
            </div>
            <div class="container col-4">
                <button class="btn btn-dark">Add To Cart</button>
            </div>
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