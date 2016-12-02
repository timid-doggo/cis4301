<!DOCTYPE html>
<html>
	<head>
  		<title>Database Project </title>
	</head>
	<body>
  		<h1>2014 NSDUH Statistics on Alcohol</h1>
    	<p>
      		What would you like to know?
      		<form method="post">
      			<select id="select" name="stat">
      				<option value="">Choose...</option>
        			<option value="mean">Mean</option>
        			<option value="median">Median</option>
        			<option value="mode">Mode</option>
        			<option value="standardDeviation">Standard Deviation</option>
      			</select>
      			<select id="select" name="field">
      				<option value="">Choose...</option>
      				<option value="age">Age</option>
      				<option value="jobs">Jobs</option>
      				<option value="income">Income</option>
      				<option value="firstUse">Age of First Use</option>
      			</select>
      			<input type="submit" name="submit">
      		</form>
    	</p>
    	<?php
    		/*$connection = oci_connect($username = 'username',
    								  $password = 'password',
    								  $conneciton_string = '//oracle.cise.ufl.edu/orcl');
    		$statement = oci_parse($connection, '');
    		oci_execute($statement);
    		
    		while(($row = oci_fetch_object($statement)))
    		{
    			var_dump($row);
    		}
    		
    		oci_free_statement($statement);
    		oci_close($connection);*/
    	
    		$first = $_POST['stat'];
    		$second = $_POST['field'];
    		
    		echo $first;
    		echo nl2br("\n");
    		echo $second;
    	?>
	</body>
</html>


