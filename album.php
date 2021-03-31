<!-- album-area Start-->
<section class="album-area pt100">

    <?php
    // Include the library file that contains the database connection and custom functions
        include('inc/lib.php');

    // Connect to the database
    connect();


    // Start the user session
    session_start();
    // Get the SESSION superglobal variable
    $userkey = $_SESSION['item_info'];

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
    		echo "<form action='books.php' method='POST'>";
    		echo "<button class='buy' type='submit' name='".$item['item_code']."' value='no'>Buy</button>";
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
    		echo "<form action='books.php' method='POST'><div class='reviews'><div class='review'><label for='1'>1</label><br/><input type='radio' id='1' name='score' value=1 /></div>",
    			"<div class='review'><label for='2'>2</label><br/><input type='radio' id='2' name='score' value=2 /></div>",
    			"<div class='review'><label for='3'>3</label><br/><input type='radio' id='3' name='score' value=3 /></div>",
    			"<div class='review'><label for='4'>4</label><br/><input type='radio' id='4' name='score' value=4 /></div>",
    			"<div class='review'><label for='5'>5</label><br/><input type='radio' id='5' name='score' value=5 /></div>",
    			"<div class='review'><input type='submit' value='Submit' />","<input type='hidden' name='item' value=".$item['item_code']." />","<input type='hidden' name='keyword' value='".$keyword."' /></div></div></form>";
    	}
    	else
    	{
    		echo "<form action='books.php' method='POST'><button type='submit' name='review' value='yes'>Review</button><input type='hidden' name='itemcode' value='".$item['item_code']."' /></form>";
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

    ?>

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