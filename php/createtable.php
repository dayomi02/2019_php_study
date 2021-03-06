<?php
    $conn = mysqli_connect("localhost","root","mirim2")
    if(mysqli_connect_errno()){
        echo "MySQL 연결 오류 : " .mysqli_connect_srror();
    }

    $sql = "CREATE TABLE hauso(username CHAR(30), password CHAR(30), name CHAR(30), nick CHAR(30), email CHAR(30)";

    if(mysqli_query($conn,$sql)){
        echo "성공적으로 hauso 테이블을 만들었습니다."
    } else {
        echo "테이블 생성 오류 : " .mysqli_seeor($conn);
    }
?>