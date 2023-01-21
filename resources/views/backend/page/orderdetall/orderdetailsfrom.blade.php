@extends('backend.master')
@section('content')

<div class="container">

<form action="{{route('hh.details.store')}}" method="post">
    @csrf
<div class=" form-group mb-3">
    <label for="last_price">last_price</label>
    <input type="number"  name="last_price" class="form-control" id="last_price"   >
    @error('last_price')
    <div class="alert alert-danger">{{$message}}</div>
    @enderror
</div>


<div class=" form-group mb-3">
    <label for="quentity">quentity</label>
    <input type="number" name="quentity" class="form-control" id="quentity" >
    @error('quentity')
    <div class="alert alert-danger">{{$message}}</div>
    @enderror
</div>


</div>


<div class=" form-group mb-3">
    <label for="discount">discount</label>
    <input type="number" name="discount" class="form-control" id="discount" >
    @error('discount')
    <div class="alert alert-danger">{{$message}}</div>
    @enderror
</div>
</div>


<button type="submit" class="btn btn-primary">Submit</button>

  </form>

  </div>

@endsection