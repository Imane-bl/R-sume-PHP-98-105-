<?php

session_start();
echo "welcom "  . $_SESSION['name'] . " and ur id is : " . $_SESSION['id'];
?>