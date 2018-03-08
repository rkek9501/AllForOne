<?php
$db_host = "localhost";
$db_user = "yy9564";
$db_passwd = "wlsgur12";
$db_name = "yy9564";

// MySQL - DB 접속.
$conn = mysqli_connect($db_host,$db_user,$db_passwd,$db_name);
if (mysqli_connect_errno()){
echo "MySQL 연결 오류: " . mysqli_connect_error();
exit;
} else {
echo "DB : \"$db_name\"에 접속 성공.<br/>";
}

// table 만들기
$sql = "CREATE TABLE users_info
(
userid CHAR(255),
mode INT,
name CHAR(255),
tag1 CHAR(255),
tag2 CHAR(255),
tag3 CHAR(255),
tag4 CHAR(255),
tag5 CHAR(255),
tag6 CHAR(255),
tag7 CHAR(255),
tag8 CHAR(255),
tag9 CHAR(255),
tag10 CHAR(255),
tag11 CHAR(255),
PRIMARY KEY(userid)
) charset=utf8";

if (mysqli_query($conn,$sql)){
echo "성공적으로 테이블을 만들었습니다.<br/>";
} else {
echo "테이블 생성 오류 : " . mysqli_error($conn);
exit;
}
?>
