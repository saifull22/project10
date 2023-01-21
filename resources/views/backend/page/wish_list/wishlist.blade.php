@extends('backend.master')
@section('content')

<head>

<body>
    
<div class="bg-primary text center text-white">

<h1 class="text-center"> Wish list Table </h1>

</div>
<a class="btn btn-success" href="{{route('ff.cerate.from')}}">create</a>

<table class="table table-bordered ">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">filename</th>
      <th scope="col">category</th>
      <th scope="col">sub_category</th>
      <th scope="col">price</th>
      <th scope="col">status</th>
      <th scope="col">size</th>
      <th scope="col">action</th>

    </tr>
  </thead>
  <tbody>
  @foreach($Wishj as $date)
    <tr>
      <th scope="row">{{$date->id}}</th>
      <td>
        <img src="{{url('/uploads/'.$date->image)}}" height="70px" width="70px" alt="">
      </td>
      <td>{{$date->category}}</td>
      <td>{{$date->sub_category}}</td>
      <td>{{$date->price}}</td>
      <td>{{$date->status}}</td>
      <td>{{$date->size}}</td>
      <td>
      <a href="{{route('ff.wish.edit',$date->id)}}"class="btn btn-primary">Edit</a>
      <a href="{{route('ff.wish.delete',$date->id)}}"class="btn btn-danger"><i class="fa-solid fa-trash-can"></i></a>


      </td>

    </tr>
   @endforeach
  </tbody>
</table>

          {{$Wishj->links()}}
</body>




</head>



@endsection