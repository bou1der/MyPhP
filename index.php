<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="main.css">

</head>
<body>
    <form class="form" action="/PhP/reg.php" method="post" enctype = "multipart/form-data" >
        
        <label>Ваше имя:<input type="text" name="name"></label>
        <label>Ваша фамилия:<input type="text" name="surname"></label>
        <label>Группа<input type="text" name="group"></label>
        <label>Дата рождения<input type="date" name="birthday"></label>
        <p>Ваш аватар:</p><input type="file" value = "Send file" name = "Sendfile">
        <input type="submit" value="Send" name="Send">

    </form>

    <script src='main.js'></script>
</body>
</html>