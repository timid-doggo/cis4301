<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="ourstyle.css">
  	<title>Database Project </title>
	</head>
	<body>
		<div id="content">
  		<h1>2014 National Survey on Drug Use and Health (NSDUH)</h1>
			<p class="about">
				Welcome to our webpage! This is hosting our oracle database which contains information from the 2014 National Survey on Drug Use and
				Health. The survey is a nation wide survey that usually picks 70,000 people to participate in this. It is apart of a huge project which
				goals are to monitor drug abuse and see if there is a way to help people dealing with abuse. Our website will give the user the ability
				to filter through the database in many ways and provide readily available data. The users will be able to find statistics about drug use
				and how it affects people in all kinds of different ways.
			</p>
  		<ul>
  			<li>
  				<a href="https://nsduhweb.rti.org/respweb/homepage.cfm" > More information about NDSUH</a>
  			</li>
  		</ul>
  		<ul>
			<li>
				<a href="http://localhost/cis4301/page1.php" target "_branch">Drug of Choice</a>
			</li>
		</ul>
		<div class="thephp">
		<div> Total Number of Tuples=
			<?php
			error_reporting(0);
			@ini_set('display_errors', 0);
				$connection = oci_connect($username = 'jnovick',
			                            $password = 'password',
		        	                    $connection_string = '//oracle.cise.ufl.edu/orcl');
				$statement = oci_parse($connection, 'select sum(c)
									from (
									  select count(*) as c from PEOPLE
									  union all select count(*) as c from CONSUMES
									  union all select count(*) as c from DRUGS
									  union all select count(*) as c from EDUCATION
									  union all select count(*) as c from HAS
									  union all select count(*) as c from HASHAD
									  union all select count(*) as c from EMPLOYMENT
									)');
				oci_execute($statement);

				while (($row = oci_fetch_array($statement, OCI_BOTH)) != false)
				{
									echo $row[0]."<br>";
				}

				oci_free_statement($statement);

				oci_close($connection);

			?>
		</div>
		</div>
	</div>
	</body>
</html>
