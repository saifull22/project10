
@extends('backend.master')
@section('content')


<html>
  <body>
    
  <h1> Category Table </h1>

<a class="btn btn-success" href="{{route('aa.create.from')}}"> create </a>
  

  <table class="table">
    
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($category as $data)
    <tr>
      <th scope="row">{{$data->id}}</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
      <td>
        <a href="{{route('aa.category.view',$data->id)}}"class="btn btn-success">view</a>
      </td>
    </tr>
    
    
    @endforeach
  </tbody>
</table>
</body>
</html>

@endsection