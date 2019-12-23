@extends('layouts.app')
@section('content')
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-sm-5">
                <h4 class="card-title mb-0">
                    User Management
                </h4>
            </div>
            <!--col-->
            <div class="col-sm-7">
                <div class="btn-toolbar float-right" role="toolbar" aria-label="Toolbar with button groups">
                    <a href="{{ route('user.create') }}" class="btn btn-success btn-sm ml-1" data-toggle="tooltip"
                        title="Create New"><i class="fa fa-plus" aria-hidden="true"></i>
                        Add New User</a>
                </div>
            </div>
        </div>
        <hr>
        <div class="row mt-5">
            <div class="col">
                <div class="table-responsive">
                    <table class="table table-border" id="user-table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Type</th>
                                <th>Last Update</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                <td>{{$user->type}}</td>
                                <td>{{$user->updated_at->diffForHumans()}}</td>
                                <td>
                                    <div class="row" style="display: inline-block">
                                        <div class="col">
                                            <a href="{{route('user.show',$user)}}"
                                                class="btn btn-sm btn-primary">View</a>
                                            @if ($user->id != auth()->user()->id)
                                            <a href="{{route('user.edit',$user)}}"
                                                class="btn btn-sm btn-secondary">Edit</a>
                                            <form action="{{ route('user.destroy',$user) }}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <input class="btn btn-sm btn-danger" type="submit" value="Delete"/>
                                            </form>
                                            @endif
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@push('scripts')

@endpush