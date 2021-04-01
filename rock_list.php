<!-- list-area -->
<section class="list-area">
<div class="container flex">

    <!-- Sidebar -->
    <div class="left">
        <ul>
            <li  class="active">
                <span href="rock.php">ROCK</span>
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

<?php
    // Start the user session
    session_start();

    // Get the SESSION superglobal variable
    $userkey = $_SESSION['item_info'];

    $sql = "SELECT * FROM item_info WHERE item_info.category='Rock'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0 ) {

        echo "<div class='right m-w100'>";
            echo "<!-- list content -->";
            echo "<div class='flex row'>";
        // Loop through the rows
        while ($row = mysqli_fetch_assoc($result))
        {

                echo "<div class='col'>";
                    echo "<a title='".$row['name']."' href='details.php'>";
                        echo "<img class='w100' src='".$row['URL']."' alt='".$row['name']."'>";
                        echo "<!-- title -->";
                        echo "<h6 class='text-uppercase e'>".$row['name']."</h6>";
                        echo "<!-- description -->";
                        echo "<strong><p>".$row['published_date']."</p></strong>";
                        echo "<p class='ee'>".$row['description']."</p>";
                        echo "<div class='flex'>";
                            echo "<div class='price'>".$row['price']."</div>";
                            echo "<!-- add to basket -->";
                            echo "<div class='basket'>";
                                echo "<span class='iconfont icon-gouwuche'></span>";
                            echo "</div>";
                        echo "</div>";
                    echo "</a>";
                echo "</div>";

        }
            echo "</div>";
            echo "<!-- list content end -->";
            echo "<div class='pagination_belly flex'>";
                echo "<a title='page prev' href=''>";
                    echo "<span class='iconfont icon-left'></span>";
                echo "</a>";
                echo "<a title='page 1' href=''>1</a>";
                echo "<a class='active' title='page 2' href=''>2</a>";
                echo "<a title='page 3' href=''>3</a>";
                echo "<a title='page 4' href=''>4</a>";
                echo "<a title='page 5' href=''>5</a>";
                echo "<a title='page next' href=''>";
                    echo "<span class='iconfont icon-right'></span>";
                echo "</a>";
            echo "</div>";

        echo "</div>";

    }else{
        echo "0 results";
    }

    mysqli_free_result($result);
    mysqli_close($link);

?>

</div>
</section>
<!-- list-area End -->