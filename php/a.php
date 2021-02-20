<?php
   
    $id = $_GET["id"];
    $name = $_GET["name"];

    $a = setcookie("id", $id );
    $b = setcookie("name", $name);

    echo " id는" .$id;
    echo "<br> name은" .$name;

?>
<html lang ="en">
    <head>
        <meta charset="UTF-8">
        <title>cookie</title>
    </head>
    <body>
        <form method="GET" action="ck.php">
            <P>
                <input type ="text" name="id">
            </P>
            <P>
                <input type ="text" name="name">
                <input type ="submit" value="확인">
            </P>           
        
        </form>
    </body>
</html>
