@extends('layouts.app')
@section('content')
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-sm-5">
                <h4 class="card-title mb-0">
                    Listing Management
                </h4>
            </div>
            <!--col-->
            <div class="col-sm-7">
                <div class="btn-toolbar float-right" role="toolbar" aria-label="Toolbar with button groups">
                    <a href="{{ route('listing.create') }}" class="btn btn-success btn-sm ml-1" data-toggle="tooltip"
                        title="Create New"><i class="fa fa-plus" aria-hidden="true"></i>
                        Add New List</a>
                </div>
            </div>
        </div>
        <hr>
        <div class="row mt-5">
            <div class="col">
                <div class="table-responsive">
                    <table class="table table-border" id="listing-table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>List Name</th>
                                <th>Address</th>
                                <th>Latitude</th>
                                <th>Longitude</th>
                                <th>Submitter</th>
                                <th>Last Update</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($listings as $listing)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$listing->list_name}}</td>
                                <td>{{$listing->address}}</td>
                                <td>{{$listing->latitude}}</td>
                                <td>{{$listing->longitude}}</td>
                                <td>{{$listing->submitter->name}}</td>
                                <td>{{$listing->updated_at->diffForHumans()}}</td>
                                <td>
                                    <div class="row" style="display: inline-block">
                                        <div class="col">
                                            <a href="{{route('listing.show',$listing)}}"
                                                class="btn btn-sm btn-primary">View</a>
                                            <a href="{{route('listing.edit',$listing)}}"
                                                class="btn btn-sm btn-secondary">Edit</a>
                                            <form action="{{ route('listing.destroy',$listing) }}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <input class="btn btn-sm btn-danger" type="submit" value="Delete"/>
                                            </form>
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