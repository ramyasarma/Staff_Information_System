<?php header('Location: employee_basic_details_form.php');
ob_start();
$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password="root"; // Mysql password 
$db_name="login"; // Database name 
$tbl_name="users"; // Table name

// Connect to server and select databse.
mysql_connect("$host", "$username", "$password") or die(mysql_error());
echo "Connected to MySQL<br />";
mysql_select_db("$db_name") or die(mysql_error());
echo "Connected to Database<br />";
// Define $username and $password 
$username=$_POST['username']; 
$password=($_POST['password']);


// To protect MySQL injection (more detail about MySQL injection)
$username = stripslashes($username);
$password = stripslashes($password);
$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);

echo $username;
echo $password;
$sql="SELECT * FROM authenticate WHERE username='$username'";
$result=mysql_query($sql);

// Mysql_num_row is counting table row
$count=mysql_num_rows($result);
// If result matched $username and $password, table row must be 1 row
echo $count;
if($count == 1){
  echo "Login Successful";
  
  // return true;
}
else {
  echo "Wrong Username or Password";
  //return false;
}


ob_end_flush();
?>