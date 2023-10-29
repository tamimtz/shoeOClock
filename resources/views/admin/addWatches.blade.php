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

    <form action="{{ route('manage.storeWatches') }}" method="post" enctype="multipart/form-data" >

        @csrf
        <div class="form-control">

            {{-- name --}}
            <label class="mt-3" for="name">Name:</label>
            <div class="col--md-7">
                <input class="form-control" for="name" type="text" name="productName" placeholder="Product Name">
            </div>


            {{-- Brand --}}

            <label class="mt-3" for="Brand">Brand</label>
            <div class="col-md-2">

            
                <select class="form-control" name="brand_id" id="">
                    @foreach ($brands as $brand )
                    {{ $brand->id }}
                        <option value="{{ $brand->id }}">{{ $brand->brandName }}</option>
                    @endforeach
                </select>
            </div>

                {{-- price --}}


            <label class="mt-3" for="price">Price</label>    
            <div class="col-md-2">
                <input class="form-control" name="price" type="text" placeholder="Enter Price">
            </div>


            <label class="mt-3" for="d_price">Discount Price</label>    
            <div class="col-md-2">
                <input class="form-control" name="d_price" type="text" placeholder="Enter Price">
            </div>

            {{-- thumbnail  --}}
            <label class="mt-3" for="thumbnail">Thumbnail</label>
            <div class="row">

                <div class="col-md-4">
                    <input class="form-control" type="file" name="thumbnail" id="thumbnailInput">
                </div>
                <div class="col-md-4">
                    <img id="thumbnailPreview" src="" alt="Thumbnail Preview" style="max-width: 100%; max-height: 200px; display: none;">
                </div>
            
                
               
            </div>

            {{-- google product id  --}}
            
            <label class="mt-3" for="gpid">Google Product Id</label>
            <div class="col-md-3">
                <input class="form-control" type="text" name="googleProductId" placeholder="Enter product id ">
            </div>
            



            {{-- Gender --}}

            

                <div class="col-md-1">
                    <label for="">Gender</label>
                </div>
                <div class="col-md-2">
                    <select class="form-control" name="gender" id="genderSelect">
                        <option value="men">Men</option>
                        <option value="women">Women</option>
                        <option value="kid">Kids</option>
                    </select>
                </div>
            
            

            {{-- category --}}
            
            <label class="mt-3" for="category">Category</label>
            <div class="col-md-3" >
                <select class="form-control" name="category" id="category">
                    
                    
                    <option value="watches">Watches</option>
                </select>
            </div>
           

                {{-- subcategory --}}

                <label class="mt-3" for="subCategory">Subcategory</label>    

            <div class="col-md-3" >
                <select class="form-control" name="subCategory" id="subCategory">
                    
                    <option value="formal">Formal</option>
                    <option value="sports">Sports</option>
                    <option value="casual">Casual</option>
                </select>
            </div>

            {{-- color --}}

            <label class="mt-3" for="color">Color</label>
            <div class="col-md-4" >
                <input class="form-control" type="text" name="color" placeholder="Color">

            </div>

                {{-- size --}}

                <div class="row mt-3">
                    <div class="col-md-1">
                        <label for="size">Size</label>
    
                        
                    </div>
    
    
                    <div class="col-md" name="ukSize" id="ukSizeMen">
                        
                        <label for="">24</label>
                        <input name="size[]" value="24" type="checkbox">
                        <label for="">26</label>
                        <input name="size[]" value="26" type="checkbox">
                        <label for="">28</label>
                        <input name="size[]" value="28" type="checkbox">
                        <label for="">30</label>
                        <input name="size[]" value="30"type="checkbox">
                        <label for="">32</label>
                        <input name="size[]" value="32"type="checkbox">
                        <label for="">34</label>
                        <input name="size[]" value="34"type="checkbox">
                        <label for="">36</label>
                        <input name="size[]" value="36"type="checkbox">
                        <label for="">38</label>
                        <input name="size[]" value="38"type="checkbox">
                        <label for="">40</label>
                        <input name="size[]" value="40"type="checkbox">
                        <label for="">42</label>
                        <input name="size[]" value="42"type="checkbox">
                        <label for="">44</label>
                        <input name="size[]" value="44"type="checkbox">
                        <label for="">45</label>
                        <input name="size[]" value="45"type="checkbox">
                        <label for="">48</label>
                        <input name="size[]" value="48"type="checkbox">
                        <label for="">52</label>
                        <input name="size[]" value="52"type="checkbox">
                        <label for="">56</label>
                        <input name="size[]" value="56"type="checkbox">
                        
    
                    </div>
    
                    <div class="col-md" name="ukSize" id="ukSizeWomen"  style="display: none;">
                        <label for="">UK Size Women</label>
                        <label for="">2.5</label>
                        <input name="size[]" value="2.5" type="checkbox">
                        <label for="">3</label>
                        <input name="size[]" value="3" type="checkbox">
                        <label for="">3.5</label>
                        <input name="size[]" value="3.5" type="checkbox">
                        <label for="">4</label>
                        <input name="size[]" value="4" type="checkbox">
                        <label for="">4.5</label>
                        <input name="size[]" value="4.5" type="checkbox">
                        <label for="">5</label>
                        <input name="size[]" value="5"type="checkbox">
                        <label for="">5.5</label>
                        <input name="size[]" value="5.5" type="checkbox">
                        <label for="">6</label>
                        <input name="size[]" value="6"type="checkbox">
                        <label for="">6.5</label>
                        <input name="size[]" value="6.5"type="checkbox">
                        <label for="">7</label>
                        <input name="size[]" value="7"type="checkbox">
                        <label for="">7.5</label>
                        <input name="size[]" value="7.5"type="checkbox">
                        <label for="">8</label>
                        <input name="size[]" value="8"type="checkbox">
                        <label for="">9.5</label>
                        <input name="size[]" value="9.5"type="checkbox">`
                        <label for="">10.5</label>
                        <input name="size[]" value="10.5"type="checkbox">
                        <label for="">11.5</label>
                        <input name="size[]" value="11.5"type="checkbox">
                        <label for="">13</label>
                        <input name="size[]" value="13"type="checkbox">
                        
    
                    </div>
    
    
                    
                    
                    
                    
                </div>

            <label class="mt-3" for="descriptionTitle">Description Title</label>
            <div class="col-md-8">
                <input class="form-control" placeholder="Description Title" name="descriptionTitle" type="text">
            </div>
            
            <label class="mt-3" for="description">Description</label>
            <div class="col-md-8">
                <input class="form-control" name="description" type="text-area" style="height: 100px">
            </div>

             <label class="mt-3" for="specs">Specifications</label>
            <div class="col-md-8">
                <input class="form-control" name="specification" placeholder="Specification" type="text">
            </div>

             <label class="mt-3" for="allImages">More Images </label>
            <div class="col-md-8">
                
                 <input type="file" name="images[]" id="images" multiple accept="image/*" class="form-control">
            </div>


            <button class="btn btn-dark mt-5" type="submit">Submit </button>

            
        </div>
    </form>
</div>

{{-- <script>
    const genderSelect = document.getElementById('genderSelect');
    const ukSizeMen = document.getElementById('ukSizeMen');
    const ukSizeWomen = document.getElementById('ukSizeWomen');

    genderSelect.addEventListener('change', function () {
        if (genderSelect.value === 'women') {
            ukSizeMen.style.display = 'none';
            ukSizeWomen.style.display = 'block';
        } else {
            ukSizeMen.style.display = 'block';
            ukSizeWomen.style.display = 'none';
        }
    });
</script> --}}

<script src="{{ asset('scripts/thumbPreview.js') }}"></script>

{{-- <script src="{{ asset('scripts/selectChange.js') }}" ></script> --}}

@endsection