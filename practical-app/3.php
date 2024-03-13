<?php include "functions.php"; ?>
<?php include "includes/header.php";?>

	<section class="content">

	<aside class="col-xs-4">

	<?php Navigation();?>
			
	</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

<?php

echo "Part 1:" . '<br>';

    if (99 > 100):
        $d = 1;
        echo "dfdf $d <br>";

        echo 'I love PHP' . '<br>';
    elseif (99.9 > 100):
        echo 'I love PHP' . '<br>';
    else:
        echo 'I love PHP' . '<br>';
    endif;

echo "Part 2:" . '<br>';

    for ($i = 0; $i < 10; $i++) {
        echo $i . '<br>';
    }

echo "Part 3:" . '<br>';
    $number = 4;
    switch ($number) {
        case 0:
            echo 'Number = 0' . '<br>';
            break;
        case 1:
            echo 'Number = 1' . '<br>';
            break;
        case 2:
            echo 'Number = 2' . '<br>';
            break;
        case 3:
            echo 'Number = 3' . '<br>';
            break;
        case 4:
            echo 'Number = 4' . '<br>';
            break;
    }





/*  Step1: Make an if Statement with elseif and else to finally display string saying, I love PHP



	Step 2: Make a forloop  that displays 10 numbers


	Step 3 : Make a switch Statement that test againts one condition with 5 cases

 */

	
?>






</article><!--MAIN CONTENT-->
	
<?php include "includes/footer.php"; ?>