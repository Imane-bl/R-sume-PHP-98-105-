<?php

/*
--unset and destroy 
-- login and logout simulation
*/


session_start();

//$_SESSION['name'] ="elzero";

//session_unset(); //session exist maisva supprimmer les donnee dans ses

//session_destroy();// destroy all session haytyr session ge mm f folder 
if($_SERVER["REQUEST_METHOD"] === "POST"){
    if($_POST['user'] === "imane"){
        $_SESSION['id'] =1005;
        $_SESSION['uersname'] ='top';
        //tb9a  hna  ki nkoun  ntn9l bin les pages 
    }

}
echo "<pre>";
print_r($_SESSION);

//ki nktb imane hayafichili id w username ta3i 
echo "<pre>";


if(isset($_SESSION['username'])){
    echo "welcome" . $_SESSION['username'];
} else{


?>

<form action=""  method="POST">
    <input  type="text" name="user">
    <input  type="submit" value="login">
</form>  


<?php }
?>

<a href="logout.php" >logou</a>