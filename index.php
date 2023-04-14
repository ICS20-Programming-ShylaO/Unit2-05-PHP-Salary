<!DOCTYPE html>
<html lang="en-ca">
  <head>
    <!-- Metadata -->
    <meta charset="utf-8">
    <meta name="description" content="Salary Program, Using PHP">
    <meta name="keywords" content="immaculata, ics2o">
    <meta name="author" content="Shyla Oommen">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Link to CSS file -->
    <link rel="stylesheet" href="./css/style.css">
    <!-- Title -->
    <title>Salary Program in PHP</title>
  </head>
  <body>
		<!-- php echo to print the html to the page -->
    <?php 
			echo "<h1>Finding Your Ontarian Salary Using PHP</h1>";
			echo "<h3>This program will calculate your salary, how much money the government will take through taxes, and what your actual total will be.</h3>";
		?>
		<!-- form to get hours worked and hourly pay from the user -->
    <form action="./results.php" method="post" target="results">
      <label for="lblHours">Hours Worked:</label>
      <input type="number" id="hours" placeholder="Enter Your Hours Worked..." name="hours"><br><br>
      <label for="lblHourlyPay">Hourly Pay:</label>
      <input type="number" id="hourly_pay" placeholder="Enter Your Hourly Pay..." name="hourly_pay"><br><br>

      <input type="submit" value="Calculate Your Salary">
		</form>

			<!-- iframe for the results to show on the web page. -->
			<iframe id="results" name="results">			
				Your pay is $" . $hours" . "."
        The government will take away $" . $deduction" . "."
        Your total money earned will be $" . $ profit" . "."
	    </iframe>
	</body>
</html>