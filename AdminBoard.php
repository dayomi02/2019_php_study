<?php
include "db_connect.php";

    $sql = "SELECT num,name,id FROM members;";
    $result = mysqli_query($conn,$sql);

    if(mysqli_num_rows($result)>0){
        while($row = mysqli_fetch_array($result)){
            echo $row['num']."            ";
            echo $row['name']."            ";
            echo $row['id']."          ";
            echo "<a href='RemoveUser.php?num=$row[num]'> 삭제 </a>"."<br>";
        }
    }

?>