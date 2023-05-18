@extends('layout')
@section('title', $owner->first_name)
@section('content')
    @include('partials.back', ['routeName' => 'owner.index'])


    <div class="page-content mt-5">
        <div class="content-wrapper">
            <div class="content">
                <div class="card">
                    <div class="card-header d-flex align-items-center">
                        <h3 class="card-title">Owner Details</h3>
                    </div>
                    
                        <div class="card-body mx-auto">
                            <h5 class="card-title">ID : {{ $owner->id }}</h5>
                            <h5 class="card-title">First Name : {{ $owner->first_name }}</h5>
                            <h5 class="card-title">Last Name : {{ $owner->last_name }}</h5>
                        </div>
          
                </div>
            </div>
        </div>
    </div>

@endsection
