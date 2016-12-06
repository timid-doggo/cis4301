#!/usr/local/bin/php
<!DOCTYPE html>
<html>
	<head>
  	<title>Database Project </title>
	</head>
	<body>
  	<h1>2014 NSDUH Statistics on Alcohol</h1>
    <h3>
      What would you like to know about Alcohol users?
    </h3>
    	<p>
    		<form method="post">
    			<select id="select" name="ONE">
    				<option value="nothing">
    					Choose...
    				</option>
    				<option value="amount">
    					Amount
    				</option>
    				<option value="percentage">
    					Percentage
    				</option>
    			</select>
    			of Alcohol users
    			<!--<select id="select" name="TWO">
    				<option value="nothing">
    					Choose...
    				</option>
    				<option value="Alcohol">
    					Alcohol
    				</option>
    				<option value="cocaine">
    					Cocaine
    				</option>
    				<option value="heroin">
    					Heroin
    				</option>
    				<option value="marijuana">
    					Marijuana
    				</option>
    				<option value="tobacco">
    					Tobacco
    				</option>
    			</select>-->
    			?
    			<input type="submit" name="submit">
    		</form>
    		<!--(Amount) of people who use (substance)?
    		(Percentage) of people who use (substance)?-->
    	</p>
    	<p>
    		<form method="post">
    			<select id="select" name="ONE">
    				<option value="nothing">
    					Choose...
    				</option>
    				<option value="amount">
    					Amount
    				</option>
    				<option value="percentage">
    					Percentage
    				</option>
    			</select>
    			of Alcohol users who (are)
    			<select id="select" name="TWO">
    				<option value="nothing">
    					Choose...
    				</option>
    				<option value="makemore">
    					Make more than
    				</option>
    				<option value="makeless">
    					Make less than
    				</option>
    				<option value="unemployed">
    					Unemployed
    				</option>
    				<option value="employed">
    					Employed
    				</option>
    				<option value="nhw">
    					Non-Hispanic White
    				</option>
    				<option value="hispanic">
    					Hispanic
    				</option>
    				<option value="nhb">
    					Non-Hispanic Black/African-American
    				</option>
    				<option value="nhpi">
    					Non-Hispanic Pacific Islander
    				</option>
    				<option value="nhm">
    					Non-Hispanic Multiracial
    				</option>
    			</select>

    			<!--<select id="select" name="THREE">
    				<option value="nothing">
    					Choose...
    				</option>
    				<option value="alcohol">
    					Alcohol
    				</option>
    				<option value="cocaine">
    					Cocaine
    				</option>
    				<option value="heroin">
    					Heroin
    				</option>
    				<option value="marijuana">
    					Marijuana
    				</option>
    				<option value="tobacco">
    					Tobacco
    				</option>
    			</select>-->
    			?
    			<input type="submit" name="submit">
    		</form>
    		<!--(Amount) of people who (condition) and use (substance)?
    		(Percentage) of people who (condition) and use (substance)?-->
    	</p>
		<p>
			<form method="post">
				<select id="select" name="ONE">
					<option value="nothing">
						Choose...
					</option>
					<option value="average">
						Average
					</option>
					<option value="mode">
						Mode
					</option>
					<option value="median">
						Median
					</option>
					<option value="stddev">
						Standard Deviation
					</option>
				</select>
				<select id="select" name="TWO">
					<option value="nothing">
						Choose...
					</option>
					<option value="age">
						Age
					</option>
					<option value="income">
						Income
					</option>
					<option value="firstuse">
						Age of first use
					</option>
				</select>
				of Alcohol users
				<!--<select id="select" name="THREE">
					<option value="nothing">
						Choose...
					</option>
					<option value="alcohol">
						Alcohol
					</option>
    				<option value="cocaine">
    					Cocaine
    				</option>
    				<option value="heroin">
    					Heroin
    				</option>
    				<option value="marijuana">
    					Marijuana
    				</option>
    				<option value="tobacco">
    					Tobacco
    				</option>
				</select>-->
				?
				<input type="submit" name="submit">
			</post>
			<!--(Average) (value) of people who use (substance)?
			(Mode) (value) of people who use (substance)?
			(Median) (value) of people who use (substance)?
			(Standard deviation) (value) of people who use (substance)?-->
		</p>

    	<?php
				//$connection = oci_connect($username = 'jnovick',
				//													$password = 'password',
				//													$connection_string = '//oracle.cise.ufl.edu/orcl');


				$first = $_POST['ONE'];
				$second = $_POST['TWO'];

				if(empty($second))
				{
					if($first=='amount')
					{
						$s = "SELECT COUNT(*) FROM People, consumes WHERE consumes.drug = 'Alcohol';";
					}
					else if($first == 'percentage')
					{
						$s = "SELECT cast(round(((count(*)*100)/55270),2) as decimal(5,2)) FROM has, consumes WHERE has.job!=9999 AND has.person=consumes.person AND consumes.drug='Alcohol';";
					}
				}



				//$s = "";
			  //$statement = oci_parse($connection, $s);
			  //oci_execute($statement);

			  //while (($row = oci_fetch_array($statement, OCI_BOTH)) != false)
			  //{
				//	echo $row[0]."<br>";
			  //}

			  //oci_free_statement($statement);

			  //oci_close($connection);
    	?>
	</body>
</html>
