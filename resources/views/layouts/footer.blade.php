<footer class="bg-white text-gray-600 border-t border-gray-100 text-center">
    <style>
        @import url("https://fonts.googleapis.com/css2?family=League+Spartan:wght@100;200;300;400;500;600;700;800;900&display=swap");

        /* global styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "League Spartan", sans-serif;
        }

        #footer {
            padding: 75px 0;
            max-width: 100%; /* Ensures footer doesn't exceed screen width */
            overflow-x: hidden; /* Prevent horizontal scroll if content overflows */
        }

        .footer-logo {
            width: 100px;
            height: auto;
            margin: 5px;
        }

        .socials a {
            font-size: 24px;
        }

        .about {
            text-align: center;
        }

        .about-logo {
            width: 100px;
            margin: 15px;
            height: auto;
        }

        p {
            margin: 2px 0;
            font-size: 14px;
        }

        .socials a {
            color: grey;
            margin: 0 5px;
        }

        .socials img {
            width: 30px;
            height: auto;
        }

        
        @media (max-width: 768px) {
            #footer {
                padding: 50px 15px;
            }

            .footer-logo,
            .about-logo {
                width: 80px;
            }

            .socials a {
                font-size: 20px; 
            }
        }
    </style>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <script src="https://kit.fontawesome.com/0e53af926d.js" crossorigin="anonymous"></script>

    <div id="footer" class="container-fluid bg-light py-5">
        <div class="row">
            <div class="col-md-6 contact text-center text-md-start">
                <a href="index.html">
                    <img src="assets/logo.png" alt="" class="footer-logo"/>
                </a>
                <a href="index.html">
                    <img src="assets/rgo.jpg" alt="" class="footer-logo"/>
                </a>
                <h3 class="mt-4">Contact RGO JPLPC Malvar</h3>
                <address>
                    <p><strong>Address:</strong> Poblacion Malvar Batangas</p>
                    <p><strong>Phone:</strong> (+63) 9107029382</p>
                    <p><strong>Hours:</strong> 8:00am - 5:00pm Monday - Friday</p>
                </address>
                <h3 class="soc">Follow Us</h3>
                <div class="socials mt-3">
                    <a href="#" class="me-2"><i class="fa-brands fa-facebook-square"></i></a>
                    <a href="#" class="me-2"><i class="fa-brands fa-youtube"></i></a>
                    <a href="#" class="me-2"><i class="fa-brands fa-telegram"></i></a>
                    <a href="#" class="me-2"><i class="fa-brands fa-instagram"></i></a>
                    <a href="#"><i class="fa-brands fa-twitter"></i></a>
                </div>
            </div>
            <div class="col-md-6 about text-center mt-4 mt-md-0">
                <h3>In Partnership with</h3>
                <div class="d-flex justify-content-center flex-wrap">
                    <img src="{{ asset('images/logos/cas.png') }}" alt="" class="about-logo me-2"/>
                    <img src="{{ asset('images/logos/cet.png') }}" alt="" class="about-logo me-2"/> 
                    <img src="{{ asset('images/logos/cabeihm.png') }}" alt="" class="about-logo me-2"/>  
                    <img src="{{ asset('images/logos/cics.png') }}" alt="" class="about-logo me-2"/>
                    <img src="{{ asset('images/logos/cte.png') }}" alt="" class="about-logo me-2"/>
                </div>
                <p>College of Arts and Sciences</p>
                <p>College of Engineering and Technology</p>
                <p>College of Accounting, Business, Hospitality, Entrepreneurship, and International Hospitality Management</p>
                <p>College of Informatics and Computing Sciences</p>
                <p>College of Teacher Education</p>
            </div>
        </div>
    </div>
</footer>
