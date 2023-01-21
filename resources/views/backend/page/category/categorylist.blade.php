
@extends('backend.master')
@section('content')


<html>
  <body>
    <div class ="bg-primary text center text-white ">


  <h1 class="text-center"> Category Table </h1>

  </div>
<a class="btn btn-success" href="{{route('aa.create.from')}}"> create </a>


  <table class="table table-bordered">
    
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
      <td>{{$data->Firstname}}</td>
      <td>{{$data->Lastname}}</td>
     
      <td>

        <a href="{{route('aa.category.view',$data->id)}}"class="btn btn-success">view</a>
        <a href="{{route('aa.category.edit',$data->id)}}"class="btn btn-primary">Edit</a>
        <a href="{{route('aa.category.delete',$data->id)}}"class="btn btn-danger"><i class="fa-solid fa-trash-can"></i></a>
        
      </td>
    </tr>
    
    
    @endforeach
  </tbody>
</table>

{{$category->links()}}

</body>
</html>

@endsection