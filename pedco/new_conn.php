<?php
$connect=mysqli_connect('localhost','root','','pedcon');

if(mysqli_connect_errno($connect))
{
		echo 'Failed to connect';
}

?>