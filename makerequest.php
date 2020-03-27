<?php
include "config.php";
$username=$_POST['_name'];
$bookname=$_POST['_bookname'];
$rt=pg_query($dbconn,"SELECT books_available FROM books WHERE book_available='".$_POST["_bookname"]."';");
if($rt)
{
$query="INSERT INTO requests(booksname,username) VALUES('$bookname','$username');";
$result=pg_query($dbconn,$query);
}
else{

    echo "book not available for borrowing";

}
?>
