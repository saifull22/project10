@extends('backend.master')
@section('content')

<div>

    <form action="{{(route('aa.category.update',$category->id))}}"method="post">

      @csrf
        @method('PUT')
  <div class="row">
    <div class="col">
      <input name="Firstname" type="text" class="form-control" placeholder="First name" value="{{$category->Firstname}}">
    </div>
    <div class="col">
      <input name="Lastname" type="text" class="form-control" placeholder="Last name" value="{{$category->Lastname}}">
    </div>
  </div><br>


  <button type="submit" class="btn btn-primary"> Submit </button>
</form>


</div>
















@endsection