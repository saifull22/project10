@extends('backend.master')
@section('content')

<head>
    <body>
        
    <div class="bg-primary text center text-white">

        <h1 class=" text-center"> Product Table</h1>

    </div>
    <a class="btn btn-success" href="{{route('gg.create.from')}}">Create</a>



<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">product Name</th>
      <th scope="col">product Price</th>
      <th scope="col">Quentity</th>
      <th scope="col">Discount</th>
      <th scope="col">Status</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($product as $date)
    <tr>
      <th scope="row">{{$date->id}}</th>

      <td>{{$date->product_name}}</td>
      <td>{{$date->product_price}}</td>
      <td>{{$date->quentity}}</td>
      <td>{{$date->discount}}</td>
      <td>{{$date->status}}</td>
<th>
        <a href="{{route('gg.product.edit',$date->id)}}"class="btn btn-primary">Edit</a>
        <a href="{{route('gg.product.delete',$date->id)}}"class="btn btn-danger"><i class="fa-solid fa-trash-can"></i></a>

        </th>
      </td>

      
      
    </tr>
    
    @endforeach
  </tbody>

</table>

{{$product->links()}}
</body>

</head>



















@endsection