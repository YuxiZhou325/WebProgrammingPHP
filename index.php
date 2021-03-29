<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Home</title>
    <link rel="stylesheet" href="css/style.css" type="text/css" />
</head>
<body>
<div class="container">
    <?php
    require('header.php');
    ?>
    <div class="content">
        <form action='reset.php' method='GET'><button id="reset" name='returnURL' value='1702429/index.php'>Reset DBase</button></form>
        <?php
        session_start();

        if (isset($_GET['keyword']) || isset($_POST['keyword']))
        {
            if (isset($_GET['keyword']))
            {
                $keyword = $_GET['keyword'];
            }
            else
            {
                $keyword = $_POST['keyword'];
            }

            $dbname = 'hw17102';
            $dbuser = 'hw17102';
            $dbpass = 'obscure';
            $dbhost = 'localhost';

            $link = mysqli_connect($dbhost, $dbuser, $dbpass)
            or die ("Unable to connect to '$dbhost'.");

            mysqli_select_db($link, $dbname)
            or die ("Could not open the database'$dbname'.");

            $search = "select * from inventory where item_description like '%".$keyword."%';";
            $result = mysqli_query($link, $search);

            while($item = mysqli_fetch_array($result, MYSQLI_ASSOC))
            {
                echo "<br />";
                echo "<div>";
                echo "<img class='product' src='images/".$item['item_image_loc']."' alt='image' />";
                echo "Item Code: ".$item['item_code'];
                echo "<br />";
                echo $item['item_description'];
                echo "<br />";
                echo "<br />";
                echo "<br />";
                echo "<br />";
                echo "<br />";
                echo "<br />";
                echo "$".$item['item_price'];
                echo "<br />";
                echo "Available: ".$item['item_stock_count'];
                echo "<br />";

                if ($item['item_stock_count'] == 0)
                {
                    echo "<form action='index.php' method='POST'>";
                    echo "<button class='buy' type='submit' name='".$item['item_code']."' value='no'>Buy</button>",
                        "<input type='hidden' name='keyword' value='".$keyword."' />";

                    if (isset($_POST[$item['item_code']]))
                    {
                        echo "<br /><font id='error'>Item Not Available</font>";
                    }
                }
                else
                {
                    echo "<form action='purchase.php' method='GET'>";
                    echo "<button class='buy' type='submit' name='productcode' value='".$item['item_code']."'>Buy</button>";
                }
                echo "</form>";
                if (isset($_SESSION['username']) && $_POST['review'] == 'yes' && $_POST['itemcode'] == $item['item_code'])
                {
                    echo "<form action='index.php' method='POST'><div class='reviews'><div class='review'><label for='1'>1</label><br/><input type='radio' id='1' name='score' value=1 /></div>",
                    "<div class='review'><label for='2'>2</label><br/><input type='radio' id='2' name='score' value=2 /></div>",
                    "<div class='review'><label for='3'>3</label><br/><input type='radio' id='3' name='score' value=3 /></div>",
                    "<div class='review'><label for='4'>4</label><br/><input type='radio' id='4' name='score' value=4 /></div>",
                    "<div class='review'><label for='5'>5</label><br/><input type='radio' id='5' name='score' value=5 /></div>",
                    "<div class='review'><input type='submit' value='Submit' />","<input type='hidden' name='item' value=".$item['item_code']." />","<input type='hidden' name='keyword' value='".$keyword."' /></div></div></form>";
                }
                else
                {
                    echo "<form action='index.php' method='POST'><button type='submit' name='review' value='yes'>Review</button><input type='hidden' name='itemcode' value='".$item['item_code']."' />",
                        "<input type='hidden' name='keyword' value='".$keyword."' /></form>";
                }
                echo "</div>";
            }

            if (isset($_POST['score']))
            {
                $result = "select * from review where customer_number=".$_SESSION['username']." and item_code='".$_POST['item']."';";
                if (mysqli_num_rows(mysqli_query($link, $result)) == 0)
                {
                    $review = "insert into review (customer_number,item_code,rating) values(".$_SESSION['username'].", '".$_POST['item']."', ".$_POST['score'].");";
                    mysqli_query($link, $review);
                }
                else
                {
                    $update = "update review set rating=".$_POST['score']." where customer_number=".$_SESSION['username']." and item_code='".$_POST['item']."';";
                    mysqli_query($link, $update);
                }
            }

            mysqli_free_result($result);
            mysqli_close($link);
        }
        ?>
    </div>
    <script>
        $('.menu').on("click", function () {
            $(this).toggleClass('close')
            $('header nav').toggleClass('show')
        })
    </script>

    <!-- breadcrumb-area Start-->
    <section class="breadcrumb-area">
        <div class="container">
            <h2 class="text-center text-uppercase">Artist Page</h2>
        </div>
    </section>
    <!-- breadcrumb-area End-->


    <!-- aboutus-area Start-->
    <section class="aboutus-area">
        <div class="container">
            <div class="flex m-flex-wrap" style="align-items: stretch;">
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

    <!-- team-area Start-->
    <section class="team-area">
        <div class="container">
            <!-- section-title -->
            <div class="section-title text-center mb60">
                <h2 class="text-uppercase">TALENTED <span class="primary-color">MEMBERS</span></h2>
                <p>Our band members</p>
            </div>
            <!-- section-title end -->

            <!-- single list -->
            <div class="row flex text-center">
                <div class="col">
                    <div class="single-singer">
                        <div class="singer-thumbnail">
                            <img class="w100" src="images/1.jpg" alt="Singer Thumbnail">
                            <ul class="social-icon flex">
                                <li><a href="#"><span class="iconfont icon-facebook"></span></a></li>
                                <li><a href="#"><span class="iconfont icon-tuite"></span></a></li>
                                <li><a href="#"><span class="iconfont icon-ins"></span></a></li>
                            </ul>
                        </div>
                        <div class="singer-content">
                            <h4>DAVID</h4>
                            <p>Main Vocal</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="single-singer">
                        <div class="singer-thumbnail">
                            <img class="w100" src="images/2.jpg" alt="Singer Thumbnail">
                            <ul class="social-icon flex">
                                <li><a href="#"><span class="iconfont icon-facebook"></span></a></li>
                                <li><a href="#"><span class="iconfont icon-tuite"></span></a></li>
                                <li><a href="#"><span class="iconfont icon-ins"></span></a></li>
                            </ul>
                        </div>
                        <div class="singer-content">
                            <h4>ZAVED</h4>
                            <p>Drummer</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="single-singer">
                        <div class="singer-thumbnail">
                            <img class="w100" src="images/3.jpg" alt="Singer Thumbnail">
                            <ul class="social-icon flex">
                                <li><a href="#"><span class="iconfont icon-facebook"></span></a></li>
                                <li><a href="#"><span class="iconfont icon-tuite"></span></a></li>
                                <li><a href="#"><span class="iconfont icon-ins"></span></a></li>
                            </ul>
                        </div>
                        <div class="singer-content">
                            <h4>DAVID</h4>
                            <p>Dj</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="single-singer">
                        <div class="singer-thumbnail">
                            <img class="w100" src="images/4.jpg" alt="Singer Thumbnail">
                            <ul class="social-icon flex">
                                <li><a href="#"><span class="iconfont icon-facebook"></span></a></li>
                                <li><a href="#"><span class="iconfont icon-tuite"></span></a></li>
                                <li><a href="#"><span class="iconfont icon-ins"></span></a></li>
                            </ul>
                        </div>
                        <div class="singer-content">
                            <h4>SONIYA</h4>
                            <p>Guitarist</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="single-singer">
                        <div class="singer-thumbnail">
                            <img class="w100" src="images/5.jpg" alt="Singer Thumbnail">
                            <ul class="social-icon flex">
                                <li><a href="#"><span class="iconfont icon-facebook"></span></a></li>
                                <li><a href="#"><span class="iconfont icon-tuite"></span></a></li>
                                <li><a href="#"><span class="iconfont icon-ins"></span></a></li>
                            </ul>
                        </div>
                        <div class="singer-content">
                            <h4>DAVID</h4>
                            <p>Main Vocal</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="single-singer">
                        <div class="singer-thumbnail">
                            <img class="w100" src="images/6.jpg" alt="Singer Thumbnail">
                            <ul class="social-icon flex">
                                <li><a href="#"><span class="iconfont icon-facebook"></span></a></li>
                                <li><a href="#"><span class="iconfont icon-tuite"></span></a></li>
                                <li><a href="#"><span class="iconfont icon-ins"></span></a></li>
                            </ul>
                        </div>
                        <div class="singer-content">
                            <h4>ZAVED</h4>
                            <p>Drummer</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="single-singer">
                        <div class="singer-thumbnail">
                            <img class="w100" src="images/7.jpg" alt="Singer Thumbnail">
                            <ul class="social-icon flex">
                                <li><a href="#"><span class="iconfont icon-facebook"></span></a></li>
                                <li><a href="#"><span class="iconfont icon-tuite"></span></a></li>
                                <li><a href="#"><span class="iconfont icon-ins"></span></a></li>
                            </ul>
                        </div>
                        <div class="singer-content">
                            <h4>DAVID</h4>
                            <p>Dj</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="single-singer">
                        <div class="singer-thumbnail">
                            <img class="w100" src="images/8.jpg" alt="Singer Thumbnail">
                            <ul class="social-icon flex">
                                <li><a href="#"><span class="iconfont icon-facebook"></span></a></li>
                                <li><a href="#"><span class="iconfont icon-tuite"></span></a></li>
                                <li><a href="#"><span class="iconfont icon-ins"></span></a></li>
                            </ul>
                        </div>
                        <div class="singer-content">
                            <h4>SONIYA</h4>
                            <p>Guitarist</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- single list End -->
        </div>
    </section>
    <!-- team-area End-->

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
    <?php
    require( 'footer.php');
    ?>
</div>
</body>
</html>`