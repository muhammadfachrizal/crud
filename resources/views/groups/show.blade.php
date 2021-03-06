@extends('master')

@section('title', 'Group Details')
@section('menu', 'User Management')
@section('content')
<div class="separator-breadcrumb border-top"></div>
<div class="row">
                    <div class="col-md-12">
                        <div class="card mb-4">
                            <div class="card-body">
                                <div class="row">
                               @include('groups.show_fields')
                                </div>
                                <a href="{{ route('groups.index') }}" class="btn btn-dark ripple m-1">Back</a>
                            </div>
                        </div>
                        </div>
                        </div>                    
@endsection
