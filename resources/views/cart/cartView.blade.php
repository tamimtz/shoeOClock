@extends('layouts.app')
@section('content')

@if(session('dlt'))

    <div class="alert">
        <p class="alert alert-danger">
            {{ session('dlt') }}
        </p>
    </div> 
@endif

    <div class="container">
        <table class="table table-dark table-striped">
            <tr class="" >
                <th>
                    product
                </th>
                <th>

                </th>
                <th>
                    quantity
                </th>
                <th>
                    price
                </th>
                
                <th>Action</th>

                <th>subtotal</th>
                
            </tr>


            @foreach ($cart as $item )
                
            
                <tr>
                    <td>
                        {{ $item->name }}
                    </td>
                    
                    <td class="cartImage">
                        @if(isset($thumbnails[$loop->index]))
                            <img class="cartThumb" src="{{url('storage/images/'.$thumbnails[$loop->index]) }}" alt="{{ $item->name }} Thumbnail">
                        @else
                            <span>No Thumbnail Available</span>
                        @endif
                    </td>
                    
                    
                    <td>
                        
                        <div class="col-3">
                            <input class="form-control bg-dark text-white" type="number" name="quantity" value="{{ $item->qty }}">
                        </div>
                        
                       
                        
                    </td>
                    <td>
                        {{ $item->price }}
                    </td>
                    
                    
                    <td>
                        <form action="{{ route('cart.destroy', $item->rowId) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">X</button>
                        </form>
                    </td>

                    <td>{{ $item->subtotal }}</td>
                </tr>
            
            @endforeach

            <tr>
                <td colspan="4"></td>
                <td>Total: </td>
                <td> {{ $cartTotal }}</td>
            </tr>

            <tr>
                <td colspan="5"></td>
                <td class=>
                    <a href="text-left">
                        <button class="btn btn-dark btn-outline-danger">Checkout</button>
                    </a>
                </td>
                
            </tr>
        </table>
    </div>
    
    


@endsection
   