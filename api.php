<?
require("./db.php");
$action = $_GET['action'];
$id  = $_GET['id'];
switch ($action) {
    case 'getInfo':
        getInfo();
        break;
    case 'get':
        get();
        break;
    default:
        getInfo();
        break;
}

function getInfo(){
    $data = mysql_query("select id , title from tb_info");
    $result=array();
    while($row = mysql_fetch_array($data))
      {
          $result[] = $row;
      }
      foreach ($result as $key => $value)
      {
          foreach ($value as $k => $v)
          {
              if (is_numeric($k))
              {
                 unset($result[$key][$k]);
              }

          }
      }
    echo json_encode($result);
    exit;
}
function get(){
    $sql = "select id , title , content from tb_info where id = '".$_GET['id']."'";
    $data = mysql_query($sql);
    $result=array();
    while($row = mysql_fetch_array($data))
      {
          $result[] = $row;
      }
      foreach ($result as $key => $value)
      {
          foreach ($value as $k => $v)
          {
              if (is_numeric($k))
              {
                 unset($result[$key][$k]);
              }

          }
      }
    echo json_encode($result);
    exit;
}
?>
