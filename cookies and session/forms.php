<?php
  if(isset($_COOKIE['fname']) and isset($_COOKIE['pass']) )
  {
      $name = $_COOKIE['fname'] ;
      $pass = $_COOKIE['pass'];
      
      
  }
?>
<html>
<head>
<title>Form page</title>
</head>
<body></
<body>
<form action="testform.php" method="post">
Name: <input type="text" id="fname" name="fname" value="<?php if(isset($_COOKIE['fname'])){ echo $_COOKIE['fname']; }?>"<br><br>
Password :  <input type="password" id="pass" name="pass" value = "<?php if(isset($_COOKIE['pass'])){ echo $_COOKIE['pass']; }?>"><br><br>

<input type="checkbox" name="remember" value="1">Remember me?<br><br>
<input type="submit" name="login"<br><br>
</form>
</body>