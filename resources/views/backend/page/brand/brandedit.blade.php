@extends('backend.master')
@section('content')




<div class="container">

<form action="{{route('ee.brand.update',$brand->id)}}" method="post">
  @csrf
@method('PUT')
<div class="form-group mb-3">
    <label for="brand_name">brand_name</label>
    <input type="text" name="brand_name" class="form-control" id="brand_name" value="{{$brand->brand_name}}">
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
  </form>

  </div>

















@endsection