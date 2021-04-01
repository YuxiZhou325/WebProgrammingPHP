<!--
    Student ID:LINYU80007
    Image source: All images are from Google Image Search
-->

<?php
// Set the page name
$page_name = "STORE";
include('header.php');

// Include the library file that contains the database connection and custom functions
include('inc/lib.php');
// Connect to the database
connect();

include('breadcrumb.php');
include('filter.php');
include('pop_list.php');
include('login.php');
include('footer.php');
?>
