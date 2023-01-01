@extends('backend.master')
@section('content')

<form   action="{{route('bb.customer.update',$customer->id)}}" method="post">
    @csrf
    @method('PUT')

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email_address</label>
    <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$customer->email}}">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input name="password" type="password" class="form-control" id="exampleInputPassword1" value="{{$customer->password}}">
  </div>
  
  <button type="submit" class="btn btn-primary">Update</button>

</form>



@endsection