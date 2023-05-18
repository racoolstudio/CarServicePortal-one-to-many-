@extends('layout')
@section('title', $car->car_name)
@section('content')

    @include('partials.back', ['routeName' => 'home'])

    <div class="page-content mt-5">
        <div class="content-wrapper">
            <div class="content">
                <div class="card">
                    <div class="card-body mx-auto">
                        <h3 class="card-title ">Car Details</h3>

                        <h5 class="card-title">Name : {{ $car->car_name }}</h5>
                        <h5 class="card-title">Model : {{ $car->car_model }}</h5>


                        <h3 class="card-title mt-4">Owner Details</h3>

                        <h5 class="card-title">First Name: {{ $car->owner->first_name }}</h5>
                        <h5 class="card-title">Last Name: {{ $car->owner->last_name }}</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
