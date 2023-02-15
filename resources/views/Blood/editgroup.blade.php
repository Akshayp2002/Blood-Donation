@extends('layouts.app')

@section('content')

<div class="category-form">
    <h1> Update Group</h1>
<form action="{{ url('update-group/'.$data->id) }}" method="post">
    @csrf
    <div class="form-group">
        <label for="name">Blood Group :</label>
        <input type="text" class="form-control" value="{{$data->bloodgroup}}"   name="bloodgroup">
        @error('bloodgroup')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
      </div>
      <div class="form-group">
        <label for="exampleFormControlTextarea1">Discription :</label>
        <textarea class="form-control"  rows="3" name="discription">{{$data->discription}}</textarea>
        @error('discription')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
  </form> 
</div>

@endsection
    
