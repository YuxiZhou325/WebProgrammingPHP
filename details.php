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
                         <a href="rock.php">ROCK</a>
                     </li>
                     <li>
                         <a href="pop.php">POP</a>
                     </li>
                     <li>
                         <span>HIP POP</span>
                     </li>
                     <li>
                         <span>CLASSICAL</span>
                     </li>
                     <li>
                         <span>WORLD</span>
                     </li>
                     <li>
                         <span>ELECTRIC</span>
                     </li>
                     <li>
                         <span>BLUES</span>
                     </li>
                     <li>
                         <span>JAZZ</span>
                     </li>
                 </ul>
            </div>
            <!-- Sidebar end -->

            <div class="right m-w100">
                <!--  -->
                <div class="flex" style="align-items: flex-start;">
                    <!-- thumbnail image -->
                    <div class="imgbox m-w100">
                        <img class="w100" src="https://upload.wikimedia.org/wikipedia/en/6/6e/Pink_Floyd_-_Division_Bell.jpg" alt="thumbnail1">
                    </div>
                    <!-- info -->
                    <div class="info m-w100 m-pl0">
                        <h1>Lorem ipsum dolor sit amet consectetur</h1>
                        <p style="font-size: 14px;">
                            28 March 1994&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Progressive Rock&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;32423
                        </p>
                        <!-- prices -->
                        <div class="prices">
                            £35.00 <del>£39.99</del>
                        </div>
                        <!-- introduction -->
                        <div class="Qty flex">
                            <span class="iconfont icon-reduce"></span>
                            <input class="num" data-price="35.00" type="text" name="qty" value="1">
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
                        <img src="https://upload.wikimedia.org/wikipedia/en/6/6e/Pink_Floyd_-_Division_Bell.jpg" alt="thumbnail1">
                        <p>
                            The Division Bell is the fourteenth studio album by the English progressive rock band Pink Floyd,
                            released on 28 March 1994 by EMI Records in the United Kingdom and on 4 April by Columbia Records in the United States.
                        </p>
                        <p>
                            The second Pink Floyd album recorded without founding member Roger Waters, The Division Bell was written mostly by guitarist and singer David Gilmour and keyboardist Richard Wright.
                            It features Wright's first lead vocal on a Pink Floyd album since The Dark Side of the Moon (1973).
                            Gilmour's fiancée, novelist Polly Samson, co-wrote many of the lyrics, which deal with themes of communication.
                            It was the last Pink Floyd album recorded with Wright, who died in 2008.
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
                                    One of the merits of vinyl is being able to enjoy great album cover artwork.
                                    The Division Bell itself is a huge improvement on A Momentary Lapse in Reason.
                                    Pink Floyd always struggled without Roger Waters skill for creating concepts and strong lyrics.
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
                                    The Division Bell is actually a great album, underrated critically at the time of the release.
                                    First four songs are very strong and also the ending of the LP (Keep Talking, Lost for Words and of course the grande finale - High Hopes)
                                    stands next to the 70´s classic albums with self-esteem.
                                </p>
                                <div class="flex" style="justify-content: flex-start;">
                                    <img src="http://i.imgur.com/83KjgVO.png" alt="thumbnail1">
                                    <img src="https://i.ebayimg.com/images/g/2wkAAOSwsQleQhvw/s-l500.jpg" alt="thumbnail2">
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
                            <span class="iconfont icon-xingzhuang60kaobei2 on"></span>
                            <span class="iconfont icon-xingzhuang60kaobei2 on"></span>
                            <p>Feb 21, 2021</p>
                            <div class="reviews-content">
                                <p>Is this still really Pink Floyd? That seems to be the question,
                                as it has been since Roger Waters left the band in 1985 to dip deeper into the sci-fi soup.
                                Waters has since missed no opportunity to slag his former band mates as incompetent fakes.
                                He would suggest that he was Pink Floyd, although judging from his overwrought, concept burdened solo albums,
                                that notion should be put to rest.</p>
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
