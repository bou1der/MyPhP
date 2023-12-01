<?php
require_once('bd.php');
require_once('helper.php');

$userinf =[$_POST['login'],$_POST['password']];
$hasheduser = [hash('sha256',$userinf[0]), hash('sha256',$userinf[1])];
$MBuser = $mysql->query("SELECT `login`, `pass` FROM `LogPass` WHERE `login` = '$hasheduser[0]' AND `pass` = '$hasheduser[1]'");
if ($MBuser->num_rows > 0)
{
    header("Location: /../SuccessLog.php");
}
else
{
    echo "Пользователь ненайден>";
}

?>