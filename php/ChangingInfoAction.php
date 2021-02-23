<?php
include "db_connect.php";

    $id = $_POST['id'];
    $addr1 = $_POST['addr1'];
    $addr2 = $_POST['addr2'];
    $tel = $_POST['tel'];
    $email = $_POST['email'];
    $gender= $_POST['gender'];

    echo "id = ".$id."<br>";
    echo "addr1 = ".$addr1."<br>";
    echo "addr2 = ".$addr2."<br>";
    echo "tel = ".$tel."<br>";
    echo "email = ".$email."<br>";
    echo "gender = ".$gender."<br>";

    $sql = "UPDATE members SET addr1='$addr1', addr2='$addr2', tel='$tel', email='$email', gender='$gender' WHERE id='$id';";
    echo $sql."<br>";
    
    $result = mysqli_query($conn,$sql);

    echo "<br> 수정이 완료되었습니다. <br>"

?>