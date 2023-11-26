<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <title>Cute Form</title>
</head>
<body>
    <article class="block1">
        <div class="mainCard">
            <div class="inCard">
                <aside class="register">
                    <div class="inRegister">
                        <img src="/resource/item/UωU.svg" alt="">
                        <form action="/Php/reg.php" method="post">
                            <input type="text" placeholder="Login!" name="login">
                            <input type="password" placeholder="Password!" name="password">
                            <input type="password" placeholder="Repit-pass!" name="repitPass">
                        </form>
                        <form action="/Php/reg.php" method="post">
                            <button type="submit" name="send">Register!!</button>
                        </form>
                    </div>
                </aside>
                <aside class="login">
                    <div class="inLogin">
                        <img src="/resource/item/_ω_.svg" alt="">
                        <form action="/PhP/login.php">
                            <input type="text" placeholder="Login!" name="login">
                            <input type="password" placeholder="Password!" name="password">
                            <input type="text" style="opacity: 0; cursor:default;">
                        </form>
                        <form action="login.php" method="post">
                            <button type="submit" name="Log">Log-in!!</button>
                        </form>
                    </div>
                </aside>
            </div>
        </div>
    </article>

<script src="main.js"></script>
</body>
</html>