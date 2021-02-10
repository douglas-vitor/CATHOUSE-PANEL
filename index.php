<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cat House - Panel</title>
<?php
    // N = RELE N = ACAO
    // 1 = On  |  0 = Off
    if($_POST['11']) {
        shell_exec('gpio write 0 0')
    } elseif($_POST['10']) {
        shell_exec('gpio write 1 0')
    }
?>
</head>
<body>
    <div class="container">
    <header>
        <h1>Cat House Simple Panel</h1>
    </header>
    <main>
    <form method="POST">
        <section class="rele1">
        <span>Rele 01</span>
        <button name="11">On</button>
        <button name="10">Off</button>
        </section>
        </form>
    </main>
    </div>
</body>
</html>