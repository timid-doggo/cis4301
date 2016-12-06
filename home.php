<!DOCTYPE html>
<html>
	<head>
  		<title>Database Project </title>
	</head>
	<body>
  		<h1>2014 National Survey on Drug Use and Health (NSDUH)</h1>
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
		<div> Total Number of Tuples=
			<?php
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
	</body>
</html>
