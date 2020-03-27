<?php
session_start();
include "config.php";

$result=pg_query($dbconn,"SELECT * FROM client_login WHERE username='".$_POST["name-client"]."';");

if($result)
{
    echo "fetch ho rha hai";
    $client=pg_fetch_assoc($result);
    $client_name=$client['username'];
    $client_password=$client['password'];
    $password=$_POST["password-client"];
    $name=$_POST["name-client"];
    if($name==$client_name&& $password==$client_password)
    {
        header("Location: clientpage.html");
    }
    else
    {
        header("Location: index.html");
    }
}
else
{
    header("Location: index.html");
}

?>
