@extends('parts.doctype')
@include('parts.navbarIsLog')


@section('page-content')

<header class="business-header">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="tagline">WELCOME TO SEA HOTEL</h1>
            </div>
        </div>
    </div>
</header>
<img src="http://www.sportfair.it/wp-content/uploads/2016/07/burj-al-arab-1.jpg" class="img-rounded" alt="Cinque Terre" width="100%" height="60%">
<!-- Page Content -->
<div class="container">

    <hr>

    <div class="row">
        <div class="col-sm-8">
            <h2>Beach</h2>
            <p>Built beside the beautiful beach, the Sea Hotel invites you to enjoy the summer like you've
                never experienced it before. With a sandy and shallow beach, ideal for children and safe thanks to our
                qualified lifeguards, ourbeach offers many sun beds and parasols and offers service by our Beach Bar
                staff (link here) directly at your sun bed under the sounds of choice music. Sun beds can be reserved
                daily from the Beach Bar, while our hotel offers free beach towels for guests.</p>

            <p> Boasting the Blue Flag and Green Key awards for cleanliness, high quality, safety and care for the
                environment, our beach is ideal for children and families throughout the day and even later, luring your
                to admire the incomparable view of our sunset.</p>


        </div>
        <div class="col-sm-4">
            <h2>Contact Us</h2>
            <address>
                <strong>SEA HOTEL </strong>
                <br>3481 Melrose Place
                <br>Anthemus Sea
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
            <img class="img-circle img-responsive img-center" src="https://s-media-cache-ak0.pinimg.com/736x/8d/9c/af/8d9caf78227651ee73ce2fbc41b68a90.jpg" alt="image" height="300" width="300">
            <h2>Under the Sea</h2>
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
