<!--
    Student ID:LINYU80007
    Image source: All images are from Google Image Search
-->

<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CE154</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <!-- Link Swiper's CSS -->
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
                        <a title="HOME" href="home.html">HOME</a>
                    </li>
                    <li>
                        <a title="ABOUT" href="about.html">ABOUT</a>
                    </li>
                    <li>
                        <a title="LIST" href="list.html">LIST</a>
                    </li>
                    <li class="basket">
                        <!-- basket button -->
                        <a title="basket button" href="cart.html" target="_blank">
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

<!-- breadcrumb-area Start-->
<section class="breadcrumb-area">
    <div class="container">
        <h2 class="text-center text-uppercase">Jazz Albums</h2>
    </div>
</section>
<!-- breadcrumb-area End-->

<!-- filter-area -->
<section class="filter-area">
    <div class="container flex">
        <div class="left">
            <h3>Filter</h3>
        </div>
        <div class="right m-w100">
            <div class="flex">
                <ul class="flex">
                    <li class="active">
                        <span>Albums</span>
                    </li>
                    <li>
                        <span>Artists</span>
                    </li>
                    <li>
                        <span>Tracks</span>
                    </li>
                </ul>
                <div class="sort_drop-down_container">
                    <div class="active_sort">
                        Popular this Year
                        <span class="iconfont icon-down1"></span>
                        <span class="iconfont icon-up"></span>
                    </div>
                    <ul>
                        <li>
                            <span>SORT BY</span>
                        </li>
                        <li>
                            <span>Popular this Year</span>
                        </li>
                        <li>
                            <span>Popular this Month</span>
                        </li>
                        <li>
                            <span>Release Date</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- filter-area End -->

<!-- list-area -->
<section class="list-area">
    <div class="container flex">

        <!-- Sidebar -->
        <div class="left">
            <ul>
                <li>
                    <span>ROCK</span>
                </li>
                <li>
                    <span>ELECTRONIC</span>
                </li>
                <li class="active">
                    <span>JAZZ</span>
                </li>
                <li>
                    <span>CLASSICAL</span>
                </li>
                <li>
                    <span>WORLD</span>
                </li>
                <li>
                    <span>POP</span>
                </li>
                <li>
                    <span>BLUES</span>
                </li>
                <li>
                    <span>PUNK</span>
                </li>
            </ul>
        </div>
        <!-- Sidebar end -->

        <div class="right m-w100">
            <!-- list content -->
            <div class="flex row">
                <div class="col">
                    <a title="record $88.00" href="details.html">
                        <img class="w100" src="images/thumbnail1.jpg" alt="record">
                        <!-- title -->
                        <h6 class="text-uppercase e">record</h6>
                        <!-- description -->
                        <p class="ee">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        <div class="flex">
                            <div class="price">
                                $88.00
                            </div>
                            <!-- add to basket -->
                            <div class="basket">
                                <span class="iconfont icon-gouwuche"></span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a title="record $88.00" href="details.html">
                        <img class="w100" src="images/thumbnail2.jpg" alt="record">
                        <!-- title -->
                        <h6 class="text-uppercase e">record</h6>
                        <!-- description -->
                        <p class="ee">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        <div class="flex">
                            <div class="price">
                                $88.00
                            </div>
                            <!-- add to basket -->
                            <div class="basket">
                                <span class="iconfont icon-gouwuche"></span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a title="record $88.00" href="details.html">
                        <img class="w100" src="images/thumbnail3.jpg" alt="record">
                        <!-- title -->
                        <h6 class="text-uppercase e">record</h6>
                        <!-- description -->
                        <p class="ee">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        <div class="flex">
                            <div class="price">
                                $88.00
                            </div>
                            <!-- add to basket -->
                            <div class="basket">
                                <span class="iconfont icon-gouwuche"></span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a title="record $88.00" href="details.html">
                        <img class="w100" src="images/thumbnail1.jpg" alt="record">
                        <!-- title -->
                        <h6 class="text-uppercase e">record</h6>
                        <!-- description -->
                        <p class="ee">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        <div class="flex">
                            <div class="price">
                                $88.00
                            </div>
                            <!-- add to basket -->
                            <div class="basket">
                                <span class="iconfont icon-gouwuche"></span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a title="record $88.00" href="details.html">
                        <img class="w100" src="images/thumbnail2.jpg" alt="record">
                        <!-- title -->
                        <h6 class="text-uppercase e">record</h6>
                        <!-- description -->
                        <p class="ee">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        <div class="flex">
                            <div class="price">
                                $88.00
                            </div>
                            <!-- add to basket -->
                            <div class="basket">
                                <span class="iconfont icon-gouwuche"></span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a title="record $88.00" href="details.html">
                        <img class="w100" src="images/thumbnail3.jpg" alt="record">
                        <!-- title -->
                        <h6 class="text-uppercase e">record</h6>
                        <!-- description -->
                        <p class="ee">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        <div class="flex">
                            <div class="price">
                                $88.00
                            </div>
                            <!-- add to basket -->
                            <div class="basket">
                                <span class="iconfont icon-gouwuche"></span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a title="record $88.00" href="details.html">
                        <img class="w100" src="images/thumbnail1.jpg" alt="record">
                        <!-- title -->
                        <h6 class="text-uppercase e">record</h6>
                        <!-- description -->
                        <p class="ee">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        <div class="flex">
                            <div class="price">
                                $88.00
                            </div>
                            <!-- add to basket -->
                            <div class="basket">
                                <span class="iconfont icon-gouwuche"></span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a title="record $88.00" href="details.html">
                        <img class="w100" src="images/thumbnail2.jpg" alt="record">
                        <!-- title -->
                        <h6 class="text-uppercase e">record</h6>
                        <!-- description -->
                        <p class="ee">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        <div class="flex">
                            <div class="price">
                                $88.00
                            </div>
                            <!-- add to basket -->
                            <div class="basket">
                                <span class="iconfont icon-gouwuche"></span>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <!-- list content end -->
            <div class="pagination_belly flex">
                <a title="page prev" href="">
                    <span class="iconfont icon-left"></span>
                </a>
                <a title="page 1" href="">1</a>
                <a class="active" title="page 2" href="">2</a>
                <a title="page 3" href="">3</a>
                <a title="page 4" href="">4</a>
                <a title="page 5" href="">5</a>
                <a title="page next" href="">
                    <span class="iconfont icon-right"></span>
                </a>
            </div>

        </div>
    </div>
</section>
<!-- list-area End -->

<!-- login-area Start -->
<section class="login-area">
    <div class="close">
        <span class="iconfont icon-close5"></span>
    </div>
    <!-- Log In -->
    <div class="page-content" id="login-form">
        <h3 class="text-center">Log In</h3>
        <form action="home.html">
            <label>
                <span>YOUR EMAIL ADDRESS</span>
                <input type="text">
            </label>
            <label>
                <span>YOUR PASSWORD</span>
                <input type="password">
            </label>
            <input type="button" value="LOG IN">
        </form>
        <p>Don't have an account?</p>
        <span class="text-uppercase text-center toggle" data-toggle="signup-form">Create New Account</span>
    </div>
    <!-- Sign Up -->
    <div class="page-content" id="signup-form" style="display: none;">
        <h3 class="text-center">Sign Up</h3>
        <form action="home.html">
            <label>
                <span>EMAIL ADDRESS</span>
                <input type="text">
            </label>
            <label>
                <span>PASSWORD (MINIMUM 6 CHARACTERS)</span>
                <input type="password">
            </label>
            <input type="button" value="Sign Up">
        </form>
        <p>Existing user?</p>
        <span class="text-uppercase text-center toggle" data-toggle="login-form">LOG IN</span>
    </div>
</section>

<script>
    // Login / signup
    var $loginArea = $('.login-area')
    // Login
    var $loginForm = $('#login-form')
    // signup
    var $signupForm = $('#signup-form')

    // Close button click event
    $('.login-area .close').on('click', function () {
        $loginArea.hide()
    })
    // Login switch button click event
    $('.login-area .toggle').on('click', function () {
        var $id = $(this).data('toggle')
        $(this).parents('.page-content').hide()
        $('#' + $id).show()
    })
    // Login button click event
    $('.login').on('click', function () {
        $loginArea.show()
        $loginForm.show()
        $signupForm.hide()
    })
</script>
<!-- login-area End -->

<!-- footer Start -->
<footer>
    <div class="container flex">
        <div class="left">
            © 2021 All Right Reserved.
        </div>
        <div class="right">
            <div class="flex">
                <a href="" target="_blank">
                    <span class="iconfont icon-facebook"></span>
                </a>
                <a href="" target="_blank">
                    <span class="iconfont icon-tuite"></span>
                </a>
                <a href="" target="_blank">
                    <span class="iconfont icon-ins"></span>
                </a>
            </div>
        </div>
    </div>
</footer>
<!-- footer End -->

<!-- Swiper JS -->
<script src="inc/swiper-bundle.min.js"></script>
<!-- Initialize Swiper -->
<script>
    // testimonial-area
    var testimonial = new Swiper('.testimonial-area .swiper-container', {
        slidesPerView: 1,
        spaceBetween: 0,
        loop: true,
        autoplay: true,
        pagination: {
            el: '.testimonial-area .swiper-pagination',
            clickable: true,
        }
    });
</script>
</body>
