@extends('master')

@section('title', 'Edit Contact')
@section('menu', 'User Management')
@section('content')
<div class="separator-breadcrumb border-top"></div>
<div class="row">
                    <div class="col-md-12">
                        <div class="card mb-4">
                            <div class="card-body">
                                <div class="card-title mb-3">Contact Form</div>
                               
                                {!! Form::model($contacts, ['route' => ['contacts.update', $contacts->id], 'method' => 'patch','files' => true]) !!}
                                
                                <div class="row">

                                @include('contacts.fields')
                                </div>
                                {!! Form::close() !!}
                            </div>
                        </div>
                        </div>
                        </div>
@endsection