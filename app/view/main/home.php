<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>
       صفحه اصلی| بهبودی هیدرولیک انواع اتصالات فلزی و بست های فلزی بست
    </title>
    <style>
        body {
            background-color: #F5F5FF;
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
            <div style="position: relative;"><img src="/public/assets/images/parts-g80e5dabbf_1280.jpg" alt="">
                <span class="content" style="font-size:25px;"> اتصالات فلزی شیلنگ </span>
            </div>
            <div style="position: relative;"><img src="/public/assets/images/bast/slider.png" alt="">
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
            <div class="fotter_slider" style="padding-right:20px;position:relative">انواع شلنگ
                <div class="slide_prev_1  arrow"><i class='bx bx-chevrons-left'></i></div>
                <div class="slide_next_1  arrow"><i class='bx bx-chevrons-right'></i></div>
            </div>

            <div class="my-slider2  slider-one" style="height: 300px;text-align:center">
                <?php
                function shortenString($inputString)
                {
                    mb_internal_encoding("UTF-8");
                    if (mb_strlen($inputString) > 30) {
                        return "...." . mb_substr($inputString, 0, 25);
                    }
                    return $inputString;
                }

                include  ROOT . "/core/conf.php";
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
            <div class="fotter_slider" style="padding-right:20px;position:relative">انواع بست
                <div class="slide_prev_2  arrow"><i class='bx bx-chevrons-left'></i></div>
                <div class="slide_next_2  arrow"><i class='bx bx-chevrons-right'></i></div>
            </div>

            <div class="my-slider3 slider-two " style="height: 300px;text-align:center">

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
            <div class="fotter_slider" style="padding-right:20px;position:relative">انواع اتصالات فلزی
                <div class="slide_prev_3 arrow"><i class='bx bx-chevrons-left'></i></div>
                <div class="slide_next_3  arrow"><i class='bx bx-chevrons-right'></i></div>
            </div>

            <div class="my-slider4 slider-three" style="height: 300px;text-align:center">
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
                slidesToShow: 2,
                slidesToScroll: 1,
                arrows: false,
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
                arrows: false,
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
                arrows: false,
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
                arrows: false,
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

    <script>
        $('.slide_prev_2').click(function(e) {
            //e.preventDefault(); 
            $('.slider-two').slick('slickPrev');
        });
        $('.slide_next_2').click(function(e) {
            //e.preventDefault(); 
            $('.slider-two').slick('slickNext');
        });

        $('.slide_prev_1').click(function(e) {
            //e.preventDefault(); 
            $('.slider-one').slick('slickPrev');
        });
        $('.slide_next_1').click(function(e) {
            //e.preventDefault(); 
            $('.slider-one').slick('slickNext');
        });

        $('.slide_prev_3').click(function(e) {
            //e.preventDefault(); 
            $('.slider-three').slick('slickPrev');
        });
        $('.slide_next_3').click(function(e) {
            //e.preventDefault(); 
            $('.slider-three').slick('slickNext');
        });
    </script>
</body>

</html>