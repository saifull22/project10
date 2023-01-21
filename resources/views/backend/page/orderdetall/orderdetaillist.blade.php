@extends('backend.master')
@section('content')
<head>
    <body>
      <div class="bg-primary text center text-white">

    <h1 class="text-center"> Order Detall</h1>

    </div>
<a class="btn btn-success"href="{{route('hh.create.from')}}">Create</a>




@if(session()->has('message'))
<p class="alert alert-success alert-block">
  {{session()->get('message')}}
</p>
@endif



@if(session()->has('message'))
<p class="alert alert-danger alert-block">
  {{session()->get('message')}}
</p>
@endif



<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Last price</th>
      <th scope="col">Quentity</th>
      <th scope="col">Discount</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>

@foreach($order as $date)
    <tr>
      <th>{{$date->id}}</th>
      <th scope="row">{{$date->last_price}}</th>
      <td>{{$date->quentity}}</td>
      <td>{{$date->discount}}</td>
    

      <td>

      <a href="{{route('hh.detail.delete',$date->id)}}"class="btn btn-danger"><i class="fa-solid fa-trash-can"></i></a>
      <a href="{{route('hh.detail.edit',$date->id)}}"class="btn btn-primary">Edit</a>
      <a herf="{{route('dd.order.view',$date->id)}}" onclick ="return confirm('Are you sure??')" class="btn btn-success">View</a>

      </td>
    </tr>
 
@endforeach
  </tbody>
</table>
{{$order->links()}}
</body>
</head>

@endsection