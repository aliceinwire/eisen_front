<?php
require_once __DIR__ .'/../connect.php';

$user_id = trim($_POST['user_id']);
$password = trim(sha1($_POST['password']));

//�f�[�^�x�[�X�ɐڑ����邽�߂ɕK�v�ȏ��(PDO)
$dsn = "mysql:dbname=$db_name;host=$db_host;charset=utf8";

//�f�[�^�x�[�X�ڑ�
try {
$dbh = new PDO($dsn, $db_user, $db_pass,
array(PDO::ATTR_EMULATE_PREPARES => false,
		PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
} catch (PDOException $e) {
 exit('�f�[�^�x�[�X�ڑ��Ɏ��s���܂���'.$e->getMessage());
}

$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$dbh->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
$query = $dbh->prepare("SELECT * FROM user_info WHERE user_id = ? AND password = ? ");
$query->bindParam(1, $user_id);
$query->bindParam(2, $password);
$query->execute();
if ($query->rowCount() > 0){
	print_r($user_id.'<br>');
	print_r($password.'<br>');
	//header('location:/index.html');
} else{
	echo 'Error login.';
}
?>