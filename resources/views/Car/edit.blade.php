@php
    require_once app_path('Helpers/formHelper.php');
@endphp

@extends('layout')
@section('title', 'Update Car')

@section('content')

    @include('partials.back', ['routeName' => 'home'])

    <div class="page-content mt-5">
        <div class="content-wrapper">
            <div class="content">
                <div class="card">
                    <div class="card-header d-flex align-items-center">
                        <h5 class="mb-0">Update Car </h5>
                    </div>
                    <div class="collapse show">
                        <div class="card-body">
                            <form method="POST" action="{{ route('car.update', ['car' => $car->id]) }}" class="form">
                                @csrf
                                @method('PUT')
                                @include('partials.form')
                                <div class="text-end">
                                    <button class="btn btn-success" type="submit" 
                                        onclick="disableButton(this)">Update</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script>
            function disableButton(button) {
                button.disabled = true; // disable the button after it's been clicked
                button.form.submit(); // submit the form
            }
        </script>
    </div>



@endsection
