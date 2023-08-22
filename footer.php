<head>
    <link rel="stylesheet" href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css">
    <style>
        .float {
            position: fixed;

            bottom: 40px;
            right: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }

        /* blink the text */
        .float .watext {
            animation: blink 1s infinite;

        }

        @keyframes blink {
            0% {
                opacity: 1;
            }

            50% {
                opacity: 0;
            }

            100% {
                opacity: 1;
            }
        }

        .float .waicon {
            background-color: green;
            color: white;
            border-radius: 50%;
            width: 60px;
            height: 60px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .float .waicon i {
            font-size: 30px;
        }
    </style>
</head>

<!-- floating wa icon -->
<div class="float">
    <div class="watext">
        WhatsApp Us Now
    </div>
    <a href="https://api.whatsapp.com/send?phone=919561649494" target="_blank" class="waicon">
        <i class="bx bxl-whatsapp"></i>
    </a>
</div>

<footer id="footer" class="border-top-0 m-0 lazyload" data-bg-src="img/backgrounds/background-4.jpg" style="background-size: cover; background-position: center; background-repeat: no-repeat;">
    <div class="container pt-3">
        <div class="row justify-content-end align-items-center py-5 mb-3">
            <div class="col-auto mb-4 mb-lg-0">

                <!-- <h2 class="font-weight-semibold text-color-light text-10 ls-0 mb-0">Laxmi Group of Industries</h2> -->
                <a href="contact.php" class="btn btn-primary custom-btn-style-1 font-weight-medium btn-px-4 btn-py-2 text-4" data-cursor-effect-hover="plus" data-cursor-effect-hover-color="light">
                    <span class="text-color-light">Contact Us</span>
                </a>
            </div>
            <div class="col-auto">

            </div>
        </div>
        <hr class="bg-color-light opacity-1 my-0">
        <div class="row pt-3 mt-5">
            <div class="col-lg-3 mb-4 mb-lg-0">
                <a href="index.php" class="text-decoration-none">
                    <img src="img/logo-footer.png" class="img-fluid mb-4" width="123" height="33" alt="" />
                </a>
                <li class="d-flex px-0 mb-1">
                    <img width="25" src="img/icons/phone.svg" alt="Phone Icon" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-light'}" />
                    <a href="tel:18002332025" class="text-color-light font-weight-semibold text-3-4 ms-2">91723 31567</a>
                </li>
                <li class="d-flex px-0 my-3">
                    <img width="25" src="img/icons/email.svg" alt="Email Icon" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-light'}" />
                    <a href="mailto:info@laxmisolar.com" class="text-color-light font-weight-semibold text-3-4 ms-2">sanjivaniwirenet@gmail.com</a>
                </li>
                <!-- <p class="text-3-5">Laxmi Group started in the year 1945 by Late Kalgonda Patil who took inspiration from Padmabhushan Karmveer Bhaurao Patil and founder chairman Late Jaikumar Patil.</p> -->
                <ul class="social-icons social-icons-clean social-icons-clean-with-border social-icons-medium social-icons-icon-light">
                    <li class="social-icons-facebook"><a href="#" target="_blank" title="Facebook" data-cursor-effect-hover="fit"><i class="fab fa-facebook-f"></i></a></li>

                    <li class="social-icons-instagram"><a href="#" target="_blank" title="Instagram" data-cursor-effect-hover="fit"><i class="fab fa-instagram"></i></a></li>
                </ul>
            </div>
            <div class="col-lg-4 mb-4 mb-lg-0" style="color: #fff;">
                <h3>
                    <i class="bx bx-location-plus"></i>

                    OFFICE



                </h3>
                <p style="color: #fff;">
                21/35, Bharatmata Housing Society, <br> opp. to Panchaganga Petrol Pump,<br>
                Station Road, Ichalkaranji (416115) <br> Dist: Kolhapur (Maharashtra)

                </p>
            </div>
            <div class="col-lg-4 mb-4 mb-lg-0" style="color: #fff;">


                <!-- <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d803.4137414354617!2d74.23405542964986!3d16.691821697756414!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc0fe599b1c0a03%3A0xa4ab1583c2f7627c!2sLaxmi%20Solar!5e0!3m2!1sen!2sin!4v1643006380926!5m2!1sen!2sin"
                    width="100%" height="150" style="border:0;" allowfullscreen="" loading="lazy"></iframe> -->



                <h3>
                    <i class="bx bx-location-plus"></i>


                    WORKSHOP






                </h3>
                <p style="color: #fff;">
                Ward no. 25, Plot no. 1782/1, Solage Mala,<br> near Markandey Mandir,<br>
                Shahpur, Ichalkaranji (416115) <br> Dist: Kolhapur (Maharashtra)
                </p>



            </div>
            <div class="col-lg-2">
                <!--	<h4 class="font-weight-bold text-5">Useful Links</h4> -->
                <!-- <ul class="list list-icons list-icons-sm">
                    <li>
                        <i class="fas fa-angle-right text-color-default"></i>
                        <a href="contact.php" class="link-hover-style-1 ms-1"> Contact Us</a>
                    </li>
                    <li>
                        <i class="fas fa-angle-right text-color-default"></i>
                        <a href="laxmi-pumps.php" class="link-hover-style-1 ms-1"> Our Products</a>
                    </li>

                    <li>
                        <i class="fas fa-angle-right text-color-default"></i>
                        <a href="about.php" class="link-hover-style-1 ms-1"> About Us</a>
                    </li>

                </ul> -->
            </div>
        </div>
    </div>
    <div class="footer-copyright container bg-transparent">
        <div class="row pb-5">
            <div class="col-lg-12 text-center m-0">
                <hr class="bg-color-light opacity-1 mt-5 mb-4">
                <p class="text-3-4">Sanjivani Wirenetting Industries. © 2023. All Rights Reserved</p>
            </div>
        </div>
    </div>
</footer>