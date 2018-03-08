<?php
$db_host = "localhost";
$db_user = "yy9564";
$db_passwd = "wlsgur12";
$db_name = "yy9564";

// MySQL - DB 접속.
$conn = mysqli_connect($db_host,$db_user,$db_passwd,$db_name);

$name=(isset($_POST["userid"]) ? $_POST["userid"] : null);
$mode=(isset($_POST["mode"]) ? $_POST["mode"] : null);
//$mode=$_GET["mode"];
$name=(isset($_POST["name"]) ? $_POST["name"] : null);
$sub1=(isset($_POST["tag1"]) ? $_POST["tag1"] : null);
$sub2=(isset($_POST["tag2"]) ? $_POST["tag2"] : null);
$sub3=(isset($_POST["tag3"]) ? $_POST["tag3"] : null);
$sub4=(isset($_POST["tag4"]) ? $_POST["tag4"] : null);

if ($mode == "insert")                       	   // 데이터 입력 모드
{

    $sql = "insert into users_info (tag1, tag2, tag3, tag4) values";
    $sql .= "('$tag1', '$tag2', '$tag3', '$tag4')";

    //$result = mysql_query($sql, $connect);
    $result = mysqli_query($connect, $sql);
}

$mysqli=mysqli_connect("localhost","yy9564","wlsgur12","yy9564");

$check="SELECT *from users_info WHERE userid='$id'";

$signup=mysqli_query($mysqli,"INSERT INTO result_info (mode,tag1,tag2,tag3,tag4)
VALUES ('$userid','$mode','$tag1','$tag2','$tag3','$tag4')");
if($signup){
    echo "sign up success";
}

?>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<h3>1) 성적 입력 하기</h3>

<form action="singUp.php" target="_hidden" method='post'>
<input type="hidden" name="mode" value="insert">
<table width="720" border="1" cellpadding="5">
    <tr><td> 아이디 : <input type="text" size="6" name="id">&nbsp;
             이름 : <input type="text" size="6" name="name">&nbsp;
             태그1 : <input type="text" size="3" name="tag1">&nbsp;
             태그2 : <input type="text" size="3" name="tag2">&nbsp;
             태그3 : <input type="text" size="3" name="tag3">&nbsp;
             태그4 : <input type="text" size="3" name="tag4">
	</td>
       <td align="center">
	    <input type="submit" value="입력하기">
       </td>
    </tr>
 </table>
 </form>

 <table width="720" border="1" cellpadding="15">
 <tr align="center" bgcolor="#eeeeee">
 <td>아이디</td>
 <td>번호</td>
 <td>태그1</td>
 <td>태그2</td>
 <td>태그3</td>
 <td>태그4</td>
 </tr>
 <!-- 제목 표시 끝 -->

 <?
 $result = mysqli_query($connect, $sql);

 $count = 1;                        // 화면 출력 시 일렬번호

 // DB 데이터 출력 시작
 //while ($row = mysql_fetch_array($result))
 while ( $row = manybase($result))
 {

    echo "<tr align='center'>
             <td> $count     </td>
       <td> $row[id] </td>
       <td> $row[tag1] </td>
       <td> $row[tag2] </td>
       <td> $row[tag3] </td>
       <td> $row[tag4] </td>
       <td> $row[tag5] </td>
     </tr>
          ";

    $count++;
  }
 // DB 데이터 출력 끝

  //mysql_close();                   // DB 접속 끊기
  mysqli_close($connect);
?>

</table>

 </table>
