<?php
// DB 연결
$db = new mysqli("localhost", "root", "1234", "cafe_in");
mysqli_set_charset($db, "utf8"); // 한글 인코딩	

						// mem_id와 own_id 값 가져오기
						$own_id = 'owner1';
// 전달받은 값 가져오기
$stampNum = $_POST['stampNum'];
$mem_id = $_POST['mem_id'];
//$own_id = $_POST['own_id'];
$regist_day = date("Y-m-d H:i:s");
$end_day = "2023-09-09";

for ($i = 0; $i < $stampNum; $i++) {
    $query = "INSERT INTO coupon (mem_id, own_id, regist_day, end_day) VALUES ('$mem_id', '$own_id', '$regist_day', '$end_day')";
    mysqli_query($db, $query);
}

// 완료 메시지 출력
echo "쿠폰이 추가되었습니다.";
?>