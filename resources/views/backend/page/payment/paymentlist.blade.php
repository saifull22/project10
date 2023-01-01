@extends('backend.master')
@section('content')
<head>

<body>
    <h1>payment table</h1>

    <a class="btn btn-success"href="{{route('cc.create.from')}}">Create</a>


<table class="table table-Secondary">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">amount</th>
     
    </tr>
  </thead>
  <tbody>

    @foreach($payment as $date)
    <tr>
      <th scope="row">{{$date->id}}</th>
      <td>{{$date->amount}}</td>
      
      <td>

      <a href="{{route('cc.payment.delete',$date->id)}}"class="btn btn-danger">delete</a>

      <a href="{{route('cc.payment.edit',$date->id)}}"class="btn btn-primary">Edit</a>

      </td>
    @endforeach
    </tbody>
</table>
</body>
</head>
@endsection