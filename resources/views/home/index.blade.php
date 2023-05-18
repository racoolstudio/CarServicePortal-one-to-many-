@extends('layout')
@section('title', 'Home')
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
                        <a class="nav-link active " href="{{route('home')}}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="{{route('car.create')}}">Add Car</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('owner.index')}}">Owners</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('owner.create')}}">Add Owner</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <!-- /main navbar -->


    <!-- Page header -->
    <div class="page-header">
        <div class="page-header-content d-lg-flex">
            <div class="d-flex">
                <h4 class="page-title mb-0">We've Got You Coverd !</h4>

                <a href="#page_header"
                    class="btn btn-light align-self-center collapsed d-lg-none border-transparent rounded-pill p-0 ms-auto"
                    data-bs-toggle="collapse">
                    <i class="ph-caret-down collapsible-indicator ph-sm m-1"></i>
                </a>
            </div>


        </div>

    </div>
    <!-- /page header -->


    <!-- Page content -->
    <div class="page-content pt-0">

        <!-- Main content -->
        <div class="content-wrapper">

            <!-- Content area -->
            <div class="content">

                <!-- Basic table -->
                <div class="card">
                    <div class="card-header">
                        <h5 class="mb-0">Owners</h5>
                    </div>

                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Model</th>
                                    <th>Owner</th>
                                    <th style="width: 200px"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($cars as $car)
                                    <tr>
                                        <td> {{ $car->car_name }}</td>
                                        <td>{{ $car->car_model }}</td>
                                        
                                        <td>{{ $car->owner->first_name }} {{ $car->owner->last_name }}</td>
                                        <td >
                                            <a href="{{route('car.show', $car->id)}}"><i
                                                    class="fa-solid fa-eye me-3" style="color: #0d61f2;"></i></a>
                                            <a href="{{ route('car.edit', ['car' => $car->id]) }}"><i
                                                    class="fa-solid fa-pencil me-3" style="color: #33d728;"></i></a>
                                            @include('partials.deleteCar')
                                        </td>

                                    </tr>
                                @empty
                                    <td>No Car!</td>
                                    <td>No Car!</td>
                                    <td>No Car!</td>
                                    <td>No Car!</td>
                                @endforelse

                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- /basic table -->

            </div>
    


            <!-- /content area -->

        </div>
        <!-- /main content -->


        <!-- Right sidebar -->
        <div class="sidebar sidebar-end sidebar-expand-lg align-self-start">

            <!-- Sidebar content -->
            <div class="sidebar-content">

                <!-- Header -->
                <div class="sidebar-section sidebar-section-body d-flex align-items-center pb-0 card-header">

                    <div class="ms-auto">
                        <button type="button"
                            class="btn btn-light border-transparent btn-icon rounded-pill btn-sm sidebar-mobile-end-toggle d-lg-none">
                            <i class="ph-x"></i>
                        </button>
                    </div>
                </div>
                <!-- /header -->

                <div class="sidebar-section-header">
                    <div class="collapse show" id="sidebar_end_navigation">
                        <ul class="nav nav-sidebar my-2" data-nav-type="accordion">
                            <li class="nav-item">
                                <a href="{{route('home')}}" class="nav-link active">
                                    <i class="fa-solid fa-house" style="color: #252B36;"></i>
                                    <span class="fw-semibold" style="color: #252B36;">Home</span>

                                </a>
                            </li>
                            <li class="nav-item">

                                <a href="{{route('car.create')}}" class="nav-link">
                                    <i class="fa-solid fa-car" style="color: #252B36;"></i>
                                    <span class="fw-semibold" style="color: #252B36;">Add Car</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('owner.index')}}" class="nav-link">

                                    <i class="fa-solid fa-user" style="color: #252B36;"></i>
                                    <span class="fw-semibold" style="color: #252B36;">Owners</span>

                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('owner.create')}}" class="nav-link">

                                    <i class="fa-solid fa-user-plus" style="color: #252B36;"></i>
                                    <span class="fw-semibold" style="color: #252B36;">Add Owner</span>
                                </a>
                            </li>
                            
                        </ul>
                    </div>
                </div>


            </div>
            <!-- /sidebar content -->

        </div>
        <!-- /right sidebar -->

    </div>
    <!-- /page content -->


   



    @endsection
