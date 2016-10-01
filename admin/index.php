<?php 


if (isset($_POST["admin"]))
{
    session_start();
    $_SESSION = array();


    if (isset($_POST["admin"]) && isset($_POST["password"])) 
    {
        $_SESSION["admin"] = $_POST["admin"];
        $_SESSION["password"] = $_POST["password"];
        $_SESSION["last_login_timestamp"] = time();
    };
    
    header("Location: main.php");

}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link href="../favicon.ico" type="image/x-icon" rel="shortcut icon">
    

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body> 
<center><h1>Login</h1>
<table border="0">	
	  <form name="login" method="POST" action="index.php">
      <tr>
      	<td align="right">User:</td>
        <td><input type="text" name="admin" style="width:80px;" /></td>
      </tr>
      <tr>
      	<td align="right">Password:</td>
        <td><input type="password" name="password" style="width:80px;" /></td>
      </tr>
     
</table>
<input type="submit" value="Submit"/>
</form>
</center>


</body>
</html>
