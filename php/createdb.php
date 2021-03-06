<?php
    $conn = mysqli_connect("localhost","root","mirim2")
    if(mysqli_connect_errno()){
        echo "MySQL 연결 오류 : " .mysqli_connect_srror();
    }

    $sql = "CREATE DATABASE hauso";

    if(mysqli_query($conn,$sql)){
        echo "성공적으로 hauso가 만들어졌습니다";
    } else{
        echo "DB만들기 오류 : " .mysqli_error($conn);
    }
?>