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
                            <a title="HOME" href="index.php">HOME</a>
                        </li>
                        <li>
                            <a title="ABOUT" href="about.php">ABOUT</a>
                        </li>
                        <li>
                            <a title="STORE" href="store.php">STORE</a>
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
                <!--  -->
                <div class="flex" style="align-items: flex-start;">
                    <!-- thumbnail image -->
                    <div class="imgbox m-w100">
                        <img class="w100" src="images/thumbnail1.jpg" alt="thumbnail1">
                    </div>
                    <!-- info -->
                    <div class="info m-w100 m-pl0">
                        <h1>Lorem ipsum dolor sit amet consectetur</h1>
                        <p style="font-size: 14px;">
                            Feb 21,2021&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;JAZZ&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;32423
                        </p>
                        <!-- prices -->
                        <div class="prices">
                            $888.00 <del>$1888.00</del>
                        </div>
                        <!-- introduction -->
                        <div class="Qty flex">
                            <span class="iconfont icon-reduce"></span>
                            <input class="num" data-price="888.00" type="text" name="qty" value="1">
                            <span class="iconfont icon-plus"></span>
                        </div>
                        <!-- Buy Now / Add To Cart -->
                        <div class="flex" style="justify-content: flex-start;">
                            <a href="javascript:;">
                                Buy Now
                            </a>
                            <a href="javascript:;">
                                Add To Cart
                            </a>
                        </div>
                    </div>
                </div>
                <script>
                    // Increase decrease quantity
                    $('.Qty .iconfont').on('click', function () {
                        var n = $(this).siblings('input').val()
                        if ($(this).hasClass('icon-reduce')) {
                            n > 1 ? n-- : 1
                        }
                        if ($(this).hasClass('icon-plus')) {
                            n++
                        }
                        $(this).siblings('input').val(n)
                    })
                </script>
                <!--  -->
                <!-- About This Item -->
                <div class="description">
                    <h4 class="title">About This Item</h4>
                    <div class="content">
                        <img src="images/thumbnail1.jpg" alt="thumbnail1">
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta veritatis dolores corporis
                            voluptatem, est similique sed! Corporis impedit optio, quo doloremque expedita, dicta beatae
                            labore reiciendis sequi pariatur inventore minima?
                        </p>
                        <p>
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nulla dolorem vel reprehenderit
                            accusantium beatae quasi voluptate velit, sapiente, molestias blanditiis inventore nam
                            pariatur tenetur perspiciatis ab nemo saepe veritatis dolore!
                        </p>
                    </div>
                </div>
                <!-- About This Item end -->
                <!-- reviews -->
                <div class="reviews">
                    <h4 class="title">Customer reviews</h4>
                    <!-- reviews list -->
                    <ul class="reviews__list">
                        <li>
                            <div class="flex" style="justify-content: flex-start;">
                                <div class="avatar">
                                    <img src="images/avatar.jpg" alt="avatar">
                                </div>
                                <h6>Piko</h6>
                            </div>
                            <span class="iconfont icon-xingzhuang60kaobei2 on"></span>
                            <span class="iconfont icon-xingzhuang60kaobei2 on"></span>
                            <span class="iconfont icon-xingzhuang60kaobei2 on"></span>
                            <span class="iconfont icon-xingzhuang60kaobei2 on"></span>
                            <span class="iconfont icon-xingzhuang60kaobei2"></span>
                            <p>Feb 21, 2021</p>
                            <div class="reviews-content">
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum sit atque quaerat.
                                    Ipsam
                                    earum eligendi modi voluptatem, neque accusamus excepturi ea iure optio eaque!
                                    Voluptate, libero non! Repellendus, minus illum?
                                </p>
                            </div>
                        </li>
                        <li>
                            <div class="flex" style="justify-content: flex-start;">
                                <div class="avatar">
                                    <img src="images/avatar.jpg" alt="avatar">
                                </div>
                                <h6>James</h6>
                            </div>
                            <span class="iconfont icon-xingzhuang60kaobei2 on"></span>
                            <span class="iconfont icon-xingzhuang60kaobei2 on"></span>
                            <span class="iconfont icon-xingzhuang60kaobei2 on"></span>
                            <span class="iconfont icon-xingzhuang60kaobei2 on"></span>
                            <span class="iconfont icon-xingzhuang60kaobei2 on"></span>
                            <p>Feb 21, 2021</p>
                            <div class="reviews-content">
                                <p>
                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fugit veritatis saepe
                                    aliquam accusamus ipsam harum minima recusandae repellendus molestias voluptatibus
                                    eos ipsa libero officia officiis expedita, voluptas eaque cum a?
                                </p>
                                <div class="flex" style="justify-content: flex-start;">
                                    <img src="images/thumbnail1.jpg" alt="thumbnail1">
                                    <img src="images/thumbnail2.jpg" alt="thumbnail2">
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class=" flex" style="justify-content: flex-start;">
                                <div class="avatar">
                                    <img src="images/avatar.jpg" alt="avatar">
                                </div>
                                <h6>Jack</h6>
                            </div>
                            <span class="iconfont icon-xingzhuang60kaobei2 on"></span>
                            <span class="iconfont icon-xingzhuang60kaobei2 on"></span>
                            <span class="iconfont icon-xingzhuang60kaobei2 on"></span>
                            <span class="iconfont icon-xingzhuang60kaobei2"></span>
                            <span class="iconfont icon-xingzhuang60kaobei2"></span>
                            <p>Feb 21, 2021</p>
                            <div class="reviews-content">
                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Praesentium natus quos
                                    minima facilis voluptas neque rerum itaque at sunt totam dolorem in ratione, vero
                                    ipsam sequi aliquid harum et delectus!</p>
                            </div>
                        </li>
                    </ul>
                    <!-- reviews list end -->

                    <!-- pagination_belly -->
                    <div class="pagination_belly flex" style="margin-top: 20px;">
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
                    <!-- pagination_belly end -->
                </div>
                <!-- reviews end -->
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
            <form action="index.php">
                <label>
                    <span>YOUR USER NAME</span>
                    <input type="text">
                </label>
                <label>
                    <span>YOUR PASSWORD</span>
                    <input type="password">
                </label>
                <input type="submit" value="LOG IN">
            </form>
            <p>Dont have an account?</p>
            <span class="text-uppercase text-center toggle" data-toggle="signup-form">Create New Account</span>
        </div>
        <!-- Sign Up -->
        <div class="page-content" id="signup-form" style="display: none;">
            <h3 class="text-center">Sign Up</h3>
            <form action="index.php">
                <label>
                    <span>USER NAME</span>
                    <input type="text">
                </label>
                <label>
                    <span>PASSWORD (MINIMUM 6 CHARACTERS)</span>
                    <input type="password">
                </label>
                <input type="submit" value="Sign Up">
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

</html>