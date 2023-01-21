@extends('backend.master')
@section('content')

<div class="container">

<form action="{{route('hh.detail.update',$order->id)}}" method="post">
    @csrf
    @method('PUT')
<div class=" form-group mb-3">
    <label for="last_price">last_price</label>
    <input type="number" name="last_price" class="form-control" id="last_price" value="{{$order->last_price}}" required>
</div>


<div class=" form-group mb-3">
    <label for="quentity">quentity</label>
    <input type="number" name="quentity" class="form-control" id="quentity" value="{{$order->quentity}}" required>
</div>


<div class=" form-group mb-3">
    <label for="discount">discount</label>
    <input type="number" name="discount" class="form-control" id="discount" value="{{$order->discount}}" required>
</div>


<button type="submit" class="btn btn-primary">Submit</button>

  </form>

  </div>


@endsection