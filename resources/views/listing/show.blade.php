@extends('layouts.app')
@section('content')
    <div class="card">
        <div class="card-body">
            <div class="form-group row">
                <label for="staticEmail" class="col-sm-2" style="font-size:20px;">List Name</label>
                <div class="col-sm-10">
                    <p style="font-size:20px;">{{$listing->list_name}}</p>
                </div>
            </div>
            <div class="form-group row">
                <label for="staticEmail" class="col-sm-2" style="font-size:20px;">Address</label>
                <div class="col-sm-10">
                    <p style="font-size:20px;">{{$listing->address}}</p>
                </div>
            </div>
            <div class="form-group row">
                <label for="staticEmail" class="col-sm-2" style="font-size:20px;">Latitude</label>
                <div class="col-sm-10">
                    <p style="font-size:20px;">{{$listing->latitude}}</p>
                </div>
            </div>
            <div class="form-group row">
                <label for="staticEmail" class="col-sm-2" style="font-size:20px;">Longitude</label>
                <div class="col-sm-10">
                    <p style="font-size:20px;">{{$listing->longitude}}</p>
                </div>
            </div>
            <div class="form-group row">
                <label for="staticEmail" class="col-sm-2" style="font-size:20px;">Submitter</label>
                <div class="col-sm-10">
                    <p style="font-size:20px;">{{$listing->submitter->name}}</p>
                </div>
            </div>
        </div>
        <div class="card-footer">
            <a href="{{route('listing.index')}}" class="btn btn-sm btn-danger">Back</a>
        </div>
    </div>
@endsection