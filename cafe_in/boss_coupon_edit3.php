<?php
	$mem_id = $_POST["memIdCheck"];
	$coupon_num = $_POST["numCheck"];
	$cafe_name = $_POST["cafeCheck"];
	$regist_day = $_POST["regCheck"];
	$con = mysqli_connect("localhost", "root", "1234", "cafe_in");

	$sql = "delete from coupon where num = '$coupon_num'";
	mysqli_set_charset($con, "utf8"); // 한글 인코딩
	mysqli_query($con, $sql);

	$sql = "insert into stamp_history (id, cafe_name, title, regist_day, count) values ('$mem_id', '$cafe_name', '쿠폰 관리 차원', '$regist_day', '-1')";
	mysqli_set_charset($con, "utf8"); // 한글 인코딩
	mysqli_query($con, $sql);
	
	mysqli_close($con);
	echo ("
		  <script>
			location.href = './boss_coupon_edit2.php';
		  </script>
	  ");
?>