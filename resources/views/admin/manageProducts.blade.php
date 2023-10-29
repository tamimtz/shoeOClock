@extends('layouts.app')
@section('content')
  
    <div class="admin-panel-header container">
        <h1>Manage Products</h1>
        <br>
        
    </div>

    <div class="container">
        <div class="row">
            <div class="container col-md-4">
                <p class="add-product-paragraph">Select to add product</p>

                
                <div class="new-product-shoes col-md-8 ">
                    <a class="nav-link" href="{{ route('manage.newProduct') }}">
                        <div class="row">
    
                        
                            <div class="col-md-3" >
                                <img src="{{ url('/storage/images/svg/addProduct.svg') }}" alt="">
                            </div>
                            <div class="col-md-6">
                                <h3 class="new-product">Add Product</h3>
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
                                <h3 class="new-product">Edit product</h3>
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
                                <h3 class="new-product">Unavailable Product</h3>
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
                                <h3 class="new-product">Delete Product</h3>
                            </div>
                        </div>
                    </a>
                    
                </div>
                        
            </div>

            <div class="container col-md-6">
                <p class="add-product-paragraph"> Product Overview</p>

                <p class="add-product-paragraph">Total Products: {{ $products}}</p>
            </div>

            
                
            
            
        </div>

        
    </div>
    
    
    

    
            
@endsection