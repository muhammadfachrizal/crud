@extends('master')

@section('title', 'Edit Group')
@section('menu', 'User Management')
@section('content')
<div class="separator-breadcrumb border-top"></div>
<div class="row">
                    <div class="col-md-12">
                        <div class="card mb-4">
                            <div class="card-body">
                                <div class="card-title mb-3">Group Form</div>
                               
                                {!! Form::model($groups, ['route' => ['groups.update', $groups->id], 'method' => 'patch']) !!}
                                
                                <div class="row">

                                @include('groups.fields')
                                </div>
                                {!! Form::close() !!}
                            </div>
                        </div>
                        </div>
                        </div>
@endsection