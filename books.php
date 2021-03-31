<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
	<title>Books</title>
	<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
<div class="container">
<?php
require( 'header.php');
require( 'left.php');
require( 'top.php');
?>
<div class="content">
<?php
$dbname = 'hw17102';
$dbuser = 'hw17102';
$dbpass = 'obscure';
$dbhost = 'localhost';

$link = mysqli_connect($dbhost, $dbuser, $dbpass)
or die ("Unable to connect to '$dbhost'.");

mysqli_select_db($link,$dbname)
or die ("Could not open the database 'dbname'.");

$item_query = "select * from inventory where item_group = 1001;";
$result = mysqli_query($link, $item_query);

session_start();

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
</div>
<?php
require( 'footer.php');
?>
</div>
</body>
</html>