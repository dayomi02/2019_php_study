<?php
	include "sing-up.php";
	$password = $_GET["password"];
	$sql = mq("select * from member where id='".$password."'");
	$member = $sql->fetch_array();
	if($member==0)
	{
?>
	<?php echo $uid; ?>는 사용가능한 비밀번호입니다.</div>
<?php 
	}else{
?>
	<?php echo $uid; ?>중복된 비밀번호입니다.<div>
<?php
	}
?>
<button value="닫기" onclick="window.close()">닫기</button>
<script>
</script>