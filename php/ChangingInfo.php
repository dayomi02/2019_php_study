<?php
$id = $_GET['id'];
echo $id;

$conn = mysqli_connect("localhost","root","mirim2","php","3307");

if(!$conn){
    echo "Faild to connect to MuSQl: ".mysqli_connect_error();
}

$sql = "SELECT * FROM members WHERE id='$id';";
$result = mysqli_query($conn,$sql);

if(mysqli_num_rows($result)>0){
    while($row = mysqli_fetch_array($result)){
        $dbid = $row['id'];
        $dbpw = $row['pw'];
        $dbbirth = $row['birth'];
        $dbaddr1 = $row['addr1'];
        $dbaddr2 = $row['addr2'];
        $dbtel = $row['tel'];
        $dbemail = $row['email'];
        $dbgender = $row['gender'];
        $dbage = $row['age'];


        ?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>ChangeingInfo</title>
    </head>
    <body>
        <form method = "POST" action="ChangingInfoAction.php">
            회원 정보 수정 <br>
            id
            <input type="text" name = "id" value=<?= $dbid ?>> <br>
            password
            <input type="text" name = "pw" value=<?= $dbpw ?>> <br>
            생년월일
            <input type="text" name = "birth" value=<?= $dbbirth ?>> <br>
            주소
            <input type="text" name = "addr1" value=<?= $dbaddr1 ?>>
            <input type="text" name = "addr2" value=<?= $dbaddr2 ?>> <br>
            전화번호
            <input type="text" name = "tel" value=<?= $dbtel ?>> <br>
            e-mail
            <input type="text" name = "email" value=<?= $dbemail ?>> <br>
            성별
            <input type="text" name = "gender" value=<?= $dbgender ?>> <br>
            나이
            <input type="text" name = "age" value=<?= $dbage ?>> <br>
            <input type="submit" value="수정">
           
        </form>
    </body>
</html>

<?php
        
    }
}

?>

