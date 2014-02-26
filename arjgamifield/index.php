<?php
    include "googleaccess.php";
    //include "connectdb.php";
	include "functions.php";
    connectDB();
?>
<html>
    <head>
        <title>$*GAMIFIE(L)D*$</title>
        <link rel="stylesheet" href="css/homepage.css"/>
        <script src="javascript/jquery-2.0.3.js"></script>
        <script src="javascript/jquery-migrate-1.2.1.js"></script>
    </head>
    <body>
        <div id="header"><label id="title"><a href="index.php" id="gami">GAMIFIE(L)D</a></label></div>
    
        <p id="signup">Signup</p>
    
    <div id="login_body"> 
        <div id="login_website">
            <p class="login">Login using Gamifie(l)d</p>
        </div>
        
        <p style="text-align: center;">OR</p>
        
        <div id="login_facebook">
            <p class="login"><a href="fb_login.php">Login using Facebook</p>
            <div id="fb_logo"><img src="images/fb.jpg" height="50" width="50"/></a></div>
        </div>
        
        <p style="text-align: center;">OR</p>
        
        <div id="login_google">
            <p class="login"><a href="<?php echo $authUrl;?>">Login using Google</p>
            <div id="google_logo"><img src="images/google.jpg" height="60" width="63"/></a></div>
        </div>
    </div>
    
    <div id="user_register">
        <label id="register_label">Register</label><br /><br />
        <form action="signup.php" name="user_register" id="register_user" method="post" onsubmit="return validate();">
            <label class="user_label">Gamifie(l)d ID</label><input class="user_text" type="text" name="user_id" size="25" maxlength="20" required="required"/><br /><br />
            <label class="user_label">Email</label><input id="email" type="email" name="email" size="30" maxlength="30" required="required"/><br /><br/>
            <label class="pass_label">Password</label><input class="pass_text" id="password_text" type="password" name="password_register" size="15" required="required" maxlength="15"/><br /><br/>
            <label id="confirm_pass_label">Confirm Password</label><input id="confirm_pass_text" type="password" name="confirm_password_register" maxlength="15" required="required" size="15"/><br /><br/>
            <input id="submit" name="submit_register" type="submit" value="Signup"/><br />
        </form>
    </div>
<!-- Gamifiled ID Login-->

    
    <div id="user_login">
        <br /><br />
        <form action="validate.php" name="user_login" method="post">
            <label class="user_label">Gamifie(l)d ID</label><input class="user_text" type="text" required="required" name="username" size="25"/><br /><br />
            <label class="pass_label">Password</label><input class="pass_text" type="text" required="required" name="password" size="15"/><br /><br/>
            <input id="submit_login" name="submit_login" type="submit" value="Login" /><br />
            <a href="#" id="forgot_password">Forgot Username/Password?</a>
        </form>
    
    </div>
   
        <div id="footer">Gamifield Copyrights&#169 Reserved 2014</div>
    </body>
</html>
<script>
$(document).ready(function(){
    
    $("div#user_register").hide();
    $("div#user_login").hide();
    $("#signup").click(function(){
        $("#login_body").css({"transition":"all 1s ease-in","-moz-transform": "translate(-300px)"});
        $("div#user_register").fadeIn('slow');
        $("div#user_login").hide();
    })
    $("#login_website").click(function(){
        $("#login_body").css({"transition":"all 1s ease-in","-moz-transform": "translate(-300px)"});
        $("div#user_login").fadeIn('slow');
        $("div#user_register").hide();
    })
    
    
})
        
</script>
<script type="text/javascript">
function validate()
{
    var pass_text=(document).getElementById("password_text").value;
    var confirm_pass_text=(document).getElementById("confirm_pass_text").value;
    if(pass_text==confirm_pass_text)
    return true;
    else
    {
        alert("Password did not Match");
        return false;
    }
}
</script>

