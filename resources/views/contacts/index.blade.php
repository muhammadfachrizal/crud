@extends('master')

@section('title', 'Contact')
@section('menu', 'User Management')
@section('content')
<div class="separator-breadcrumb border-top"></div>
<div class="row mb-4">
    <div class="col-md-12 mb-4">
        <div class="card text-left">
           <div class="card-body">
            <h1 class="pull-right">
           <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{{ route('contacts.create') }}">Add New</a>
           </h1>
           <div class="table-responsive">
                <table class="table table-bordered" id="table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>Phone</th>
                            <th>Group</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                      @foreach($contacts as $post)
                      <tr>
                        <td>{{$post->id}}</td>
                        <td>{{$post->fname}} {{$post->lname}}</td>
                        <td>{{$post->phone}}</td>
                        <td>{{$post->group_id}}</td>
                        <td> 
                          @include('contacts.actions')
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

