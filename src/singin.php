
<?php

//session_start();
//if(isset($_SESSION["id_user"])){
    //header ("Location:../home.php");
    
      //  }else {
      //      header ("Location:../singin.php");
       // }

    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pets | Login</title>
    <link rel="icon" type="image/png" href="../src/icons/logo.png">
</head>
<body>
    <form action="backend/signin.php" method="post">
        <input type="email" name="email" required placeholder="correo@mail.com">
        <input type="password" name="passwd" required placeholder="*****">
        <button>Login</button>

        <tr><td aling ="center"> <a href="singup.html "> Create an acount </a>
    </form>
</body>
</html>