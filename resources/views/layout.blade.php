<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Global stylesheets -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="{{ asset('css/inter.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/ltr/all.min.css') }}" id="stylesheet" rel="stylesheet" type="text/css"> 
    <!-- /global stylesheets -->


    <!-- /core JS files -->

    <!-- Theme JS files -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">

    <!-- /theme JS files -->


    <title>@yield('title')</title>

</head>

<body>

    @yield('content')


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>

    <!-- Core JS files -->
    {{-- <script src="{{asset('js/app.js')}}"></script>  --}}
    <script src="{{ asset('js/demo_configurator.js') }}"></script>
    
</body>
 <!-- Footer -->
 <footer class="bg-dark text-center text-white border-top">
    <!-- Grid container -->
    <div class="container p-4">
        <!-- Section: Social media -->
        <section class="mb-4">
            <!-- Facebook -->
            <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i
                    class="fab fa-facebook-f"></i></a>

            <!-- Twitter -->
            <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i
                    class="fab fa-twitter"></i></a>

            <!-- Google -->
            <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i
                class="fa-regular fa-envelope"></i></a>

            <!-- Instagram -->
            <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i
                    class="fab fa-instagram"></i></a>

            <!-- Linkedin -->
            <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i
                    class="fab fa-linkedin-in"></i></a>

            <!-- Github -->
            <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i
                    class="fab fa-github"></i></a>
        </section>
        <!-- Section: Social media -->

        Racool Studio © {{ date('Y') }} 

    
    </div>
    <!-- Grid container -->

</footer>
<!-- Footer -->

</html>
