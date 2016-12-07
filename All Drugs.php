<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="specialstyle.css">
  	<title>Database Project </title>
	<script language="javascript">
            var x = "Choose...";

            function show(x) {
                if(x.value == "average") {
                    document.getElementById("select2").style.visibility="visible";
                }
                else if(x.value == "mode") {
                    document.getElementById("select2").style.visibility="visible";
                }
                else if(x.value == "median") {
                    document.getElementById("select2").style.visibility="visible";
                }
				else if(x.value == "stddev") {
                    document.getElementById("select2").style.visibility="visible";
                }
                else {
                    document.getElementById("select2").style.visibility="hidden";
                }
            }
    </script>
	</head>
	<body>
		<div id="content">
  	<h1>2014 NSDUH Statistics</h1>
    <h3>
      What would you like to know?
    </h3>
    	<p>
    		<form method="post">
				Please select all search criteria that you desire. 
				<br>
				This page searches all survey participants who have used at least one drug or alcohol.
				<br>
				Note: If a survey participant used multiple drugs, they will be counted multiple times for average, mode, median, and standard deviation.
				<br>
				All sections left completely blank will not be used in the search.
				<br>
				( * = required )
				<br>
				<br>*
    			<select id="select1" name="stats1" onchange="show(this);">
    				<option value="nothing">
    					Choose...
    				</option>
    				<option value="amount">
    					Amount
    				</option>
    				<option value="percentage">
    					Percentage
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
				<select id="select2" name="stats2" style="visibility:hidden">
					<option value="people.age">
						Age
					</option>
					<option value="has.income">
						Income
					</option>
					<option value="consumes.firstuse">
						Age of first use
					</option>
					<option value="consumes.frequency">
						Number of days used per year
					</option>
				</select>
    			<br>
				of those surveyed who
				<br>
				<br>
				Use:
				<select id="select" name="drugCondition">
				    <option value="O">
    					At least one of the following
    				</option>
					<option value="N">
    					None of the following
    				</option>
    			</select>
				<br>
				<input type="checkbox" name="drug[]" value="Cocaine"> Cocaine <br>
				<input type="checkbox" name="drug[]" value="Alcohol"> Alcohol <br>
				<input type="checkbox" name="drug[]" value="Marijuana"> Marijuana <br>
				<input type="checkbox" name="drug[]" value="Heroin"> Heroin <br>
				<input type="checkbox" name="drug[]" value="Cigarette"> Tobacco <br>
				<br>
				<br>
				Are one of the following ethnicities:
				<br>
				<input type="checkbox" name="race[]" value="Non-Hispanic White"> Non-Hispanic White <br>
				<input type="checkbox" name="race[]" value="Non-Hispanic Black/African-American"> Non-Hispanic Black/African-American <br>
				<input type="checkbox" name="race[]" value="Non-Hispanic Asian"> Non-Hispanic Asian <br>
				<input type="checkbox" name="race[]" value="Non-Hispanic Pacific Islander"> Non-Hispanic Pacific Islander <br>
				<input type="checkbox" name="race[]" value="Non-Hispanic multiracial"> Non-Hispanic multiracial <br>
				<input type="checkbox" name="race[]" value="Non-Hispanic Native-American"> Non-Hispanic Native-American <br>
				<input type="checkbox" name="race[]" value="Hispanic"> Hispanic <br>
				<br>
				<br>
				Have one of the following jobs:
				<br>
				<input type="checkbox" name="job[]" value="1">
					Executive/Administrative/Managerial/Financial <br>
    			<input type="checkbox" name="job[]" value="2">
    				Professional (not Education/Entertainment/Media) <br>
    			<input type="checkbox" name="job[]" value="3">
    				Education and Related Occupations <br>
    			<input type="checkbox" name="job[]" value="4">
    				Entertainers, Sports, Media, and Communications <br>
    			<input type="checkbox" name="job[]" value="5">
    				Technicians and Related Support Occupations <br>
    			<input type="checkbox" name="job[]" value="6">
    				Sales Occupations <br>
    			<input type="checkbox" name="job[]" value="7">
    				Office and Administrative Support Workers <br>
    			<input type="checkbox" name="job[]" value="8">
    				Protective Service Occupations <br>
    			<input type="checkbox" name="job[]" value="9">
    				Service Occupations, Except Protective <br>
    			<input type="checkbox" name="job[]" value="10">
    				Farming, Fishing, and Forestry Occupations <br>
    			<input type="checkbox" name="job[]" value="11">
    				Installation, Maintenance and Repair Workers <br>
    			<input type="checkbox" name="job[]" value="12">
    				Construction Trades and Extraction Workers <br>
    			<input type="checkbox" name="job[]" value="13">
    				Production, Machinery Setters/Operators/Tenders <br>
  				<input type="checkbox" name="job[]" value="14">
    				Transportation and Material Moving Workers <br>
				<input type="checkbox" name="job[]" value="9999">
    				Unknown or unemployed <br>
				<br>
				<br>
				Have one of the following levels of education: <br>
				<input type="checkbox" name="education[]" value="1">
					Less than high school <br>
    			<input type="checkbox" name="education[]" value="2">
    				High school graduate <br>
    			<input type="checkbox" name="education[]" value="3">
    				Some college <br>
    			<input type="checkbox" name="education[]" value="4">
    				College graduate <br>
    			<input type="checkbox" name="education[]" value="5">
    				12-17 years old (Still in school) <br>
				<br>
				<br>
				
				Have a household income less than
				<input type="number" name="income1"> 
				<br>
				<br>
				Have a household income greater than
				<input type="number" name="income2"> 
				<br>
				<br>
				<br>
				
				Are younger than
				<input type="number" name="age1"> 
				<br>
				<br>
				Are older than
				<input type="number" name="age2"> 
				<br>
				<br>
				<br>
				
    			<input type="submit" name="submit">
    		</form>
		</p>
		<div class="thephp">
    	<?php
			error_reporting(0);
			@ini_set('display_errors', 0);
				$connection = oci_connect($username = 'jnovick',
																	$password = 'password',
																	$connection_string = '//oracle.cise.ufl.edu/orcl');
				$stats1 = $_POST['stats1'];
				$stats2 = $_POST['stats2'];
				$drugCondition = $_POST['drugCondition'];
				$drug = $_POST['drug'];
				$race = $_POST['race'];
				$job = $_POST['job'];
				$education = $_POST['education'];
				$income1 = $_POST['income1'];
				$income2 = $_POST['income2'];
				$age1 = $_POST['age1'];
				$age2 = $_POST['age2'];
				
				if($stats1 != 'nothing' && !empty($stats1)){
				
					$query="SELECT";
					
					if($stats1 == 'amount'){
						$query = "{$query} COUNT(distinct people.ID)";
					}
					else if($stats1 == 'percentage'){
						$query = "{$query} cast(round(((count(distinct people.ID)*100)/55271),2) AS DECIMAL(5,2))";
					}
					else if($stats1 == 'average'){
						$query = "{$query} ROUND(AVG(distinct {$stats2}),2)";
					}
					else if($stats1 == 'mode'){
						$query = "{$query} STATS_MODE({$stats2})";
					}
					else if($stats1 == 'median'){
						$query = "{$query} median({$stats2})";
					}
					else if($stats1 == 'stddev'){
						$query = "{$query} ROUND(STDDEV({$stats2}),2)";
					}
					
					$query = "{$query} FROM People, Consumes, Drugs, Education, Employment, Has, HasHad
										WHERE People.ID = Consumes.person
										AND People.ID = HasHad.person
										AND People.ID = Has.person
										AND Consumes.drug = Drugs.type
										AND HasHad.education = Education.educationID
										AND Has.job = Employment.jobID";
					
					if(count($drug) != 0){
						if($drugCondition == 'N'){
							$query = "{$query} AND Drugs.type NOT IN (";
						}
						else{
							$query = "{$query} AND Drugs.type IN (";
						}
						
						foreach ($drug as &$value) {
							$query = "{$query}'{$value}', ";
						}
						unset($value);
						
						$query = "{$query}'Ignore')"; //The extra 'Ignore' will have no effect
					}
					
					if(count($race) != 0){
						$query = "{$query} AND People.race IN (";
						
						foreach ($race as &$value) {
							$query = "{$query}'{$value}', ";
						}
						unset($value);
						
						$query = "{$query}'Ignore')"; //The extra 'Ignore' will have no effect
					}
					
					if(count($job) != 0){
						$query = "{$query} AND Employment.jobID IN (";
						
						foreach ($job as &$value) {
							$query = "{$query}{$value}, ";
						}
						unset($value);
						
						$query = "{$query}-1)"; //The extra -1 will have no effect
					}
					
					if(count($education) != 0){
						$query = "{$query} AND Education.educationID IN (";
						
						foreach ($education as &$value) {
							$query = "{$query}{$value}, ";
						}
						unset($value);
						
						$query = "{$query}-1)"; //The extra -1 will have no effect
					}
					
					if($income1 != ''){
						$query = "{$query} AND Has.income < {$income1}";
					}
					
					if($income2 != ''){
						$query = "{$query} AND Has.income > {$income2}";
					}
					
					if($age1 != ''){
						$query = "{$query} AND People.age < {$age1}";
					}
					
					if($age2 != ''){
						$query = "{$query} AND People.age > {$age2}";
					}
				}
			$line="The answer to your search is: "
			$statement = oci_parse($connection, $query);
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
		</div>
		</div>
	</body>
</html>
