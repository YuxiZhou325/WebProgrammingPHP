<?php
// Set the page name
$page_name = "HOME";
include('header.php');

// Include the library file that contains the database connection and custom functions
include('inc/lib.php');
// Connect to the database
connect();

include('sider.php');
include('album.php');
include('audio.php');
include('aboutus.php');
include('review.php');
include('genres.php');
include('login.php');
include('footer.php');
?>
