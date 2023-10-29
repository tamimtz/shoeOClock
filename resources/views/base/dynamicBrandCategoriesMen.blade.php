@extends('layouts.app')

@section('content')

@include('base.sidebarCategories')


<div class="col-md-9">  
    <div class="container mt-5">

        <div class="row">
           
            @foreach ($uniqueCategories as $key => $category)
            <div class="col-md-4">

                <a class="nav-link" href="">
                    

                    @if (isset($uniqueThumbnails[$key]))
                        <div class="brand-image">
                            <img src="{{ url('/storage/images/products/thumbnails/'.$uniqueThumbnails[$key]) }}" class="thumbnail" alt="Thumbnail">
                            <p>{{ $category }}</p>
                        </div>
                       

                </a>

            
                @endif
                
            </div>
             @endforeach
            {{-- @foreach ($subCategories as $subCategory )
                <div class="col-md-4">
                    
                    <a class="nav-link" href="">
                        
                        <div class="brand-image">
                            <img src="{{ url('/storage/images/'.$brand->brandImage) }}" class="thumbnail" alt="...">
                        </div>
                        
                            
                        
                    </a>
                </div>    
            @endforeach --}}
        </div>
       
       
    </div>
</div>  
    
@endsection