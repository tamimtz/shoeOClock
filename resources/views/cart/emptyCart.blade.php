@extends('layouts.app')

@section('content')
    
@if(session('dlt'))

    <div class="alert">
        <p class="alert alert-danger">
            {{ session('dlt') }}
        </p>
    </div> 
@endif

    <h1>Cart Is Empty</h1>


@endsection