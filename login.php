<!-- login-area Start -->
<section class="login-area">

    <?php
    // CE154 MySQL+PHP Lab 8 exercises

    // Include the library file that contains the database connection and custom functions
    include('inc/lib.php');

    // Connect to the database
    connect();


    // Start the user session
    session_start();

    // Get the SESSION superglobal variable
    $userkey = $_SESSION['user_id'];

    // If we're logging out then clear the session the cookie
    if( $_REQUEST["action"] == "logout" ){
        session_destroy(); // Get rid of the session
    	header("Location: login.php"); // Redirect to the index page
    	exit; // Stop doing anything else on this page
    }

    if ( $userkey == "" ) { // The user hasn't got a session running so they are not logged in

    	if ( $_POST['username_reg'] != "" && $_POST['password_reg'] != "" ) { // User is trying to register

    		// Set the variables
    		$username_reg = $_POST['username_reg'];
    		$password_reg = md5($_POST['password_reg']); // Encrypt the password to MD5

    		// Insert the user into the table
    		$sql = "INSERT INTO users (username, password, firstname, lastname)
    					VALUES ('$username_reg', '$password_reg', '', '')";

    		// Run the query
    		mysqli_query($conn, $sql);

    		// Get the id of the row we just inserted (this is the new user_id
    		$user_id_new = mysqli_insert_id($conn);

    		// Tell the user what happened
    		if ( $user_id_new != "" ) {
    		  echo "New record created successfully!<br/><br/>";
    		} else {
    		  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    		}

    		// Set the session variables
    		$_SESSION['username'] = $username;
    		$_SESSION['user_id'] = $user_id_new;

    		// Set the $userkey so we are now logged in
    		$userkey = $user_id_new;


    	} elseif ( $_POST['username'] != "" && $_POST['password'] != "" ) { // User is trying to login

    		// Set the variables
    		$username = $_POST['username'];
    		$password = $_POST['password'];

    		// Retreive any user with the same username
    		$sql = "SELECT id, password FROM users WHERE username = '$username'";
    		$result = mysqli_query($conn, $sql);

    		// Loop through the rows
    		while($row = mysqli_fetch_assoc($result)) {

    			// Account exists, now we verify the password.
    			if ( $row['password'] == md5($password) ) {

    				// Verification success! Create the user session variables
    				$_SESSION['username'] = $username;
    				$_SESSION['user_id'] = $row['id'];

    				// Tell the user
    				echo 'Welcome back ' . $_SESSION['username'];

    				// Stop the loop because we found a user
    				break;

    			}
    		}

    		// Set the $userkey to the page knows we're logged in
    		$userkey = $_SESSION['user_id'];

    	}
    }

    ?>

    <div class="close">
        <span class="iconfont icon-close5"></span>
    </div>
    <!-- Log In -->
    <div class="page-content" id="login-form">
        <h3 class="text-center">Log In</h3>
        <form action="index.php">
            <label>
                <span>YOUR USER NAME</span>
                <input type="text" id="username" name="username">
            </label>
            <label>
                <span>YOUR PASSWORD</span>
                <input type="password" id="password" name="password">
            </label>
            <input type="button" value="LOG IN">
        </form>
        <p>Dot have an account?</p>
        <span class="text-uppercase text-center toggle" data-toggle="signup-form">Create New Account</span>
    </div>
    <!-- Sign Up -->
    <div class="page-content" id="signup-form" style="display: none;">
        <h3 class="text-center">Sign Up</h3>
        <form action="index.php">
            <label>
                <span>USER NAME</span>
                <input type="text" id="username_reg" name="username_reg" >
            </label>
            <label>
                <span>PASSWORD</span>
                <input type="password" id="password_reg" name="password_reg">
            </label>
            <input type="button" value="Sign Up">
        </form>
        <p>Existing user?</p>
        <span class="text-uppercase text-center toggle" data-toggle="login-form">LOG IN</span>
    </div>

    <?php
    // ---
    /* Retreive the users
    // ---
    $sql = "SELECT * FROM users";
    $result = mysqli_query($conn, $sql);

    echo "Retreive all the users from the database:</br/>";

    // Check there are some results
    if (mysqli_num_rows($result) > 0) {

    	// There were results so loop through each result
    	while($row = mysqli_fetch_assoc($result)) {
    		echo "#" . $row["id"]. " <b>"  . $row["username"] . "</b> [" . $row["firstname"]. " " . $row["lastname"]. "]<br/>";
    	}
    } else {
    	// There were no rows in the table that matched the query
    	echo "0 results";
    }

    echo "<br/>";
    */


    // ---
    /* Insert a user
    // ---
    $sql = "INSERT INTO users (username, password, firstname, lastname)
    			VALUES ('mig21', '1234', 'Harry', 'Styles')";

    if (mysqli_query($conn, $sql)) {
      echo "New record created successfully!<br/><br/>";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    */

    // ---
    /* Update a user
    // ---
    $sql = "UPDATE users SET username='ghost21'
    			WHERE id = 3";

    if (mysqli_query($conn, $sql)) {
      echo "Record updated successfully!<br/><br/>";
    } else {
      echo "Error updating record: " . mysqli_error($conn);
    }
    */


    // ---
    /* Delete a user
    // ---
    $sql = "DELETE FROM users WHERE id=2";

    if ($conn->query($sql) === TRUE) {
      echo "Record deleted successfully!<br/><br/>";
    } else {
      echo "Error deleting record: " . $conn->error;
    }
    */


    // ---
    /* Retreive the users
    // ---
    $sql = "SELECT * FROM users WHERE firstname = 'Harry' ORDER BY id DESC LIMIT 3";
    $result = mysqli_query($conn, $sql);

    echo "Retreive all the users with the firstname Harry:</br/>";

    // Check there are some results
    if (mysqli_num_rows($result) > 0) {

    	// There were results so loop through each result
    	while($row = mysqli_fetch_assoc($result)) {
    		echo "#" . $row["id"]. " <b>"  . $row["username"] . "</b> [" . $row["firstname"]. " " . $row["lastname"]. "]<br/>";
    	}
    } else {
    	// There were no rows in the table that matched the query
    	echo "0 results";
    }
    */


    // Close the database connection
    mysqli_close($conn);
    ?>
</section>

<script>
    // Login / signup
    var $loginArea = $('.login-area')
    // Login
    var $loginForm = $('#login-form')
    // signup
    var $signupForm = $('#signup-form')

    // Close button click event
    $('.login-area .close').on('click', function () {
        $loginArea.hide()
    })
    // Login switch button click event
    $('.login-area .toggle').on('click', function () {
        var $id = $(this).data('toggle')
        $(this).parents('.page-content').hide()
        $('#' + $id).show()
    })
    // Login button click event
    $('.login').on('click', function () {
        $loginArea.show()
        $loginForm.show()
        $signupForm.hide()
    })
</script>

<!-- login-area End -->

