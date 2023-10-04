@extends('layouts.app')
@section('content')


<div class="container-md">
    <h1>New Shoes</h1>

    <div class="col-md">
        <form class="new-shoe-form" action="">
            @csrf

            <div class="row">
                <div class="col-md-1">
                
                    <label for="Shoe Name">Product Name:</label>
                </div>

                <div class="col-md-4">
                    <input class="form-control" name="" placeholder="Enter Shoe Name" type="text">
                </div>

            </div>


            <div class="row">
                <div class="col-md-1">
                    <label for="brand">Brand:</label>
                </div>

                <div class="col-md-2"></div>
            </div>
            
        </form>
    </div>
    

    
</div>
@endsection