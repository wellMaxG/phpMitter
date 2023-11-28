<?php

$query = "SELECT * FROM tweets";

$result = mysqli_query($link, $query);

if( !$result ) {
	die( mysqli_error($link) );
}

$numRows = mysqli_num_rows($result);

$tweets = array();

for($i = 0; $i < $numRows; $i++) {

	$row = mysqli_fetch_assoc($result);

	$tweets[] = $row;

}


?>