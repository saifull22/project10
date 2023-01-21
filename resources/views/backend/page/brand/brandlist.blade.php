@extends('backend.master')
@section('content')


<head> 


    <body>
      <div class="bg-primary text center text-white">

        <h1 class="text-center">Brand list </h1>

        </div>
    <a class="btn btn-success" href="{{route('ee.brand.from')}}">Brand list</a>
<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Brand_name</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($brand as $date)
    <tr>

      <th scope="row">{{$date->id}}</th>
      <td>{{$date->brand_name}}</td>
      
      <td>

      <a href="{{route('ee.brand.edit',$date->id)}}"class="btn btn-primary">Edit</a>
      <a href="{{route('ee.brand.delete',$date->id)}}"class="btn btn-danger"><i class="fa-solid fa-trash-can"></i></a>   

      </td>     

    </tr>
   @endforeach
  </tbody>
</table>

{{$brand->links()}}

</body>
</head>

@endsection