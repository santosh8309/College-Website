<html>
<head>
    
    </head>

<body>
<?php
 // Starting Session
//$error=''; // Variable To Store Error Message
if (isset($_POST['submit'])) {
if (empty($_POST['username']) || empty($_POST['password'])) {
//$error = "Username or Password is invalid";
    echo '<script type="text/javascript">alert("Please enter valid username and password!");</script>';
    include("login_html.php");
}
else
{
// Define $username and $password
$username=$_POST['username'];
$password=$_POST['password'];
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$connection = mysql_connect("localhost", "root", "");
// To protect MySQL injection for Security purpose
$username = stripslashes($username);
$password = stripslashes($password);
$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);
// Selecting Database
$db = mysql_select_db("sandeep", $connection);
// SQL query to fetch information of registerd users and finds user match.
$query = mysql_query("select * from login where password='$password' AND username='$username'", $connection);
$rows = mysql_num_rows($query);
if ($rows == 1) {
// Initializing Session
//header("location: admin_login.php"); // Redirecting To Other Page
include("cs_it_admin.php");

} else {
//$error = "Username or Password is invalid";
    echo '<script type="text/javascript">alert("Username or Password is invalid!");</script>';
        include("login_html.php");
}
mysql_close($connection); // Closing Connection
}
}
?>
    <input type="hidden" name="variable"
value="1">

    </body>
</html>