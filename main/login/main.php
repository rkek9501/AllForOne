<?php
session_start();
if(!isset($_SESSION['userid'])) //세션이 존재하지 않을 때
{
    header ('Location: login.html');
}

echo "home(login success)";

echo "<a href=logout.php>logout</a>";

?>
