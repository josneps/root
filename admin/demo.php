<?php 
header("content-type:text/html;charset=utf8");
/**
*第二个客户端
*/

$response_type = isset($_GET['response_type']) ? trim($_GET['response_type']) : '';

$pdo = new PDO("mysql:host=127.0.0.1;dbname=zhanglikun;charset=utf8","root","root");

switch ($response_type) {
	//获取code
	case 'code':
		code();
		break;
	//获取openID
	case 'openid':
		openid();
		break;
	
	//方法不存在
	default:
		echo json_encode("10400");
		break;
 }

function code()
{
	global $pdo;
	$client_id = isset($_GET['client_id']) ? trim($_GET['client_id']) : '';
	$state = isset($_GET['state']) ? trim($_GET['state']) : '';
	$redirect_uri = isset($_GET['redirect_uri']) ? trim($_GET['redirect_uri']) : '';

	$code = md5($client_id.$state);
	$url = $redirect_uri.'?code='.$code.'&state='.$state;
	
	header("location:$url");
	die;
}

function openid()
{
	global $pdo;
	
	die;
}








