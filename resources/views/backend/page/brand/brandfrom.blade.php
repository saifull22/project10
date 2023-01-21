@extends('backend.master')
@section('content')

<div class="container">

<form action="{{route('ee.brand.store')}}" method="post">
  @csrf

<div class="form-group mb-3">
    <label for="brand_name">brand_name</label>
    <input type="text" name="brand_name" class="form-control" id="brand_name" >
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
  </form>

  </div>

@endsection