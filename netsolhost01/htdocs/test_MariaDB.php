<!doctype html>
<html>
   <head>
      <title>Connect to MariaDB Server</title>
   </head>

   <body>
      <?php
         $dbhost = '69.10.44.242:3306';
         $dbuser = 'user3';
         $dbpass = 'smKy28?4';
	     $dbname = 'birgerco_';
	   
	   
         $conn = mysql_connect($dbhost, $dbuser, $dbpass);
      
         if(! $conn ) {
            die('Could not connect: ' . mysql_error());
         }
         
         echo 'Connected successfully';
	   
	   mysql_select_db($dbname) or die("Could not open the database '$dbname'");
	   
	   	$result = mysql_query("SELECT c1 FROM table1;");
		while ($row = mysql_fetch_array($result, MYSQL_NUM)) {
			
			printf("<br>");
			printf("row: %s<br>", $row[0]);
			
		}
	   
	   
	   
         mysql_close($conn);
      ?>
   </body>
</html>