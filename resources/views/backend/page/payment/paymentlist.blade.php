@extends('backend.master')
@section('content')
<head>

<body>
<div class="bg-primary text center text-white">
    <h1 class="text-center">payment table</h1>
    </div>
    <a class="btn btn-success"href="{{route('cc.create.from')}}">Create</a>


<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">amount</th>
      <th scope="colo"> action</th>
     
    </tr>
  </thead>
  <tbody>

    @foreach($payment as $date)
    <tr>
      <th scope="row">{{$date->id}}</th>
      <td>{{$date->amount}}</td>
      
      <td>

      <a href="{{route('cc.payment.delete',$date->id)}}"class="btn btn-danger"><i class="fa-solid fa-trash-can"></i></a>

      <a href="{{route('cc.payment.edit',$date->id)}}"class="btn btn-primary">Edit</a>

      </td>
    @endforeach
    </tbody>
</table>
{{$payment->links()}}
</body>
</head>
@endsection