<?php
//isset��post��S���`�F�b�N������������
if(isset($_POST['submit'])){
    $js_host = htmlspecialchars($_POST["js_host"]);
    $js_port = htmlspecialchars($_POST["js_port"]);
}
print('jason rpc address= '.$js_host.'<br>json rpc port= '.$js_port);
?>