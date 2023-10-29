@extends('layouts.app')
@section('content')


<div class="container-md">
    <h1>New Shoes</h1>

    <div class="col-md">
        <form class="new-shoe-form" action="{{ route('products.store') }}" method="POST">
            @csrf

            <div class="row">
                <div class="col-md-1">
                
                    <label for="Shoe Name">Product Name:</label>
                </div>

                <div class="col-md-4">
                    <input class="form-control" name="" placeholder="Enter Shoe Name" type="text">
                </div>

            </div>


            <div class="row">
                <div class="col-md-1">
                    <label for="brand">Brand:</label>
                </div>

                <div class="col-md-2"></div>
            </div>

            <div class="row">

                <div class="col-md-1">
                    <label for="">Gender</label>
                </div>
                <div class="col-md-2">
                    <select class="form-control" name="gender" id="genderSelect">
                        <option value="men">Men</option>
                        <option value="women">Women</option>
                        <option value="kid">Kids</option>
                    </select>
                </div>
            </div>

            <div class="row">
                <div class="col-md-1">
                    <label for="size">Size</label>

                    
                </div>


                <div class="col-md" name="uksizeMen" id="ukSizeMen">
                    <label for="">UK Size</label>
                    <label for="">3</label>
                    <input name="size[]" value="3" type="checkbox">
                    <label for="">3.5</label>
                    <input name="size[]" value="3.5" type="checkbox">
                    <label for="">4</label>
                    <input name="size[]" value="4" type="checkbox">
                    <label for="">4.5</label>
                    <input name="size[]" value="4.5"type="checkbox">
                    <label for="">5</label>
                    <input name="size[]" value="5"type="checkbox">
                    <label for="">5.5</label>
                    <input name="size[]" value="5.5"type="checkbox">
                    <label for="">6</label>
                    <input name="size[]" value="6"type="checkbox">
                    <label for="">6.5</label>
                    <input name="size[]" value="6.5"type="checkbox">
                    <label for="">7</label>
                    <input name="size[]" value="7"type="checkbox">
                    <label for="">7.5</label>
                    <input name="size[]" value="7.5"type="checkbox">
                    <label for="">8</label>
                    <input name="size[]" value="8"type="checkbox">
                    <label for="">8.5</label>
                    <input name="size[]" value="8.5"type="checkbox">
                    <label for="">10</label>
                    <input name="size[]" value="10"type="checkbox">
                    <label for="">11</label>
                    <input name="size[]" value="11"type="checkbox">
                    <label for="">12</label>
                    <input name="size[]" value="12"type="checkbox">
                    <label for="">12.5</label>
                    <input name="size[]" value="12.5"type="checkbox">
                    <label for="">14</label>
                    <input name="size[]" value="14"type="checkbox">

                </div>

                <div class="col-md" name="uksizeWomen" id="ukSizeWomen"  style="display: none;">
                    <label for="">UK Size Women</label>
                    <label for="">2.5</label>
                    <input name="size[]" value="2.5" type="checkbox">
                    <label for="">3</label>
                    <input name="size[]" value="3" type="checkbox">
                    <label for="">3.5</label>
                    <input name="size[]" value="3.5" type="checkbox">
                    <label for="">4</label>
                    <input name="size[]" value="4" type="checkbox">
                    <label for="">4.5</label>
                    <input name="size[]" value="4.5" type="checkbox">
                    <label for="">5</label>
                    <input name="size[]" value="5"type="checkbox">
                    <label for="">5.5</label>
                    <input name="size[]" value="5.5" type="checkbox">
                    <label for="">6</label>
                    <input name="size[]" value="6"type="checkbox">
                    <label for="">6.5</label>
                    <input name="size[]" value="6.5"type="checkbox">
                    <label for="">7</label>
                    <input name="size[]" value="7"type="checkbox">
                    <label for="">7.5</label>
                    <input name="size[]" value="7.5"type="checkbox">
                    <label for="">8</label>
                    <input name="size[]" value="8"type="checkbox">
                    <label for="">9.5</label>
                    <input name="size[]" value="9.5"type="checkbox">`
                    <label for="">10.5</label>
                    <input name="size[]" value="10.5"type="checkbox">
                    <label for="">11.5</label>
                    <input name="size[]" value="11.5"type="checkbox">
                    <label for="">13</label>
                    <input name="size[]" value="13"type="checkbox">
                    

                </div>


                <div class="col-md">
                    <label for="">EU Size</label>

                    <label for="">35</label>
                    <input name="euSize[]" value="35" type="checkbox">
                    <label for="">35.5</label>
                    <input name="euSize[]" value="35.5" type="checkbox">
                    <label for="">36</label>
                    <input name="euSize[]" value="36" type="checkbox">
                    <label for="">37</label>
                    <input name="euSize[]" value="37" type="checkbox">
                    <label for="">37.5</label>
                    <input name="euSize[]" value="37.5" type="checkbox">
                    <label for="">38</label>
                    <input name="euSize[]" value="38" type="checkbox">
                    <label for="">38.5</label>
                    <input name="euSize[]" value="38.5" type="checkbox">
                    <label for="">39</label>
                    <input name="euSize[]" value="39" type="checkbox">
                    <label for="">40</label>
                    <input name="euSize[]" value="40" type="checkbox">
                    <label for="">41</label>
                    <input name="euSize[]" value="41"type="checkbox">
                    <label for="">41.5</label>
                    <input name="euSize[]" value="41.5"type="checkbox">
                    <label for="">42</label>
                    <input name="euSize[]" value="42"type="checkbox">
                    <label for="">42.5</label>
                    <input name="euSize[]" value="42.5"type="checkbox">
                    <label for="">43</label>
                    <input name="euSize[]" value="43"type="checkbox">
                    <label for="">43.5</label>
                    <input name="euSize[]" value="43.5"type="checkbox">
                    <label for="">44</label>
                    <input name="euSize[]" value="44"type="checkbox">
                    <label for="">45</label>
                    <input name="euSize[]" value="45"type="checkbox">
                    <label for="">46.5</label>
                    <input name="euSize[]" value="46.5"type="checkbox">
                    <label for="">48.5</label>
                    <input name="euSize[]" value="48.5"type="checkbox">
                    

                </div>
                
                
                
            </div>
            <div class="col-md-2">
                <button type="submit" class="btn btn-dark">Submit</button>
            </div>
        </form>
    </div>
    

    
</div>

<script>
    const genderSelect = document.getElementById('genderSelect');
    const ukSizeMen = document.getElementById('ukSizeMen');
    const ukSizeWomen = document.getElementById('ukSizeWomen');

    genderSelect.addEventListener('change', function () {
        if (genderSelect.value === 'women') {
            ukSizeMen.style.display = 'none';
            ukSizeWomen.style.display = 'block';
        } else {
            ukSizeMen.style.display = 'block';
            ukSizeWomen.style.display = 'none';
        }
    });
</script>

    

    
@endsection