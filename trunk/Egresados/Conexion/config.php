<?php
require 'cred.php';
$mysqli= new mysqli($server,$usuario,$password,$database );
if($mysqli->connect_error>0)
{
	die('Error('.$mysqli->connect_errno.')'.$mysqli->connect_errno);
}

?>