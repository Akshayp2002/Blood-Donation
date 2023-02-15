@extends('layouts.app')

@section('user-content')

<div class="row p-4">

    <div class="col-lg-3 col-6">

        <div class="small-box bg-info">
        <div class="inner">
        <h3>Profile</h3>
        <p>Your Profile</p>
        </div>
        <div class="icon">
        <i class="fas fa-server"></i>
        </div>
        <a href="#" class="small-box-footer">View <i class="fas fa-arrow-circle-right"></i></a>
        </div>
        </div>

        <div class="col-lg-3 col-6">

            <div class="small-box bg-success">
            <div class="inner">
            <h3>Donate</h3>
            <p>Donate Blood</p>
            </div>
            <div class="icon">
            <i class="fas fa-book"></i>
            </div>
            <a href="{{route('donorform')}}" class="small-box-footer">View <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>

        <div class="col-lg-3 col-6">

            <div class="small-box bg-success">
            <div class="inner">
            <h3>History</h3>
            <p>All Donation History</p>
            </div>
            <div class="icon">
            <i class="fas fa-user"></i>
            </div>
            <a href="{{route('view-history')}}" class="small-box-footer">View <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
    
    
</div>



@endsection
