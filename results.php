<?php
  // define TAX as a constant
  define("TAX", 0.1805);
	// get the hours and hourly pay from the textfields
$hours = floatval($_POST['hours']);
$hourly_pay = floatval($_POST['hourly_pay']);
	// calculations for salary ($pay), tax deduction, and total earned
	$pay = $hours * $hourly_pay;
	$deduction = $pay * TAX;
  $profit = $pay - $deduction;
?>
<h3>Results:</h3>
Your pay is $<?php echo "$pay" ?>.
<br>
The government will take away $<?php echo "$deduction" ?>.
<br>
Your total money earned will be $<?php echo "$profit" ?>.