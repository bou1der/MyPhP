<?php
session_start();
require_once("bd.php");
require_once("helper.php");
if(isset($_POST))
{
    $_SESSION['valid'] = [];
    $arr = [$_POST['login'],$_POST['password'], $_POST['repitPass']];
    
    for($i = 0; $i < count($arr) ;$i++) //Удаление лишних пробелов
    {
        $arr[$i] = trim($arr[$i]);
    }

    // valid
    if(empty($arr[0]))
    {
        $_SESSION['valid']['login'] = '*input name!!';
        redirect('/../index.php');
    }
    elseif (empty($arr[1]))
    {
        $_SESSION['valid']['pass'] = '*input password!!';
        redirect('/../index.php');
    }
    elseif (empty($arr[2]))
    {
        $_SESSION['valid']['repass'] = '*input again password!!';
        redirect('/../index.php');
    }
    elseif ($arr[1] != $arr[2])
    {
        $_SESSION['valid']['pass'] = '*passwords dont match';
        $_SESSION['valid']['repass'] = '*passwords dont match';
        redirect('/../index.php');
    }

    echo '<pre>'.print_r($arr).'</pre>';
    $arr[0] = hash('sha256', $arr[0]);
    $arr[1] = hash('sha256', $arr[1]);
    echo '<pre>'. print_r($arr,true) .'</pre>';
    //Проверка при регистрации
    $userCheck = "SELECT `login`, `pass` FROM `LogPass` WHERE `login` = '$arr[0]'";
    $activeUser = $mysql->query($userCheck); 
    if($activeUser->num_rows > 0) // Проверка существования пользователя в бд
    {
        echo "Данный пользователь уже существует!!";

    }else{
        if($mysql->query("INSERT INTO `LogPass` (`login`, `pass`) VALUES('$arr[0]', '$arr[1]')") === true)
        {
            echo "Успешная регистрация";
        }else{
        echo $mysql->error;
        }
    }   
    
}
$mysql->close();
?>


