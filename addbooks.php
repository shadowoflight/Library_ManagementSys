<?php
include "config.php";
$query ="INSERT INTO books(books_available) VALUES ('$_POST[bookname]')";
$result=pg_query($dbconn,$query);
?>
