@extends('layouts/template')
    @section('styles')
    <style>
        html, body {
            height: 100%;
            width: 100%;
        }

        #map {
            height: calc(100vh - 56px);
            width: 100%;
            margin: 0;
        }
    </style>
    </head>
    @endsection

    @section('content')
    <div id="map" style="height: 100vh"></div>
    @endsection

    @section('script')
    <script>
        //Map
        var map = L.map('map').setView([-7.774731426508902, 110.37451109726402], 13);

        // Basemap
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 19,
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);

        // Marker
        L.marker([-7.774731426508902, 110.37451109726402]).addTo(map)
            .bindPopup('DTK UGM')
            .openPopup();
    </script>
    @endsection
