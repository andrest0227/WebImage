<?php 
$servername = "localhost";
$username = "ana";
$password = "ana";
$dbname = "telematica";
$mysqli =new mysqli($servername, $username, $password, $dbname);
        //se conecta a la db y saca error si no puede hacerla
			if ($mysqli->connect_errno) {
			    echo $mysqli->connect_errno;
			}
       $mysqli->set_charset("utf8");
?>