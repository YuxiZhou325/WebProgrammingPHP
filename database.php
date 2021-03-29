<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>Database</title>
    <link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
<div class="container">
    <?php
    require( 'header.php');
    ?>
    <div class="content">
        <?php
        session_start();
        if(!isset($_SESSION['musername']))
        {
            header('Location: index.php');
            exit();
        }
        else
        {
            $dbname = 'yz18966';
            $dbuser = 'yz18966';
            $dbpass = 'obscure';
            $dbhost = 'localhost';

            $link = mysqli_connect($dbhost, $dbuser, $dbpass)
            or die ("Unable to connect to '$dbhost'.");

            mysqli_select_db($link, $dbname)
            or die ("Could not find database '$dbname'.");

            $inventory_group = 'select * from inventory_group;';
            $inventory = 'select * from inventory;';
            $customer = 'select * from customer;';
            $customer_order = 'select * from customer_order order by order_number;';
            $order_item = 'select * from order_item order by order_number;';
            $manager = 'select * from manager;';
            $review = 'select * from review;';
            $promotion_code = 'select * from promotion_code;';

            $result = mysqli_query($link, $customer_order);
            echo '<p class="tables">customer_order</p>';
            echo '<table><tr><th>order_number</th><th>order_date</th>',
            '<th>delivered</th><th>shipping_date</th><th>customer_number</th></tr>';
            while ($item = mysqli_fetch_array($result,MYSQLI_ASSOC))
            {
                echo '<tr><td>'.$item['order_number'].'</td><td>'.$item['order_date'].'</td>',
                    '<td>'.$item['delivered'].'</td><td>'.$item['shipping_date'].'</td>',
                    '<td>'.$item['customer_number'].'</td></tr>';
            }
            echo '</table>';
            echo '<br />';

            $result = mysqli_query($link, $order_item);
            echo '<p class="tables">order_item</p>';
            echo '<table><tr><th>order_number</th><th>item_code</th>',
            '<th>value</th><th>quatity</th></tr>';
            while ($item = mysqli_fetch_array($result,MYSQLI_ASSOC))
            {
                echo '<tr><td>'.$item['order_number'].'</td><td>'.$item['item_code'].'</td>',
                    '<td>'.$item['value'].'</td><td>'.$item['quantity'].'</td></tr>';
            }
            echo '</table>';
            echo '<br />';

            $result = mysqli_query($link, $review);
            echo '<p class="tables">review</p>';
            echo '<table><tr><th>review_number</th><th>customer_number</th>',
            '<th>item_code</th><th>rating</th></tr>';
            while ($item = mysqli_fetch_array($result,MYSQLI_ASSOC))
            {
                echo '<tr><td>'.$item['review_number'].'</td><td>'.$item['customer_number'].'</td><td>'.$item['item_code'].'</td><td>'.$item['rating'].'</td></tr>';
            }
            echo '</table>';
            echo '<br />';

            $result = mysqli_query($link,$inventory);
            echo '<p class="tables">inventory</p>';
            echo '<table><tr><th>item_code</th><th>item_name</th>',
            '<th>item_description</th><th>item_author</th><th>item_image_loc</th><th>item_group</th><th>item_price</th><th>item_stock_location</th><th>item_stock_count</th>',
            '<th>item_order_count</th></tr>';
            while ($item = mysqli_fetch_array($result,MYSQLI_ASSOC))
            {
                echo '<tr><td>'.$item['item_code'].'</td><td>'.$item['item_name'].'</td>',
                    '<td>'.$item['item_description'].'</td><td>'.$item['item_author'].'</td><td>'.$item['item_image_location'].'</td><td>'.$item['item_group'].'</td><td>'.$item['item_price'].'</td>',
                    '<td>'.$item['item_stock_location'].'</td><td>'.$item['item_stock_count'].'</td><td>'.$item['item_order_count'].'</td></tr>';
            }
            echo '</table>';
            echo '<br />';

            $result = mysqli_query($link, $inventory_group);
            echo '<p class="tables">inventory_group</p>';
            echo '<table><tr><th>group_code</th><th>group_name</th></tr>';
            while ($item = mysqli_fetch_array($result,MYSQLI_ASSOC))
            {
                echo '<tr><td>'.$item['group_code'].'</td><td>'.$item['group_name'].'</td></tr>';
            }
            echo '</table>';
            echo '<br />';

            $result = mysqli_query($link, $customer);
            echo '<p class="tables">customer</p>';
            echo '<table><tr><th>customer_number</th><th>surname</th>','<th>initials</th><th>firstname</th><th>title</th><th>address1</th>',
            '<th>address2</th><th>city</th><th>county</th><th>postcode</th><th>passwd</th><th>passphrase</th></tr>';
            while ($item = mysqli_fetch_array($result,MYSQLI_ASSOC))
            {
                echo '<tr><td>'.$item['customer_number'].'</td><td>'.$item['surname'].'</td>',
                    '<td>'.$item['initials'].'</td><td>'.$item['firstname'].'</td><td>'.$item['title'].'</td><td>'.$item['address1'].'</td><td>'.$item['address2'].'</td><td>'.$item['city'].'</td>',
                    '<td>'.$item['county'].'</td><td>'.$item['postcode'].'</td><td>'.$item['passwd'].'</td><td>'.$item['passphrase'].'</td></tr>';
            }
            echo '</table>';
            echo '<br />';

            $result = mysqli_query($link, $manager);
            echo '<p class="tables">manager</p>';
            echo '<table><tr><th>manager_number</th><th>surname</th>',
            '<th>initials</th><th>firstname</th><th>passwd</th><th>passphrase</th></tr>';
            while ($item = mysqli_fetch_array($result,MYSQLI_ASSOC))
            {
                echo '<tr><td>'.$item['manager_number'].'</td><td>'.$item['surname'].'</td>',
                    '<td>'.$item['initials'].'</td><td>'.$item['firstname'].'</td>',
                    '<td>'.$item['passwd'].'</td><td>'.$item['passphrase'].'</td></tr>';
            }
            echo '</table>';
            echo '<br />';

            $result = mysqli_query($link, $promotion_code);
            echo '<p class="tables">promotion_code</p>';
            echo '<table><tr><th>code</th><th>discount</th></tr>';
            while ($item = mysqli_fetch_array($result,MYSQLI_ASSOC))
            {
                echo '<tr><td>'.$item['code'].'</td><td>'.$item['discount'].'</td></tr>';
            }
            echo '</table>';
            echo '<br />';



        }
        ?>
    </div>
    <?php
    require( 'footer.php');
    ?>
</div>
</body>
</html>