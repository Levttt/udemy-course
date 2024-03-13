<?php include "functions.php"; ?>
<?php include "includes/header.php";?>

	<section class="content">

		<aside class="col-xs-4">

	<?php Navigation();?>
			
			
		</aside><!--SIDEBAR-->


		<article class="main-content col-xs-8">
		

<?php

        $number1 = 10;
        $number2 = 20;

        echo $number2+$number1 . '<br>';

        $number3 = array('Dodge', 'Dart', '2015');
        $car = array(
                'brand' => 'Dodge',
                'version' => 'Dart',
                'year' => '2015'
                    );

        var_dump($number3);
        echo '<br>';
        var_dump($car);

        echo '<br>' . $car["brand"] . " " . $car["version"] . " " . $car["year"];

		/* Step 1: Make 2 variables called number1 and number2 and set 1 to value 10 and the other 20:

		  Step 2: Add the two variables and display the sum with echo:


		  Step3: Make 2 Arrays with the same values, one regular and the other associative

		 
			 */

		


		?>

	

		</article><!--MAIN CONTENT-->

<?php include "includes/footer.php"; ?>