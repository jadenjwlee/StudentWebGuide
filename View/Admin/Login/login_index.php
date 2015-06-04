<?php
#FILE name: login_index.php
#Content: login form (HTML)
#Source: www.formget.com/login-form-in-php/
#Ref: php.about.com/od/advancedphp/ss/php_sessions_3.htm#step-heading
#Referenced on March 18, 2015 by Jeesoo Kim


include('login.php');

if (isset($_SESSION['login_user'])) {
    //header("location: ../../Public/Home/home.php");
    //header("location: profile.php");
    //redirect to the browser  as sending this header back to the browser
    //header() should be written before any HTML
    //when the page is firstly loaded, the session is not set, so this block will be skipped.   
}
?>

<?php include '../../Public/Home/header.php'; ?>  





<div id="error" >
    <?php
    if ($error != '') {
        ?>

        <p align="center"><strong><font color="#990000"><?php echo $error; ?></font></strong></p>
        <?php
    }
    ?>    
</div>

<div id="login">
    
    <h2><span class="fontawesome-lock"></span>User Login</h2>
    
    <form action="" method="Post">
        <fieldset name="Log_in">      

            <p><label for="username">UserName</label></p>
                <p><input type="username" id="username" value="username" onBlur="if(this.value=='')this.value='username'" onFocus="if(this.value=='username')
                    this.value=''"></p> 

                <p><label for="password">Password</label></p>
                <p><input type="password" id="password" value="password" onBlur="if(this.value=='')this.value='password'" onFocus="if(this.value=='password')
                    this.value=''"></p>
        </fieldset>

        <!-- Start: Image Authentication (1) -->
        <fieldset name="Image_Auth_with_random_number">                  
            <!--<legend>Image Authentication with 5 digit Random number</legend>-->
            <p><label>Please enter the number in yellow on black beside: </label></p>
            <p><input type="text" id="imgNumber" name="imgNumber" value=""/></p>
            <p><img src="randomImage.php"/></p>                  
            <!-- End: Image Authentication -->

            <p><input type="submit" name="submit" value="Login" /></p>
        </fieldset>
        <span><?php echo $error; ?></span>                   
    </form>        
</div>
<!-- end of $login--> 


<?php include '../../Public/Home/footer.php'; ?>  
