@extends('layouts.app')

@section('content')

<div class="category-form">
    <h1>Groups</h1>
<form action="{{ route('save_group') }}" method="post">
    @csrf
    <div class="form-group">
        <label for="name">Blood Group :</label>
        <input type="text" class="form-control"   name="bloodgroup">
        @error('bloodgroup')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
      </div>
      <div class="form-group">
        <label for="exampleFormControlTextarea1">Discription :</label>
        <textarea class="form-control"  rows="3" name="discription"></textarea>
        @error('discription')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
  </form> 
</div>

@endsection
    
