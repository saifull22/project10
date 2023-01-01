@extends('backend.master')
@section('content')
<div class="container">
<form action="{{route('product.store')}}" method="post">
   @csrf
  <div class=" form-group mb-3">
    <label for="product_name">Product Name</label>
    <input type="text" name="product_name" class="form-control" id="product_name" >
  </div>

  <div class=" form-group mb-3">
    <label for="product_price">Product Price</label>
    <input type="number" name="product_price" class="form-control" id="product_price" >
  </div>

  <div class="form-group mb-3">
    <label for="quentity">Quentity</label>
    <input type="number" name="quentity" class="form-control" id="quentity" >
  </div>

  <div class=" form-group mb-3">
    <label for="discount">Discount</label>
    <input type="number" name="discount" class="form-control" id="discount" >
  </div>

  <div class=" form-group mb-3">
    <label for="discount">Status</label>
    <input type="text" name="status" class="form-control" id="status" >
  </div>



  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
@endsection