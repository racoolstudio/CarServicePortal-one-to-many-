@extends('layout')
@section('title', 'Car')

@section('content')

    <div class="container">

        <h1 class="text-center">Cars</h1>
        
        @include('partials.add',['routeName'=>'car.create'])  

        <div class="row mt-4 ">
            @forelse ($cars as $car)
                <div class="col-md-6 col-lg-4 mt-4">
                    
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Name : {{ $car->car_name }}</h5>
                            <h5 class="card-title">Model : {{ $car->car_model }}</h5>
                            <h5 class="card-text">Owner : {{ $car->owner->first_name }} {{ $car->owner->last_name }}</h5>
                            <a href="{{route('car.show', $car->id)}} " class="customButton text-center" >Get  </a>

                        </div>



                    </div>
                </div>
            @empty
                <h3 class="text-center">No Car!</h3>
            @endforelse
        </div>
    </div>
@endsection
