@extends('layouts.app')
@section('content')
    <div class="card">
        <div class="card-body">
            <div class="form-group row">
                <label for="staticEmail" class="col-sm-2" style="font-size:20px;">Name</label>
                <div class="col-sm-10">
                    <p style="font-size:20px;">{{$user->name}}</p>
                </div>
            </div>
            <div class="form-group row">
                <label for="staticEmail" class="col-sm-2" style="font-size:20px;">Email</label>
                <div class="col-sm-10">
                    <p style="font-size:20px;">{{$user->email}}</p>
                </div>
            </div>
            <div class="form-group row">
                <label for="staticEmail" class="col-sm-2" style="font-size:20px;">Type</label>
                <div class="col-sm-10">
                    @if ($user->a == 'a')
                        <p style="font-size:20px;">Admin</p>
                    @else
                        <p style="font-size:20px;">User</p>
                    @endif
                </div>
            </div>
        </div>
        <div class="card-footer">
            <a href="{{route('user.index')}}" class="btn btn-sm btn-danger">Back</a>
        </div>
    </div>
@endsection