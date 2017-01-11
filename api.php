<?
header('Content-Type:text/html;charset=utf-8');
$action = $_GET['action'];
switch ($action) {
    case 'getInfo':
        getInfo();
        break;
    default:
        getInfo();
        break;
}

function getInfo(){
    $result = array(
        'name' => "test",
        'age'  => "24",
        'message' => "Hello World"
    );
    echo json_encode($result);
    exit;
}
?>
