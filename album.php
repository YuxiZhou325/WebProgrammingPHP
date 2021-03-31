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

    $sql = "SELECT * FROM item_info";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0 ) {
    // Loop through the rows
        while($row = mysqli_fetch_assoc($result))
        {
        ?>

        echo "<div class="container">";
        echo "<!-- section-title -->";
            echo "<div class="section-title text-center mb60">";
                echo "<h2 class="text-uppercase">Feature Music <span class="primary-color">Albums</span></h2>";
            echo "</div>";
            echo "<!-- section-title end -->";

            echo "<!-- list -->";
            echo "<ul class="flex row">";
                echo "<li class="col text-center">";
                    echo "<a title="$item_info['name']" href="details.php" target="_blank">";
                        echo "<img class="w100" src=".$item_info['URL']" alt=".$item_info['name']">";
                        echo "<h5 class="text-uppercase">.$item_info['name']</h5>"

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
        ?>
        <?php
        }
    } else {
        echo "0 results";
    }

    mysqli_free_result($result);
    mysqli_close($link);

    ?>
</section>
<!-- album-area End-->