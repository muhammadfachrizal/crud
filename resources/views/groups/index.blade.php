@extends('master')

@section('title', 'Group')
@section('menu', 'User Management')
@section('content')
<div class="separator-breadcrumb border-top"></div>
<div class="row mb-4">
    <div class="col-md-12 mb-4">
        <div class="card text-left">
           <div class="card-body">
            <h1 class="pull-right">
           <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{{ route('groups.create') }}">Add New</a>
           </h1>
           <div class="table-responsive">
                <table class="table table-bordered" id="table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Group Name</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                      @foreach($groups as $post)
                      <tr>
                        <td>{{$post->id}}</td>
                        <td>{{$post->name}}</td>
                        <td> @include('groups.actions')</td>
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

