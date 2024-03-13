
<?php include "functions.php"; ?>
<?php include "includes/header.php";?>

	<section class="content">

		<aside class="col-xs-4">
		
		<?php Navigation();?>
			
		</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

    <form action="6.php" method="post">
        <label for="POST-name">Name:</label>
        <input id="POST-name" type="text" name="name" />
        <input type="submit" value="Save" name="submit" />
    </form>




	<?php

    echo '<br>';

    if(isset($_POST['submit'])) {
        echo $_POST['name'];
    }



/*  Step1: Make a form that submits one value to POST super global


 */

	
?>


</article><!--MAIN CONTENT-->
<?php include "includes/footer.php"; ?>