<?php 
header('content-type:text/html;charset=utf8');

/**
*第一个客户端
*/

$action = isset($_GET['action']) ? trim($_GET['action']) : '';

switch ($action) {
	case 'login':
		login();
		break;
	case 'getCode':
		getCode();
		break;
	case 'getUserinfo':
		getUserinfo();
		break;
	
	default:
		echo "该方法不存在";
		break;
}

function login()
{
	$appid = '123';
	$state = rand(1000,9999);
	$redirect_uri = "http://www.phpone.com/demo.php?action=getCode";
	$url = "http://101.132.107.94/yii_app/advanced/backend/web/index.php?r=api/code&response_type=code&client_id=$appid&redirect_uri=$redirect_uri&state=$state";
	// echo $url;die;
	header("location:$url");
}

function getCode()
{
	$appid = '123';
	$code = $_GET['code'];
	$redirect_uri = "http://www.phpone.com/demo.php?action=getUserinfo";
	$url = "http://101.132.107.94/yii_app/advanced/backend/web/index.php?r=api/token&code=$code&redirect_uri=$redirect_uri";
	header("location:$url");
}

function getUserinfo()
{
	$token = $_GET['token'];

	$data = json_decode($token,true);

	print_r($data);
}




