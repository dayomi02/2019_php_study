<?php
if(&_POST["id"] =="kim"&& $_POST["pw"] =="0000")
{
    if( $_POST["saveid"])
        $id = setcookie(id,$_POST["id"]);
echo "<script> location.href = 'login_ok' </script>";
}
else
    echo

?>