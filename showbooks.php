<?php
include "config.php";
$query="SELECT books_available FROM books";
$rs= pg_query($dbconn,$query);
if($rs)
{
while($row=pg_fetch_assoc($rs))
{
  $bookid=$row['book_id'];
  $bookname=$row['books_available'];
  echo '<tr>
         <td>'.$bookid.'</td>
         <td>'.$bookname.'</td>                   
         </tr>';

}
}
else{
    echo "you have no books!";
}
?>
