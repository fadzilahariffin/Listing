@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Users</h5>
                    <a href="{{route('user.index')}}" class="btn btn-primary">View <i class="fa fa-plus"></i></a>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Listing</h5>
                    <a href="{{route('listing.index')}}" class="btn btn-primary">View</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection