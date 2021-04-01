<!--
    Student ID:LINYU80007
    Image source: All images are from Google Image Search
-->
<!-- album-area Start-->
<section class="album-area pt100">
<div class="container">
<?php

    // Start the item session
    session_start();

    // Get the SESSION superglobal variable
    $userkey = $_SESSION['feature_items'];

    $sql = "SELECT * FROM feature_items";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0 ) {

        echo "<!-- section-title -->";
        echo "<div class='section-title text-center mb60'>";
            echo "<h2 class='text-uppercase'>Feature Music <span class='primary-color'>Albums</span></h2>";
        echo "</div>";

        echo "<!-- section-title end -->";
        echo "<!-- list -->";
        echo "<ul class='flex row'>";

    // Loop through the rows
        while($row = mysqli_fetch_assoc($result))
        {

             echo "<li class='col text-center'>";
                    echo "<a title='".$row['name']."' href='details.php' target=''_blank'>";
                        echo "<img class='w100' src='".$row['URL']."' alt='".$row['name']."'>";
                        echo "<h5 class='text-uppercase'>".$row['name']."</h5>";
                        echo "<!-- Play music -->";
                        echo "<!-- Play button -->";
                        echo "<span class='iconfont icon-bofang'></span>";
                        echo "<!-- Pause button -->";
                        echo "<span class='iconfont icon-bofang1'></span>";
                    echo "</a>";
                echo "</li>";

        }
        echo "</ul>";
        echo "<!-- list end -->";

    }else{
        echo "0 results";
    }

    mysqli_free_result($result);
    mysqli_close($link);

?>
</div>
</section>
<!-- album-area End-->