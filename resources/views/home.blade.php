@extends('layouts.app')

@section('content')

<div class="row p-4">

    <div class="col-lg-3 col-6">

        <div class="small-box bg-info">
        <div class="inner">
        <h3>Blood Groups</h3>
        <p>All the groups with quantity</p>
        </div>
        <div class="icon">
        <i class="fas fa-server"></i>
        </div>
        <a href="{{route('groupview')}}" class="small-box-footer">View <i class="fas fa-arrow-circle-right"></i></a>
        </div>
        </div>

        <div class="col-lg-3 col-6">

            <div class="small-box bg-success">
            <div class="inner">
            <h3>Register</h3>
            <p>New Donor</p>
            </div>
            <div class="icon">
            <i class="fas fa-book"></i>
            </div>
            <a href="#" class="small-box-footer">View <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>

        <div class="col-lg-3 col-6">

            <div class="small-box bg-success">
            <div class="inner">
            <h3>Donors</h3>
            <p>All Donors</p>
            </div>
            <div class="icon">
            <i class="fas fa-user"></i>
            </div>
            <a href="{{route('admin-history')}}" class="small-box-footer">View <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
    
    
</div>



@endsection
