@extends('parts.doctype')
@include('parts.navbarIsLog')

@section('page-content')


    <header class="business-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="tagline">WELCOME TO HOTEL SOFIA</h1>
                </div>
            </div>
        </div>
    </header>
    <img src="http://sofia-art-galleries.com/wp-content/uploads/2015/03/grand-hotel-sofia.jpg" class="img-rounded" alt="Cinque Terre" width="100%" height="60%">
    <!-- Page Content -->
    <div class="container">

        <hr>

        <div class="row">
            <div class="col-sm-8">
                <h2>What We Do</h2>
                <p>Hotel Sofia is one of the most prestigious hotels in Sofia. Business guests benefit from its
                    close proximity to main administrative, financial and commercial areas. Art-lovers and food
                    connoisseurs alike will appreciate the hotel gallery and its fine-dining Shades of Red restaurant.</p>
                <p>The Hotel is a stylish residence in a prime location with a welcoming and dedicated staff that will
                    ensure your stay will exceed your expectations. Throughout the years Grand Hotel Sofia has
                    accommodated a remarkable variety of international celebrities and dignitaries.</p>

            </div>
            <div class="col-sm-4">
                <h2>Contact Us</h2>
                <address>
                    <strong>HOTEL SOFIA</strong>
                    <br>3481 Melrose Place
                    <br>Sofia, BG 90210
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
                <img class="img-circle img-responsive img-center" src="http://r-ec.bstatic.com/images/hotel/840x460/136/13667018.jpg" alt="image" height="300" width="300">
                <h2>In-Room</h2>
                <p>Work desk and lamp</p>
                <p>IDD telephone with voice mail</p>
                <p>Wide LCD TV screen</p>
                <p>Satellite and pay TV channels</p>
                <p>Mini bar and in-room safe</p>
                <p>Valet hanger for more comfort</p>
                <p>Bathroom with separate bathtub and shower cabin</p>
                <p>Hairdryer, bathrobe, slippers</p>
            </div>
            <div class="col-sm-4">
                <img class="img-circle img-responsive img-center" src="http://images.allhotels.bg/images/GrandHotelSofia/grand-hotel-sofia-re14.jpg?w=474&h=297" alt="image" height="300" width="300">
                <h2>Word on a plate</h2>
                <p>Discover the world of culinary delights in our classic Shades of Red Restaurant offering superb
                    international cuisine and great local specialties a-la-carte, complemented by a magnificent outdoor
                    terrace.</p>
            </div>
            <div class="col-sm-4">
                <img class="img-circle img-responsive img-center" src="https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcS1phnaY50ImbIzm327su8TbHoj7IDqoAA2zaZ31FNapkxVnhp1Fg" alt="image" height="300" width="300">
                <h2>Sweet CafГ©</h2>
                <p>The Cafe with open-air terrace is the ideal venue where you can enjoy a leisurely cup of
                    coffee and delights from our extensive pastry menu. With its lush green plants and decor the terrace
                    offers a casual, chic option for sharing light dishes all day long.</p>
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
