<html>
                                   <head>
                                      <title>Hello Deploy</title>
                                      <meta http-equiv=Content-Type content=text/html; charset=ISO-8859-1>
                                    </head>
                                    <body>
                                      <h1>Welcome to PHP Deployment 2</h1>
                                     <?php
$Database   = "mysql.lampstack.com";
$DBUser     = "lamp";
$DBPassword = "lamp1234";
print "Database =  . $Database . <br />";
$dbconnection = mysql_connect($Database, $DBUser, $DBPassword) or die("Could not connect:" . mysql_error());
print("Connected to $Database successfully");
mysql_close($dbconnection);
?>
                                     <h2>PHP Information</h2>
                                      <p/>
                                      <?php
?>
                                   </body>
                                  </html>
