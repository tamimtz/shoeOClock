@extends('layouts.app')
@section('content')

@include('base.sidebarCategories')
@include('base.menBrands')

{{-- ################### obsolete but can use later ############# --}}


{{-- <div class="col-9">  
    <div class="container mt-5">
        <div class="row">
            @foreach ($products as $product)

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
</div>   --}}
@endsection