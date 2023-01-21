
@extends('backend.master')
@section('content')
<head>
    <body>
        <div class="bg-primary text-center text-white">
             <h1> Order table </h1>
        </div>

        <a class ="btn btn-success"href="{{route('dd.create.from')}}"> create</a>
      

<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">order_status</th>
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
      <a href="{{route('dd.order.delete',$date->id)}}"class="btn btn-danger"><i class="fa-solid fa-trash-can"></i></a>
      <a href="{{route('dd.order.edit',$date->id)}}"class="btn btn-primary">Edit</a>
      <a herf="{{route('dd.order.view',$date->id)}}"class="btn btn-success">View</a>
      </td>


    </tr>
   
    @endforeach
  </tbody>
</table>


{{$Order->links()}}
</body>
</head>
@endsection
