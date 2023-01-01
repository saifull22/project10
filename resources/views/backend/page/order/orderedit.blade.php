@extents('backend.master')
@section('content')



<div class="container">
<form action="{{route('dd.order.edit'$order->id)}}" method="post">
   @csrf
  <div class=" form-group mb-3">
    <label for="order_status">order_status</label>
    <input type="text" name="order_status" class="form-control" id="order_status" value"{{$order->order_status}}">
  </div>

  <div class=" form-group mb-3">
    <label for="order_date">order_date</label>
    <input type="text" name="order_date" class="form-control" id="order_date"  value"{{$order->order_date}}">
  </div>

  <div class="form-group mb-3">
    <label for="status">status</label>
    <input type="text" name="status" class="form-control" id="status"value"{{$status->status}}">
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>

</form>
</div>


@endsection