<?php
include  ROOT . "/app/view/main/header.php";
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Contact us </title>
    <style>
        .footer {
            background-color: #222222 !important;
            margin-top: 50px;
            color: white;
            height: auto;
            padding: 10px;
        }

        #map-container {
            position: relative;
            width: 100%;
            height: 400px;
            /* Adjust height as needed */
        }

        #loading-icon {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #fff;
        }

        #map-iframe {
            display: none;
            width: 100%;
            height: 100%;
        }
    </style>

</head>

<body>
    <div class="container  mt-5" style="font-size: 20px;">

        <div class="row  aboutus_row p-3 m-auto" style="text-align: center;">

            <div class="col-md-4 ">
                <span>اطلاعات بیشتر <i class='bx bxs-info-circle p-3'></i></span>
                <div class="red_line"></div>
                <br>
                <span style="color: #7B7B7B;font-size:16px;padding:5px;">

                    <span> +9892112282 <i class='bx bxl-whatsapp p-2' style="font-size: 20px;"></i></span>
                    <br>
                    <span> +9892112282 <i class='bx bxl-telegram p-2' style="font-size: 20px;"></i> </span>
                    <br>
                    <span> Delnavazi1029@gmail.com <i class='bx bx-envelope p-2' style="font-size: 20px;"></i> </span>
                    <br></span>

            </div>

            <div class="col-md-4 ">
                <span>شماره های تماس <i class='bx bx-phone-call p-3'></i></span>
                <div class="red_line"></div>
                <br>
                <span style="color: #7B7B7B;font-size:16px;padding:5px;">

                    <span> +9892112282 <i class='bx bx-phone p-2' style="float: rihgt;"></i> </span>
                    <br>
                    <span> +9892112282 <i class='bx bx-phone p-2'></i> </span>
                    <br>
                    <span> +9892112282 <i class='bx bx-phone p-2'></i> </span>
                    <br></span>

            </div>
            <div class="col-md-4 ">
                <span>آدرس شرکت<i class='bx bx-current-location p-3'></i></span>
                <div class="red_line"></div>
                <br>
                <span style="color: #7B7B7B;font-size:16px;padding:5px;">تهران، خيابان اميركبير، خيابان ناظم الاطباء جنوبي، كوچه منصورالحكما، پلاك ١١</span>
                <span></span>
            </div>

        </div>
        <br>
        <br>
        <br>

        <div id="map-container">
            <div id="loading-icon">
                <i class="fas fa-spinner fa-spin"></i> Loading...
            </div>
            <iframe id="map-iframe" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d207347.52895735746!2d51.36245775406726!3d35.70641249999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3f8e03648746328d%3A0xab62ff4f855be56c!2z2YbZhdin24zZhtiv2q_bjCDZhdiv24zYsdin2YYg2K7ZiNiv2LHZiCDaqdivINu027Dbti0g2YfZhduM2KfYsSDZhdmI2KrZiNix!5e0!3m2!1sen!2snl!4v1688041047721!5m2!1sen!2snl" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>


    <?php include "/Applications/XAMPP/xamppfiles/htdocs/sky/app/view/main/footer.php"; ?>
    <script>
        window.addEventListener("load", (event) => {
            document.getElementById("loading-icon").style.display = "none";
            document.getElementById("map-iframe").style.display = "block";
        });
    </script>

</body>

</html>