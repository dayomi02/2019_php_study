<?php
    $conn = mysqli_connect("10.96.120.50","php","0000","php","3307");

    if(!$conn){
        echo "Faild to connect to MuSQl: ".mysqli_connect_error();
    }

?>