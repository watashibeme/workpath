//This is all I could do, please don't 
<?php
$username = "user";
$password = "********";
$hostname = "localhost";    
//This is all I could do
//Fixed value url GET is pretty easy but if userid value needs to be parsed, it's another story.
//What language should have been used for parsing? Or I'm mistaken and it wasn't that hard?
//Anyway there you go.
$dbh = mysql_connect($hostname, $username, $password) 
    or die("Unable to connect to MySQL");

//print "Connected to MySQL<br>";

$selected = mysql_select_db("user",$dbh) 
    or die("Could not select ");

$query = "SELECT Name,Familyname FROM user"; 
$result=mysql_query($query);


//it's supposed to return results as JSON
//Only if one user specs return as result(not multiple?)
echo json_encode(mysql_fetch_assoc($result));


//Keeping the returned value by json_encode in a Session to use it in ShowUser.html
while ($row = mysql_fetch_assoc($result)) {

   //Create and Set a session value to the found info parameter

  $_SESSION['founduser'][] = $row["founduser"];

}

?>
