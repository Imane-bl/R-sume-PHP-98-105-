<?php

  /*
    Sessions
    - Advanced Information
    - Edit
    - Views Count
  */

//session_id("jjjjjjkk");
session_start();

//echo session_id( );//3cqnp3chme4845go0fk0c4l829

$_SESSION['name'] ="Elzero ";
//je vait trouver dans ce pc /xampp/tmp/ ficheir qui commence avesess_3cq 
//les trois prmier lettre ou nombre  qentient elzero les donnee

isset($_SESSION['views']) ? $_SESSION['views']++ : $_SESSION['views'] =1;

echo "hello " . $_SESSION['name'] . "views count is" . $_SESSION['views'];

echo  '<a href="about.php"> about <a>';

