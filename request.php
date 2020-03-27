<?php
include "config.php";
$query="SELECT * FROM requests";
$rs= pg_query($dbconn,$query);
if($rs)
{
    while($row=pg_fetch_assoc($rs))
    {
        $bookname=$row['booksname'];
        $username=$row['username'];
        echo '<tr>
         <td>'.$bookname.'</td>
         <td>'.$username.'</td>                   
         </tr>';

    }
}
else {
    echo "you have no requests";
}
?>
