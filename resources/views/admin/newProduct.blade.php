@extends('layouts.app')

@section('content')



    <div class="admin-panel-header container">
        <h1>Add New Product</h1>
        <br><br>
        
    </div>
    <div class="container">
        <p class="add-product-paragraph">Select to add product</p>
    </div>
    

    <div class="container">
        <div class="row">
            <div class="new-product-shoes col-md-2 ">
                <a class="nav-link" href="{{ route('manage.create') }}">
                    <div class="row">

                    
                        <div class="col-md-3" >
                            <img src="{{ url('/storage/images/svg/add-shoes.svg') }}" alt="">
                        </div>
                        <div class="col-md-6">
                            <h3 class="new-product">Add Shoes</h3>
                        </div>
                    </div>
                
                
                </a>
            </div>

            <div class="new-product-watch col-md-2">
                <a class="nav-link" href="{{ route('manage.newWatches') }}">
                    <div class="row">

                    
                        <div class="col-md-3">
                            <img src="{{ url('/storage/images/svg/add-watch.svg') }}" alt="">
                        </div>
                        <div class="col-md-6">
                            <h3 class="new-product">Add Watches</h3>
                        </div>
                    </div>
                </a>
                
            </div>

            <div class="new-product-garments col-md-2">
                <a class="nav-link" href="{{ route('manage.newGarments') }}">
                    <div class="row">

                    
                        <div class="col-md-3">
                            <img src="{{ url('/storage/images/svg/add-garments.svg') }}" alt="">
                        </div>
                        <div class="col-md-6">
                            <h3 class="new-product">Add Garments</h3>
                        </div>
                    </div>
                </a>
            </div>
                
            <div class="new-product-accesories col-md-2">
                <a class="nav-link" href="">
                    <div class="row">

                    
                        <div class="col-md-3">
                            <img src="{{ url('/storage/images/svg/add-accessory.svg') }}" alt="">
                        </div>
                        <div class="col-md-6">
                            <h3 class="new-product">Add Accesories</h3>
                        </div>
                    </div>
                </a>
                
            </div>
    
    </div>
@endsection