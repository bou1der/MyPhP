<?php
// require_once("bd.php");
if(isset($_POST))
{

    $arr = [$_POST['login'],$_POST['password'], $_POST['repitPass'], $_POST['send']];
    
    for($i = 0; $i < count($arr) ;$i++) //Удаление лишних пробелов
    {
        $arr[$i] = trim($arr[$i]);
    }
    $arr[1] = hash('sha256', $arr[1]);
    echo '<pre>'.  print_r($arr) . '</pre>';
    // if((empty($arr[0])|| empty($arr[1]) || empty($arr[2])))
    // {
    //     die('Введите все данные!');
    // }
    // elseif (strlen($arr[0])< 2 && strlen($arr[1]) > 40)
    // {
    //     die ('<pre>Логин не должен быть короче 2-х и длинней 25 символов!</pre>');
    // }
    // elseif($arr[1] != $arr[2])
    // {
    //     die ('Пароли должны совпадать!');
    // }
    die();
    //Проверка при регистрации
    $userCheck = "SELECT `login`, `pass` FROM `LogPass` WHERE `login` = '$arr[0]' AND `pass` = '$arr[1]'";
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