<div class="modal" id='modal_login'>
    <button class="modal_close" onclick="closeModal()">&times;</button>
    <div class='modal_content'>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" id='login_form'>
        <h1>Login</h1>
        <p>Please fill in username and password credentials.</p>
        <input type="email" placeholder="Enter Email" name="email" required>
        <input type="password" placeholder="Enter Password" name="psw" required>
        <label>
        <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
        </label>

        <div class="clearfix">
        <button type="submit" class="loginbtn">Log in</button>
        </div>
    </form>
    </div>    
</div>