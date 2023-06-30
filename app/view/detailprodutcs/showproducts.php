<?php

use App\Model\products;
use Core\View;

include  ROOT . "/app/view/main/header.php";

$p_id = $input[0];
$query = $mysqli->query("SELECT * FROM products WHERE p_id='$p_id'");
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">

    <title>Document</title>
    <style>
        .footer {
            background-color: #222222 !important;
            margin-top: 50px;
            color: white;
            height: auto;
            padding: 10px;
        }

        .geeks {
            width: 90%;
            height: auto;
            overflow: hidden;
            border: solid #DDDDDD 1px;
            margin: 10px;

        }


        .geeks img {
            width: 100%;
            scale: 0.8;
            transition: 0.5s all ease-in-out;
        }

        .geeks:hover img {
            transform: scale(1.5);
        }

        .geeks2 {
            width: 100px;
            height: 80px;
            overflow: hidden;
            border: solid red 1px;
            margin: 10px;

        }

        .geeks2 img {
            scale: 0.7;
            width: 100px;
            height: 80px;
        }

        .p_name {
            font-size: 18px;
            color: #666666;
        }

        .tozihat {
            border: solid #DDDDDD 1px;
            padding: 5px;
            height: auto;
            width: 100%;

        }

        .hidden {
            display: none;
        }


        #button1 {
            width: 200px;
            padding: 5px;
            color: black;
            font-size: 18px;
            font-weight: 200;
            border: solid #DDDDDD 1px;
            border-bottom: 0px;

        }

        #button2 {
            width: 200px;
            padding: 5px;
            color: black;
            font-size: 18px;
            font-weight: 200;
            border: solid #DDDDDD 1px;
            border-bottom: 0px;
        }

        /* Styles for mobile devices */
        @media (max-width: 767px) {

            #button2,
            #button1 {
                width: 100%;
            }

            /* CSS rules for mobile devices */
        }


        /* Styles for tablets */
        @media (min-width: 768px) and (max-width: 1023px) {
            /* CSS rules for tablets */
        }

        /* Styles for laptops and desktops */
        @media (min-width: 1024px) {
            /* CSS rules for laptops and desktops */
        }
    </style>
</head>

<body>
    <?php
    if (mysqli_num_rows($query) > 0 && $p_id != '') {
    ?>

        <div class="container mt-5" style="direction: rtl;text-align:right">

            <span class="category  p-4" style="color: gray;">دسته بندی
                :
                <?php

                $pr = new products;
                echo ($pr->get_dastebandi_mahsol($p_id));
                ?>

            </span>
            <br>
            <br>
            <div class="row" style="direction: rtl;text-align:right">
                <div class="col-md-5">
                    <?php
                    include  ROOT . "/core/conf.php";

                    $row = mysqli_fetch_assoc($query);
                    echo ' <div class="geeks">';
                    echo  "<img  src='/public/assets/uploaded_images/" . $row['photo'] . "'>";
                    echo  '</div>';
                    echo ' <div class="geeks2">';
                    echo  "<img  src='/public/assets/uploaded_images/" . $row['photo'] . "'>";
                    echo  '</div>';

                    ?>
                </div>
                <div class="col-md-7" style="margin-top:10px">
                    <div class="p_name">
                        <?php
                        echo  $row['p_name'];
                        ?>
                    </div>
                    <div class="availble mt-2">
                        <span style="color: #666666;"> در دسترس بودن‌ : </span>
                        <?php
                        $isavailble = $row['status'];
                        if ($isavailble) {
                            echo  "موجود می باشد";
                        } else {
                            echo  "موجود نمی باشد";
                        }
                        ?>
                    </div>

                    <div class="quick_des">
                        <div class="mt-4">بررسی سریع :</div>
                        <?php
                        echo "<span style='color:#666666' class='mt-4'>";
                        echo $row['description'];
                        echo "<span>";
                        ?>
                    </div>
                </div>

            </div>

            <div class="row  mt-4" style="text-align: right;">

                <div class="col-md-12  mt-3">

                    <button id="button1" onclick="showDiv1()">توضیحات تکمیلی </button>
                    <button id="button2" onclick="showDiv2()">توضیحات</button>

                    <div class="tozihat p-4">

                        <div id="div1" class="hidden">
                            <?php
                            $query = $mysqli->query("SELECT * FROM  tozihate_takmili WHERE p_id='$p_id'");
                            while ($row = mysqli_fetch_assoc($query)) {
                                echo   "<div style='color:red;border-bottom:solid gray 1px' class='p-2'>";
                                echo $row['name'];
                                echo  "<span style='color:gray;padding:10px'>";
                                echo $row['content'];
                                echo "</span>";



                                echo "</div>";
                            }
                            ?>

                        </div>

                        <div id="div2" class="hidden">
                            <div class="row  p-2">
                                <div class="col-sm-6">
                                    <?php
                                    $query = $mysqli->query("SELECT * FROM  tozihat WHERE p_id='$p_id'");
                                    while ($row = mysqli_fetch_assoc($query)) {
                                        echo   "<div style='color:red'>";
                                        echo $row['name'];
                                        echo  "<span style='color:gray;padding:10px'>";
                                        echo $row['content'];
                                        echo "</span>";

                                        echo "</div>";
                                    }
                                    ?>
                                </div>

                            </div>
                        </div>


                    </div>


                </div>



            </div>

        <?php
    } else {
        echo ' <div class="container mt-5" style="direction: rtl;text-align:right">';
        echo  " هیج محصولی یافت نشد!";
        echo  "</div>";
    }
        ?>
        </div>
        <?php
        View::render("app/view/main/footer.php");
        ?>

        <script>
            document.getElementById('div1').style.display = 'block';
            document.getElementById('div2').style.display = 'none';
            document.getElementById('button1').style.backgroundColor = "#EE384E";
            document.getElementById('button1').style.color = "white";



            function showDiv1() {
                document.getElementById('div1').style.display = 'block';
                document.getElementById('div2').style.display = 'none';
                document.getElementById('button1').style.backgroundColor = "#EE384E";
                document.getElementById('button1').style.color = "white";
                document.getElementById('button2').style.color = "black";

                document.getElementById('button2').style.backgroundColor = "white";


            }

            function showDiv2() {
                document.getElementById('button2').style.backgroundColor = "#EE384E";
                document.getElementById('button1').style.backgroundColor = "white";
                document.getElementById('button2').style.color = "white";
                document.getElementById('button1').style.color = "black";

                document.getElementById('div1').style.display = 'none';
                document.getElementById('div2').style.display = 'block';
            }
        </script>
</body>

</html>