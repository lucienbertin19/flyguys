<div class="modal" id='modal_registration'>
    <button class="modal_close" onclick="closeModal()">&times;</button>
    <div class='modal_content'>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" id='registration_form'>
        <h1>Sign Up</h1>
        <p>Please fill in this form to create an account.</p>
        <input type="text" placeholder="Enter first name" name="firstname" required>
        <input type="text" placeholder="Enter Last name" name="lastname" required>

        <input type="date" placeholder="" name="dob" required>
        <input type="text" placeholder="First line of address" name="address1" required>
        <input type="text" placeholder="Second line of address" name="address2" required>
        <input type="text" placeholder="Enter postcode" name="postcode" pattern="[A-Za-z]{1,2}[0-9Rr][0-9A-Za-z]? [0-9][ABD-HJLNP-UW-Zabd-hjlnp-uw-z]{2}"required>
        <input type="text" placeholder="County" name="town" required>
        <select id="country" name="country">
            <option value="unitedkingdom">united kingdom</option>
            <option value="usa">USA</option>
            <option value="paris">Paris</option>
        </select>
        <input type="email" placeholder="Enter Email" name="email" required>
        <input type="password" placeholder="Enter Password" name="psw" required>
        <input type="password" placeholder="Confirm Password" name="pswr" required>
        <label>
        <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
        </label>

        <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

        <div class="clearfix">
        <button type="button" class="cancelbtn">Cancel</button>
        <button type="submit" class="signupbtn">Sign Up</button>
        </div>
    </form>
    </div>    
</div>