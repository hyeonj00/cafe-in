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
		<!--<a href="menu.htm" class="Left"><img src="img/icon_menu.png" alt="메뉴"></a>-->
		<a href="#" class="Left"><img src="img/arrow_left.png" alt="이전으로" onClick="javascript:history.back(-1);"></a>
		<a href="boss_menu.php" class="Right"><img src="img/icon_home.png" alt="메인으로"></a>
		<!--<a href="profile2.htm" class="Right"><span class="alarm">&nbsp;</span><img src="img/icon_notice.png" alt="알림"></a>-->
	</div>
</header>

<div id="content" class="content">
	<div class="wrap">
		<h2>쿠폰 관리</h2>

		<div id="m_content" class="m_content">

			<div class="profile_div">
<?php
						$conn = mysqli_connect("localhost", "root", "1234", "cafe_in");
						mysqli_set_charset($conn, "utf8"); // Set Korean encoding
						
						    // 폼에서 전송된 데이터 가져오기
  
    // 전달받은 own_id와 mem_id 값 가져오기
    $own_id = $_POST['own_id'];
    $mem_id = $_POST['mem_id'];

    // 폼에서 전송된 데이터 가져오기
    $stampNum = $_POST['stampNum'];

   
        for ($i = 0; $i < $stampNum; $i++) {
            $query = "INSERT INTO stamp (own_id, mem_id,regist_day) VALUES ('$own_id', '$mem_id', NOW())";
            mysqli_query($conn, $query);
        }
			echo "완료하였습니다";
?>

					
					</div>
			<button onclick="location.href='boss_menu.php'" class="login_btn block_btn">홈으로 가기</button>	
				</form>
			</div>

		</div>

	<div>
</div>

</body>
</html>

