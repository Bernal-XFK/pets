<?php 
include('../../config/database.php');

$fullname=$_POST['fname'];
$email=$_POST['email'];
$passwd=$_POST['passwd'];
$enc_pass=md5($passwd);

$sql = "Insert into users (fullname, email, password) values ( '$fullname','$email', '$enc_pass')";
$ans = pg_query($conn,$sql);
if ($ans){
echo "Use has been created successfully"; 


}else {
echo "Error: ".pg_last_error();

}
// Close conection
pg_close($conn) 
?>
