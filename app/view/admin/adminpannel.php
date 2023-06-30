<?php
include  ROOT . "/core/conf.php";

use Core\Model;

if ($_SERVER['REQUEST_METHOD'] == 'GET' && realpath(__FILE__) == realpath($_SERVER['SCRIPT_FILENAME'])) {
    header('HTTP/1.0 403 Forbidden', TRUE, 403);
    die(header('location:http://sky.test'));
}
?>
<!DOCTYPE html>
<html>
<title>Admin pannel </title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
<link rel="stylesheet" href="/public/assets/bootstrap-4.3.1-dist/css/bootstrap.min.css">

<style>
    .w3-teal {
        color: white !important;
        background-color: black !important;
        height: 60px;
        line-height: 60px;
        position: fixed;
        top: 0;
        width: 100%;
        text-align: left;
        color: black;
        z-index: 1000;
    }

    a {
        text-decoration: none;
    }

    .w3-teal button {
        background-color: black !important;
        height: 50px;
        line-height: 0px;
        padding: 20px;
    }

    #openNav:hover {
        background-color: black !important;
        color: white !important;
    }

    .w3-sidebar {
        width: 20% !important;
        background-color: #283546;
        color: white;
    }

    .w3-sidebar button:hover {
        color: white !important;
    }

    .w3-sidebar ul {
        padding: 0;
        margin: 0;
        list-style: none;
    }

    i {
        padding: 10px;
    }

    .w3-sidebar ul li {
        color: white;
        padding: 0px
    }

    .w3-sidebar ul>li:hover {
        color: white !important;
    }

    .w3-sidebar ul li {
        cursor: pointer;
        width: 100%;
        height: 100%;
        display: block;
        color: white;
        text-decoration: none;
        padding: 14px;
    }

    .w3-sidebar ul ul li {
        width: 100%;
        font-size: 14px;


    }

    .closebtn {
        color: #EF4056 !important;
        float: right;
    }

    .closebtn:hover {
        background-color: #283546 !important;
    }

    .main_pannel {
        padding: 20px;
        color: black;
    }

    .w3-teal {
        position: fixed;
        width: 100%;
    }

    .message {
        width: 200px;
        height: 100px;
        padding: 10px;
        color: black;
        background-color: #EF4056;
        border-radius: 5px;
        font-size: 17px;
        position: fixed;
        top: 30px;
        z-index: 8000;
        left: 50%;
        transform: translateX(-50%);
        display: none;

    }

    .menu-bar {
        display: flex;
        justify-content: space-between;
        align-items: center;
        background-color: #333;
        color: #fff;
        padding: 10px;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
    }

    /* Style for the menu button */
    .menu-button {
        cursor: pointer;
        font-size: 1.5em;
    }

    /* Style for the menu items */
    .menu-items {
        display: flex;
        flex-direction: column;
    }

    /* Style for the sections */
    .section {
        display: none;
    }

    /* Style for the active section */
    .active {
        display: block;
    }

    a {
        color: white;
    }

    a:hover {
        color: white;
        text-decoration: none;
    }

    table {
        width: 100%;
        height: 40px;
        font-size: 16px;
        text-align: center;
    }

    table button {
        margin-left: 10px;
    }

    table td,
    th {
        border: solid #DFDEE0 1px;
        padding: 5px;
        border: solid #808080 1px;

    }

    table th {
        background-color: #FFFFFF;
    }

    .topcat_name_error {
        color: red;
        font-size: 16px;
    }

    input {
        width: 400px;
        height: 40px;
        border-radius: 5px;
        padding: 5px;
        outline: none;
        font-size: 16px;
        direction: rtl;

    }

    select {
        width: 400px;
        height: 30px;
        padding: 5px;
        margin-bottom: 20px;
        direction: rtl;
    }

    label {
        width: 300px;
    }

    .midcategory_name_error {
        color: red;
    }

    .endcategory_name_error {
        color: red;
    }

    .error {
        color: #EF4056;
        font-size: 16px;
    }

    #added-tozihat-ul {
        list-style: none;
    }

    #added-tozihat-takmili-ul {
        list-style: none;
    }

    .delete_pr_btn {
        cursor: pointer;
    }
</style>

<!-- message box   -->
<div class="message"></div>
<!-- message box   -->

<body>
    <div class="message"></div>
    <div class="w3-sidebar w3-bar-block w3-card w3-animate-left" style="display:none" id="mySidebar">
        <button class=" w3-button w3-large closebtn" onclick="w3_close()"> &times;</button>
        <br>
        <br>

        <ul>

            <li class="d">
                <div class="menu-items">
                    <div class="menu-links">
                        <a href="#" data-section="dashboard" class="active"><i class='bx bxs-dashboard'></i>Dashboard</a>
                    </div>
                </div>
                </span>
            </li>

            <li class="d">
                <div class="menu-items">
                    <a href="#" data-section="section2"> <i class='bx bxs-category-alt'></i> Top Category</a>

                    <div class="menu-links">
                    </div>
                </div>
                </span>
            </li>

            <li class="d">
                <div class="menu-items">
                    <a href="#" data-section="midcategory"> <i class='bx bxs-category-alt'></i> Mid Category</a>
                    <div class="menu-links">
                    </div>
                </div>
                </span>
            </li>



            <li class="d">
                <div class="menu-items">
                    <a href="#" data-section="endcategory"> <i class='bx bxs-category-alt'></i> End Category</a>
                    <div class="menu-links">
                    </div>
                </div>
                </span>
            </li>

            <li class="d">
                <div class="menu-items">
                    <a href="#" data-section="products"><i class='bx bxs-store-alt'></i> Products</a>
                    <div class="menu-links">
                    </div>
                </div>
                </span>
            </li>

        </ul>
    </div>

    <div id="main">
        <div class="w3-teal">
            <button id="openNav" class="w3-button w3-teal w3-xlarge" onclick="w3_open()">&#9776;
                <span style="font-size: 25px;padding:10px" class="ED">Dashboard</span>
            </button>
            <span style="font-size: 25px;padding:30px" class="ED"><i class='bx bxs-dashboard'></i> Dashboard</span>
        </div>
        <br>
        <br>
        <br>
        <div class="main_pannel">

            <div class="section  active" id="dashboard">
                <p>Dashborad</p>
            </div>
            <div class="section" id="section2">
                <h2>Top Categories</h2>
                <br>
                <table id="table_topcat">
                    <tr>
                        <th>#</th>
                        <th> Top_cat_name</th>
                        <th>Action </th>

                    </tr>
                    <?php
                    $model  = new Model;
                    $model("top_cat");
                    $query = $model->SELECT();
                    $query = $model->Query_runner($query);
                    if ($model->getrow($query) == 0) {
                        echo "<td>";
                        echo "There is not any fild !";
                        echo "</td>";
                        echo "<td>";
                        echo "____";
                        echo "</td>";
                        echo "<td>";
                        echo "____";
                        echo "</td>";
                    } else {
                        $counter  = 1;
                        while ($row = mysqli_fetch_assoc($query)) {
                            echo   "<tr>";
                            echo "<td>";
                            echo  $counter;
                            echo "</td>";
                            echo "<td>";
                            echo $row["name"];
                            echo "</td>";
                            echo "<td class='action'>";
                            echo  "<form action='post' id='delete_tcat'>";
                            echo  '<input hidden   type="text"  name ="t_cat_id" value= "' . $row["id"] . '">';
                            echo "<div class='btn btn-danger delete_tcat_btn'>";
                            echo 'Delete';
                            echo "</div>";
                            echo "</form>";
                            echo "</td>";
                            echo "</tr>";
                            $counter++;
                        }
                    }
                    ?>
                </table>
                <br>
                <h2>Add Categories</h2>
                <br>
                <form method="post">
                    <input type="text" name="cat_name" id="cat_name" placeholder="Category name">
                    <div class="topcat_name_error"></div>
                    <br>
                    <div class="btn btn-primary  add_top_cat" style="width: 200px;">Add</div>
                </form>


            </div>




            <div class="section" id="midcategory">
                <h2>Mid Categories</h2>
                <br>
                <table id="table_midcat">
                    <tr>
                        <th>#</th>
                        <th> Mid_cat_name</th>
                        <th> Top cat name </th>
                        <th>Action </th>
                    </tr>
                    <?php
                    $model  = new Model;
                    $model("mcat_name");
                    $query = $model->SELECT();
                    $query = $model->Query_runner($query);
                    if ($model->getrow($query) == 0) {
                        echo "<td>";
                        echo "There is not any fild !";
                        echo "</td>";
                        echo "<td>";
                        echo "____";
                        echo "</td>";
                        echo "<td>";
                        echo "____";
                        echo "</td>";
                        echo "<td>";
                        echo "____";
                        echo "</td>";
                    } else {
                        $counter  = 1;
                        while ($row = mysqli_fetch_assoc($query)) {
                            echo   "<tr>";
                            echo "<td>";
                            echo  $counter;
                            echo "</td>";
                            echo "<td>";
                            echo $row["mcat_name"];
                            echo "</td>";
                            echo "<td>";
                            $query2 = $mysqli->query("SELECT * FROM top_cat WHERE id='$row[tcat_id]'");
                            while ($row2 = mysqli_fetch_assoc($query2)) {
                                echo $row2['name'];
                            }
                            echo "</td>";
                            echo "<td class='action'>";
                            echo  "<form action='post' id='delete_mcat'>";
                            echo  '<input hidden   type="text"  name ="m_cat_id" value= "' . $row["midcat_id"] . '">';
                            echo "<div class='btn btn-danger delete_mcat_btn'>";
                            echo 'Delete';
                            echo "</div>";
                            echo "</form>";
                            echo "</td>";
                            echo "</tr>";
                            $counter++;
                        }
                    }

                    ?>
                </table>

                <br>
                <h2>Add Mid Categories</h2>
                <br>
                <form method="post">
                    <select name="midcategory" id="topcategory_selection_mid" class="select_top">
                        <?php
                        include "/Applications/XAMPP/xamppfiles/htdocs/sky/core/conf.php";
                        $query = $mysqli->query("SELECT *FROM top_cat ");
                        while ($row = mysqli_fetch_assoc($query)) {
                            echo  "<option  value=" . $row['id'] . ">" . $row['name'] . "</option>";
                        }
                        ?>

                    </select>
                    <br>
                    <input type="text" name="mcat_name" id="mcat_name" placeholder="Mid Category name">
                    <div class="midcategory_name_error"></div>
                    <br>
                    <div class="btn btn-primary  add_mid_cat" style="width: 200px;">Add</div>
                </form>


            </div>







            <div class="section" id="endcategory">
                <h2>End Categories</h2>
                <br>
                <table id="table_endcat">
                    <tr>
                        <th>#</th>
                        <th> End_cat_name</th>
                        <th> Mid cat name </th>
                        <th> Top cat name </th>

                        <th>Action </th>
                    </tr>
                    <?php
                    $model  = new Model;
                    $model("end_category");
                    $query = $model->SELECT();
                    $query = $model->Query_runner($query);
                    if ($model->getrow($query) == 0) {
                        echo "<td>";
                        echo "There is not any fild !";
                        echo "</td>";
                        echo "<td>";
                        echo "____";
                        echo "</td>";
                        echo "<td>";
                        echo "____";
                        echo "</td>";
                        echo "<td>";
                        echo "____";
                        echo "</td>";
                        echo "<td>";
                        echo "____";
                        echo "</td>";
                    } else {
                        $counter  = 1;
                        while ($row = mysqli_fetch_assoc($query)) {
                            echo   "<tr>";
                            echo "<td>";
                            echo  $counter;
                            echo "</td>";
                            echo "<td>";
                            echo $row["ecat_name"];
                            echo "</td>";

                            echo "<td>";
                            $query2 = $mysqli->query("SELECT * FROM mcat_name WHERE midcat_id='$row[mctat_id]'");
                            while ($row2 = mysqli_fetch_assoc($query2)) {
                                echo $row2['mcat_name'];
                            }
                            echo "</td>";

                            echo "<td>";
                            $query2 = $mysqli->query("SELECT * FROM top_cat WHERE id='$row[tcat_id]'");
                            while ($row2 = mysqli_fetch_assoc($query2)) {
                                echo $row2['name'];
                            }
                            echo "</td>";


                            echo "<td class='action'>";
                            echo  "<form action='post' id='delete_ecat'>";
                            echo  '<input hidden   type="text"  name ="e_cat_id" value= "' . $row["id"] . '">';
                            echo "<div class='btn btn-danger delete_ecat_btn'>";
                            echo 'Delete';
                            echo "</div>";
                            echo "</form>";
                            echo "</td>";
                            echo "</tr>";
                            $counter++;
                        }
                    }

                    ?>
                </table>
                <br>
                <h2>Add End Categories</h2>
                <br>
                <form method="post">
                    <select name="topcategory" id="topcategory_selection_end">
                        <?php
                        include "/Applications/XAMPP/xamppfiles/htdocs/sky/core/conf.php";
                        $query = $mysqli->query("SELECT *FROM top_cat ");
                        while ($row = mysqli_fetch_assoc($query)) {
                            echo  "<option  value=" . $row['id'] . ">" . $row['name'] . "</option>";
                        }
                        ?>
                    </select>
                    <br>
                    <select name="midcategory" id="midcategory_selection_end" class="select_mid">
                        <?php
                        include "/Applications/XAMPP/xamppfiles/htdocs/sky/core/conf.php";
                        $query = $mysqli->query("SELECT *FROM mcat_name ");
                        while ($row = mysqli_fetch_assoc($query)) {
                            echo  "<option  value=" . $row['midcat_id'] . ">" . $row['mcat_name'] . "</option>";
                        }
                        ?>
                    </select>
                    <br>
                    <input type="text" name="ecat_name" id="ecat_name" placeholder="End Category name">
                    <div class="endcategory_name_error"></div>
                    <br>
                    <div class="btn btn-primary  add_end_cat" style="width: 200px;">Add</div>
                </form>

            </div>

            <div class="section" id="products">
                <h2>Products</h2>
                <br>
                <table id="table_products">
                    <tr>
                        <th>#</th>
                        <th>Photo</th>
                        <th>Name</th>
                        <th>Category</th>

                        <th>Action </th>
                    </tr>
                    <?php
                    $query = $mysqli->query("SELECT * FROM products");
                    if ($model->getrow($query) == 0) {
                        echo "<td>";
                        echo "There is not any fild !";
                        echo "</td>";
                        echo "<td>";
                        echo "____";
                        echo "</td>";
                        echo "<td>";
                        echo "____";
                        echo "</td>";
                        echo "<td>";
                        echo "____";
                        echo "</td>";
                        echo "<td>";
                        echo "____";
                        echo "</td>";
                    } else {
                        $counter  = 1;
                        while ($row = mysqli_fetch_assoc($query)) {
                            echo   "<tr>";
                            echo "<td>";
                            echo  $counter;
                            echo "</td>";



                            echo "<td>";
                            echo  "<img   width='120px ' height='120px' src=" . "/public/assets/uploaded_images/" . $row["photo"] . ">";
                            echo "</td>";

                            echo "<td>";
                            echo $row['p_name'];
                            echo "</td>";

                            echo "<td>";
                            $query2 = $mysqli->query("SELECT * FROM top_cat WHERE id='$row[tcat_id]'");
                            while ($row2 = mysqli_fetch_assoc($query2)) {
                                echo $row2['name'];
                            }
                            echo "</td>";
                            echo "<td class='action'>";
                            echo  "<form action='post' id='delete_product'>";
                            echo  '<input hidden   type="text"  name ="p_id" value= "' . $row["p_id"] . '">';
                            echo "<div class='btn btn-danger delete_pr_btn'>";
                            echo 'Delete';
                            echo "</div>";
                            echo "</form>";
                            echo "</td>";
                            echo "</tr>";
                            $counter++;
                        }
                    }

                    ?>
                </table>
                <br>


                <div class="producst container">

                    <br>
                    <br>

                    <h2>Add Product</h2>
                    <hr>
                    <!-- this is  the  Top category section -->
                    <form method="post" id="form1">
                        <label for="t_c_name">
                            <h5>Top Category Name *</h5>
                        </label>
                        <select name="topcatgeoryname" id="t_cat_name">
                            <?php
                            $query = $mysqli->query("SELECT * FROM  top_cat ");
                            while ($row = mysqli_fetch_assoc($query)) {
                                echo  "<option value=" . $row['id'] . ">" . $row['name'] . "</option>";
                            }
                            ?>
                        </select>
                        <img id="loading-icon1" src="/public/assets//images/97952-loading-animation-blue.gif" alt="" height="50px" width="50px">


                        <br>
                        <!-- this is  the  Mid category section -->
                        <label for="m_c_name">
                            <h5>Mid Category Name *</h5>
                        </label>
                        <select name="midcatgeoryname" id="m_cat_name">
                        </select>
                        <img id="loading-icon2" src="/public/assets//images/97952-loading-animation-blue.gif" alt="" height="50px" width="50px">

                        <br>
                        <!-- this is  the  End category section -->
                        <label for="m_c_name">
                            <h5>End Category Name *</h5>
                        </label>
                        <select name="Endcatgeoryname" id="E_cat_name">
                        </select>
                        <img id="loading-icon3" src="/public/assets//images/97952-loading-animation-blue.gif" alt="" height="50px" width="50px">

                        <br>
                        <!-- this is prodyct name section -->
                        <label for="P_name">
                            <h5>Product Name *</h5>
                        </label>
                        <input type="text" id="P_name" placeholder=" نام محصول ">
                        <span class="Product_name_error  input_empty_error  error"></span>
                        <br>
                        <br>

                        <br>
                        <label for="description">
                            <h5>Description *</h5>
                        </label>
                        <textarea placeholder=" توضیحات مربوط به محصول " id="txt1" rows="10" cols="60" style="display: block;direction:rtl"> </textarea>
                        <span class="txt1_error  error  "></span>

                        <br>
                        <label for="f_photo">
                            <h5> Add fetured photo * </h5>
                        </label>
                        <input type="file" class="pic" id="picture">
                        <span class="P_error_1 error"></span>
                        <!-- this is for  add other  Photo  section -->
                        <br>

                        <label for="Active">
                            <h5> Is Available *</h5>
                            <select name="available" style="display:inline-block" id="isavailble">
                                <option value="1">Yes</option>
                                <option value="0">No</option>
                            </select>
                        </label>
                        <br>
                        <div>
                            <div class="added-tozihat" style="float:right">
                                <ul id="added-tozihat-ul">

                                </ul>
                            </div>
                            <label for="tozihat">
                                <h5> توضیحات *</h5>
                                <input type="text" class="name" placeholder="اسم توضیحات">
                                <br>
                                <br>
                                <textarea placeholder=" توضیحات مربوط به محصول " id="content" rows="10" cols="60" class="content" style="display: block;direction:rtl"> </textarea>
                                <div class="btn  btn-primary mt-2  add-tozihat">اضافه کردن توضیح </div>
                            </label>
                            <br>
                            <!-- this is for  Fetured Photo  section -->
                        </div>





                        <div>


                            <div class="added-tozihat-takmili" style="float:right">
                                <ul id="added-tozihat-takmili-ul">

                                </ul>
                            </div>
                            <label for="tozihat-takmili">
                                <h5> توضیحات تکمیلی *</h5>
                                <input type="text" class="name-takmili" placeholder=" اسم توضیحات تکمیلی">
                                <br>
                                <br>
                                <textarea placeholder=" توضیحات مربوط به محصول " id="content-tozihat-takmili" rows="10" cols="60" class="content" style="display: block;direction:rtl"> </textarea>
                                <div class="btn  btn-primary mt-2  add-tozihat-takmili">اضافه کردن توضیح </div>
                            </label>
                            <br>
                            <!-- this is for  Fetured Photo  section -->
                        </div>


                        <div class="btn btn-primary p-2 " style="width: 200px;cursor:pointer" id="add_product_btn"> Add </div>


                </div>
            </div>
        </div>
        <script src="../assets/bootstrap-4.3.1-dist/jquery-3.6.1.min.js"></script>




        <script>
            function showTenWords(str) {
                // Split the string into an array of words
                var words = str.split(" ");

                // Check if the array length is greater than 10
                if (words.length > 10) {
                    // Extract the first 10 words and join them back into a string
                    var firstTenWords = words.slice(0, 10).join(" ");
                    return firstTenWords;
                }

                // If the array length is 10 or less, return the original string
                return str;
            }
            var tozihat = [];
            var tozihat_takmili = [];

            $(".add-tozihat").click(function() {
                var name = $(".name").val();
                var content = $(".content").val();
                tozihat.push({
                    key: name,
                    value: content
                });
                $(".name").val("");
                $(".content").val("");
                console.log(tozihat);
                var arraylen = tozihat.length;
                var li = document.createElement("li");
                document.getElementById("added-tozihat-ul").appendChild(li);

                for (let i = 0; i < arraylen; i++) {
                    // Step 3: Set the text content of the <li> element
                    li.textContent = tozihat[i].key + " : " + showTenWords(tozihat[i].value)
                    // Step 4: Append the <li> element to the <ul> element
                }
            })


            $(".add-tozihat-takmili").click(function() {
                var name = $(".name-takmili").val();
                var content = $("#content-tozihat-takmili").val();
                tozihat_takmili.push({
                    key: name,
                    value: content
                });
                $(".name-takmili").val("");
                $("#content-tozihat-takmili").val("");
                console.log(tozihat_takmili);
                var arraylen = tozihat_takmili.length;
                var li = document.createElement("li");
                document.getElementById("added-tozihat-takmili-ul").appendChild(li);

                for (let i = 0; i < arraylen; i++) {
                    // Step 3: Set the text content of the <li> element
                    li.textContent = tozihat_takmili[i].key + " : " + showTenWords(tozihat_takmili[i].value)
                    // Step 4: Append the <li> element to the <ul> element
                }
            })
        </script>
        <script>
            function w3_open() {
                document.getElementById("main").style.marginLeft = "20%";
                document.getElementById("mySidebar").style.width = "20%";
                document.getElementById("mySidebar").style.display = "block";
                document.getElementById("openNav").style.display = 'none';
            }

            function w3_close() {
                document.getElementById("main").style.marginLeft = "0%";
                document.getElementById("mySidebar").style.display = "none";
                document.getElementById("openNav").style.display = "inline-block";
            }
            const sections = document.querySelectorAll(".section");
            const menuLinks = document.querySelectorAll(".menu-items a");

            menuLinks.forEach((link) => {
                link.addEventListener("click", (e) => {
                    e.preventDefault();
                    const sectionId = link.getAttribute("data-section");
                    sections.forEach((section) => {
                        section.classList.remove("active");
                    });
                    document.getElementById(sectionId).classList.add("active");
                    menuItems.classList.remove("open");
                });
            });
        </script>

        <script>
            $(".add_top_cat").click(function() {
                var topcat_name = $('#cat_name').val();
                if (topcat_name == "") {
                    $(".topcat_name_error").html("Enter value for top_catgeory name !");
                } else {
                    $(".topcat_name_error").html("");

                    $.ajax({
                        type: 'POST',
                        url: 'http://sky.test/ajax/main/AddTopCategory',
                        data: {
                            topcat_name: topcat_name
                        },
                        dataType: 'json', // Set the expected response type to JSON
                        success: function(response) {
                            // Access the message property of the JSON object and display it to the user
                            alert(response.message);
                            $("#table_topcat").load(" #table_topcat > *");
                            $(".select_top").load(" .select_top > *");
                            $("#topcategory_selection_end").load(" #topcategory_selection_end > *");
                            $("#topcategory_selection_mid").load(" #topcategory_selection_mid > *");
                            $("#t_cat_name").load(" #t_cat_name > *");
                            $("#m_cat_name").load(" #m_cat_name > *");
                            $("#E_cat_name").load(" #E_cat_name > *");
                        },
                        error: function(xhr, status, error) {
                            // Handle errors here
                            console.log(error);
                        }
                    });
                }
            })
        </script>

        <script>
            $(".add_mid_cat").click(function() {
                var mcat_name = $('#mcat_name').val();
                var tcat_id = $("#topcategory_selection_mid").val();

                if (mcat_name == "") {
                    $(".midcategory_name_error").html("Enter value for mid_catgeory name !");
                } else {
                    $(".midcategory_name_error").html("");

                    $.ajax({
                        type: 'POST',
                        url: 'http://sky.test/ajax/main/AddMidCategory',
                        data: {
                            mcat_name: mcat_name,
                            tcat_id: tcat_id
                        },
                        dataType: 'json', // Set the expected response type to JSON
                        success: function(response) {
                            // Access the message property of the JSON object and display it to the user
                            alert(response.message);
                            $("#table_midcat").load(" #table_midcat > *");
                            $("#midcategory_selection_end").load(" #midcategory_selection_end > *");
                            $("#t_cat_name").load(" #t_cat_name > *");
                            $("#m_cat_name").load(" #m_cat_name > *");
                            $("#E_cat_name").load(" #E_cat_name > *");
                        },
                        error: function(xhr, status, error) {
                            // Handle errors here
                            console.log(error);
                        }
                    });
                }
            })
        </script>

        <script>
            $(".add_end_cat").click(function() {

                var ecat_name = $('#ecat_name').val();
                var tcat_id = $("#topcategory_selection_end").val();
                var mcat_id = $("#midcategory_selection_end").val();

                if (ecat_name == "") {
                    $(".endcategory_name_error").html("Enter value for End_catgeory name !");
                } else {
                    $(".endcategory_name_error").html("");

                    $.ajax({
                        type: 'POST',
                        url: 'http://sky.test/ajax/main/AddEndCategory',
                        data: {
                            ecat_name: ecat_name,
                            tcat_id: tcat_id,
                            mcat_id: mcat_id
                        },
                        dataType: 'json', // Set the expected response type to JSON
                        success: function(response) {
                            // Access the message property of the JSON object and display it to the user
                            alert(response.message);
                            $("#table_endcat").load(" #table_endcat > *");
                            $("#t_cat_name").load(" #t_cat_name > *");
                            $("#m_cat_name").load(" #m_cat_name > *");
                            $("#E_cat_name").load(" #E_cat_name > *");

                        },
                        error: function(xhr, status, error) {
                            // Handle errors here
                            console.log(error);
                        }
                    });
                }
            })
        </script>


        <script>
            var mcat_id = $("#m_cat_name").val();
            var tcat_id = $("#t_cat_name").val();

            $("#loading-icon1").hide();
            $("#loading-icon2").hide();
            $("#loading-icon3").hide();

            $.ajax({
                type: "post",
                url: "http://sky.test/ajax/main/fetchendcategory",
                data: {
                    mcat_id: mcat_id
                },
                success: function(d) {
                    $("#E_cat_name").html(d);
                }
            });


            $.ajax({
                type: "post",
                url: "http://sky.test/ajax/main/fetchmidcategory",
                data: {
                    tcat_id: tcat_id
                },
                success: function(d) {
                    $("#m_cat_name").html(d);
                }
            });


            $.ajax({
                type: "post",
                url: "http://sky.test/ajax/main/fetchendcategory",
                data: {
                    mcat_id: mcat_id
                },
                success: function(d) {
                    $("#E_cat_name").html(d);
                }
            });



            $("#t_cat_name").change(function() {
                var tcat_id = $("#t_cat_name").val();
                $("#loading-icon1").show();

                $.ajax({
                    type: "post",
                    url: "http://sky.test/ajax/main/fetchmidcategory",
                    data: {
                        tcat_id: tcat_id
                    },
                    success: function(d) {
                        $("#m_cat_name").html(d);
                        setTimeout(() => {
                            var mcat_id = $("#m_cat_name").val();
                            $.ajax({
                                type: "post",
                                url: "http://sky.test/ajax/main/fetchendcategory",
                                data: {
                                    mcat_id: mcat_id
                                },
                                success: function(d) {
                                    $("#E_cat_name").html(d);
                                }
                            });
                        }, 200);
                        $("#loading-icon1").hide();

                    }
                });


            })

            $("#m_cat_name").change(function() {
                $("#loading-icon2").show();
                var mcat_id = $("#m_cat_name").val();
                $.ajax({
                    type: "post",
                    url: "http://sky.test/ajax/main/fetchendcategory",
                    data: {
                        mcat_id: mcat_id
                    },
                    success: function(d) {
                        $("#E_cat_name").html(d);
                        $("#loading-icon2").hide();

                    }
                });
            })
        </script>

        <script>
            $("#add_product_btn").click(function() {

                var tcat_id = $("#t_cat_name").val();
                var mcat_id = $("#m_cat_name").val();
                var ecat_id = $("#E_cat_name").val();
                var product_name = $("#P_name").val().trim();
                var description = $("#txt1").val().trim();
                var data = new FormData();
                var files = $('#picture')[0].files;
                var isavailble = $("#isavailble").val();


                if (product_name !== "" && description !== "") {
                    $(".txt1_error").html("");
                    $(".Product_name_error").html("");
                    if (files.length > 0) {
                        $(".P_error_1").html("");
                        data.append('file', files[0]);
                        data.append('tcat_id', tcat_id);
                        data.append('mcat_id', mcat_id);
                        data.append('ecat_id', ecat_id);
                        data.append('isavailble', isavailble);
                        data.append('description', description);
                        data.append('product_name', product_name);
                        data.append("tozihat", JSON.stringify(tozihat), );
                        data.append("tozihat_takmili", JSON.stringify(tozihat_takmili), );

                        $.ajax({
                            type: 'POST',
                            url: 'http://sky.test/ajax/main/addprodut',
                            data: data,
                            cache: false,
                            processData: false,
                            contentType: false,
                            dataType: 'json',
                            success: function(response) {
                                // Access the message property of the JSON object and display it to the user
                                alert(response.message);
                                $("#table_products").load(" #table_products > *");
                            },
                            error: function(xhr, status, error) {
                                // Handle errors here
                                console.log(error);
                            }
                        });

                    } else {
                        $(".P_error_1").html("Choose a picture for  product !");
                    }

                } else {
                    if (product_name == "") {
                        $(".Product_name_error").html("This filed is required ! ");
                    } else {
                        $(".Product_name_error").html("");
                    }
                    if (description == "") {
                        $(".txt1_error").html("This filed is required !");
                    } else {
                        $(".txt1_error").html("");
                    }
                }

            })
        </script>


        <script>
            $('#table_products').on('click', '.delete_pr_btn', function() {
                var p_id = $(this).parent().find("input").val();
                $.ajax({
                    type: 'POST',
                    url: 'http://sky.test/ajax/main/deleteproduct',
                    data: {
                        p_id: p_id
                    },
                    dataType: 'json', // Set the expected response type to JSON
                    success: function(response) {
                        // Access the message property of the JSON object and display it to the user
                        $("#table_products").load(" #table_products > *");


                        alert(response.message);
                    },
                    error: function(xhr, status, error) {
                        // Handle errors here
                        console.log(error);
                    }
                });

            })
        </script>



        <script>
            $('#table_endcat').on('click', '.delete_ecat_btn', function() {
                var ecat_id = $(this).parent().find("input").val();
                console.log(ecat_id);
                $.ajax({
                    type: 'POST',
                    url: 'http://sky.test/ajax/main/deletecat',
                    data: {
                        ecat_id: ecat_id
                    },
                    dataType: 'json', // Set the expected response type to JSON
                    success: function(response) {
                        // Access the message property of the JSON object and display it to the user
                        $("#table_endcat").load(" #table_endcat > *");
                        $("#t_cat_name").load(" #t_cat_name > *");
                        $("#m_cat_name").load(" #m_cat_name > *");
                        $("#E_cat_name").load(" #E_cat_name > *");

                        alert(response.message);
                    },
                    error: function(xhr, status, error) {
                        // Handle errors here
                        console.log(error);
                    }
                });

            })
        </script>




        <script>
            $('#table_midcat').on('click', '.delete_mcat_btn', function() {
                var mcat_id = $(this).parent().find("input").val();

                $.ajax({
                    type: 'POST',
                    url: 'http://sky.test/ajax/main/deletemcat',
                    data: {
                        mcat_id: mcat_id
                    },
                    dataType: 'json', // Set the expected response type to JSON
                    success: function(response) {
                        // Access the message property of the JSON object and display it to the user
                        $("#table_midcat").load(" #table_midcat > *");
                        $("#midcategory_selection_end").load(" #midcategory_selection_end > *");
                        $("#t_cat_name").load(" #t_cat_name > *");
                        $("#m_cat_name").load(" #m_cat_name > *");
                        $("#E_cat_name").load(" #E_cat_name > *");
                        alert(response.message);
                    },
                    error: function(xhr, status, error) {
                        // Handle errors here
                        console.log(error);
                    }
                });

            })
        </script>



        <script>
            $('#table_topcat').on('click', '.delete_tcat_btn', function() {
                var tcat_id = $(this).parent().find("input").val();
                console.log(tcat_id);

                $.ajax({
                    type: 'POST',
                    url: 'http://sky.test/ajax/main/deletetcat',
                    data: {
                        tcat_id: tcat_id
                    },
                    dataType: 'json', // Set the expected response type to JSON
                    success: function(response) {
                        // Access the message property of the JSON object and display it to the user
                        $("#table_topcat").load(" #table_topcat > *");
                        $("#topcategory_selection_end").load(" #topcategory_selection_end > *");
                        $("#topcategory_selection_mid").load(" #topcategory_selection_mid > *");
                        $("#t_cat_name").load(" #t_cat_name > *");
                        $("#m_cat_name").load(" #m_cat_name > *");
                        $("#E_cat_name").load(" #E_cat_name > *");



                        alert(response.message);
                    },
                    error: function(xhr, status, error) {
                        // Handle errors here
                        console.log(error);
                    }
                });

            })
        </script>

</body>

</html>