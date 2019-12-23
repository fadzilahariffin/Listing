@extends('layouts.app')

@section('content')
<form action="{{ route('user.store') }}" method="POST">
    @csrf
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-sm-12">
                    <h4 class="card-title mb-0">
                        Users
                    </h4>
                </div>
                <!--col-->
            </div>


            {{--Form --}}

            <div class="form-row">
                <div class="form-group col-md-12 {{ $errors->has('name') ? 'has-error' : ''}} mt-5">
                    <label for="name">Name <span style="color: red;">*</span></label>
                    <input type="text" name="name" class="form-control" placeholder="Enter Name"
                        value="{{ old('name') }}">
                    {!! $errors->first('name', '<p class="help-block" style="color:red;">:message</p>') !!}
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-12 {{ $errors->has('email') ? 'has-error' : ''}}">
                    <label for="section_title">Email <span style="color: red;">*</span></label>
                    <input type="email" name="email" class="form-control" placeholder="Enter Email"
                        value="{{ old('email') }}">
                    {!! $errors->first('email', '<p class="help-block" style="color:red;">:message</p>') !!}
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-3 {{ $errors->has('type') ? 'has-error' : ''}} ">
                    <label for="type">Type <span style="color: red;">*</span></label>
                    <select name="type" class="form-control">
                        <option value=null selected disabled>- Please Select -</option>
                        <option value="u" @if (old('type')=='u' ) selected @endif>User</option>
                        <option value="a" @if (old('type')=='a' ) selected @endif>Admin</option>
                    </select>
                    {!! $errors->first('type', '<p class="help-block" style="color:red;">:message</p>') !!}
                </div>
            </div>


            <div class="form-row">
                <div class="form-group col-md-12 {{ $errors->has('password') ? 'has-error' : ''}}">
                    <label for="section_title">Password <span style="color: red;">*</span></label>
                    <input type="password" name="password" class="form-control" placeholder="Enter password">
                    {!! $errors->first('password', '<p class="help-block" style="color:red;">:message</p>') !!}
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-12 {{ $errors->has('confirm_password') ? 'has-error' : ''}}">
                    <label for="confirm_password">Confirm Password <span style="color: red;">*</span></label>
                    <input type="password" name="confirm_password" class="form-control"
                        placeholder="Enter Confirmation password">
                    {!! $errors->first('confirm_password', '<p class="help-block" style="color:red;">:message</p>') !!}
                </div>
            </div>

        </div>
        <div class="card-footer">
            <div class="row">
                <div class="col">
                    <a href="{{ route('user.index') }}" class="btn btn-danger ">Cancel</a>
                </div>
                <!--col-->

                <div class="col text-right">

                    <input type="submit" class="btn btn-success " value="Next">
                </div>
                <!--col-->
            </div>
            <!--row-->
        </div>
    </div>
</form>

@endsection