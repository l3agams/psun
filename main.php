<!DOCTYPE html>
<html lang="en">
<?php
require("1_head.php");
?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        * {
            box-sizing: border-box
        }

        body {
            font-family: Verdana, sans-serif;
            margin: 0
        }

        .mySlides {
            display: none
        }

        img {
            vertical-align: middle;
        }

        /* Slideshow container */
        .slideshow-container {
            max-width: 1000px;
            position: relative;
            margin: auto;
        }

        /* Next & previous buttons */
        .prev,
        .next {
            cursor: pointer;
            position: absolute;
            top: 50%; margin:auto auto; display:block;;
            width: auto;
            padding: 16px;
            margin-top: -22px;
            color: white;
            font-weight: bold;
            font-size: 18px;
            transition: 0.6s ease;
            border-radius: 0 3px 3px 0;
            user-select: none;
        }

        /* Position the "next button" to the right */
        .next {
            right: 0;
            border-radius: 3px 0 0 3px;
        }

        /* On hover, add a black background color with a little bit see-through */
        .prev:hover,
        .next:hover {
            background-color: rgba(0, 0, 0, 0.8);
        }

        /* Caption text */
        .text {
            color: black;
            font-size: 36px;
            padding: 8px 12px;
            position: absolute;
            bottom: 8px;
            width: 100%;
            text-align: center;
        }

        /* Number text (1/3 etc) */
        .numbertext {
            color: black;
            font-size: 12px;
            padding: 8px 12px;
            position: absolute;
            top: 0;
        }

        /* The dots/bullets/indicators */
        .dot {
            cursor: pointer;
            height: 15px;
            width: 15px;
            margin: 0 2px;
            background-color: #bbb;
            border-radius: 50%; margin:auto auto; display:block;;
            display: inline-block;
            transition: background-color 0.6s ease;
        }

        .active,
        .dot:hover {
            background-color: #717171;
        }

        /* Fading animation */
        .fade {
            -webkit-animation-name: fade;
            -webkit-animation-duration: 1.5s;
            animation-name: fade;
            animation-duration: 7200s;
        }

        @-webkit-keyframes fade {
            from {
                opacity: .4
            }

            to {
                opacity: 1
            }
        }

        @keyframes fade {
            from {
                opacity: 1
            }

            to {
                opacity: 1
            }
        }

        /* On smaller screens, decrease text size */
        @media only screen and (max-width: 300px) {

            .prev,
            .next,
            .text {
                font-size: 11px
            }
        }
    </style>
</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
        <div class="container">
            <a class="navbar-brand" href="2.php">TOP 5 CANCER</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">หน้าแรก
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="mean_cancer.php">ความหมายของมะเร็ง</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="mean_cancer_to.php"">ความหมายของมะเร็ง (ต่อ)</a>
          </li>
          <li class=" nav-item">
                            <a class="nav-link" href="images.php">รูปภาพ</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>



    <!-- Slideshow container -->
    <div class="slideshow-container">
        <br><br>
        <!-- Full-width images with number and caption text -->
        <div class="mySlides fade">
            <div class="numbertext">1 / 9</div>
            <a href="1.php"><img src="images/10.jpg" style="width:50%; margin:auto auto; display:block;"></<a>
        </div>
        <div class="mySlides fade">
            <div class="numbertext">2 / 9</div>
            <a href="2.php"><img src="images/20.jpg" style="width:50%; margin:auto auto; display:block;"></a>
        </div>

        <div class="mySlides fade">
            <div class="numbertext">3 / 9</div>
            <a href="3.php"><img src="images/30.jpg" style="width:50%; margin:auto auto; display:block;"></a>
        </div>

        <div class="mySlides fade">
            <div class="numbertext">4 / 9</div>
            <a href="4.php"><img src="images/40.jpg" style="width:50%; margin:auto auto; display:block;"></a>
        </div>

        <div class="mySlides fade">
            <div class="numbertext">5 / 9</div>
            <a href="5.php"><img src="images/50.jpg" style="width:50%; margin:auto auto; display:block;"></a>
        </div>

        <div class="mySlides fade">
            <div class="numbertext">6 / 9</div>
            <a href="6.php"><img src="images/60.jpg" style="width:50%; margin:auto auto; display:block;"></a>
        </div>

        <div class="mySlides fade">
            <div class="numbertext">7 / 9</div>
            <a href="7.php"><img src="images/70.jpg" style="width:50%; margin:auto auto; display:block;"></a>
        </div>

        <div class="mySlides fade">
            <div class="numbertext">8 / 9</div>
            <a href="8.php"><img src="images/80.jpg" style="width:50%; margin:auto auto; display:block;"></a>
        </div>

        <div class="mySlides fade">
            <div class="numbertext">9 / 9</div>
            <a href="9.php"><img src="images/90.jpg" style="width:50%; margin:auto auto; display:block;"></a>
        </div>

        <!-- Next and previous buttons -->
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>
    <br>

    <!-- The dots/circles -->
    <div style="text-align:center">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
        <span class="dot" onclick="currentSlide(4)"></span>
        <span class="dot" onclick="currentSlide(5)"></span>
        <span class="dot" onclick="currentSlide(6)"></span>
        <span class="dot" onclick="currentSlide(7)"></span>
        <span class="dot" onclick="currentSlide(8)"></span>
        <span class="dot" onclick="currentSlide(9)"></span>
    </div>

    <div>

    </div>
    <!-- Page Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h3 style="margin-top: 2%;">คณะผู้จัดทำ : นางสาวชโลทร พงศ์อุดมกุล รหัสนักศึกษา 590547</h3>
            </div>
        </div>
    </div>
    <script>
        var slideIndex = 1;
        showSlides(slideIndex);

        function plusSlides(n) {
            showSlides(slideIndex += n);
        }

        function currentSlide(n) {
            showSlides(slideIndex = n);
        }

        function showSlides(n) {
            var i;
            var slides = document.getElementsByClassName("mySlides");
            var dots = document.getElementsByClassName("dot");
            if (n > slides.length) {
                slideIndex = 1
            }
            if (n < 1) {
                slideIndex = slides.length
            }
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex - 1].style.display = "block";
            dots[slideIndex - 1].className += " active";
        }
    </script>

    <?php
    require("2_footer.php");
    ?>

</body>

</html>