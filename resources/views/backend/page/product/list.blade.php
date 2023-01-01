@extends('backend.master')

@section('content')


<html> 
  <body>
    
  <h1>product table </h1>
  
  <a class="btn btn-success" href="{{url('product-create-from')}}"> create </a>

 
<table class="table table-Secondary">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
      
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
      <td>
        
      </td>
    
    </tbody>
  </table>

</body>
</html>
@endsection();
