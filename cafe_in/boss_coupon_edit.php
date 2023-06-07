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
				<fieldset id="hd_sch">
					<legend>검색</legend>
					<form name="frmsearch1" action="boss_coupon_edit.php" onsubmit="return search_submit(this);" method="get">
						<label for="sch_str" class="sound_only">검색어<strong class="sound_only"> 필수</strong></label>
						<input type="text" name="q" value="" id="sch_str" required placeholder="검색어를 입력해주세요">
						<button type="submit" id="sch_submit" value="검색"><img src="img/icon_search.png" alt="검색"></button>
					</form>
					<script>
						function search_submit(f) {
							if (f.q.value.length < 2) {
								alert("검색어는 두글자 이상 입력하십시오.");
								f.q.select();
								f.q.focus();
								return false;
							}
							return true;
						}
					</script>
				</fieldset>

				<table>
					<thead>
						<tr>
							<th>아이디</th>
							<th>전화번호</th>
							<th>관리</th>
						</tr>
					</thead>
					<tbody>	
						<?php
						// DB 연결
						$db = new mysqli("localhost", "root", "1234", "cafe_in");
						mysqli_set_charset($db, "utf8"); // 한글 인코딩	

				
						session_start();
						
						if (isset($_SESSION["userid"])) $own_id = $_SESSION["userid"];
						else $own_id = "";
						// 검색어 가져오기
						$search = $_GET['q'];

						

						// 검색어로 members 테이블에서 phone과 일치하는 회원 찾기
						$query = "SELECT id, phone FROM members WHERE phone LIKE ? AND type='member'";
						$stmt = $db->prepare($query);
						$stmt->bind_param("s", $searchParam);
						$searchParam = "%$search%";
						$stmt->execute();
						$result = $stmt->get_result();
						
						while ($row = mysqli_fetch_assoc($result)) {
							$id = $row['id'];
							echo "<tr>";
							echo "<td>" . $id . "</td>";
							echo "<td>" . $row['phone'] . "</td>";
							echo "<td><input type='submit' value='수정' class='edit_btn' onClick=\"location.href='boss_coupon_edit2.php?mem_id=$id&own_id=$own_id'\"></td>";
							echo "</tr>";
						}
						?>
					</tbody>
				</table>
			</div>

		</div>

	<div>
</div>

</body>
</html>
