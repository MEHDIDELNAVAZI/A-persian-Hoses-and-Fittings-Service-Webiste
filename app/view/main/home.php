<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>

    </title>
    <style>
        body {
            background-color: #F5F5FF;
        }

        .wrapper {
            overflow-x: hidden;
            width: 100%;
        }

        .wrapper a:hover {
            text-decoration: none;
            color: black;
        }


        .my-slider img {
            width: 100%;
            height: 100%;
            margin-right: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            transition: transform 0.2s ease-in-out;
        }

        .my-slider2 img {
            width: 100%;
            height: 200px;
            flex-shrink: 0;
            margin-right: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            transition: transform 0.2s ease-in-out;
        }


        .my-slider3 img {
            width: 100%;
            height: 200px;
            flex-shrink: 0;
            margin-right: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            transition: transform 0.2s ease-in-out;
        }


        .my-slider4 img {
            width: 100%;
            height: 200px;
            flex-shrink: 0;
            margin-right: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            transition: transform 0.2s ease-in-out;
        }



        .my-slider img:hover {
            transform: scale(1.1);
        }


        .my-slider2 img:hover {
            transform: scale(1.1);
        }

        .my-slider3 img:hover {
            transform: scale(1.1);
        }

        .my-slider4 img:hover {
            transform: scale(1.1);
        }

        .slick-next,
        .slick-prev {
            z-index: 5;
        }

        .slick-next {
            right: 15px;
        }

        .slick-prev {
            left: 15px;
        }

        .slick-next:before,
        .slick-prev:before {
            color: #000;
            font-size: 26px;
        }

        .footer {
            background-color: #222222 !important;
            margin-top: 100px;
            color: white;
            height: auto;
            padding: 10px;
        }

        .fotter_slider {
            width: 100%;
            height: 40px;
            color: white;
            font-size: 18px;
            line-height: 40px;
            background-color: #333;
            opacity: 0.8;
        }

        a:hover {
            text-decoration: none;
        }

        #scrollBtn {
            display: none;
            z-index: 99;
            font-size: 18px;
            border: none;
            outline: none;
            background-color: #EE384E;
            color: white;
            cursor: pointer;
            padding: 15px;
            border-radius: 4px;
        }


        .moreinfo {
            width: 150px;
            height: 40px;
            color: gray;
            line-height: 40px;
            text-align: center;
            border-radius: 5px;
            margin: auto;
            opacity: 0.9;
            border: solid #DDDDDD 1px;
        }

        .moreinfo:hover {
            background-color: #EE384E;
            color: black;
        }

        .pr_slider img {
            scale: 0.9;
        }

        .content {
            position: absolute;
            bottom: 30px;
            right: 50px;
        }
        .my-slider img {
        scale: 0.9;
        }
    </style>
</head>

<body>
    <div class="container">
        <?php

        use  Core\View;

        View::render("app/view/main/header.php");
        ?>
        <br>
        <br>
        <div class="my-slider" style="height: 400px;">
            <div  style="position: relative;"><img src="/public/assets/images/parts-g80e5dabbf_1280.jpg" alt="">
                <span class="content" style="font-size:25px;"> اتصالات فلزی شیلنگ </span>
            </div>
            <div  style="position: relative;"><img src="/public/assets/images/bast/slider.png" alt="">
                <span class="content" style="font-size:25px;color:white"> انواع بست </span>
            </div>
        </div>

        <div>
            <br>
            <br>

            <div class="row  m-auto " style="text-align:right;direction:rtl">

                <div class="col-md-6">
                    <span style="font-size:25px;font-weight:800;padding:5px">بهبودی هیدرولیک</span>
                    <div class="red_line" style="width: 30%;"></div>
                    <br>

                    <span style="padding: 5px;">شرکت بهبودی در سال 1369 تأسیس گردیده است. این شرکت تولی
                        د کننده بیش از 400 نوع بست و نگهدارنده فلزی از مواد مختلفی همچون فولادهای
                        کربن استیل، آلیاژی و استنلس استیل، مس، آلومینیوم و… همراه بالشتک های
                        پلی اتیلن، روکش ها و فوم های عایق (رابرها، الاستومرها و پلی اورتان)
                        میباشد. محصولات این شرکت، گستره متنوعی از مصرف در صانیع پالایشگاهی،
                        پتروشیمی، تاسیساتی و حتی کابل های برق و مخابرات را دارند.
                    </span>
                    شرکت بستیران در سال 1369 تأسیس گردیده است. این شرکت تولی
                    د کننده بیش از 400 نوع بست و نگهدارنده فلزی از مواد مختلفی همچون فولادهای
                    کربن استیل، آلیاژی و استنلس استیل، مس، آلومینیوم و… همراه بالشتک های
                    پلی اتیلن، روکش ها و فوم های عایق (رابرها، الاستومرها و پلی اورتان)
                    میباشد. محصولات این شرکت، گستره متنوعی از مصرف در صانیع پالایشگاهی،
                    پتروشیمی، تاسیساتی و حتی کابل های برق و مخابرات را دارند.
                </div>

                <div class="col-md-6">

                    <div class="row">
                        <img src="/public/assets/images/daniel-wiadro-GAEvM4qvlBk-unsplash.jpg" alt="" width="100% " style="height: 300px;border-radius:10px">
                    </div>
                    <br>
                    <div class="row">
                        <img src="/public/assets/images/rizky-nuriman-GxrfDyqec_A-unsplash.jpg" alt="" width="100% " style="height: 300px;border-radius:10px">

                    </div>

                </div>
            </div>
        </div>

        <br>
        <br>
        <br>
        <div class="wrapper" style="text-align: right;">
            <div class="fotter_slider" style="padding-right:20px">انواع شلنگ</div>

            <div class="my-slider2" style="height: 300px;text-align:center">
                <?php
                function shortenString($inputString)
                {
                    mb_internal_encoding("UTF-8");
                    if (mb_strlen($inputString) > 30) {
                        return "...." . mb_substr($inputString, 0, 25);
                    }
                    return $inputString;
                }


                include  "/Applications/XAMPP/xamppfiles/htdocs/sky/core/conf.php";
                $query  = $mysqli->query("SELECT * FROM products WHERE  tcat_id=10");
                while ($row = mysqli_fetch_assoc($query)) {
                    $p_name = str_replace(" ", "-", $row['p_name']);
                    echo "<a  href='http://sky.test/product/" . $row['p_id'] . "/" . $p_name . "'>";
                    echo  "<div class='pr_slider'>";
                    echo  " <img   alt=''  src='/public/assets/uploaded_images/" . $row['photo'] . "'>";
                    echo   "<div style='color:black;padding:10px'>" . shortenString($row['p_name']) . "</div>";
                    echo "<div class='moreinfo'>";
                    echo "اطلاعات بیشتر";
                    echo "</div>";
                    echo "</div>";
                    echo "</a>";
                }
                ?>
            </div>

        </div>


        <br>
        <br>
        <br>
        <br>

        <div class="wrapper" style="text-align: right;">
            <div class="fotter_slider" style="padding-right:20px">انواع بست</div>

            <div class="my-slider3" style="height: 300px;text-align:center">
                <?php
                include  ROOT . "/core/conf.php";
                $query  = $mysqli->query("SELECT * FROM products WHERE  tcat_id=11");
                while ($row = mysqli_fetch_assoc($query)) {
                    $p_name = str_replace(" ", "-", $row['p_name']);
                    echo "<a  href='http://sky.test/product/" . $row['p_id'] . "/" . $p_name . "'>";
                    echo  "<div class='pr_slider'>";
                    echo  " <img  alt=''  src='/public/assets/uploaded_images/" . $row['photo'] . "'>";
                    echo   "<div style='color:black;padding:10px'>" . shortenString($row['p_name']) . "</div>";
                    echo "<div class='moreinfo'>";
                    echo "اطلاعات بیشتر";
                    echo "</div>";
                    echo "</div>";
                    echo "</a>";
                }
                ?>
            </div>

        </div>

        <br>
        <br>
        <br>
        <br>
        <div class="wrapper" style="text-align: right;">
            <div class="fotter_slider" style="padding-right:20px">انواع اتصالات فلزی </div>

            <div class="my-slider4" style="height: 300px;text-align:center">
                <?php

                $query  = $mysqli->query("SELECT * FROM products WHERE  tcat_id=12");
                while ($row = mysqli_fetch_assoc($query)) {
                    $p_name = str_replace(" ", "-", $row['p_name']);
                    echo "<a  href='http://sky.test/product/" . $row['p_id'] . "/" . $p_name . "'>";
                    echo  "<div class='pr_slider'>";
                    echo  " <img   alt=''  src='/public/assets/uploaded_images/" . $row['photo'] . "'>";
                    echo   "<div style='color:black;padding:10px;he'>" . shortenString($row['p_name']) . "</div>";
                    echo "<div class='moreinfo'>";
                    echo "اطلاعات بیشتر";
                    echo "</div>";
                    echo "</div>";
                    echo "</a>";
                }
                ?>

            </div>

        </div>
        <button id="scrollBtn" onclick="scrollToTop()"><i class='bx bx-chevrons-up'></i></button>

    </div>

    <?php View::render("app/view/main/footer.php");
    ?>

    <script>
        $(document).ready(function() {
            $('.my-slider').slick({
                slidesToShow:2,
                slidesToScroll: 1,
                arrows: true,
                dots: true,
                speed: 600,
                infinite: true,
                autoplaySpeed: 5000,
                autoplay: true,
                responsive: [{
                        breakpoint: 991,
                        settings: {
                            slidesToShow: 1,
                        }
                    },
                    {
                        breakpoint: 767,
                        settings: {
                            slidesToShow: 1,
                        }
                    }
                ]
            });


            $('.my-slider2').slick({
                slidesToShow: 5,
                slidesToScroll: 3,
                arrows: true,
                dots: false,
                speed: 600,
                infinite: true,
                autoplaySpeed: 5000,
                autoplay: true,
                responsive: [{
                        breakpoint: 991,
                        settings: {
                            slidesToShow: 3,
                        }
                    },
                    {
                        breakpoint: 767,
                        settings: {
                            slidesToShow: 2,
                        }
                    }
                ]
            });





            $('.my-slider3').slick({
                slidesToShow: 5,
                slidesToScroll: 3,
                arrows: true,
                dots: false,
                speed: 600,
                infinite: true,
                autoplaySpeed: 4000,
                autoplay: true,
                responsive: [{
                        breakpoint: 991,
                        settings: {
                            slidesToShow: 3,
                        }
                    },
                    {
                        breakpoint: 767,
                        settings: {
                            slidesToShow: 2,
                        }
                    }
                ]
            });


            $('.my-slider4').slick({
                slidesToShow: 5,
                slidesToScroll: 3,
                arrows: true,
                dots: false,
                speed: 600,
                infinite: true,
                autoplaySpeed: 3000,
                autoplay: true,
                responsive: [{
                        breakpoint: 991,
                        settings: {
                            slidesToShow: 3,
                        }
                    },
                    {
                        breakpoint: 767,
                        settings: {
                            slidesToShow: 2,
                        }
                    }
                ]
            });
        });
    </script>


    <script>
        window.onscroll = function() {
            showScrollButton();
        };

        function showScrollButton() {
            var scrollBtn = document.getElementById("scrollBtn");
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                scrollBtn.style.display = "block";
            } else {
                scrollBtn.style.display = "none";
            }
        }

        function scrollToTop() {
            // Smooth scroll to the top of the page
            window.scrollTo({
                top: 0,
                behavior: "smooth"
            });
        }
    </script>
</body>

</html>