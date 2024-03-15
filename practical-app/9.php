<?php
session_start();
$time = time() + (604800);
setcookie('name', 'lev.ttt', $time);

echo $_COOKIE['name'];

include "functions.php";




?>
<?php include "includes/header.php";?>



	<section class="content">

		<aside class="col-xs-4">

		<?php Navigation();?>
			
			
		</aside><!--SIDEBAR-->


			<article class="main-content col-xs-8">
			
		
	
	<?php 



	/*  Create a link saying Click Here, and set 
	the link href to pass some parameters and use the GET super global to see it

		Step 2 - Set a cookie that expires in one week

		Step 3 - Start a session and set it to value, any value you want.
	*/

	?>
                <a href="9.php?id=18&name=Lev">Click Here</a> <br><br>

                <?php

                    if (isset($_GET['name'])){
                        echo "Welcome, " . $_GET['name'] . ". " . "Your id is: " . $_GET['id'];
                    }

                ?>

                <br><br>


                <?php
                    $_SESSION['warning'] = 'Test Warning!';
                    echo $_SESSION['warning'];
                ?>




</article><!--MAIN CONTENT-->
<?php include "includes/footer.php"; ?>