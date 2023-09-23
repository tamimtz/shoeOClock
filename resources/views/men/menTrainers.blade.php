@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        @include('base.sidebarCategories')

        <div class="col">
            
            @foreach ($menTrainers as $product)

                <div class="col-md-4">
                    <a class="nav-link" href="{{ route('products.show', $product->id ) }}">
                        <div class="card-category">
                            <div class="shoe-container">
                                <img src="{{ url('/storage/images/'.$product->thumbnail) }}"  alt="...">
    
                            </div>
                        
                            <h5 class="card-title">
                                {{ $product->productName }}
                            </h5>
                            <p class="price-tag" >
                                ৳  {{ $product->price}} 
                            </p>
                        </div>
                    </a>
                
                </div>
            @endforeach
            </div>
        </div>

    </div>


</div>



    
    
@endsection