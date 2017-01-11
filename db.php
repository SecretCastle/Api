<?
header('Content-Type:text/html;charset=utf-8');
// on setver
$db_host = "xxxxxxxxxxxx";
$db_user = "xxxxxxxxxx";
$db_pass = "xxxxxxxxx";
$db_datebase = "xxxxxxxxxx";

$conn = mysql_connect("xxxxxxxx",$db_user , $db_pass);
mysql_select_db($db_datebase, $conn);
mysql_query("set names 'utf8'");
if(!$conn){
    echo "获取数据库对象失败";
}

function closeConnn(){
    mysql_close($conn);
}
?>
