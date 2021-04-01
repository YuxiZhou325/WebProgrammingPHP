<!-- 
    Student ID:LINYU80007 
    Image source: All images are from Google Image Search
-->
<?php
// Set the page name
$page_name = "DETAILS";
include('header.php');
include('breadcrumb.php');
?>

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


<?php
include('login.php');
include('footer.php');
?>
