<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/public/assets/bootstrap-4.3.1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="http://kenwheeler.github.io/slick/slick/slick-theme.css" />
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/public/assets/slick-1.8.1/slick/slick.css">

    <style>
        /* greek */
        @font-face {
            font-family: 'vaziri_bold';
            /* Font family name */
            src: url('/public/assets/fonts/vazir-font-v18.0.0/Vazir-Bold.ttf');
            /* Path to your font file */
            /* Add other properties if necessary */
        }

        @font-face {
            font-family: 'vaziri_light';
            /* Font family name */
            src: url('/public/assets/fonts/vazir-font-v18.0.0/Vazir-Light.ttf');
            /* Path to your font file */
            /* Add other properties if necessary */
        }

        body {
            color: black;
            font-family: 'vaziri_light';
            font-style: normal;
            font-size: 16px;

        }

        ul {
            padding: 0;
            margin: 0;
            list-style: none;
        }


        header {
            background-color: #F6F6F6;
            height: 90px;
            line-height: 90px;
            margin-top: 20px;
        }

        .logo {
            color: #EE384E;
            font-size: 30px;
            float: right;
            padding-right: 10px;

        }

        nav {
            background-color: #333;
        }

        nav .menu {
            list-style: none;
            margin: 0;
            padding: 0;
            display: flex;
        }

        nav ul ul ul {
            top: 0;
            right: 100%;
            color: black;
            width: 300px;
            display: none !important;
            position: absolute;
            background-color: #333;
            padding: 0;
            margin: 0;
            min-width: 200px;
            z-index: 1;

            color: white;
        }

        nav ul ul a {
            padding: 10px 20px;

        }

        nav ul ul li {
            display: block;
            color: white;
            text-decoration: none;
            transition: all 0.2s ease-in-out;
        }


        nav ul li:hover {
            border-bottom: solid #EE4055 3px;
        }

        nav ul ul>li:hover {
            background-color: #555;
        }

        nav ul ul li:hover>ul {
            display: block !important;
        }

        nav ul ul ul li:hover ul {
            background-color: #555;
            opacity: 0.8;
        }

        nav ul ul ul ul li:hover ul {
            background-color: #555;
            opacity: 0.8;
        }

        nav .menu li {
            position: relative;
            margin-right: 20px;
        }

        nav .menu li:hover ul {
            display: block;
        }

        nav .menu a {
            display: block;
            padding: 10px 20px;
            color: #fff;
            text-decoration: none;
        }

        nav .sub-menu {
            display: none;
            position: absolute;
            top: 100%;
            right: 0;
            background-color: #333;
            padding: 0;
            margin: 0;
            min-width: 200px;
            z-index: 1;
            text-align: center;
            color: white;
            opacity: 0.8;
        }

        nav .sub-menu li {
            margin: 0;
            cursor: pointer;
        }

        nav .sub-menu a {
            padding: 10px 20px;
            display: block;
            color: white;
            text-decoration: none;
            transition: all 0.5s ease-in-out;
        }

        nav .sub-menu a:hover {
            background-color: #555;
        }

        nav .sub-menu.active {
            animation: fade-in 1s ease-in-out forwards;
        }

        .menuicon {
            display: none !important;
            cursor: pointer;
        }


        .burger_menue {
            position: fixed;
            top: 0;
            left: 0;
            width: 200px;
            height: 100%;
            background-color: #283546;
            color: white;
            direction: rtl;
            text-align: right;
            padding: 10px;
            overflow-y: scroll;
            height: 100%;
            transform: translateX(-200px);
            transition: transform 330ms ease-in-out;
            z-index: 3200;
        }

        .burger_menue a {
            color: white;
            display: block;
            padding: 5px;
        }

        .burger_menue a:hover {
            color: white;
            display: block;
            padding: 5px;
            text-decoration: none;
        }

        ul.menu {
            list-style-type: none;
        }


        ul.menu li {
            cursor: pointer;
        }

        .sub-menu li ul {
            display: none;
        }

        ul.menu li .submenu li {
            display: none;
            padding-left: 10px;
        }

        ul.menu li.open .submenu li {
            display: inline-block;
        }



        .nav2 {
            width: 100%;
            height: 40px;
            background-color: #333333;
            display: none;
            visibility: hidden;
            opacity: 0;
        }


        .search-container {
            align-items: center;
            margin-top: 20px;
        }


        #searchinput {
            font-size: 16px;
            border: 1px solid #F1F2F4;
            height: 40px;
            width: 80%;
            line-height: 40px;
            padding: 10px;
            outline: none;
            float: right;
            background-color: #F1F2F4;
        }

        #search-button {
            padding: 5px;
            font-size: 16px;
            height: 40px;
            background-color: #EE4055;
            color: #fff;
            border: none;
            cursor: pointer;
            width: 15%;
        }

        #search-results {
            margin-top: 20px;
        }

        .nav2 .menuicon i {
            margin-top: 6px;
            padding-left: 5px;
        }

        @keyframes fade-in {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }


        /* Styles for mobile devices */
        @media (max-width: 767px) {
            nav {
                display: none;
                opacity: 0;
                visibility: hidden;
            }

            .menuicon {
                display: block !important;
            }

            .nav2 {
                display: block;
                visibility: visible;
                opacity: 1;
                line-height: 40px;
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

        /* Pagination links */
        .pagination {
            margin-top: 30px;
            margin: auto;
            width: auto;
        }

        .pagination a {
            color: black;
            padding: 8px 16px;
            text-decoration: none;
            transition: background-color .3s;
        }

        /* Style the active/current link */
        .pagination a.active {
            background-color: dodgerblue;
            color: white;
        }

        /* Add a grey background color on mouse-over */
        .pagination a:hover:not(.active) {
            background-color: #ddd;
        }

        .container_pagination {
            display: flex;
            justify-content: center;
        }

        .burger_menue ul ul {
            display: none;
        }

        .burger_menue ul ul ul {
            display: none;
        }

        .red_line {
            width: 100%;
            color: #EE384E;
            border: solid #EE384E 1px;
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

        .arrow {
            position: absolute;
            top: 0px;
            width: 30px;
            height: 30px;
            border: solid #DDDDDD 1px;
            line-height: 30px;
            text-align: center;
            font-size: 30px;
            margin-top: 5px;
            cursor: pointer;
            border-radius: 3px;
        }

        .slide_next_2 {
            top: 0;
            left: 60px;
        }

        .slide_prev_2 {
            top: 0;
            margin-left: 5px;
        }

        .slide_next_1 {
            top: 0;
            left: 60px;
        }

        .slide_prev_1 {
            top: 0;
            margin-left: 5px;
        }

        .slide_next_3 {
            top: 0;
            left: 60px;
        }

        .slide_prev_3 {
            top: 0;
            margin-left: 5px;
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
    </style>
</head>

<body>


    <div class="burger_menue">
        <div class="close_menue" style="color:red;cursor:pointer"><i class='bx bx-expand'></i></div>
        <ul class="menu  mt-4  p-2" style="direction: rtl;">
            <li><a href="http://sky.test">صفحه اصلی</a></li>
            <li>
                <label for="mahsolat" style="cursor: pointer;" class="mahsolat_sherkat">محصولات</label>

                <ul class="sub-menu2">
                    <?php

                    use App\Model\products;

                    include   ROOT . "/core/" . "conf.php";
                    $query = $mysqli->query("SELECT * FROM top_cat ");

                    while ($row = mysqli_fetch_assoc($query)) {

                        $category = str_replace(" ", "-", $row['name']);

                        echo  "<li><a href=#>" . $row['name'] . "</a>";
                        $query2 = $mysqli->query("SELECT * FROM mcat_name WHERE tcat_id='$row[id]'");
                        if (mysqli_num_rows($query2) > 0) {
                            echo "<ul>";
                            while ($row2 = mysqli_fetch_assoc($query2)) {
                                $category2 = str_replace(" ", "-", $row2['mcat_name']);
                                $product = new products;

                                echo "<li> <a href='" . "http://sky.test/search/midcategory/" . $row2['midcat_id'] . "/" . $category2 . "/" . $product->makeproduct_url_mcat($row2['midcat_id'])  . "'>";
                                echo $row2['mcat_name'];
                                echo "</a>";

                                $query3 = $mysqli->query("SELECT * FROM end_category WHERE mctat_id='$row2[midcat_id]'");
                                if (mysqli_num_rows($query3) > 0) {
                                    echo "<ul>";
                                    while ($row3 = mysqli_fetch_assoc($query3)) {

                                        $category = str_replace(" ", "-", $row3['ecat_name']);

                                        echo "<li><a href='" . "http://sky.test/search/endcategory/" . $row3['id'] . "/" . $product->makeproduct_url_ecat_tcat($row3['id']) . "/" . $product->makeproduct_url_ecat_mcat($row3['id'])  . "/" . $category . "'>";
                                        echo $row3['ecat_name'];
                                        echo "</li>";
                                        echo  "</a>";
                                    }

                                    echo "  </li> </ul>";
                                }

                                echo "</li>";
                            }
                            echo "</ul>";
                        }
                        echo "</li>";
                    };

                    ?>
                </ul>
            </li>
            <li><a href="#">مقالات</a></li>
            <li><a href="http://sky.test/aboutus">درباره ما</a></li>
            <li><a href="http://sky.test/contactus">تماس باما</a></li>

        </ul>

    </div>

    <div class="container">

        <header>

            <div style="direction: rtl;">
                <span class="logo">بهبودی هیدرولیک </span>
            </div>
        </header>

        <div class="nav2">
            <span class="menuicon" style="font-size: 30px;color:white"> <i class='bx bx-menu '></i> </span>
        </div>

        <nav>
            <ul class="menu" style="direction: rtl;">
                <li><a href="http://sky.test">صفحه اصلی</a></li>
                <li>
                    <a href="#">محصولات</a>

                    <ul class="sub-menu">
                        <?php
                        include "/Applications/XAMPP/xamppfiles/htdocs/sky/core/conf.php";
                        $query = $mysqli->query("SELECT * FROM top_cat ");
                        while ($row = mysqli_fetch_assoc($query)) {
                            $category = str_replace(" ", "-", $row['name']);

                            echo  "<li><a href='" . "http://sky.test/search/topcategory/" .  $row['id'] . "/" . $category . "'>" . $row['name'] . "</a> ";
                            $query2 = $mysqli->query("SELECT * FROM mcat_name WHERE tcat_id='$row[id]'");
                            if (mysqli_num_rows($query2) > 0) {
                                echo "<ul>";
                                while ($row2 = mysqli_fetch_assoc($query2)) {
                                    $category2 = str_replace(" ", "-", $row2['mcat_name']);
                                    $product = new products;

                                    echo "<li> <a href='" . "http://sky.test/search/midcategory/" . $row2['midcat_id'] . "/" . $category2 . "/" . $product->makeproduct_url_mcat($row2['midcat_id'])  . "'>";
                                    echo $row2['mcat_name'];
                                    echo "</a>";

                                    $query3 = $mysqli->query("SELECT * FROM end_category WHERE mctat_id='$row2[midcat_id]'");
                                    if (mysqli_num_rows($query3) > 0) {
                                        echo "<ul>";
                                        while ($row3 = mysqli_fetch_assoc($query3)) {

                                            $category = str_replace(" ", "-", $row3['ecat_name']);

                                            echo "<li><a href='" . "http://sky.test/search/endcategory/" . $row3['id'] . "/" . $product->makeproduct_url_ecat_tcat($row3['id']) . "/" . $product->makeproduct_url_ecat_mcat($row3['id'])  . "/" . $category . "'>";
                                            echo $row3['ecat_name'];
                                            echo "</li>";
                                            echo  "</a>";
                                        }

                                        echo "  </li> </ul>";
                                    }

                                    echo "</li>";
                                }
                                echo "</ul>";
                            }
                            echo "</li>";
                        };

                        ?>
                    </ul>
                </li>
                <li><a href="#">مقالات</a></li>
                <li><a href="http://sky.test/aboutus">درباره ما</a></li>
                <li><a href="http://sky.test/contactus">تماس باما</a></li>

            </ul>
        </nav>
        <div class="search-container">
            <form id="searchForm" method="get" style="direction:rtl;">
                <input type="text" id="searchinput" placeholder="جستجو" style="direction: rtl;">
                <input type="submit" value="جستجو" id="search-button">
            </form>
        </div>
        <hr>
    </div>
    <script src="/public/assets/bootstrap-4.3.1-dist/jquery-3.6.1.min.js"></script>
    <script src="/public/assets/bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>
    <script src="/public/assets/slick-1.8.1/slick/slick.min.js"></script>
    <script>
        const toggleButton = document.getElementsByClassName('toggle-button')[0]
        const navbarLinks = document.getElementsByClassName('navbar-links')[0]

        toggleButton.addEventListener('click', () => {
            navbarLinks.classList.toggle('active')
        })
    </script>

    <script>
        // Get all the main-level li elements
        const mainLiItems = document.querySelectorAll('#main-ul > li');

        // Add event listener to each main-level li element
        mainLiItems.forEach((li) => {
            li.addEventListener('click', () => {
                // Toggle the nested ul visibility
                const nestedUl = li.querySelector('.nested-ul');
                nestedUl.style.display = (nestedUl.style.display === 'none') ? 'block' : 'none';
            });
        });
    </script>
    <script>
        $(".menuicon").click(function() {
            $(".burger_menue").css('transform', 'translateX(' + 0 + 'px)');
        })
        $(".close_menue").click(function() {
            $(".burger_menue").css('transform', 'translateX(' + -200 + 'px)');
        })
    </script>

    <script>
        // Get references to the input and button elements
        var searchInput = document.getElementById('search-input');
        var searchButton = document.getElementById('search-button');
        var searchResults = document.getElementById('search-results');

        // Add an event listener to the button
        searchButton.addEventListener('click', function() {
            // Get the search query from the input
            var query = searchInput.value;

            // Perform the search (Replace this with your own search logic)
            var results = performSearch(query);

            // Display the search results
            displayResults(results);
        });
    </script>

    <script>
        document.getElementById('searchForm').addEventListener('submit', function(event) {
            event.preventDefault(); // Prevent the form from submitting immediately
            var userInput = document.getElementById('searchinput').value; // Get the user's input from the input field
            var searchForm = document.getElementById('searchForm');

            var url = 'http://sky.test/search/searchfor/?s_f=' + encodeURIComponent(userInput)
            window.location.href = url;
        });
    </script>
    <script>
        window.onscroll = function() {
            if (window.scrollY >= 70) {
                $("nav").css("position", "fixed");
                $("nav").css("top", "0px");
                $("nav").css("right", "0px");
                $(".nav2").css("position", "fixed");
                $(".nav2").css("top", "0px");
                $(".nav2").css("right", "0px");
                $(".nav2").css("z-index", "3000");
                $("nav").css("width", "100%");
                $("nav").css("z-index", "3000");
            } else {
                $("nav").css("position", "relative");
                $(".nav2").css("position", "relative");
            }
        };
    </script>

    <script>
        $(".burger_menue ul li ").click(function() {
            $(".burger_menue ul ul ").css("display", "block");
            $(this).find("ul >ul").css("display", "none");
        })

        $(".burger_menue ul ul li ").click(function() {
            $(this).find(">ul").css("display", "block");
        })
    </script>

</body>

</html>