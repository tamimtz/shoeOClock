@extends('layouts.app')

@section('content')

@include('base.sidebarCategories')


<div class="col-md-9">  
    <div class="container mt-5">

        <div class="row">
            @foreach ($brands as $brand )
                <div class="col-md-4">
                    
                    <a class="nav-link" href="{{route ('products.menBrandsCategoriesNike')}}">
                        
                        <div class="brand-image">
                            <img src="{{ url('/storage/images/'.$brand->brandImage) }}" class="thumbnail" alt="...">
                        </div>
                        
                            
                        
                    </a>
                </div>    
            @endforeach
        </div>
       
        {{-- <div class="row">
           
            <div class="col-md-4">
                <a class="nav-link" href="{{route ('products.menBrandsCategoriesNike')}}">
                    
                    <div class="brand-image">
                        <img src="{{ url('/storage/images/Nike-logo.png') }}" class="thumbnail" alt="...">
                    </div>
                    
                        
                    
                </a>
                
            </div>
           

            <div class="col-md-4">
               
                <div class="brand-image">
                    <img src="{{ url('/storage/images/Adidas-logo.jpg') }}" class="thumbnail" alt="...">
                </div>
                
                
               
            </div>

            <div class="col-md-4">
                
                <div class="brand-image">
                    <img src="{{ url('/storage/images/Puma-logo.jpg') }}" class="thumbnail" alt="...">
                </div>
                
                    
                
            </div>


            <div class="col-md-4">
                
                <div class="brand-image">
                    <img src="{{ url('/storage/images/New-balance-logo.jpg') }}" class="thumbnail" alt="...">
                </div>
                
                    
                
            </div>

            
            <div class="col-md-4">
              
                <div class="brand-image">
                    <img src="{{ url('/storage/images/Reebok-logo.jpg') }}" class="thumbnail" alt="...">
                </div>
                
                    
               
            </div>


            <div class="col-md-4">
            
                <div class="brand-image">
                    <img src="{{ url('/storage/images/Under-Armour-Featured.jpg') }}" class="thumbnail" alt="...">
                </div>
                
                    
               
            </div>
            
        </div> --}}
    </div>
</div>  
    
@endsection