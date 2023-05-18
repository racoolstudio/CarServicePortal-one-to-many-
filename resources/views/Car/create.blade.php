@php
    require_once app_path('Helpers/formHelper.php');
@endphp

@extends('layout')
@section('title', 'Create Car')

@section('content')



    <!-- Main navbar -->
    <nav class="navbar navbar-dark navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{route('home')}}">Racool Car Service</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link  " href="{{ route('home')}}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active " href="{{ route('car.create') }}">Add Car</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('owner.index') }}">Owners</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('owner.create') }}">Add Owner</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="page-content mt-5">
        <!-- Horizontal form -->
        <!-- Main content -->
        <div class="content-wrapper">

            <!-- Content area -->
            <div class="content">
                <div class="card ">
                    <div class="card-header d-flex align-items-center">
                        <h5 class="mb-0">New Car </h5>

                    </div>

                    <div class="collapse show">
                        <div class="card-body">
                            <form method="POST" action="{{ route('car.store') }}">
                                @csrf
                                @include('partials.form')

                                <div class="text-end">
                                    <button class="btn btn-primary" type="submit" class="create-button"
                                        onclick="disableButton(this)">Create</button>
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

        <div class="sidebar sidebar-end sidebar-expand-lg align-self-start">
            <div class="collapse show" id="sidebar_end_navigation">
                <ul class="nav nav-sidebar my-2" data-nav-type="accordion">
                    <li class="nav-item">
                        <a href="{{ route('home') }}" class="nav-link">
                            <i class="fa-solid fa-house" style="color: #252B36;"></i>
                            <span class="fw-semibold" style="color: #252B36;">Home</span>

                        </a>
                    </li>
                    <li class="nav-item">

                        <a href="{{ route('car.create') }}" class="nav-link active">
                            <i class="fa-solid fa-car" style="color: #252B36;"></i>
                            <span class="fw-semibold" style="color: #252B36;">Add Car</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('owner.index') }}" class="nav-link">

                            <i class="fa-solid fa-user" style="color: #252B36;"></i>
                            <span class="fw-semibold" style="color: #252B36;">Owners</span>

                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('owner.create') }}" class="nav-link ">

                            <i class="fa-solid fa-user-plus" style="color: #252B36;"></i>
                            <span class="fw-semibold" style="color: #252B36;">Add Owner</span>
                        </a>
                    </li>

                </ul>
            </div>
        </div>


    </div>
@endsection
