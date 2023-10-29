@extends('layouts.app')

@section('content')
    
<div class="admin-panel-header container">
    <h1>Manage Brands</h1>
    <br>
</div>

@if(session('msg'))
    <div class="alert alert-success">
        {{ session('msg') }}
    </div>

@endif

<div class="container">
    <div class="row">
        <div class="container col-md-4">
            <p class="add-product-paragraph">Brand Operations</p>

            
            <div class="new-product-shoes col-md-8 ">
                <a class="nav-link" href="{{ route('brand.create') }}">
                    <div class="row">

                    
                        <div class="col-md-3" >
                            <img src="{{ url('/storage/images/svg/addProduct.svg') }}" alt="">
                        </div>
                        <div class="col-md-6">
                            <h3 class="new-product">Add Brand</h3>
                        </div>
                    </div>
                
                
                </a>
            </div>

            <div class="new-product-watch col-md-8">
                <a class="nav-link" href="">
                    <div class="row">

                    
                        <div class="col-md-3">
                            <img src="{{ url('/storage/images/svg/editProduct.svg') }}" alt="">
                        </div>
                        <div class="col-md-6">
                            <h3 class="new-product">Edit Brand</h3>
                        </div>
                    </div>
                </a>
                
            </div>

            <div class="new-product-garments col-md-8">
                <a class="nav-link" href="">
                    <div class="row">

                    
                        <div class="col-md-3">
                            <img src="{{ url('/storage/images/svg/notAvailable.svg') }}" alt="">
                        </div>
                        <div class="col-md-6">
                            <h3 class="new-product">Unavailable Brand</h3>
                        </div>
                    </div>
                </a>
            </div>
                
            <div class="new-product-accesories col-md-8">
                <a class="nav-link" href="">
                    <div class="row">

                    
                        <div class="col-md-3">
                            <img src="{{ url('/storage/images/svg/deleteProduct.svg') }}" alt="">
                        </div>
                        <div class="col-md-6">
                            <h3 class="new-product">Delete Brand</h3>
                        </div>
                    </div>
                </a>
                
            </div>
                    
        </div>

        <div class="container col-md-6">
            <p class="add-product-paragraph"> Brand Overview</p>
            <p class="add-product-paragraph"> </p>

            <a class="nav-link" href="{{ route('brand.all') }}">
                <p class="add-product-paragraph">Total Brands: {{ $brands }} </p>
            </a>
            
            <p class="add-product-paragraph"> Total Products: {{ $products }}  </p>

            
        </div>
        
    </div>

    
</div>
@endsection