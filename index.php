<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Results page</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

Welcome <?php echo $_POST["fname"] . " " . $_POST["lname"]; ?> <br>
Your email address is: <?php echo $_POST["email"]; ?> <br>
Your phone number is: <?php echo $_POST["phone"]; ?>


<?php
/*
echo "<br>";

$servername = "localhost";
$username = "root";
$password = "Video3000!"

//Create a connection
$conn = new mysqli($servername, $username, $password);

//Check connection
if ($conn->connect_error){
	die("Connection failed: " . $conn->connect_error());
}
echo "Connected successfully";
 */
/*
$db=mysql_select_db("information", $conn);

if(!$db){
	die("Connection failed: " . mysql_error());
}
 */

/*
$result = mysql_query("Select * from myInfoTable", $conn);

if(!$result) {
	die("No rows fetched " . mysql_error());
}

while($row=mysql_fetch_array($result)){
echo "firstname: " . $row["fname"]. "lastname: " . $row["lname"]. "<br>" . "email: " . $row["email"]. "Phone number: " . $row["phone"];
}

mysql_close($conn);
 */

/*

$sql1 = "Insert into myInfoTable (firstname, lastname, email)
Values ($_POST["fname"], $_POST["lname"], $_POST["email"], $_POST["password"], $_POST["phone"])";

if ($conn->query($sql2) === True) {
	echo "New record created successfully";
}else {
	echo "Error: " . $sql2 . "<br>" . $conn->error;
}

$sql2 = "Select fname, lname, email, phone from myInfoTable";
$result = $conn->query($sql2);

if ($result->num_rows > 0) {
	//Output data of each row
	while($row = $result->fetch_assoc()) {
		echo "firstname: " . $row["fname"]. "lastname: " . $row["lname"] . "<br>" . "email: " . $row["email"]. "Phone number: " . $row["phone"];
	}
} else {
	echo "0 results";
}


$conn->close();

*/

?>

</body>
</html>

<!--

Use POST for sending form data because it is more secure

$_SERVER["PHP_SELF"] is a super global variable that returns the filename of the currently executing script

So, the $_SERVER["PHP_SELF"] sends the submitted form data to the page itself, instead of jumping to a different page.  This way, the user will get error messages on the same page as the form.

htmlspecialchar() function converts special character to HTML entites.  This prevents attackers from exploting the code by injecting HTML or JS code

When a user submits a form:
1. Strip unnecessary characters using the PHP trim() function
2. Remove backslashes from the user input data using the PHP stripslashes() function
3. Check if the value of a field is empty using the PHP empty() function

!preg_match("/^[a-zA-Z' ]*$/",$name)) this will search if the field only contains letters, dashes, aopstrophes and whitespaces

The function searches for a pattern and returns true if the pattern exists and false otherwise

The PHP date() function is used to format a date and/or time

Syntax date(format, timestamp)

A cookie is created wijth the setcookie() function

Syntax setcookie(name, value, expire, path, domain, secure, httponly);

json_encode() function is used to encode a value to JSON format
json_decode() function is used to decode a JSON object into a PHP object or an associative array

The throw statement allows a user dfined function or method to throw an exception.  When an exception is thrown, the code following it will no be executed.   

Before we can access data in the MySQL database, we need to be able to connect to the server

$servername = "localhost";
$username = "username";
$password = "password";

//Create connection
$conn = new mysqli($servername, $username, $password);

//Check connection 
if ($conn->connect_error){
die("Connection failed: " . $conn->connect_error);
}
echo "Connected sucessfully";

$conn->close(); (OOP)

//Sql to create a table
$sql = "Create table MyGuests (
id int(6) unsigned auto_increment primary key,
firstname varchar(30) not null,
lastname varchar(30) not null,
email varchar(50),
)";

if($conn->query($sql) === true) {
echo "Table MyGuests created successfully";
}else {
echo "Error creating table: " . $conn->error;
}

//Outputting the data of each row (no html table)

$result = $conn->query($sql);
if($result->num_rows > 0){
while($row = $result->fetch_assoc()){
echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
}
}else {
echo "0 results"
}

//To print the data in each row
echo "<tr><td>".$row["id"]."</td><td>".$row["firstname"]." ".$row["lastname"]."</td></tr>";

-->
