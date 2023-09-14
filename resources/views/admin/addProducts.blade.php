@extends('layouts.app')

@section('content')

@if(session('msg'))
    <div class="alert alert-success">
        {{ session('msg') }}
    </div>

@endif



<div class="container">

    <h3>Add Products</h3>


</div>
<div class="container">

    <form action="{{ route('manage.store') }}" method="post" enctype="multipart/form-data" >

        @csrf
        <div class="form-control">

            {{-- name --}}
            <label  for="name">Name:</label>
            <div class="col-7">
                <input class="form-control" for="name" type="text" name="productName" placeholder="Product Name">
            </div>
            

                {{-- price --}}


            <label for="price">Price</label>    
            <div class="col-2">
                <input class="form-control" name="price" type="text" placeholder="Enter Price">
            </div>

            {{-- thumbnail  --}}
            <label for="thumbnail">Thumbnail</label>
            <div class="row">

                <div class="col-4">
                    <input class="form-control" type="file" name="thumbnail" id="thumbnailInput">
                </div>
                <div class="col-4">
                    <img id="thumbnailPreview" src="" alt="Thumbnail Preview" style="max-width: 100%; max-height: 200px; display: none;">
                </div>
            
                
               
            </div>

            {{-- google product id  --}}
            
            <label for="gpid">Google Product Id</label>
            <div class="col-3">
                <input class="form-control" type="text" name="googleProductId" placeholder="Enter product id ">
            </div>
            



            {{-- Gender --}}

            <label for="Gender">Gender</label>
            <div class="col-1">   
                <select class="form-control" name="gender" id="">
                    <option value="men">Men</option>
                    <option value="women">Women</option>
                    <option value="kids">Kids</option>
                </select>

            </div>
            

            {{-- category --}}
            
            <label for="category">Category</label>
            <div class="col-3" >
                <select class="form-control" name="category" id="category">
                    
                    <option value="clothings">Clothings</option>
                    <option value="footwear">Footwear</option>
                    <option value="option3">Fragrances</option>
                    <option value="option4">Watches</option>
                </select>
            </div>
           

                {{-- subcategory --}}

                <label for="subCategory">Subcategory</label>    

            <div class="col-3" >
                <select class="form-control" name="subCategory" id="subCategory">
                    <option value="selected">Select Subcategory</option>
                    <option value="option1">Option 1</option>
                    <option value="option2">Option 2</option>
                    <option value="option3">Option 3</option>
                </select>
            </div>

            {{-- color --}}

            <label for="color">Color</label>
            <div class="col-4" >
                <input class="form-control" type="text" name="color" placeholder="Color">

            </div>

                {{-- size --}}

            <label for="sizeUK">Size Uk</label>
            <div class="col-1">
                <select class="form-control" name="sizeUK" id="">
                    <option value="8">8</option>
                    <option value="8.5">8.5</option>
                    <option value="9">9</option>
                </select>           
    
            </div>


            <label for="sizeEU">Size EU</label>
            <div class="col-1">
                <select class="form-control" name="sizeEU" id="">
                    <option value="42">42</option>
                    <option value="42.5">42.5</option>
                    <option value="43">43</option>
                </select>           
    
            </div>

            <label for="descriptionTitle">Description Title</label>
            <div class="col-8">
                <input class="form-control" placeholder="Description Title" name="descriptionTitle" type="text">
            </div>
            
            <label for="description">Description</label>
            <div class="col-8">
                <input class="form-control" name="description" type="text-area" style="height: 100px">
            </div>

             <label for="specs">Specifications</label>
            <div class="col-8">
                <input class="form-control" name="specification" placeholder="Specification" type="text">
            </div>

             <label for="allImages">More Images </label>
            <div class="col-8">
                
                 <input type="file" name="images[]" id="images" multiple accept="image/*" class="form-control">
            </div>


            <button class="btn btn-dark mt-5" type="submit">Submit </button>

            
        </div>
    </form>
</div>

<script src="{{ asset('scripts/thumbPreview.js') }}"></script>

<script src="{{ asset('scripts/selectChange.js') }}" ></script>

@endsection