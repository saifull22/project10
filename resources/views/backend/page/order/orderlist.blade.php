
@extends('backend.master')
@section('content')
<head>
    <body>
        <h1> Order table </h1>

        <a class ="btn btn-success"href="{{route('dd.create.from')}}"> create</a>

<table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">email</th>
      <th scope="col">address</th>
      <th scope="col">action</th>
    </tr>
  </thead>
  <tbody>
  @foreach($Order as $date)
    <tr>
      <th scope="row">{{$date->id}}</th>
      <td>{{$date->order_status}}</td>
      <td>{{$date->order_date}}</td>
      <td>{{$date->status}}</td>


      <td>
      <a href="{{route('order.delete',$date->id)}}"class="btn btn-danger">delete</a>
      <a href="{{route('dd.order.edit',$date->id)}}"class="btn btn-primary">Edit</a>
      </td>


    </tr>
   
    @endforeach
  </tbody>
</table>

</body>
</head>
@endsection
