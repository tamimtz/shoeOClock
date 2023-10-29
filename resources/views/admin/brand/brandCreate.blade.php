@extends('layouts.app')

@section('content')

<div class="admin-panel-header container">

    <h1>Create New Brand</h1>
    <br>
</div>
@if(session('msg'))
    <div class="alert alert-success">
        {{ session('msg') }}
    </div>

@endif
<div class="container">
    <form class="new-brand-form form-group" action="{{ route('brand.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="row pt-5">
            <div class="col-md-1 ms-5">
                <label  for="brandName">Brand Name </label>
            </div>
            <div class="col-md-6 pt-2">
                <input  type="text" placeholder="Brand Name" name="brandName" class="form-control">
            </div>
             
            
        
        </div>

        <div class="row pt-5 pb-5">
            <div class="col-md-1 ms-5 ">
                <label for="brandName">Image </label>
            </div>
            <div class="col-md-4 ">
                <input class="form-input"  type="file" name="thumbnail" id="thumbnailInput" class="form-control">
            </div>
            <div class="col-md-4">
                <img id="thumbnailPreview" src="" alt="Thumbnail Preview" style="max-width: 100%; max-height: 200px; display: none;">
            </div>
             
            
        
        </div>
        
        <div class="col-md-1 ms-5 pb-5">

            <button class="btn btn-dark" type="submit">Save</button>
        </div>

    </form>
</div>


<script src="{{ asset('scripts/thumbPreview.js') }}"></script>

@endsection