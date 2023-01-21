
@extends('backend.master')
@section('content')
<div class="container">
    

<form action="{{route('ff.wish.update',$wishj->id)}}" method="post" enctype="multipart/form-data">

  @csrf
  @method('put')

<div class=" form-group mb-3">
    <label for="Image">Image</label>
    <input type="file" name="image" class="form-control" id="Image"  value="{{$wishj->image}}">
  </div>

  <div class=" form-group mb-3">
    <label for="category">category</label>
    <input type="text" name="category" class="form-control" id="category"  value="{{$wishj->category}}">
  </div>

  <div class="form-group mb-3">
    <label for="sub_category">sub_category</label>
    <input type="text" name="sub_category" class="form-control" id="sub_category"  value="{{$wishj->sub_category}}">
  </div>

  <div class=" form-group mb-3">
    <label for="price">price</label>
    <input type="number" name="price" class="form-control" id="price" value="{{$wishj->price}}" >
  </div>

  <div class=" form-group mb-3">
    <label for="status">Status</label>
    <input type="text" name="status" class="form-control" id="status"  value="{{$wishj->status}}">
  </div>


  <div class=" form-group mb-3">
    <label for="size">size</label>
    <input type="text" name="size" class="form-control" id="size" value="{{$wishj->size}}">
  </div>



  <button type="submit" class="btn btn-primary">Submit</button>

</form>

</div>
@endsection