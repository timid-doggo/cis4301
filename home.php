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
				<a href="http://localhost/page1.php" target "_branch">Drug of Choice</a>
			</li>
		</ul>
		<?php
			$connection = oci_connect($username = 'jnovick',
		                            $password = 'password',
		                            $connection_string = '//oracle.cise.ufl.edu/orcl');
			$statement = oci_parse($connection, 'SELECT type FROM drugs');
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
