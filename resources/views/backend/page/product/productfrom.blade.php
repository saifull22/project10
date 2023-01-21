@extends('backend.master')
@section('content')


<div class="container">

<form action="{{route('gg.store.from')}}"method="post">

@csrf

<div class=" form-group mb-3">
    <label for="product_name">product_name</label>
    <input type="text" name="product_name" class="form-control" id="product_name" >
  </div>


  <div class=" form-group mb-3">
    <label for="product_price">product_price</label>
    <input type="number" name="product_price" class="form-control" id="product_price" >
  </div>

  <div class=" form-group mb-3">
    <label for="quentity">quentity</label>
    <input type="number" name="quentity" class="form-control" id="quentity" >
  </div>

  <div class=" form-group mb-3">
    <label for="discount">discount</label>
    <input type="number" name="discount" class="form-control" id="discount" >
  </div>

  <div class=" form-group mb-3">
    <label for="status">status</label>
    <input type="text" name="status" class="form-control" id="status" >
  </div>

<button type="submit" class="btn btn-primary">Submit</button>
</form>

</div>


@endsection