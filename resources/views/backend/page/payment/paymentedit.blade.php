@extends('backend.master')
@section('content')

<div class="container">
<form action="{{route('cc.payment.submit')}}"method="post">

   @csrf

   <div class=" form-group mb-3">
    <label for="amount">amount</label>
    <input  type="number" name="amount" class="form-control" id="amount" >
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>












@endsection