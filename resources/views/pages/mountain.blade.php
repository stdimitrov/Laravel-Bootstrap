@extends('parts.doctype')
@include('parts.navbarIsLog')

@section('page-content')

    <header class="business-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="tagline">WELCOME TO MOUNTAIN HOTEL</h1>
                </div>
            </div>
        </div>
    </header>
    <img src="https://cdn.kiwicollection.com/media/property/PR005283/xl/005283-01-hotel-exterior-mountains-winter-night.jpg" class="img-rounded" alt="Cinque Terre" width="100%" height="60%">
    <!-- Page Content -->
    <div class="container">

        <hr>

        <div class="row">
            <div class="col-sm-8">
                <h2>Mountain luxury hotel</h2>
                <p>Located at the foothills of the majestic Mountain is one of the most popular winter
                    resorts for skiing, snowboarding, mountain thrills or just plain relaxation, in Europe. </p>

                <p> Along with the luxury accommodation, Mountain Hotel is ideal for after ski activities,
                    with its two restaurants that travel the guests to the roads of gastronomy and a lobby bar to
                    enjoy drinks and superbly made cocktails. Superior spa & wellness facilities and first-class
                    service are the ingredients for a relaxing and unforgettable experience for your mind and soul. </p>


            </div>
            <div class="col-sm-4">
                <h2>Contact Us</h2>
                <address>
                    <strong>MOUNTAIN HOTEL </strong>
                    <br>3481 Melrose Place
                    <br>Mountain
                    <br>
                </address>
                <address>
                    <abbr title="Phone">P:</abbr>(123) 456-7890
                    <br>
                    <abbr title="Email">E:</abbr> <a href="mailto:#">name@example.com</a>
                </address>
            </div>
        </div>
        <!-- /.row -->

        <hr>

        <div class="row">
            <div class="col-sm-4">
                <img class="img-circle img-responsive img-center" src="http://www.banskohotelpremier.com/images/accommodation/residence-collection.jpg" alt="image" height="300" width="300">
                <h2>Residence Collection</h2>
                <p>It's been many hoteliers' dream to build an underwater resort where guests could be immersed, quite
                    literally, in the wonders under the sea.</p>
            </div>
            <div class="col-sm-4">
                <img class="img-circle img-responsive img-center" src="http://miriadna.com/desctopwalls/images/max/Sunrise-in-Carebbean-sea.jpg" alt="image" height="300" width="300">
                <h2>Sunrise in sea</h2>
                <p>Sunrise over the amazing infinity pool in the private beach</p>
            </div>
            <div class="col-sm-4">
                <img class="img-circle img-responsive img-center" src="https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcTSZglpsx_vak3YgKOgm2HZLa46oosFcQqi5BB-PRwNjPV3hZMS" alt="image" height="300" width="300">
                <h2>Sea Travel</h2>
                <p>Crystal clear waters, sheltered bays, pristine coral reefs and protected national parks </p>
            </div>
        </div>
        <!-- /.row -->

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Your Website 2016</p>
                </div>
            </div>
            <!-- /.row -->
        </footer>
    </div>
    <!-- /.container -->
@stop
