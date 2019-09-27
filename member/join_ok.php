<? include "../INC/head.html"; ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<?
// un escape string
// https://dever.tistory.com/120
// https://www.w3resource.com/php/function-reference/mysqli_real_escape_string.php
    // $uid = escape_string($_REQUEST['uid'],1);
    // $upw = escape_string($_REQUEST['upw'],1);
    // $uname = escape_string($_REQUEST['uname'],1);
    $uid = $_REQUEST['uid'];
    $upw = $_REQUEST['upw'];
    $uname = $_REQUEST['uname'];
    echo $uid."<br>";
    echo $upw."<br>";
    echo $uname."<br>";
?>