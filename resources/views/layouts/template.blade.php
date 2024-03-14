<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Petaku</title>

    <!-- leaflet -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />

    <!-- bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- font awesome-->
    <link rel="stylesheet" href=" https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />

    @yield('styles')
</head>

<body>

    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><i class="fa-solid fa-earth-americas"></i>Petaku</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('index')}}"><i class="fa-solid fa-map-location-dot"></i>Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('table')}}"><i class="fa-solid fa-table"></i>Table</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fa-solid fa-circle-info"></i>Info</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login')}}"><i class="fa-solid fa-right-to-bracket"></i>Login</a>

                    </li>

                </ul>
            </div>
        </div>
    </nav>

    @yield('content')

    <!--Leaflet JS-->
    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>

    @yield('script')
</body>

</html>
