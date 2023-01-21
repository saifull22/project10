@extends('backend.master')
@section('content')




<div class="container">

<form action="{{route('ff.store.from')}}" method="post" enctype="multipart/form-data">


  @csrf
  
<div class=" form-group mb-3">
    <label for="image">Image</label>
    <input type="file" name="image" class="form-control" id="image" >
  </div>


  <div class=" form-group mb-3">
    <label for="category">category</label>
    <input type="text" name="category" class="form-control" id="category" >
  </div>

  <div class="form-group mb-3">
    <label for="sub_category">sub_category</label>
    <input type="text" name="sub_category" class="form-control" id="sub_category" >
  </div>

  <div class=" form-group mb-3">
    <label for="price">price</label>
    <input type="number" name="price" class="form-control" id="price" >
  </div>

  <div class=" form-group mb-3">
    <label for="status">Status</label>
    <input type="text" name="status" class="form-control" id="status" >
  </div>


  <div class=" form-group mb-3">
    <label for="size">size</label>
    <input type="text" name="size" class="form-control" id="size" >
  </div>



  <button type="submit" class="btn btn-primary">Submit</button>

</form>

</div>

@endsection