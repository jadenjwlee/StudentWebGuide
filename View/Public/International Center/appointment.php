<?php include "../Home/header.php"; ?>
<link href="../../style/appointment.css" rel="stylesheet">
<script src="../../JS/appointment.js"></script>

<header id="top">
	<figure id="logo"><img src="../../image/logo.jpg" alt="Cooking Life" /></figure>
            <nav id="top_nav">
                <ul>
                    <li><a href="../../Admin/Login/login_index.php">Login</a></li>
                    <li><a href="../../Admin/Login/register.php">Register</a></li>
                </ul>
            </nav>
            <!--end top_nav-->	

            <nav id="main_nav">
                <ul>
                    <li><a href="../../Public/Home/home.php"><span>Home</span></a></li>
                    <li class="has sub"><a href="../../Public/Road map/roadmap.php"><span>Road map tour</span></a></li>
                    <li class="active"><a href="../International Center/International_center.php"><span>International Center</span></a></li>
                    <li><a href="../touristSpots/index.php"><span>Tourism</span></a></li>
                    <li><a href="#"><span>Off-campus Job</span></a></li>
                    <li><a href="../../Public/Housing/housing.php"><span>Off-campus Housing</span></a></li>
                    <li class="search pull-right">	
                </ul>
            </nav>
            <!--end main_nav-->
    </header>
    <!--end top-->



<div id="login">
    
    <h2><span class="fontawesome-lock"></span>Appointment form</h2>
    
    <form action="appointment_response.php" method="Post">
        <fieldset name="Log_in">      

            <p><label for="username">Student Number: </label></p>
            <p><input type="username" id="username" value="name" name="id" onBlur="if(this.value=='')this.value='username'" onFocus="if(this.value=='username')
                this.value=''"></p> 

            <p><label for="username">Your Name: </label></p>
            <p><input type="username" id="username" value="name" name="name" onBlur="if(this.value=='')this.value='username'" onFocus="if(this.value=='username')
                this.value=''"></p> 

            <p><label for="password">Available Date: </label></p>
            <p><input type="date" id="password" value="date" name="date" onBlur="if(this.value=='')this.value='password'" onFocus="if(this.value=='password')
                this.value=''"></p>
        </fieldset>

        <!-- Start: Image Authentication (1) -->
        <fieldset name="Image_Auth_with_random_number">                  
            <!--<legend>Image Authentication with 5 digit Random number</legend>-->
            <p><label>Your Email: </label></p>
            <p><input type="text" id="imgNumber" name="email" value=""/></p>            
            <p><input type="submit" name="submit" value="Submit" /></p>
        </fieldset>                  
    </form>        
</div>
<!-- end of $login--> 


<?php include "../Home/footer.php"; ?>