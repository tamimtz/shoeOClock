@extends('layouts.app')

@section('content')

@include('base.sidebarCategories')

<div class="col-md-9">  
    <div class="container mt-5">
        <div class="row">
           
            <div class="col-md-4">
                <a class="nav-link" href="{{route ('products.menHome')}}">
                    
                    <div class="brand-image">
                        <img src="{{ url('/storage/images/nike-sports.jpg') }}" class="thumbnail" alt="...">
                        <h3 class="brand-category-title">
                            Sports
                        </h3>
                    </div>
                        
                        
                    
                </a>
                
            </div>
           
            <div class="col-md-4">
                <a class="nav-link" href="{{route ('products.menHome')}}">
                    
                    <div class="brand-image">
                        <img src="{{ url('/storage/images/nike-running.png') }}" class="thumbnail" alt="...">
                        <h3 class="brand-category-title">
                            Running
                        </h3>
                    </div>
                        
                        
                
                </a>
            </div>   

            <div class="col-md-4">
                <a class="nav-link" href="{{route ('products.menTrainers')}}">
                    
                    <div class="brand-image">
                        <img src="{{ url('/storage/images/nike-men-trainers.jpg') }}" class="thumbnail" alt="...">
                        <h3 class="brand-category-title">
                            Trainers
                        </h3>
                    </div>
                        
                        
                
                </a>
            </div>    

            
            <div class="col-md-4">
                <a class="nav-link" href="{{route ('products.menHome')}}">
                   
                    <div class="brand-image">
                        <img src="{{ url('/storage/images/nike-casual.png') }}" class="thumbnail" alt="...">
                        <h3 class="brand-category-title">
                            Casual/ Lifestyle
                        </h3>
                    </div>
                    
                        
                   
                </a>
            </div>  
        
            
            <div class="col-md-4">
                <a class="nav-link" href="{{route ('products.menHome')}}">
                   
                    <div class="brand-image">
                        <img src="{{ url('/storage/images/nike-slide.png') }}" class="thumbnail" alt="...">
                        <h3 class="brand-category-title">
                            Slides & Sandals
                        </h3>
                    </div>
                    
                        
                   
                </a>
            </div>  

            


           
            


            

            
           


            
            
        </div>
    </div>
</div>  

@endsection