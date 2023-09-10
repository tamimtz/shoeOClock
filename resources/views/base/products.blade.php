<div class="col-9">  
    <div class="container mt-5">
        <div class="row">
            @foreach ($products as $product)
            <div class="col-md-4">
                <div class="card">
                    <img src="{{ url('/storage/images/'.$product->thumbnail) }}" class="thumbnail" alt="...">
                    <h3 class="card-title">
                        {{ $product->productName }}
                    </h3>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>  