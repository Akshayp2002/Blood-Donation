@extends('layouts.app')


{{-- Admin panel --}}
@section('content')
<div class="card-header" >
    <table class="table table-striped">
        <thead>
          <div class="d-flex justify-content-between p-3">
            <h4>Donation History </h4>
          </div>
          <tr>
            <th scope="col">SL</th>
            <th scope="col">Name</th>
            <th scope="col">Blood Group</th>
            <th scope="col">Age</th>
            <th scope="col">Address</th>
            <th scope="col">Quantity</th>
            <th scope="col">Date</th>
            <th scope="col"></th>
          </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
          <tr>
            <th scope="row">{{$loop->iteration}}</th>
            <td>{{$item->name}}</td>
            <td>{{$item->bloodgroup}}</td>
            <td>{{$item->age}}</td>
            <td>{{$item->address}}</td>
            <td>{{$item->discription}}</td>
            <td>{{$item->created_at}}</td>
            <td>
              <a class="btn btn-info" href="{{ url('/edit-history/'.$item->id)}}">Edit</a>
              <a class="btn btn-danger" href="{{ url('deletehistory/'.$item->id)}}">Delete</a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
</div>



@endsection
