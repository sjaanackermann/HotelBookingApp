<?php
session_start();
//Required Includes
require_once "incl/Hotel.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hotel Booking</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.2/css/bulma.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

    <!-- My CSS -->
    <link rel="stylesheet" href="./css/styles.css">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Crimson+Text:wght@700&display=swap" rel="stylesheet">

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


</head>

<body>
    <!-- Navbar Starts Here -->
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <a class="navbar-brand" href="#">
            <img src="images/logo.png" alt="Logo" style="width:40px;">
        </a>
    </nav>

    <div class="jumbotron jumbotron-fluid">
        <section class="section">
            <h2 class="title">Welcome to My Scotland Bookings!</h2>
            <div class="container">
                <div class="columns">
                    <div class="column">
                        <div class="box">
                            <!-- Start of form for booking a hotel -->
                            <form action="display.php" method="post" class="form">
                                <!-- Div that contains the name input -->
                                <div class="field">
                                    <label class="label">Name:</label>
                                    <p class="control">
                                        <input class="input" type="text" name="name" placeholder="Please enter your name" required>
                                    </p>
                                </div>
                                <!-- End of Div -->

                                <!-- Div that contains the surname input -->
                                <div class="field">
                                    <label class="label">Surname:</label>
                                    <p class="control">
                                        <input class="input" type="text" name="surname" placeholder="Please enter your surname" required>
                                    </p>
                                </div>
                                <!-- End of Div -->

                                <!-- Div that contains the email input -->
                                <div class="field">
                                    <label class="label">Email:</label>
                                    <p class="control">
                                        <input class="input" type="email" name="email" placeholder="Please enter your email address" required>
                                    </p>
                                </div>
                                <!-- End of Div -->

                                <!-- Div that contains check out date -->
                                <div class="field">
                                    <label class="label">Check-In:</label>
                                    <input class="input" name="in" type="date" required>
                                </div>
                                <!-- End of Div -->

                                <!-- Div that contains check out date -->
                                <div class="field">
                                    <label class="label">Check-Out:</label>
                                    <input class="input" name="out" type="date" required>
                                </div>
                                <!-- End of Div -->
        </section>
    </div>
    <!-- Div that contains hotel choices -->
    <div class="field">
        <label class="label">Please select the two Hotels that you would like to compare below:</label>
        <p class="control">
            <input type="checkbox" name="hotels" value="Yotel Hotel"><img id="images" src="images/yotelMain.jpg" alt="Yotel Hotel" width="260px">
            <h3>Yotel Hotel</h3>
            <p id="discrip">Located in Edinburgh and with EICC reachable within 1 km, YOTEL Edinburgh provides express check-in and check-out, rooms, a fitness centre, free WiFi throughout the property and a bar. The property is set 1.9 km from Edinburgh Playhouse, 2 km from Edinburgh Castle and 2 km from National Museum of Scotland. The hotel features family rooms.
            </p>
            <p><b>Daily Rate: R500</b></p>
            <br>

            <hr>
            <input type="checkbox" name="hotels" value="Ibis Hotel"><img id="images" src="images/ibisMain.jpg" alt="Ibis Hotel" width="260px">
            <h3>Ibis Hotel</h3>
            <p id="discrip">Set in Glasgow, 1.1 km from Buchanan Galleries, ibis Styles Glasgow Centre West offers air-conditioned rooms and a bar. Among the facilities of this property are a restaurant, a 24-hour front desk and a shared lounge, along with free WiFi. The hotel features family rooms.
            </p>
            <p><b>Daily Rate: R750</b></p>
            <br>

            <hr>
            <input type="checkbox" name="hotels" value="Hotel Indigo"><img id="images" src="images/indigoMain.jpg" alt="Hotel Indigo" width="260px">
            <h3>Hotel Indigo</h3>
            <p id="discrip">Boasting a bar and free WiFi, Hotel Indigo - Dundee is situated in Dundee, 1 km from Discovery Point. Around 1.4 km from University of Dundee and 2 km from Abertay University, the property is also close to Dundee Central Library. The property is located 400 m from Wellgate Shopping Centre.
            </p>
            <p><b>Daily Rate: R1000</b></p>
            <br>

            <hr>
            <input type="checkbox" name="hotels" value="Sandman Hotel"><img id="images" src="images/sandmanMain.jpg" alt="Sandman Hotel" width="260px">
            <h3>Sandman Hotel</h3>
            <p id="discrip">Sandman Signature Aberdeen Hotel can conveniently provide information at the reception to help guests to get around the area.
                Popular points of interest near the accommodation include Beach Ballroom, Aberdeen Art Gallery and Bon Accord & St Nicholas. The nearest airport is Aberdeen Airport, 8 km from Sandman Signature Aberdeen Hotel.
            </p>
            <p><b>Daily Rate: R800</b></p>
            <br>

            <hr>
            <input type="checkbox" name="hotels" value="Sleeperz Hotel"><img id="images" src="images/sleeperzMain.jpg" alt="Sleeperz Hotel" width="260px">
            <h3>Sleeperz Hotel</h3>
            <p id="discrip">Sleeperz Hotel Dundee is a 120-bedroom hotel located directly above Dundee Railway Station in the city centre, and directly opposite the V&A Dundee. Guests can enjoy views over the nearby V&A Museum Dundee, the River Tay and onto the Waterfront Plaza.
            </p>
            <p><b>Daily Rate: R600</b></p>
            <br>

            <hr>
            <input type="checkbox" name="hotels" value="Motel One Hotel"><img id="images" src="images/motelMain.jpg" alt="Motel One Hotel" width="260px">
            <h3>Motel One</h3>
            <p id="discrip">Boasting an excellent location in Glasgow city centre, Motel One Glasgow is next to Central Train Station and is only a 9-minute walk from George Square and Queen Street Train Station.
                The Hotel is 200 m from the famous Buchanan Street Style Mile, while the Hydro is 1.6 km away. The Royal Concert Hall is 900 m from the property.
                Glasgow City Centre is a great choice for travellers interested in shopping for clothes, shopping and nightlife.
            </p>
            <p><b>Daily Rate: R550</b></p>
            <br>

            <hr>
            <input type="checkbox" name="hotels" value="Radisson Red Hotel"><img id="images" src="images/radissonMain.jpg" alt="Radisson Red Hotel" width="260px">
            <h3>Radisson Red Hotel</h3>
            <p id="discrip">Radisson RED hotel in Glagsow features 174 rooms, 3 event and games studios, Glasgow’s first official rooftop bar, a fitness room and 76 car parking spaces. The property is located 183 m from The Hydro, and is a 4-minute walk from the SECC.</p>
            <p><b>Daily Rate: R900</b></p>
            <br>

            <hr>
            <input type="checkbox" name="hotels" value="Residence Inn"><img id="images" src="images/residenceMain.jpg" alt="Residence Inn" width="260px">
            <h3>Residence Inn</h3>
            <p id="discrip">
                Residence Inn by Marriott Aberdeen is set within a 20-minute walk from the beach in Aberdeen. Free WiFi is available. Bon Accord & St Nicholas shopping centre is less than 100 m from the hotel and Union Square shopping centre, Union Street and the Aberdeen Maritime Museum are only a few minutes’ walk away.
            </p>
            <p><b>Daily Rate: R1000</b></p>
            <br>

            <hr>
            <input type="checkbox" name="hotels" value="Hampton Hotel"><img id="images" src="images/hamptonMain.jpg" alt="Hampton Hotel" width="260px">
            <h3>Hampton Hotel</h3>
            <p id="discrip">Set in Westhill, 12.9 km from Aberdeen, Hampton By Hilton Aberdeen Westhill features a 24-hour fitness centre and business facilities. Union Square Shopping Centre is 12.9 km from Hampton By Hilton Aberdeen Westhill, while the beach is 9.7 km away. The nearest airport is Aberdeen Airport, 11.3 km from the property. Aberdeen rail station is 12.9 km from Hampton By Hilton Aberdeen Westhill.
            </p>
            <p><b>Daily Rate: R1000</b></p>
            <br>

            <hr>
            <input type="checkbox" name="hotels" value="Alexandra Hotel"><img id="images" src="images/alexandraMain.jpg" alt="Alexandra Hotel" width="260px">
            <h3>Alexandra Hotel</h3>
            <p id="discrip">Set in Ballater, 14 km from Balmoral Castle, Alexandra Hotel offers accommodation with a restaurant, free private parking and a bar. Around 14 km from Royal Lochnagar Distillery, the property is also 25 km away from Lecht 2090 ski & Multi activity centre and offers free WiFi.
            </p>
            <p><b>Daily Rate: R1200</b></p>
            <br>
            <hr>
        </p>
    </div>
    <!-- End of Div -->

    <!-- Contains buttons to submit and cancel the form -->
    <div class="field">
        <div class="control">
            <a href="display.php"> <button class="button" name="submit" onClick="confSubmit(this.form);">Submit</button></a>
        </div>
        <div class="control">
            <button class="button">Cancel</button>
        </div>
    </div>
    <!-- End of Div -->
    </form>
    <!-- End of Form -->
    </div>
    </div>
    </div>

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
                    <div class="col-lg-3  col-md-3 col-sm-6 col-xs-12 ">

                    </div>
                </div>
            </div>
        </div>

        <div class="footer-bottom">
            <div class="container">
                <p class="pull-left"> Copyright © 2020. All rights reserved. </p>
                <div class="pull-right">
                    <ul class="nav nav-pills payments">
                        <li>We Accept: </li>
                        <li><i class="fa fa-cc-paypal"></i></li>
                        <li><i class="fa fa-cc-mastercard"></i></li>
                        <li><i class="fa fa-cc-amex"></i></li>
                        <li><i class="fa fa-cc-visa"></i></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>