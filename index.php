<?php
session_start();
//Required Includes
require_once "incl/HotelInfo.php";

?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">


    <!-- Bulma CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.2/css/bulma.min.css">


    <!-- My CSS -->
    <link rel="stylesheet" href="./css/styles.css">

    <!-- Emoji CSS -->
    <link href="https://emoji-css.afeld.me/emoji.css" rel="stylesheet">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Crimson+Text:wght@700&display=swap" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Gothic A1' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Trade Winds' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Balthazar' rel='stylesheet'>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <title>Hotel Booking</title>



</head>

<body class="index">
    <!-- Navbar Starts Here -->
    <nav class="navbar navbar-expand-sm bg-dark">
        <a class="navbar-brand" href="#">
            <img src="images/logo.png" alt="Logo" style="width:40px;">
        </a>
    </nav>

    <!-- Jumbotron Starts Here -->
    <div class="jumbotron jumbotron-fluid">
        <section class="section">
            <h2 class="heading">Welcome To Scotland Bookings!</h2>
            <p class="headingp">Please enter your details below:</p>
            <div class="container">
                        <div class="box">
                            <!-- Start of form for booking a hotel -->
                            <form action="display.php" method="post" class="form" id="form">
                                <!-- Div that contains the name input -->
                                <div class="field">
                                    <label class="labels">Name:</label>
                                    <p class="control">
                                        <input class="input" type="text" name="name" placeholder="Please enter your name" required>
                                    </p>
                                </div>
                                <!-- End of Div -->

                                <!-- Div that contains the surname input -->
                                <div class="field">
                                    <label class="labels">Surname:</label>
                                    <p class="control">
                                        <input class="input" type="text" name="surname" placeholder="Please enter your surname" required>
                                    </p>
                                </div>
                                <!-- End of Div -->

                                <!-- Div that contains the email input -->
                                <div class="field">
                                    <label class="labels">Email:</label>
                                    <p class="control">
                                        <input class="input" type="email" name="email" placeholder="Please enter your email address" required>
                                    </p>
                                </div>
                                <!-- End of Div -->

                                <!-- Div that contains check out date -->
                                <div class="field">
                                    <label class="labels">Check-In:</label>
                                    <input class="input" id="in" name="in" type="date" min="today" required>
                                </div>
                                <!-- End of Div -->

                                <!-- Div that contains check out date -->
                                <div class="field">
                                    <label class="labels">Check-Out:</label>
                                    <input class="input" id="out" name="out" type="date" required>
                                </div>

                                <!-- End of Div -->
                        </div>
            </div>

        </section>
    </div>
    <!-- Div that contains hotel choices -->
    <div class="container">
        <div class="field">
            <label class="label">Please select the Hotels that you would like to compare below:</label>
            <p class="control">

                <!-- Card 1: Yotel Hotel -->
                <div class="card" style="width: 18rem;">
                    <img src="images/yotelMain.jpg" class="card-img-top" alt="Yotel Hotel">
                    <div class="card-body">
                        <h5 class="card-title">Yotel Hotel</h5>
                        <hr>
                        <p class="card-text">Located in Edinburgh and with EICC reachable within 1 km, YOTEL Edinburgh provides express check-in and check-out, rooms, a fitness centre, free WiFi throughout the property and a bar. The property is set 1.9 km from Edinburgh Playhouse, 2 km from Edinburgh Castle and 2 km from National Museum of Scotland.</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <br>
                        <li class="list-group-item"><?php echo "Daily Rate: R" . $Yotel->price . "" ?></li>
                        <li class="list-group-item"><input type="checkbox" name="hotel1" value="select" id="info1" class="selection">Compare this Hotel</li>
                    </ul>
                </div>

                <br>

                <!-- Card 2: Ibis Hotel -->
                <div class="card" style="width: 18rem;">
                    <img src="images/ibisMain.jpg" class="card-img-top" alt="Ibis Hotel">
                    <div class="card-body">
                        <h5 class="card-title">Ibis Hotel</h5>
                        <hr>
                        <p class="card-text">Set in Glasgow, 1.1 km from Buchanan Galleries, ibis Styles Glasgow Centre West offers air-conditioned rooms and a bar. Among the facilities of this property are a restaurant, a 24-hour front desk and a shared lounge, along with free WiFi.</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <br>
                        <li class="list-group-item"><?php echo "Daily Rate: R" . $Ibis->price . "" ?></li>
                        <li class="list-group-item"><input type="checkbox" name="hotel2" value="select" id="info2" class="selection">Compare this Hotel</li>
                    </ul>
                </div>

                <br>

                <!-- Card 3: Hotel Indigo  -->
                <div class="card" style="width: 18rem;">
                    <img src="images/indigoMain.jpg" class="card-img-top" alt="Hotel Indigo">
                    <div class="card-body">
                        <h5 class="card-title">Hotel Indigo</h5>
                        <hr>
                        <p class="card-text">Boasting a bar and free WiFi, Hotel Indigo - Dundee is situated in Dundee, 1 km from Discovery Point. Around 1.4 km from University of Dundee and 2 km from Abertay University, the property is also close to Dundee Central Library. The property is located 400 m from Wellgate Shopping Centre.</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <br>
                        <li class="list-group-item"><?php echo "Daily Rate: R" . $Indigo->price . "" ?></li>
                        <li class="list-group-item"><input type="checkbox" name="hotel3" value="select" id="info3" class="selection">Compare this Hotel</li>
                    </ul>
                </div>

                <br>

                <!-- Card 4: Sandman Hotel -->
                <div class="card" style="width: 18rem;">
                    <img src="images/sandmanMain.jpg" class="card-img-top" alt="Sandman Hotel">
                    <div class="card-body">
                        <h5 class="card-title">Sandman Hotel</h5>
                        <hr>
                        <p class="card-text">Popular points of interest near the accommodation include Beach Ballroom, Aberdeen Art Gallery and Bon Accord & St Nicholas. The nearest airport is Aberdeen Airport, 8 km from Sandman Signature Aberdeen Hotel.</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <br>
                        <li class="list-group-item"><?php echo "Daily Rate: R" . $Sandman->price . "" ?></li>
                        <li class="list-group-item"><input type="checkbox" name="hotel4" value="select" id="info4" class="selection">Compare this Hotel</li>
                    </ul>
                </div>

                <br>

                <!-- Card 5: Sleeperz Hotel -->
                <div class="card" style="width: 18rem;">
                    <img src="images/sleeperzMain.jpg" class="card-img-top" alt="Sleeperz Hotel">
                    <div class="card-body">
                        <h5 class="card-title">Sleeperz Hotel</h5>
                        <hr>
                        <p class="card-text">Sleeperz Hotel Dundee is a 120-bedroom hotel located directly above Dundee Railway Station in the city centre, and directly opposite the V&A Dundee. Guests can enjoy views over the nearby V&A Museum Dundee, the River Tay and onto the Waterfront Plaza.</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <br>
                        <li class="list-group-item"><?php echo "Daily Rate: R" . $Sleeperz->price . "" ?></li>
                        <li class="list-group-item"><input type="checkbox" name="hotel5" value="select" id="info5" class="selection">Compare this Hotel</li>
                    </ul>
                </div>

                <br>

                <!-- Card 6: Motel One Hotel -->
                <div class="card" style="width: 18rem;">
                    <img src="images/motelMain.jpg" class="card-img-top" alt="Motel One Hotel">
                    <div class="card-body">
                        <h5 class="card-title">Motel One Hotel</h5>
                        <hr>
                        <p class="card-text">Boasting an excellent location in Glasgow city centre, Motel One Glasgow is next to Central Train Station and is only a 9-minute walk from George Square and Queen Street Train Station.
                    The Hotel is 200 m from the famous Buchanan Street Style Mile, while the Hydro is 1.6 km away. The Royal Concert Hall is 900 m from the property.</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <br>
                        <li class="list-group-item"><?php echo "Daily Rate: R" . $Motel->price . "" ?></li>
                        <li class="list-group-item"><input type="checkbox" name="hotel6" value="select" id="info6" class="selection">Compare this Hotel</li>
                    </ul>
                </div>
                
                <br>

                <!-- Card 7: Radisson Red Hotel -->
                <div class="card" style="width: 18rem;">
                    <img src="images/radissonMain.jpg" class="card-img-top" alt="Radisson Red Hotel">
                    <div class="card-body">
                        <h5 class="card-title">Radisson Red Hotel</h5>
                        <hr>
                        <p class="card-text">Radisson RED hotel in Glagsow features 174 rooms, 3 event and games studios, Glasgow’s first official rooftop bar, a fitness room and 76 car parking spaces. The property is located 183 m from The Hydro, and is a 4-minute walk from the SECC.</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <br>
                        <li class="list-group-item"><?php echo "Daily Rate: R" . $Radisson->price . "" ?></li>
                        <li class="list-group-item"><input type="checkbox" name="hotel7" value="select" id="info7" class="selection">Compare this Hotel</li>
                    </ul>
                </div>
                
                <br>

                <!-- Card 8: Residence Inn Hotel -->
                <div class="card" style="width: 18rem;">
                    <img src="images/residenceMain.jpg" class="card-img-top" alt="Residence Inn">
                    <div class="card-body">
                        <h5 class="card-title">Residence Inn Hotel</h5>
                        <hr>
                        <p class="card-text">Residence Inn by Marriott Aberdeen is set within a 20-minute walk from the beach in Aberdeen. Bon Accord & St Nicholas shopping centre is less than 100 m from the hotel and Union Square shopping centre, Union Street and the Aberdeen Maritime Museum are only a few minutes’ walk away.</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <br>
                        <li class="list-group-item"><?php echo "Daily Rate: R" . $Residence->price . "" ?></li>
                        <li class="list-group-item"><input type="checkbox" name="hotel8" value="select" id="info8" class="selection">Compare this Hotel</li>
                    </ul>
                </div>
                
                <br>

                <!-- Card 9: Hampton Hotel -->
                <div class="card" style="width: 18rem;">
                    <img src="images/hamptonMain.jpg" class="card-img-top" alt="Hampton Hotel">
                    <div class="card-body">
                        <h5 class="card-title">Hampton Hotel</h5>
                        <hr>
                        <p class="card-text">Set in Westhill, 12.9 km from Aberdeen, Hampton By Hilton Aberdeen Westhill features a 24-hour fitness centre and business facilities. Union Square Shopping Centre is 12.9 km from Hampton By Hilton Aberdeen Westhill, while the beach is 9.7 km away. The nearest airport is Aberdeen Airport, 11.3 km from the property. Aberdeen rail station is 12.9 km from Hampton By Hilton Aberdeen Westhill.</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <br>
                        <li class="list-group-item"><?php echo "Daily Rate: R" . $Hampton->price . "" ?></li>
                        <li class="list-group-item"><input type="checkbox" name="hotel9" value="select" id="info9" class="selection">Compare this Hotel</li>
                    </ul>
                </div>

                <br>

                <!-- Card 10: Alexandra Hotel -->
                <div class="card" style="width: 18rem;">
                    <img src="images/alexandraMain.jpg" class="card-img-top" alt="Alexandra Hotel">
                    <div class="card-body">
                        <h5 class="card-title">Alexandra Hotel</h5>
                        <hr>
                        <p class="card-text">SSet in Ballater, 14 km from Balmoral Castle, Alexandra Hotel offers accommodation with a restaurant, free private parking and a bar. Around 14 km from Royal Lochnagar Distillery, the property is also 25 km away from Lecht 2090 ski & Multi activity centre.</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <br>
                        <li class="list-group-item"><?php echo "Daily Rate: R" . $Alexandra->price . "" ?></li>
                        <li class="list-group-item"><input type="checkbox" name="hotel10" value="select" id="info10" class="selection">Compare this Hotel</li>
                    </ul>
                </div>
                
                <br>
                
            </p>
        </div>
    </div>
    <!-- End of Div -->

    <!-- Contains buttons to submit and cancel the form -->
    <div class="field">
        <div class="control">
            <a href="display.php"> <input type="submit" name="submit" onClick="confSubmit(this.form);" disabled></a>
        </div>
    </div>
    <!-- End of Div -->
    </form>
    <!-- End of Form -->

    <!-- Footer -->
    <footer>

        <div class="footer" id="footer">
            <div class="container">
                <div class="row">

                    <div class="col-lg-2  col-md-2 col-sm-4 col-xs-6">
                        <h3> About </h3>
                        <ul>
                            <li> <a href="#"> Our Company </a> </li>
                            <li> <a href="#"> About Us </a> </li>
                            <li> <a href="#"> Terms of Services </a> </li>
                            <li> <a href="#"> Our Team </a> </li>
                        </ul>
                    </div>

                    <div class="col-lg-2  col-md-2 col-sm-4 col-xs-6">
                        <h3> Contact </h3>
                        <ul>
                            <li> <a href="#"> Contact Marketing </a> </li>
                            <li> <a href="#"> Contact Sales </a> </li>
                            <li> <a href="#"> Contact HR </a> </li>
                            <li> <a href="#"> Contact Admin </a> </li>
                        </ul>

                    </div>
                    <div class="col-lg-3  col-md-3 col-sm-6 col-xs-12 ">
                        <h3> Subscribe with Us </h3>
                        <ul>
                            <li>
                                <div class="input-append subscribe-btn text-center">
                                    <input type="text" class="full text-center" placeholder="Email ">
                                    <button class="btn  btn-success" type="button"> Subscribe <i class="fa fa-save"> </i> </button>
                                </div>
                            </li>
                        </ul>

                        <ul class="social">
                            <li> <a href="#"> <i class="fa fa-facebook"> </i> </a> </li>
                            <li> <a href="#"> <i class="fa fa-twitter"> </i> </a> </li>
                            <li> <a href="#"> <i class="fa fa-google-plus"> </i> </a> </li>
                            <li> <a href="#"> <i class="fa fa-instagram"></i> </a> </li>
                        </ul>
                    </div>
                    <div class="col-lg-2  col-md-2 col-sm-4 col-xs-6">
                        <h3> We Accept: </h3>
                        <ul>
                            <li class="payments"><i class="fa fa-cc-paypal"></i>    PayPal</li>
                            <li class="payments"><i class="fa fa-cc-mastercard"></i>    Master Card</li>
                            <li class="payments"><i class="fa fa-cc-amex"></i>    American Express</li>
                            <li class="payments"><i class="fa fa-cc-visa"></i>    Visa</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-bottom">
            <div class="containers">
                <p> Copyright © 2020. All rights reserved. </p>
            </div>
        </div>
        </div>
        </div>
    </footer>
</body>

</html>

<!--Wow JS Activation-->
<script>
    new WOW().init();
</script>

<!-- JavaScript: Hides submit button until you have selected a hotel -->
<script>
    var checkboxes = $("input[type='checkbox']"),
        submitButt = $("input[type='submit']");

    checkboxes.click(function() {
        submitButt.attr("disabled", !checkboxes.is(":checked"));
    });
</script>

<!-- jQuery first, then Popper.js, then Bootstrap JS -->


<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>