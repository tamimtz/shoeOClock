@extends('layouts.app')

@section('content')



<div class="container">
    <div class="row">
        <div class="col">
            <a class="path" href="{{ route('home') }}">home</a>/
            <a class="path" href="">allProducts</a>
    
        </div>

        {{-- <div class="col-2">
            sort mechanism
        </div> --}}
    </div>
</div>



{{-- cactegories level1 --}}
<div class="container categories">
    <div class="row">
        <div class="container-category col-3">
            <div class=" mt-5 ">
                <a class="categories nav-link"  data-bs-toggle="collapse" href="#categories" role="button" aria-expanded="false" aria-controls="categories">
                    <img class="svg" src="{{ url('storage/images/svg/category.svg') }}" alt="">
                     Categories
                </a>
            </div>


            {{-- categories MEN--}}


            <div class="collapse  mt-2" id="categories">
                <li class="categories" data-bs-toggle="collapse" href="#men" role="button" aria-expanded="false" aria-controls="men" >
                    <a href="" class="nav-link">
                        <img class="svg " src="{{ url('storage/images/svg/men.svg') }}" alt="">
                    Men
                    </a>
                    
                </li>

                {{-- categories Men Collapse --}}

                        {{-- categories Footwear --}}
                <ul class="collapse mt-2" id="men">
                    <li class="categories" data-bs-toggle="collapse" href="#footwear" role="button" aria-expanded="false" aria-controls="footwear"  >
                        <img class="svg " src="{{ url('storage/images/svg/plus.svg') }}" alt="">
                        Footwear
                    </li>

                        {{-- Footwear collapse --}}

                        <ul class="collapse ms-3 mt-2" id="footwear" >
                            <li class="categories" >
                                
                                Trainers
                            </li>
                            <li class="categories mt-2" >
                                
                                Running Shoes
                            </li>
                            <li class="categories mt-2" >
                                
                                Formal Shoes
                            </li>
                            <li class="categories mt-2" >
                                
                                Boots
                            </li>
                            <li class="categories mt-2" >
                                
                                Sports Shoes
                            </li>
                            <li class="categories mt-2" >
                                
                                Slides & Sandals
                            </li>
                            <li class="categories mt-2" >
                                
                                Walking
                            </li>
                        </ul>
                        {{-- Categories Clothing  --}}
                    <li class="categories mt-2"  data-bs-toggle="collapse" href="#clothing" role="button" aria-expanded="false" aria-controls="clothing">
                        <img class="svg " src="{{ url('storage/images/svg/plus.svg') }}" alt="">
                        Clothing
                    </li>
                            {{-- Categories Clothing Collapse --}}
                        <ul class="collapse ms-3 mt-2" id="clothing" >
                            <li class="categories" >
                                
                                T-Shirts
                            </li>
                            <li class="categories" >
                                
                                Polo
                            </li>
                            <li class="categories" >
                                
                                Shirts
                            </li>
                            <li class="categories" >
                                
                                Pants
                            </li>
                            <li class="categories" >
                                
                                Jackets & Coats
                            </li>
                            <li class="categories" >
                                
                                Underwear & socks
                            </li>
                            
                        </ul>

                    <li class="categories mt-2">
                        <img class="svg " src="{{ url('storage/images/svg/plus.svg') }}" alt="">
                        Watches
                    </li>

                    <li class="categories mt-2">
                        <img class="svg " src="{{ url('storage/images/svg/plus.svg') }}" alt="">
                        Watches
                    </li>
                </ul>
                

                <li class="categories">
                    <img class="svg" src="{{ url('storage/images/svg/women.svg') }}" alt="">
                    Women
                </li>
            </div>
        </div>
       

        @include('base.categories')
        
        
    </div>
</div>


@endsection