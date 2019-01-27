<!doctype html>
<html>
    <?php include 'layouts/head.php';?>
    <body>
    <?php include 'layouts/nav.php';?>      
    <?php include 'layouts/registration_form.php';?>
    <?php include 'layouts/login_form.php';?>
    <?php include 'layouts/forgot_form.php';?>
    <?php include 'layouts/contact_form.php';?>
    <script src="js/lazyload.js"></script>
    <form action="" method="post" id='admin'>
        <h1>Login</h1>
        <p>Please fill in username and password credentials.</p>
        <input type="email" placeholder="Enter Email" name="email" required> 
        <br>
        <input type="password" placeholder="Enter Password" name="psw" required>
        <br>
        <label>
        <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
        </label>

        <div class="clearfix">
        <button type="submit" class="adminbtn">Log in</button>
        </div>
    </form>

    </body>
</html>
