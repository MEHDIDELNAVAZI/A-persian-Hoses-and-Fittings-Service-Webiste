<?php

use App\Model\products;
use Core\View;

include  "/Applications/XAMPP/xamppfiles/htdocs/sky/app/view/main/header.php";
include "/Applications/XAMPP/xamppfiles/htdocs/sky/core/conf.php";
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">

    <title></title>

    <style>
        .footer {
            background-color: #222222 !important;
            margin-top: 50px;
            color: white;
            height: auto;
            padding: 10px;
        }

        .pr:hover img {
            transition: all 0.5s;
            transform: translateY(-10px);
            cursor: pointer;
        }

        .a_pr:hover {
            text-decoration: none;
            color: black;
        }


         /* Styles for mobile devices */
         @media (max-width: 767px) {
           .pr img {
           scale: 0.5;
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
    <div class="container" style="direction:rtl ;text-align:right ">

        <br>
        <?php
        if (isset($_GET["s_f"])) {
            if ($_GET['s_f'] != '') {
        ?>
                <span class="category  p-4" style="color: gray;"> جستجوی شما برای
                    :
                    <?php
                    echo ($_GET['s_f']);
                    ?>
                </span>
            <?php } else {
                echo '<span class="category  p-4" style="color: gray;">   جستجوی شما برای
            : ';
                echo  "همه محصولات ";
                echo "</span>";
            }
        } else {
            ?>
            <span class="category  p-4" style="color: gray;">دسته بندی
                :
                <?php
                echo ($category_name[0]);
                ?>

            </span>

        <?php } ?>
        <section class="  body-font" style="text-align:center;">
            <div class="container px-5 py-24 mx-auto">
                <div class="flex flex-wrap -m-4">


                    <?php
                    $products_len = count($input);
                    if ($products_len > 0) {
                        for ($i = 0; $i < $products_len; $i++) {
                            $query = $mysqli->query("SELECT * FROM products WHERE p_id='$input[$i]'");
                            $row = mysqli_fetch_assoc($query);
                            $p_name = str_replace(" ", "-", $row['p_name']);


                            echo  "<a class='a_pr' href='http://sky.test/product/" . $row['p_id'] . "/" . $p_name . "'>";

                            echo "  <div class='lg:w-1/4 md:w-1/2 p-4 w-full  pr' style='border:solid #DDDDDD 1px'>
                                  <div class='block relative h-48 rounded overflow-hidden'>";
                            echo  "<img alt='ecommerce' class='object-cover object-center w-full h-full block' src='/public/assets/uploaded_images/" . $row['photo'] . "'>";
                            echo " </div>
                            <div class='mt-4'>";
                            echo " <p class='mt-1'>" . $row['p_name'] . "</p>";
                            echo  "</div>";
                            echo "</a>";
                            echo "</div>";
                        }
                    } else {
                        echo " هیچ محصولی یافت نشد!  "  ;
                    }

                    ?>
                </div>
            </div>
        </section>
    </div>
    <?php
    View::render("app/view/main/footer.php");
    ?>




</body>

</html>