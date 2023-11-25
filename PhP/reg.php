<?php
require_once("bd.php");
if(isset($_POST))
{
    $arr = [$_POST['name'],$_POST['surname'], $_POST['group'], $_POST['birthday'], $_POST['Sendfile']];
    
    for($i = 0; $i < count($arr) ;$i++) //Удаление лишних пробелов
    {
        $arr[$i] = trim($arr[$i]);
    }
    if((empty($arr[0])|| empty($arr[1]) || empty($arr[2]) || empty($arr[3])))
    {
        die('Введите все данные!');
    }
    elseif (strlen($arr[0])< 2 || strlen($arr[1])< 2 )
    {
        die ('<pre>Имя и фамилия не должны быть короче 2-х символов!</pre>');
    } //Проверка при регистрации
    $userCheck = "SELECT `NAME`, `SURNAME` FROM `users` WHERE `NAME` = '$arr[0]' AND `SURNAME` = '$arr[1]'";
    $activeUser = $mysql->query($userCheck); 
    if($activeUser->num_rows > 0) // Проверка существования пользователя в бд
    {
        echo "Данный пользователь уже существует!!";

    }else{
        if($mysql->query("INSERT INTO `users` (`NAME`, `SURNAME`, `COLLGROUP`, `Date`) VALUES('$arr[0]', '$arr[1]', '$arr[2]','$arr[3]')") === true)
        {
            echo "Успешная регистрация";
        }else{
        echo $mysql->error;
        }
    }   
    
}

if(isset($_FILES))
{
    $current_path = $_FILES['avatar']['tmp_name'];
    $filename = $_FILES['avatar']['name'];
    $new_path = dirname(__FILE__). '/' . $filename;
    move_uploaded_file($current_path, $new_path);
}

$mysql->close();
$arr = 0;
?>