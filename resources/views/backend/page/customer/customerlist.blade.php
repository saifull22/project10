@extends('backend.master')

@section('content')

<html> 
  <body>
  <div class="bg-primary text center text-white">
  <h1 class="text-center"> customer table </h2>
  </div>
  <a class="btn btn-success" href="{{route('bb.create.from')}}"> create </a>

  
  @if(session()->has('message'))
<p class="alert alert-success alert-block">
  {{session()->get('message')}}
</p>
@endif

<table class="table table-bordered">
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
        <a href="{{route('customer.delete',$data->id)}}"class="btn btn-danger" ><i class="fa-solid fa-trash-can"></i></a>

      </td>
    </tr>

  @endforeach
  </tbody>
</table>

{{$customer->links()}}
</body>
</html>

@endsection
