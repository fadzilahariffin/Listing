@extends('layouts.app')

@section('content')
<form action="{{ route('listing.update',$listing) }}" method="POST">
    @csrf
    @method('PATCH')
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-sm-12">
                    <h4 class="card-title mb-0">
                        Create New List
                    </h4>
                </div>
                <!--col-->
            </div>


            {{--Form --}}

            <div class="form-row">
                <div class="form-group col-md-12 {{ $errors->has('list_name') ? 'has-error' : ''}} mt-5">
                    <label for="list_name">List Name <span style="color: red;">*</span></label>
                    <input type="text" name="list_name" class="form-control" placeholder="Enter List Name"
                        value="{{ old('list_name',$listing->list_name) }}">
                    {!! $errors->first('list_name', '<p class="help-block" style="color:red;">:message</p>') !!}
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-12 {{ $errors->has('address') ? 'has-error' : ''}}">
                    <label for="address">Address <span style="color: red;">*</span></label>
                    <textarea class="form-control" name="address" placeholder="Enter Address">{{old('address',$listing->address)}}</textarea>
                    {!! $errors->first('address', '<p class="help-block" style="color:red;">:message</p>') !!}
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6 {{ $errors->has('latitude') ? 'has-error' : ''}} ">
                    <label for="latitude">Latitude <span style="color: red;">*</span></label>
                    <input type="text" name="latitude" class="form-control" placeholder="Enter Latitude"
                        value="{{ old('latitude',$listing->latitude) }}">
                    {!! $errors->first('latitude', '<p class="help-block" style="color:red;">:message</p>') !!}
                </div>
                <div class="form-group col-md-6 {{ $errors->has('longitude') ? 'has-error' : ''}} ">
                    <label for="longitude">Longitude <span style="color: red;">*</span></label>
                    <input type="text" name="longitude" class="form-control" placeholder="Enter Latitude"
                        value="{{ old('longitude',$listing->longitude) }}">
                    {!! $errors->first('longitude', '<p class="help-block" style="color:red;">:message</p>') !!}
                </div>
            </div>

        </div>
        <div class="card-footer">
            <div class="row">
                <div class="col">
                    <a href="{{ route('listing.index') }}" class="btn btn-danger ">Cancel</a>
                </div>
                <!--col-->

                <div class="col text-right">

                    <input type="submit" class="btn btn-primary " value="Submit">
                </div>
                <!--col-->
            </div>
            <!--row-->
        </div>
    </div>
</form>

@endsection