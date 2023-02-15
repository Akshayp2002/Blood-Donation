@extends('layouts.app')

@section('user-content')

<div class="category-form">
    <div class="card card-rounded m-3 p-4">
    <h1>Donor Application</h1>
<form action="{{ route('donor-save') }}" method="post">
    @csrf
    <div class="form-group">
        <label for="name">Name :</label>
        <input type="text" class="form-control"   name="name">
      </div>
    <div class="form-group">
        <label for="name">Blood Group :</label>
        <input type="text" class="form-control"   name="bloodgroup">
      </div>
      <div class="form-group">
        <label for="name">Age :</label>
        <input type="text" class="form-control"   name="age">
      </div>
      <div class="form-group">
        <label for="name">Address :</label>
        <input type="text" class="form-control"   name="address">
      </div>
      <div class="form-group">
        <label for="exampleFormControlTextarea1">Quantity :</label>
        <textarea class="form-control"  rows="3" name="discription"></textarea>
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
  </form> 
</div>
</div>

@endsection
    
