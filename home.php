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
                        <a title="LIST" href="list.php">LIST</a>
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

<!-- slider-area Start-->
<section class="slider-area">
    <!-- Swiper -->
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide" style="background-image: url(images/b1.jpg);"></div>
            <div class="swiper-slide" style="background-image: url(images/b2.jpg);"></div>
            <div class="swiper-slide" style="background-image: url(images/b3.jpg);"></div>
        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>
        <!-- Add Arrows -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
</section>
<!-- slider-area End-->

<!-- album-area Start-->
<section class="album-area pt100">
    <div class="container">
        <!-- section-title -->
        <div class="section-title text-center mb60">
            <h2 class="text-uppercase">Feature Music <span class="primary-color">Albums</span></h2>
        </div>
        <!-- section-title end -->

        <!-- list -->
        <ul class="flex row">
            <li class="col text-center">
                <a title="Dancing with Your Ghost" href="details.php" target="_blank">
                    <img class="w100" src="images/thumbnail.jpg" alt="Dancing with Your Ghost">
                    <h5 class="text-uppercase">Dancing with Your Ghost</h5>

                    <!-- Play music -->
                    <!-- Play button -->
                    <span class="iconfont icon-bofang"></span>
                    <!-- Pause button -->
                    <span class="iconfont icon-bofang1"></span>
                </a>
            </li>
            <li class="col text-center">
                <a title="record" href="details.php" target="_blank">
                    <img class="w100" src="images/thumbnail2.jpg" alt="record">
                    <h5 class="text-uppercase">record</h5>

                    <!-- Play music -->
                    <!-- Play button -->
                    <span class="iconfont icon-bofang"></span>
                    <!-- Pause button -->
                    <span class="iconfont icon-bofang1"></span>
                </a>
            </li>
            <li class="col text-center">
                <a title="record" href="details.php" target="_blank">
                    <img class="w100" src="images/thumbnail3.jpg" alt="record">
                    <h5 class="text-uppercase">record</h5>

                    <!-- Play music -->
                    <!-- Play button -->
                    <span class="iconfont icon-bofang"></span>
                    <!-- Pause button -->
                    <span class="iconfont icon-bofang1"></span>
                </a>
            </li>
            <li class="col text-center">
                <a title="record" href="details.php" target="_blank">
                    <img class="w100" src="images/thumbnail1.jpg" alt="record">
                    <h5 class="text-uppercase">record</h5>

                    <!-- Play music -->
                    <!-- Play button -->
                    <span class="iconfont icon-bofang"></span>
                    <!-- Pause button -->
                    <span class="iconfont icon-bofang1"></span>
                </a>
            </li>
            <li class="col text-center">
                <a title="record" href="details.php" target="_blank">
                    <img class="w100" src="images/thumbnail2.jpg" alt="record">
                    <h5 class="text-uppercase">record</h5>

                    <!-- Play music -->
                    <!-- Play button -->
                    <span class="iconfont icon-bofang"></span>
                    <!-- Pause button -->
                    <span class="iconfont icon-bofang1"></span>
                </a>
            </li>
            <li class="col text-center">
                <a title="record" href="details.php" target="_blank">
                    <img class="w100" src="images/thumbnail3.jpg" alt="record">
                    <h5 class="text-uppercase">record</h5>

                    <!-- Play music -->
                    <!-- Play button -->
                    <span class="iconfont icon-bofang"></span>
                    <!-- Pause button -->
                    <span class="iconfont icon-bofang1"></span>
                </a>
            </li>
        </ul>
        <!-- list end -->
    </div>
</section>
<!-- album-area End-->
<div class="audio">
    <div class="container">
        <audio controls id="audio">
            <source src="999117.mp3" type="audio/mpeg" />
        </audio>
    </div>
</div>
<script>
    // Play audio
    let isClickP = false;
    let isClickA = false;
    let audio = $('#audio')[0]
    let index = 0

    $('#audio').on('ended', function () {
        $('.album-area li.col').eq(index).removeClass('play')
    })

    $('.album-area .iconfont').on('click', function (e) {
        isClickP = true;
        setTimeout(() => isClickP = false, 0);
        index = $(this).parents('li.col').index()
        if (audio.paused) {
            audio.play()
            $(this).parents('li.col').addClass('play')
        } else if ($(this).parents('li.col').hasClass('play')) {
            audio.pause()
            $(this).parents('li.col').removeClass('play')
        }
    })

    $(".album-area .col a").on("click", function () {
        isClickA = true;
        if (isClickP && isClickA) {
            event.preventDefault();
        }
        setTimeout(() => isClickA = false, 0);
    })
</script>
<!-- aboutus-area Start-->
<section class="aboutus-area">
    <div class="container">
        <div class="flex m-flex-wrap">
            <div class="left m-w100">
                <img class="w100" src="images/me.jpg" alt="JONATHON DOE">
            </div>
            <div class="right m-w100 m-pl0 m-mt30">
                <h2 class="text-uppercase">HELLO! I AM JONATHON DOE</h2>
                <span>Famous musicians</span>
                <div class="info">
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad iste perspiciatis modi
                        sapiente est repellendus nam at qui sit pariatur, quas fugit distinctio minima,
                        consectetur, illo voluptas! Aperiam, maxime sunt?
                    </p>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium odio eveniet neque
                        vero illo ab voluptatum ut veniam dolorum esse assumenda ipsam doloremque, mollitia
                        deserunt corrupti a. Ut, iusto quis!
                    </p>
                    <p>
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Unde voluptatum ad quibusdam
                        assumenda. Magnam ad minus, sint tempore est beatae soluta nihil ut assumenda in illo
                        ducimus iusto voluptatem quos?
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- aboutus-area End-->

<!-- reviews-area Start-->
<section class="reviews-area">
    <div class="container">
        <!-- section-title -->
        <div class="section-title text-center mb60">
            <h2 class="text-uppercase">User <span class="primary-color">Reviews</span></h2>
        </div>
        <!-- section-title end -->

        <!-- Swiper -->
        <div class="swiper-container">
            <div class="swiper-wrapper text-center">
                <div class="swiper-slide">
                    <span class="iconfont icon-baojiaquotation2"></span>
                    <img src="images/thumbnail1.jpg" alt="head sculpture">
                    <h4>Lorem ipsum</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis ex repellat voluptas
                        facilis
                        iusto id inventore nihil similique recusandae, architecto aut, eum commodi, rem quas!
                        Necessitatibus aliquam incidunt soluta quae?</p>
                    <span class="iconfont icon-baojiaquotation"></span>
                </div>
                <div class="swiper-slide">
                    <span class="iconfont icon-baojiaquotation2"></span>
                    <img src="images/thumbnail2.jpg" alt="head sculpture">
                    <h4>Lorem ipsum</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates nemo dignissimos
                        molestiae obcaecati. Perferendis, quos, aliquid ab harum deserunt officiis enim nesciunt
                        consequuntur veritatis doloribus totam voluptas nihil adipisci facere?</p>
                    <span class="iconfont icon-baojiaquotation"></span>
                </div>
                <div class="swiper-slide">
                    <span class="iconfont icon-baojiaquotation2"></span>
                    <img src="images/thumbnail3.jpg" alt="head sculpture">
                    <h4>Lorem ipsum</h4>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quibusdam sit repudiandae
                        recusandae facilis ex. Aperiam non accusantium, recusandae repudiandae dolores pariatur
                        omnis iste dolorem ratione vel fugit quis suscipit dignissimos.</p>
                    <span class="iconfont icon-baojiaquotation"></span>
                </div>
            </div>
            <!-- Add Pagination -->
            <div class="swiper-pagination"></div>
        </div>
    </div>
</section>
<!-- reviews-area End-->

<!-- genres-area Start-->
<section class="genres-area">
    <div class="container">
        <!-- section-title -->
        <div class="section-title text-center mb60">
            <h2 class="text-uppercase">Discover by <span class="primary-color">Genres</span></h2>
        </div>
        <!-- section-title end -->

        <!-- genres list -->
        <div class="flex row">
            <div class="col">
                <a title="ROCK" href="details.php">
                    <img class="w100" src="images/genres1.jpg" alt="ROCK">
                    <h4 class="flex">ROCK</h4>
                </a>
            </div>
            <div class="col">
                <a title="ELECTRONIC" href="details.php">
                    <img class="w100" src="images/genres2.jpg" alt="ELECTRONIC">
                    <h4 class="flex">ELECTRONIC</h4>
                </a>
            </div>
            <div class="col">
                <a title="JAZZ" href="details.php">
                    <img class="w100" src="images/genres3.jpg" alt="JAZZ">
                    <h4 class="flex">JAZZ</h4>
                </a>
            </div>
            <div class="col">
                <a title="CLASSICAL" href="details.php">
                    <img class="w100" src="images/genres4.jpg" alt="CLASSICAL">
                    <h4 class="flex">CLASSICAL</h4>
                </a>
            </div>
            <div class="col">
                <a title="WORLD" href="details.php">
                    <img class="w100" src="images/genres5.jpg" alt="WORLD">
                    <h4 class="flex">WORLD</h4>
                </a>
            </div>
            <div class="col">
                <a title="POP" href="details.php">
                    <img class="w100" src="images/genres6.jpg" alt="POP">
                    <h4 class="flex">POP</h4>
                </a>
            </div>
            <div class="col">
                <a title="BLUES" href="details.php">
                    <img class="w100" src="images/genres7.jpg" alt="BLUES">
                    <h4 class="flex">BLUES</h4>
                </a>
            </div>
            <div class="col">
                <a title="PUNK" href="details.php">
                    <img class="w100" src="images/genres8.jpg" alt="PUNK">
                    <h4 class="flex">PUNK</h4>
                </a>
            </div>
        </div>
        <!-- genres list End-->
    </div>
</section>
<!-- genres-area End-->

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
            <input type="button" value="LOG IN">
        </form>
        <p>Don't have an account?</p>
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
    // slider-area
    var slider = new Swiper('.slider-area .swiper-container', {
        slidesPerView: 1,
        spaceBetween: 0,
        loop: true,
        autoplay: true,
        pagination: {
            el: '.slider-area .swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.slider-area .swiper-button-next',
            prevEl: '.slider-area .swiper-button-prev',
        },
    });

    // reviews-area
    var reviews = new Swiper('.reviews-area .swiper-container', {
        slidesPerView: 1,
        spaceBetween: 0,
        loop: true,
        autoplay: true,
        pagination: {
            el: '.reviews-area .swiper-pagination',
            clickable: true,
        }
    });
</script>
</body>

</html>