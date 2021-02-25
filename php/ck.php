<?php
S
    $id = $_GET["id"];
    $name = $_GET["name"];

    setcookie("id", $id );
    setcookie("name", $name);

    echo("<script>location.href='b.php';</script>");
    
?>
