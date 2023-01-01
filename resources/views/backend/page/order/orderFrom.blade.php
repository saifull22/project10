@extends('backend.master')
@section('content')

<div class="container">
<form action="{{route('dd.submet.from')}}" method="post">
   @csrf
  <div class=" form-group mb-3">
    <label for="order_status">order_status</label>
    <input type="text" name="order_status" class="form-control" id="order_status" >
  </div>

  <div class=" form-group mb-3">
    <label for="order_date">order_date</label>
    <input type="text" name="order_date" class="form-control" id="order_date" >
  </div>

  <div class="form-group mb-3">
    <label for="status">status</label>
    <input type="text" name="status" class="form-control" id="status" >
  </div>



  <button type="submit" class="btn btn-primary">Submit</button>
  
</form>
</div>

@endsection