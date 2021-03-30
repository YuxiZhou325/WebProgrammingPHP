<!-- login-area Start -->
<section class="login-area">
    <div class="close">
        <span class="iconfont icon-close5"></span>
    </div>
    <!-- Log In -->
    <div class="page-content" id="login-form">
        <h3 class="text-center">Log In</h3>
        <form action="index.php">
            <label>
                <span>YOUR EMAIL ADDRESS</span>
                <input type="text">
            </label>
            <label>
                <span>YOUR PASSWORD</span>
                <input type="password">
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
                <span>EMAIL ADDRESS</span>
                <input type="text">
            </label>
            <label>
                <span>PASSWORD (MINIMUM 6 CHARACTERS)</span>
                <input type="password">
            </label>
            <input type="button" value="Sign Up">
        </form>
        <p>Existing user?</p>
        <span class="text-uppercase text-center toggle" data-toggle="login-form">LOG IN</span>
    </div>
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