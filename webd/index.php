<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>Untitled Document</title>
    <link rel="stylesheet" type="text/css" href="sass/style.css">
</head>

<body>
    <div class="wrapper">
        <nav class="navigation">
            <div class="inner inner--navigation">
                <div class="navigation__title">
                    aaa
                </div>
                <div class="navigation__menu">
                </div>
            </div>
        </nav>
        <div class="contentswrapper">
            <main class="contents">
                <div class="inner">
                    Untitled Document
                     <?php echo '<p>Hello World</p>'; 
                     require_once "/includes/jsonRPCClient.php";
                     $serveraddress = "192.168.233.130";
                     $port = "8080";
                     $server= new jsonRPCClient("http://$serveraddress:$port");
                     //���̓e�X�g���\�b�h�ł��B
                     //try {
                     	//json-rpc��add���\�b�h���Ăяo���ĕ\������B
                     	//echo 'Adding 3 plus 2 on Json-RPC = '.$server->add(3,2).'</i><br />'."\n";
                     //} catch (Exception $e) {
                     	//echo nl2br($e->getMessage()).'<br />'."\n";
                     //}
                     try {
                     	//json-rpc�őS��Portage�p�b�P�[�W�Q�b�g�̃��\�b�h���Ăяo���ĕ\������B
                     	echo "printing all package:<br>";
                     	print_r($server->get_all_packages());
                     } catch (Exception $e) {
                     	echo nl2br($e->getMessage()).'<br />'."\n";
                     }
                     ?>
                </div>
            </main>
        </div>
    </div>
</body>

</html>
