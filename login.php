<html>
<?php

$username=$_SERVER['username'];
$password='vasu';

$username=stripcslashes($username);// Removes back slashes
$password=stripcslashes($password);


 $username=trim($username);//Removes special characters
 $password=trim($password);

if($username=='koushik' && $_SERVER['password']=='vasu'){
  #header('location:admin/adminpanel.php');
}
else{

  echo '<script language="javascript">';
  echo 'alert("Incorrect Details")';
  echo '</script>';

}
?>
 <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
      <p>
      <label>Username:</label>
      <input type="text" name="username" required value=""></input>
    </p>
    <p>
      <label>Password:</label>
      <input type="password" name="password" required></input>
    </p>
    <input type="submit" value="Login" name="submit" id="btn"></input>
    </form>
    </html>