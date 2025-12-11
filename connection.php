<?php
//change mysqli_connect(host_name,username, password); 
$connection = mysqli_connect("localhost", "root", "","fds");
$db = mysqli_select_db($connection, 'fds');
?>
