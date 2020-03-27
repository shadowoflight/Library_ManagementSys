<?php
include "config.php";
$query="SELECT books_borrowed FROM books";
$rs= pg_query($dbconn,$query);
if($rs)
{
    while($row=pg_fetch_assoc($rs))
    {

        $bookname=$row['books_borrowed'];
        echo '<tr>
         
         <td>'.$bookname.'</td>                   
         </tr>';

    }
}
else{
    echo "you have no borrowed books!";
}
?>
