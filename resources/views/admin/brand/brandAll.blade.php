@extends('layouts.app')

@section('content')
<div class="admin-panel-header container">
    <h1>Manage Brands</h1>
    <br>
</div>

<div class="container">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Brand Name</th>
                <th scope="col">Image</th>
                <th colspan="col">Products</th>
                <th scope="col">edit</th>
                <th scope="col">Delete</th>
            </tr>
            <tbody>
                @foreach ($brands as $brand )
                <tr>
                    
                    <th scope="row" >{{ $brand->id }}</td>
                    <td>{{ $brand->brandName }}</td>
                    <td><img class="brandlist-image" src="{{ url('storage/images/'.$brand->brandImage) }}" alt=""></td>
                    <td></td>
                    <td><img class="brandlist-image" src="{{ url('storage/images/svg/edit.svg') }}" alt=""></td>
                    <td><img class="brandlist-image" src="{{ url('storage/images/svg/delete.svg') }}" alt=""></td>
                    
                </tr>                    
                @endforeach
            </tbody>
        </thead>
        
    </table>
</div>

</table>
@endsection