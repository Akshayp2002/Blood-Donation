@extends('layouts.app')

@section('content')
<div class="card-header" >
    <table class="table table-striped">
        <thead>
          <div class="d-flex justify-content-between p-3">
            <h4>Group list</h4>
            <a class="btn btn-primary" href="{{ route('group_form') }} ">Add New</a>
          </div>
          <tr>
            <th scope="col">SL</th>
            <th scope="col">Group</th>
            <th scope="col">Discription</th>
            <th scope="col"></th>
          </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
          <tr>
            <th scope="row">{{$loop->iteration}}</th>
            <td>{{$item->bloodgroup}}</td>
            <td>{{$item->discription}}</td>
            <td>
                <a class="btn btn-info" href="{{ url('/editgroup/'.$item->id)}}">Edit</a>
                <a class="btn btn-danger" method='post' href="{{ url('deletegroup/'.$item->id)}}">Delete</a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
</div>



@endsection
