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
    			of Alcohol users?
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
					?
    			<input type="submit" name="submit">
    		</form>
    		<!--(Amount) of people who (condition)?
    		(Percentage) of people who (condition)?-->
    	</p>
		<p>
			<form method="post">
				<select id="select" name="STATS1">
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
				<select id="select" name="STATS2">
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
				of Alcohol users?
				<input type="submit" name="submit">
			</form>
			<!--(Average) (value) of people who use (substance)?
			(Mode) (value) of people who use (substance)?
			(Median) (value) of people who use (substance)?
			(Standard deviation) (value) of people who use (substance)?-->
		</p>
		<p>
			<form method="post">
				<select id="select" name="STATS1">
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
				<select id="select" name="STATS2">
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
				<select id="select" name="STATS3">
					<option value="nothing">
						Choose...
					</option>
					<option value="1">
						Executive/Administrative/Managerial/Financial
					</option>
    			<option value="2">
    				Professional (not Education/Entertainment/Media)
    			</option>
    			<option value="3">
    				Education and Related Occupations
  				</option>
    			<option value="4">
    				Entertainers, Sports, Media, and Communications
    			</option>
    			<option value="5">
    				Technicians and Related Support Occupations
    			</option>
    			<option value="6">
    				Sales Occupations
    			</option>
    			<option value="7">
    				Office and Administrative Support Workers
    			</option>
    			<option value="8">
    				Protective Service Occupations
    			</option>
    			<option value="9">
    				Service Occupations, Except Protective
    			</option>
    			<option value="10">
    				Farming, Fishing, and Forestry Occupations
    			</option>
    			<option value="11">
    				Installation, Maintenance and Repair Workers
    			</option>
    			<option value="12">
    				Construction Trades and Extraction Workers
    			</option>
    			<option value="13">
    				Production, Machinery Setters/Operators/Tenders
    			</option>
  				<option value="14">
    				Transportation and Material Moving Workers
  				</option>
					<option value="9999">
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
			//error_reporting(0);
		//	@ini_set('display_errors', 0);
				$connection = oci_connect($username = 'jnovick',
																	$password = 'password',
																	$connection_string = '//oracle.cise.ufl.edu/orcl');
				$first = $_POST['ONE'];
				$second = $_POST['TWO'];

				$S1 = $_POST['STATS1'];
				$S2 = $_POST['STATS2'];
				$S3 = $_POST['STATS3'];

				if($first == 'amount')
				{
					if(empty($second))
					{
						$s = "SELECT COUNT(*)
									FROM consumes
									WHERE drug = 'Alcohol'";
						$line = 'The amount of alcohol users is: ';
					}
					else if($second == 'makemore')
					{
						$s = "SELECT COUNT(*)
									FROM People, consumes, has
									WHERE consumes.drug = 'Alcohol'
  								AND has.income > 21000
  								AND consumes.person = People.ID
  								AND has.person = People.ID";
					}
					else if($second == 'makeless')
					{
						$s = "SELECT COUNT(*)
									FROM People, consumes, has
									WHERE consumes.drug = 'Alcohol'
						  		AND has.income < 30000
						  		AND consumes.person = People.ID
						  		AND has.person = People.ID";
					}
					else if($second == 'unemployed')
					{
						$s = "SELECT COUNT(*)
									FROM has, consumes
									WHERE has.job = 9999
						  		AND has.person = consumes.person
									AND consumes.drug = 'Alcohol'";
					}
					else if($second == 'employed')
					{
						$s = "SELECT COUNT(*)
									FROM has, consumes
									WHERE has.job!=9999
						  		AND has.person=consumes.person
						  		AND consumes.drug='Alcohol'";
					}
					else if($second == 'nhw')
					{
						$s = "SELECT COUNT(*)
									FROM people, consumes
									WHERE race='Non-Hispanic White'
						  		AND people.id=consumes.person
						  		AND consumes.drug='Alcohol'";
					}
					else if($second == 'hispanic')
					{
						$s = "SELECT COUNT(*)
									FROM people, consumes
									WHERE race='Hispanic'
						  		AND people.id=consumes.person
						  		AND consumes.drug='Alcohol'";
					}
					else if($second == 'nhb')
					{
						$s = "SELECT COUNT(*)
									FROM people, consumes
									WHERE race='Non-Hispanic Black/African-American'
						  		AND people.id=consumes.person
						  		AND consumes.drug='Alcohol'";
					}
					else if($second == 'nhpi')
					{
						$s = "SELECT COUNT(*)
									FROM people, consumes
									WHERE race='Non-Hispanic Pacific Islander'
						  		AND people.id=consumes.person
						  		AND consumes.drug='Alcohol'";
					}
					else if($second == 'nhm')
					{
						$s = "SELECT COUNT(*)
									FROM people, consumes
									WHERE race='Non-Hispanic multicultural'
						  		AND people.id=consumes.person
						  		AND consumes.drug='Alcohol'";
					}
					else if($second == 'nha')
					{
						$s = "SELECT COUNT(*)
									FROM people, consumes
									WHERE race='Non-Hispanic Asian'
						  		AND people.id=consumes.person
						  		AND consumes.drug='Alcohol'";
					}
					else if($second == 'nhna')
					{
						$s = "SELECT COUNT(*)
									FROM people, consumes
									WHERE race='Non-Hispanic Native-American'
						  		AND people.id=consumes.person
						  		AND consumes.drug='Alcohol'";
					}
				}
				else if($first == 'percentage')
				{
					if(empty($second))
					{
						$s = "SELECT cast(round(((count(*)*100)/55270),2) as decimal(5,2)) FROM has, consumes WHERE has.job!=9999 AND has.person=consumes.person AND consumes.drug='Alcohol'";
						$line = 'The percentage of people who use alcohol: ';
					}
					else if($second == 'makemore')
					{
						$s = "SELECT cast(round(((count(*)*100)/55270),2) AS DECIMAL(5,2))
									FROM people, consumes, has
									WHERE consumes.drug = 'Alcohol'
									AND consumes.person= people.id
									AND people.id=has.person
									AND has.income >21000";
					}
					else if($second == 'makeless')
					{
						$s = "SELECT cast(round(((count(*)*100)/55270),2) AS DECIMAL(5,2))
									FROM people, consumes, has
									WHERE consumes.drug = 'Alcohol'
									AND consumes.person= people.id
									AND people.id=has.person
									AND has.income <21000";
					}
					else if($second == 'unemployed')
					{
						$s = "SELECT cast(round(((count(*)*100)/55270),2) as decimal(5,2))
									FROM has, consumes
									WHERE has.job=9999
  								AND has.person=consumes.person
  								AND consumes.drug='Alcohol'";
					}
					else if($second == 'employed')
					{
						$s = "SELECT cast(round(((count(*)*100)/55270),2) as decimal(5,2))
									FROM has, consumes
									WHERE has.job!=9999
  								AND has.person=consumes.person
  								AND consumes.drug='Alcohol'";
					}
					else if($second == 'nhw')
					{
						$s = "SELECT CAST(ROUND(((COUNT(*)*100)/9524),2) AS DECIMAL(5,2))
									FROM people,consumes
									WHERE race='Non-Hispanic White'
						  		AND people.id=consumes.person
						  		AND consumes.drug='Alcohol'";
					}
					else if($second == 'hispanic')
					{
						$s = "SELECT CAST(ROUND(((COUNT(*)*100)/9524),2) AS DECIMAL(5,2))
									FROM people,consumes
									WHERE race='Hispanic'
								  AND people.id=consumes.person
								  AND consumes.drug='Alcohol'";
					}
					else if($second == 'nhb')
					{
						$s = "SELECT CAST(ROUND(((COUNT(*)*100)/9524),2) AS DECIMAL(5,2))
									FROM people,consumes
									WHERE race='Non-Hispanic Black/African-American'
								  AND people.id=consumes.person
								  AND consumes.drug='Alcohol'";
					}
					else if($second == 'nhpi')
					{
						$s = "SELECT CAST(ROUND(((COUNT(*)*100)/9524),2) AS DECIMAL(5,2))
									FROM people,consumes
									WHERE race='Non-Hispanic Pacific Islander'
						  		AND people.id=consumes.person
						  		AND consumes.drug='Alcohol'";
					}
					else if($second == 'nhm')
					{
						$s = "SELECT CAST(ROUND(((COUNT(*)*100)/9524),2) AS DECIMAL(5,2))
									FROM people,consumes
									WHERE race='Non-Hispanic multicultural'
									AND people.id=consumes.person
									AND consumes.drug='Alcohol'";
					}
					else if($second == 'nha')
					{
						$s = "SELECT CAST(ROUND(((COUNT(*)*100)/9524),2) AS DECIMAL(5,2))
									FROM people,consumes
									WHERE race='Non-Hispanic Asian'
									AND people.id=consumes.person
								  AND consumes.drug='Alcohol'";
					}
					else if($second == 'nhna')
					{
						$s = "SELECT CAST(ROUND(((COUNT(*)*100)/9524),2) AS DECIMAL(5,2))
									FROM people,consumes
									WHERE race='Non-Hispanic Native-American'
								  AND people.id=consumes.person
								  AND consumes.drug='Alcohol'";
					}
				}
				else{
					$t="select type from Employment where JOBID={$S3}";
					
					$statement = oci_parse($connection, $t);
					oci_execute($statement);
					while (($row = oci_fetch_array($statement, OCI_BOTH)) != false)
					{
						$job = $row[0]."<br>";
						unset($row[0]);
					}
					
					$line="{$S1} {$S2} of Alcohol users who work in the field of {$job}.";
					if($S1 == 'average')
					{
						if($S2 == 'age')
						{
							if(empty($S3))
							{
								$s = "SELECT ROUND(AVG(Age))
											FROM People, consumes
											WHERE consumes.drug = 'Alcohol'
										AND consumes.person = People.ID";
							}
							else
							{
								$s = "SELECT AVG(age) FROM PEOPLE, CONSUMES, employment, has WHERE people.id=consumes.person AND employment.JobID = has.job AND has.person = people.id AND employment.JobID = {$S3} AND consumes.drug='Alcohol'";

							}
						}
						else if($S2 == 'income')
						{
							if(empty($S3))
							{
								$s = "SELECT ROUND(AVG(Income),2)
											FROM People, consumes, has
											WHERE consumes.drug = 'Alcohol'
											AND consumes.person = People.ID
											AND has.person = consumes.person";
							}
							else
							{
								$s = "SELECT AVG(has.income) FROM PEOPLE, CONSUMES, employment, has WHERE people.id=consumes.person AND employment.JobID = has.job AND has.person = people.id AND employment.JobID = {$S3} AND consumes.drug='Alcohol'";
							}

						}
						else if($S2 == 'firstuse')
						{
							if(empty($S3))
							{
								$s = "SELECT ROUND(AVG(firstUse))
											FROM consumes
											WHERE drug='Alcohol'";
							}
							else
							{
								$s = "SELECT AVG(firstUse) FROM PEOPLE, CONSUMES, employment, has WHERE people.id=consumes.person AND employment.JobID = has.job AND has.person = people.id AND employment.JobID = {$S3} AND consumes.drug='Alcohol'";
							}
						}
					}
					else if($S1 == 'mode')
					{
						if($S2 == 'age')
						{
							if(empty($S3))
							{
								$s = "SELECT STATS_MODE(Age)
											FROM People, consumes
											WHERE consumes.drug = 'Alcohol'
											AND consumes.person = People.ID";
							}
							else
							{
								$s = "SELECT STATS_MODE(age) FROM PEOPLE, CONSUMES, employment, has WHERE people.id=consumes.person AND employment.JobID = has.job AND has.person = people.id AND employment.JobID = {$S3} AND consumes.drug='Alcohol'";
							}
						}
						else if($S2 == 'income')
						{
							if(empty($S3))
							{
								$s = "SELECT STATS_MODE(Income)
											FROM People, consumes, has
											WHERE consumes.drug = 'Alcohol'
											AND consumes.person = People.ID
											AND has.person = People.ID";
							}
							else
							{
								$s = "SELECT STATS_MODE(has.income) FROM PEOPLE, CONSUMES, employment, has WHERE people.id=consumes.person AND employment.JobID = has.job AND has.person = people.id AND employment.JobID = {$S3} AND consumes.drug='Alcohol'";
							}
						}
						else if($S2 == 'firstuse')
						{
							if(empty($S3))
							{
								$s = "SELECT STATS_MODE(firstuse)
											FROM consumes
											WHERE drug='Alcohol'";
							}
							else
							{
								$s = "SELECT STATS_MODE(firstUse) FROM PEOPLE, CONSUMES, employment, has WHERE people.id=consumes.person AND employment.JobID = has.job AND has.person = people.id AND employment.JobID = {$S3} AND consumes.drug='Alcohol'";
							}
						}
					}
					else if($S1 == 'median')
					{
						if($S2 == 'age')
						{
							if(empty($S3))
							{
								$s = "SELECT MEDIAN(Age)
											FROM People, consumes
											WHERE consumes.drug = 'Alcohol'
											AND consumes.person = People.ID";
							}
							else
							{
								$s = "SELECT median(age) FROM PEOPLE, CONSUMES, employment, has WHERE people.id=consumes.person AND employment.JobID = has.job AND has.person = people.id AND employment.JobID = {$S3} AND consumes.drug='Alcohol'";
							}
						}
						else if($S2 == 'income')
						{
							if(empty($S3))
							{
								$s = "SELECT MEDIAN(Income)
											FROM People, consumes, has
											WHERE consumes.drug = 'Alcohol'
											AND consumes.person = People.ID
											AND consumes.person = has.person";
							}
							else
							{
								$s = "SELECT median(income) FROM PEOPLE, CONSUMES, employment, has WHERE people.id=consumes.person AND employment.JobID = has.job AND has.person = people.id AND employment.JobID = {$S3} AND consumes.drug='Alcohol'";
							}
						}
						else if($S2 == 'firstuse')
						{
							if(empty($S3))
							{
								$s = "SELECT MEDIAN(firstuse)
											FROM consumes
											WHERE drug='Alcohol'";
							}
							else
							{
								$s = "SELECT median(firstUse) FROM PEOPLE, CONSUMES, employment, has WHERE people.id=consumes.person AND employment.JobID = has.job AND has.person = people.id AND employment.JobID = {$S3} AND consumes.drug='Alcohol'";
							}
						}
					}
					else if($S1 == 'stddev')
					{
						if($S2 == 'age')
						{
							if(empty($S3))
							{
								$s = "SELECT ROUND(STDDEV(Age))
											FROM People, consumes
											WHERE consumes.drug = 'Alcohol'
											AND consumes.person = People.ID";
							}
							else
							{
								$s = "SELECT STDDEV(age) FROM PEOPLE, CONSUMES, employment, has WHERE people.id=consumes.person AND employment.JobID = has.job AND has.person = people.id AND employment.JobID = {$S3} AND consumes.drug='Alcohol'";
							}
						}
						else if($S2 == 'income')
						{
							if(empty($S3))
							{
								$s = "SELECT ROUND(STDDEV(Income),2)
											FROM People, consumes, has
											WHERE consumes.drug = 'Alcohol'
											AND consumes.person = People.ID
											AND has.person = consumes.person";
							}
							else
							{
								$s = "SELECT STDDEV(income) FROM PEOPLE, CONSUMES, employment, has WHERE people.id=consumes.person AND employment.JobID = has.job AND has.person = people.id AND employment.JobID = {$S3} AND consumes.drug='Alcohol'";
							}
						}
						else if($S2 == 'firstuse')
						{
							if(empty($S3))
							{
								$s = "SELECT ROUND(STDDEV(firstuse))
											FROM consumes
											WHERE drug='Alcohol'";
							}
							else
							{
								$s = "SELECT STDDEV(firstUse) FROM PEOPLE, CONSUMES, employment, has WHERE people.id=consumes.person AND employment.JobID = has.job AND has.person = people.id AND employment.JobID = {$S3} AND consumes.drug='Alcohol'";
							}
						}
					}
				}
			  $statement = oci_parse($connection, $s);
			  oci_execute($statement);
				echo $line;
			  while (($row = oci_fetch_array($statement, OCI_BOTH)) != false)
			  {
					echo $row[0]."<br>";
					unset($row[0]);
			  }

			  oci_free_statement($statement);

			  oci_close($connection);
    	?>
	</body>
</html>