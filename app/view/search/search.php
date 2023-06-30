<?php
$currentURL = "http";
if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') {
    $currentURL .= "s";
}

$currentURL .= "://";

if ($_SERVER['SERVER_PORT'] !== '80') {
    $currentURL .= $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . urldecode($_SERVER['REQUEST_URI']);
} else {
    $currentURL .= $_SERVER['SERVER_NAME'] . urldecode($_SERVER['REQUEST_URI']);
}

use App\Model\products;
use Core\View;

include  ROOT . "/app/view/main/header.php";
include  ROOT . "/core/conf.php";
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

            .a_pr img {
                scale: 0.5 !important;
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

        .a_pr img {
            scale: 0.7;
            width: 100%;

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
        <section class="body-font" style="text-align:center;">
            <div class="container px-10 py-24 mx-auto">
                <div class="flex flex-wrap ">

                    <?php
                    $products_len = count($input);
                    $pagination_number = ceil($products_len / 8);

                    if (!isset($_GET['page'])) {
                        $_GET['page'] = 1;
                    }

                    if ($products_len > 0) {
                        if ($_GET['page'] > 0  && $_GET['page'] <= $pagination_number) {
                            if ($_GET['page'] == 1) {
                                $start = 0;
                            } else {
                                $start = $_GET['page'] * 8 - 8;
                            }
                            for ($i = $start; $i < $start + 8; $i++) {
                                if ($i >= count($input)) {
                                    break;
                                }
                                $query = $mysqli->query("SELECT * FROM products WHERE p_id='$input[$i]'");
                                $row = mysqli_fetch_assoc($query);
                                $p_name = str_replace(" ", "-", $row['p_name']);
                                echo  "<a class='a_pr' href='http://sky.test/product/" . $row['p_id'] . "/" . $p_name . "'>";
                                echo "  <div class='lg:w-1/4 md:w-1/2 p-4 w-full  pr' style='border:solid #DDDDDD 1px'>
                                  <div class='block relative h-48 rounded overflow-hidden'>";
                                echo  "<img alt='' class='object-cover object-center mb-5 block' src='/public/assets/uploaded_images/" . $row['photo'] . "'>";
                                echo " </div>
                            <div class='mt-4'>";
                                echo " <p class='mt-1'>" . $row['p_name'] . "</p>";
                                echo  "</div>";
                                echo "</a>";
                                echo "</div>";
                            }
                        } else {
                            echo " هیچ محصولی یافت نشد!  ";
                        }
                    } else {
                        echo " هیچ محصولی یافت نشد!  ";
                    }
                    ?>
                </div>
        </section>
        <div class="container_pagination">
            <?php

            if ($pagination_number > 0 && $_GET['page'] <= $pagination_number) {

                echo '<div class="pagination">';
                $parts = parse_url($currentURL);
                // Reconstruct the URL without the query string for "page"
                $newQuery = '';
                parse_str($parts['query'], $query);
                unset($query['page']);
                if (!empty($query)) {
                    $newQuery = '?' . http_build_query($query);
                }
                // Remove trailing slash from path
                $newPath = rtrim($parts['path'], '/');
                // Reconstruct the URL with the modified path and query string
                $currentURL = $parts['scheme'] . '://' . $parts['host'] . $newPath . $newQuery;

                if ($_GET['page'] > 1) {
                    if (isset($_GET['s_f'])) {
                        echo  "<a  href=" . $currentURL . "&page=" . $_GET['page'] - 1 . ">&laquo;";
                        echo  "</a>";
                    } else {
                        echo  "<a  href=" . $currentURL . "/?page=" . $_GET['page'] - 1 . ">&laquo;";
                        echo  "</a>";
                    }
                }

                for ($i = 0; $i < $pagination_number; $i++) {
                    $parts = parse_url($currentURL);
                    // Reconstruct the URL without the query string for "page"
                    $newQuery = '';
                    parse_str($parts['query'], $query);
                    unset($query['page']);
                    if (!empty($query)) {
                        $newQuery = '?' . http_build_query($query);
                    }
                    // Remove trailing slash from path
                    $newPath = rtrim($parts['path'], '/');
                    // Reconstruct the URL with the modified path and query string
                    $currentURL = $parts['scheme'] . '://' . $parts['host'] . $newPath . $newQuery;

                    if (isset($_GET['page'])) {
                        if ($pagination_number == 1) {
                            if ($i == $_GET['page']) {
                                if (isset($_GET['s_f'])) {
                                    echo  "<a class='active' href=" . $currentURL . "&page=" . $i + 1 . ">" . $i + 1;
                                    echo  "</a>";
                                } else {
                                    echo  "<a class='active' href=" . $currentURL . "/?page=" . $i + 1 . ">" . $i + 1;
                                    echo  "</a>";
                                }
                            } else {
                                if (isset($_GET['s_f'])) {
                                    echo  "<a class='active'  href=" . $currentURL . "&page=" . $i + 1 . ">" . $i + 1;
                                    echo  "</a>";
                                } else {
                                    echo  "<a  class='active' href=" . $currentURL . "/?page=" . $i + 1 . ">" . $i + 1;
                                    echo  "</a>";
                                }
                            }
                        } else {
                            if ($i == $_GET['page'] - 1) {

                                if (isset($_GET['s_f'])) {
                                    echo  "<a class='active' href=" . $currentURL . "&page=" . $i + 1 . ">" . $i + 1;
                                    echo  "</a>";
                                } else {
                                    echo  "<a class='active' href=" . $currentURL . "/?page=" . $i + 1 . ">" . $i + 1;
                                    echo  "</a>";
                                }
                            } else {
                                if (isset($_GET['s_f'])) {
                                    echo  "<a  href=" . $currentURL . "&page=" . $i + 1 . ">" . $i + 1;
                                    echo  "</a>";
                                } else {
                                    echo  "<a  href=" . $currentURL . "/?page=" . $i + 1 . ">" . $i + 1;
                                    echo  "</a>";
                                }
                            }
                        }
                    }
                }
                if ($_GET['page'] < $pagination_number) {
                    if (isset($_GET['s_f'])) {
                        echo  "<a  href=" . $currentURL . "&page=" . $_GET['page'] + 1 . ">&raquo;";
                        echo  "</a>";
                    } else {
                        echo  "<a  href=" . $currentURL . "/?page=" . $_GET['page'] + 1 . ">&raquo;";
                        echo  "</a>";
                    }
                }
            }
            echo '</div>';

            ?>
        </div>
    </div>
    </div>
    <?php
    View::render("app/view/main/footer.php");
    ?>
</body>

</html>