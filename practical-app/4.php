<?php include "functions.php"; ?>
<?php include "includes/header.php";?>

	<section class="content">

	<aside class="col-xs-4">

		<?php Navigation();?>
			
		
	</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

	
	<?php  

    function calculation()
    {
        $i = 1;
        $c = 2;

        return $i+$c;
    }

    echo calculation() . '<br>';

    function stepTwo($text)
    {
        echo $text;
    }

    stepTwo('Take a function that passes parameters and call it using parameter values');

/*  Step1: Define a function and make it return a calculation of 2 numbers

	Step 2: Make a function that passes parameters and call it using parameter values


 */

	
?>





</article><!--MAIN CONTENT-->


<?php include "includes/footer.php"; ?>