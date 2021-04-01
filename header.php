<!--
    Student ID:LINYU80007
    Image source: All images are from Google Image Search
-->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CE154</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <!-- Link Swipers CSS -->
    <link rel="stylesheet" href="css/swiper-bundle.min.css">
    <!-- Link iconfont CSS -->
    <link rel="stylesheet" href="font/iconfont.css">
    <!-- Link CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!-- jquery -->
    <script src="inc/jquery.js"></script>
</head>

<body>

<!-- header-nav Start -->
<header>
    <div class="container">
        <div class="flex">
            <!-- logo -->
            <div class="logo">
                <img src="images/logo.png" alt="logo">
            </div>

            <!-- mobile menu -->
            <div class="menu">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <!-- nav -->
            <nav>
                <ul class="flex">
                    <li>
                        <?php
                        if ( $page_name == "HOME") { echo "<em style='font-size:150%;'>";}
                        ?>
                        <a title="HOME" href="index.php">HOME</a>
                        <?php
                        if ( $page_name == "HOME") { echo "</em>";}
                        ?>
                    </li>
                    <li>
                        <?php if ( $page_name == "ABOUT") { echo "<em style='font-size:150%;'>";}?>
                        <a title="ABOUT" href="about.php">ABOUT</a>
                        <?php if ( $page_name == "ABOUT") { echo "</em>";}?>
                    </li>
                    <li>
                        <?php if ( $page_name == "STORE") { echo "<em style='font-size:150%;'>";}?>
                        <a title="STORE" href="store.php">STORE</a>
                        <?php if ( $page_name == "STORE") { echo "</em>";}?>
                    </li>
                    <li class="basket">
                        <!-- basket button -->
                        <a title="basket button" href="cart.php" target="_blank">
                            <span class="iconfont icon-gouwuche"></span>
                        </a>
                        <!-- login button -->
                        <a title="login button" class="login" href="javascript:;">
                            <span class="iconfont icon-biaoqiankuozhan_wode-315"></span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</header>
<!-- header-nav end -->

<script>
    $('.menu').on("click", function () {
        $(this).toggleClass('close')
        $('header nav').toggleClass('show')
    })
</script>
</body>
</html>