@extends('layouts.app')

@section('content')

<div class="category-form">
    <div class="card card-rounded m-3 p-4">
    <h1>Edit Donor Application</h1>
<form action="{{ url('history-edit/'.$data->id) }}" method="post">
    @csrf
    <div class="form-group">
        <label for="name">Name :</label>
        <input type="text" class="form-control" value="{{$data->name}}" name="name">
      </div>
    <div class="form-group">
        <label for="name">Blood Group :</label>
        <input type="text" class="form-control" value="{{$data->bloodgroup}}" name="bloodgroup">
      </div>
      <div class="form-group">
        <label for="name">Age :</label>
        <input type="text" class="form-control" value="{{$data->age}}" name="age">
      </div>
      <div class="form-group">
        <label for="name">Address :</label>
        <input type="text" class="form-control" value="{{$data->address}}" name="address">
      </div>
      <div class="form-group">
        <label for="exampleFormControlTextarea1">Quantity :</label>
        <textarea class="form-control"  rows="3" value="" name="discription">{{$data->discription}}</textarea>
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
  </form> 
</div>
</div>

@endsection
    
