@extends('backend.master')

@section('content')

<html> 
  <body>
  
  <h1> customer table </h2>
  
  <a class="btn btn-success" href="{{route('bb.create.from')}}"> create </a>

<table class="table table-secondary">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Email</th>
      <th scope="col">Adderss</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  @foreach($customer as $data)

    <tr>
      <th scope="row">{{$data->id}}</th>
      <td>{{$data->email}}</td>
      <td>{{$data->password}}</td>
     

      <td>
        <a href="{{route('bb.customer.view',$data->id)}}"class="btn btn-success">view</a>
        <a href="{{route('bb.customer.edit',$data->id)}}"class="btn btn-primary">Edit</a>
        <a href="{{route('customer.delete',$data->id)}}"class="btn btn-danger">delete</a>

      </td>
    </tr>

  @endforeach
  </tbody>
</table>

</body>
</html>

@endsection
