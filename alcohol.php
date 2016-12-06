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
			</form>
			<!--(Average) (value) of people who use (substance)?
			(Mode) (value) of people who use (substance)?
			(Median) (value) of people who use (substance)?
			(Standard deviation) (value) of people who use (substance)?-->
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
				of Alcohol users who work in the field of
				<select id="select" name="THREE">
					<option value="nothing">
						Choose...
					</option>
					<option value="job1">
						Executive/Administrative/Managerial/Financial
					</option>
    					<option value="job2">
    						Professional (not Education/Entertainment/Media)
    					</option>
    					<option value="job3">
    						Education and Related Occupations
    					</option>
    					<option value="job4">
    						Entertainers, Sports, Media, and Communications
    					</option>
    					<option value="job5">
    						Technicians and Related Support Occupations
    					</option>
    					<option value="job6">
    						Sales Occupations
    					</option>
    					<option value="job7">
    						Office and Administrative Support Workers
    					</option>
    					<option value="job8">
    						Protective Service Occupations
    					</option>
    					<option value="job9">
    						Service Occupations, Except Protective
    					</option>
    					<option value="job10">
    						Farming, Fishing, and Forestry Occupations
    					</option>
    					<option value="job11">
    						Installation, Maintenance and Repair Workers
    					</option>
    					<option value="job12">
    						Construction Trades and Extraction Workers
    					</option>
    					<option value="job13">
    						Production, Machinery Setters/Operators/Tenders
    					</option>
    					<option value="job14">
    						Transportation and Material Moving Workers
    					</option>
    					<option value="job15">
    						Unknown or unemployed
    					</option>
				</select>
				?
				<input type="submit" name="submit">
			</form>
			<!--(Average) (value) of people who use (substance)?
			(Mode) (value) of people who use (substance)?
			(Median) (value) of people who use (substance)?
			(Standard deviation) (value) of people who use (substance)?-->
		</p>

    	<?php
				$connection = oci_connect($username = 'jnovick',
																	$password = 'password',
																	$connection_string = '//oracle.cise.ufl.edu/orcl');


				$first = $_POST['ONE'];
				$second = $_POST['TWO'];

				if($first = 'amount')
				{
					if(empty($second))
					{
						$s = "SELECT COUNT(*) FROM consumes WHERE drug = 'Alcohol'";
					}
				}
				else if($first = 'percentage')
				{
					if(empty($second))
					{
						$s = "SELECT cast(round(((count(*)*100)/55270),2) as decimal(5,2)) FROM has, consumes WHERE has.job!=9999 AND has.person=consumes.person AND consumes.drug='Alcohol'";
					}
				}

			  $statement = oci_parse($connection, $s);
			  oci_execute($statement);

			  while (($row = oci_fetch_array($statement, OCI_BOTH)) != false)
			  {
					echo $row[0]."<br>";
			  }

			  oci_free_statement($statement);

			  oci_close($connection);
    	?>
	</body>
</html>
