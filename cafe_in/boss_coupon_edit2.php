<?php
	session_start();
	if (isset($_SESSION["userid"])) $own_id = $_SESSION["userid"];
	else $own_id = "";

	$mem_id = $_GET["mem_id"];
	$con = mysqli_connect("localhost", "root", "1234", "cafe_in");

	$sql = "select name from cafe_info where own_id = '$own_id'";
	mysqli_set_charset($con, "utf8"); // 한글 인코딩
	$result = mysqli_query($con, $sql);
	$row = mysqli_fetch_array($result);
	$own_name = $row["name"];

	$sql = "select name from members where id = '$mem_id'";
	mysqli_set_charset($con, "utf8"); // 한글 인코딩
	$result = mysqli_query($con, $sql);
	$row = mysqli_fetch_array($result);
	$mem_name = $row["name"];
	


echo "<script>console.log('$own_name');</script>";
echo "<script>console.log('$mem_id');</script>";
?>


<!doctype html>
<html lang="ko">
<head>
<title>cafe-in</title>
<meta charset="utf-8">

<meta http-equiv="Content-Security-Policy" content="default-src *; style-src 'self' 'unsafe-inline'; script-src 'self' 'unsafe-inline' 'unsafe-eval'">

<meta name="msapplication-tap-highlight" content="no">
<meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1.0, minimum-scale=1.0, width=device-width, viewport-fit=cover">
<meta name="color-scheme" content="light dark">
<link rel="stylesheet" href="css/style.css">
<script src="js/jquery.min.js"></script>
<script src="js/app.common.js"></script>
</head>

<body class="business">

<header>
	<div class="wrap">
		<h1 id="appTitle">cafe-in business</h1>
		<!-- <a href="menu.htm" class="Left"><img src="img/icon_menu.png" alt="메뉴"></a> -->
		<a href="#" class="Left"><img src="img/arrow_left.png" alt="이전으로" onClick="javascript:history.back(-1);"></a>
		<a href="boss_menu.php" class="Right"><img src="img/icon_home.png" alt="메인으로"></a>
		<!-- <a href="profile2.htm" class="Right"><span class="alarm">&nbsp;</span><img src="img/icon_notice.png" alt="알림"></a> -->
	</div>
</header>

<div id="content" class="content">
	<div class="wrap">
		<h2>쿠폰 관리</h2>

		<div id="m_content" class="m_content">

			<div class="profile_div">
				<p><?= $own_name?>의 &nbsp; <strong><?= $mem_id?></strong>  님 입니다.</p>
				<table>
					<thead>
						<tr>
							<th>일련번호</th>
							<th>등록일</th>
							<th>관리</th>
						</tr>
					</thead>
					<tbody>
<?php
						$sql = "select * from coupon where mem_id = '$mem_id' and own_id = '$own_id' order by num desc";
						mysqli_set_charset($con, "utf8"); // 한글 인코딩
						$result = mysqli_query($con, $sql);
						$rows_record = mysqli_num_rows($result);
						echo "<script>console.log('$rows_record');</script>";
					
						for($i=0; $i<$rows_record; $i++){
							mysqli_data_seek($result, $i);
							$row = mysqli_fetch_array($result);
							$num = $row["num"];
							$regist_day = $row["regist_day"];
?>
							<tr>
								<td><?= $num?></td>
								<td><?= $regist_day?></td>
								<td>
									<form action='boss_coupon_edit3.php' method='post'>
										<input type="hidden" name="memIdCheck" value="<?= $mem_id?>">
										<input type="hidden" name="numCheck" value="<?= $num?>">
										<input type="hidden" name="cafeCheck" value="<?= $own_name?>">
										<input type="hidden" name="regCheck" value="<?= $regist_day?>">
										<input type='submit' value='삭제' class='edit_btn'>
									</form>
								</td>
							</tr>
<?php
						}
	mysqli_close($con);
?>
					</tbody>
				</table>
			</div>

		</div>
</body>
</html>