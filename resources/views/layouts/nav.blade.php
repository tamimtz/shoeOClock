<nav class="navbar navbar-expand-md navbar-dark bg-dark shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            Shoe O' Clock
            {{-- {{ config('app.name', 'Shoe O\' CLock') }} --}}
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav me-auto">

            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ms-auto">


                <li  >
                    <a class="nav-link" href="{{ route('products.menHome') }}">
                        Brands
                    </a>
                    
                </li>

                <li  >
                    <a class="nav-link" href="{{ route('products.menHome') }}">
                        Watches
                    </a>
                    
                </li>

                <ul class="menu">
                    <li class="menu-item">
                        <a class="nav-link" href="{{ route('products.menBrands') }}">Men</a>

                        
                        <ul class="submenu">

                            <div class="row">
                                <div class="col-4">
                                    <!-- Items for the first column -->
                                    <li class="brand-li"><a href="">NIKE</a></li>
                                    <li><a href="">Trainers</a></li>
                                    <li><a href="#">Running Shoes</a></li>
                                    <li><a href="">Sports Shoes</a></li>
                                    <li><a href="#">Shoes</a></li>
                                    <li><a href="">Slides & Sandals</a></li>
                                </div>
                                <div class="col-4">
                                    <!-- Items for the second column -->
                                    <li class="brand-li"><a href="">ADIDAS</a></li>
                                    <li><a href="">Trainers</a></li>
                                    <li><a href="#">Running Shoes</a></li>
                                    <li><a href="">Sports Shoes</a></li>
                                    <li><a href="#">Shoes</a></li>
                                    <li><a href="">Slides & Sandals</a></li>
                                </div>

                                <div class="col-4">
                                    <!-- Items for the second column -->
                                    <li class="brand-li"><a href="">PUMA</a></li>
                                    <li><a href="">Trainers</a></li>
                                    <li><a href="#">Running Shoes</a></li>
                                    <li><a href="">Sports Shoes</a></li>
                                    <li><a href="#">Shoes</a></li>
                                    <li><a href="">Slides & Sandals</a></li>
                                </div>

                            </div>
                            
                            <!-- Add more submenu items as needed -->
                        </ul>
                        
                        
                        
                    </li>
                    <!-- Add more menu items as needed -->
                </ul>
                

                <ul class="menu">
                    <li class="menu-item">
                        <a class="nav-link" href="{{ route('products.womenBrands') }}"> Women</a>

                        
                        <ul class="submenu">

                            <div class="row">
                                <div class="col-4">
                                    <!-- Items for the first column -->
                                    <li class="brand-li"><a href="">NIKE</a></li>
                                    <li><a href="">Trainers</a></li>
                                    <li><a href="#">Running Shoes</a></li>
                                    <li><a href="">Sports Shoes</a></li>
                                    <li><a href="#">Shoes</a></li>
                                    <li><a href="">Slides & Sandals</a></li>
                                </div>
                                <div class="col-4">
                                    <!-- Items for the second column -->
                                    <li class="brand-li"><a href="">ADIDAS</a></li>
                                    <li><a href="">Trainers</a></li>
                                    <li><a href="#">Running Shoes</a></li>
                                    <li><a href="">Sports Shoes</a></li>
                                    <li><a href="#">Shoes</a></li>
                                    <li><a href="">Slides & Sandals</a></li>
                                </div>

                                <div class="col-4">
                                    <!-- Items for the second column -->
                                    <li class="brand-li"><a href="">PUMA</a></li>
                                    <li><a href="">Trainers</a></li>
                                    <li><a href="#">Running Shoes</a></li>
                                    <li><a href="">Sports Shoes</a></li>
                                    <li><a href="#">Shoes</a></li>
                                    <li><a href="">Slides & Sandals</a></li>
                                </div>

                            </div>
                            
                            <!-- Add more submenu items as needed -->
                        </ul>
                        
                        
                        
                    </li>
                    <!-- Add more menu items as needed -->
                </ul>
                
               

                    
                



                <li  >
                    <a class="nav-link" href="{{ route('products.allProducts') }}">
                        Products
                    </a>
                    
                </li>

                <li>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Find Product" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </li>
                <li>
                    <span></span>
                </li>

                

                <li  >
                    <a class="nav-link" href="{{ route('cart.index') }}">
                        <i class="fas fa-shopping-cart bg-white" aria-hidden="true" ></i> Cart <span class="badge bg-danger">{{ Cart::content()->count() }}</span>
                    </a>
                    
                </li>

                
                <!-- Authentication Links -->
                @auth


                    

                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">

                            <a class="dropdown-item" href="{{ route('brand.index') }}">
                                Brands
                            </a>

                            <a class="dropdown-item" href="{{ route('manage.products') }}">
                                Products
                            </a>

                            <a class="dropdown-item" href="{{ route('manage.newProduct') }}">
                                Add Product
                            </a>
                            <a class="dropdown-item" href="">
                                Edit Product
                            </a>
                            <a class="dropdown-item" href="">
                                Delete Product
                            </a>

                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>


                    @else

                    
                    
                @endauth

               
            </ul>
        </div>
    </div>
</nav>
@if(session('success'))
<div class="alert alert-success" >
{{ session('success') }}

</div>



@endif

 
                <!-- Authentication Links -->
              {{-- @guest
                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                    @endif

                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest  --}}