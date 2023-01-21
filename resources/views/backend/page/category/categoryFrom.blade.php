@extends('backend.master')

@section('content')
<div>

    <form action="{{(route('aa.category.store'))}}"method="post">

      @csrf

  <div class="row">
    <div class="col">
      <input name="Firstname" type="text" class="form-control" placeholder="First name">
    </div>
    <div class="col">
      <input name="Lastname" type="text" class="form-control" placeholder="Last name">
    </div>
  </div><br>

  <button type="submit" class="btn btn-primary"> Submit </button>
</form>


</div>

@endsection()