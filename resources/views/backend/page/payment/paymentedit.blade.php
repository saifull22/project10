@extends('backend.master')
@section('content')

<div class="container">
<form action="{{route('cc.payment.upadte',$payment->id)}}"method="post">

   @csrf
@method('put')
   <div class=" form-group mb-3">
    <label for="amount">amount</label>
    <input  type="number" name="amount" class="form-control" id="amount" value="{{$payment->amount}}">
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>












@endsection