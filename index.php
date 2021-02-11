<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cat House - Panel</title>
<?php
    // N = RELE(GPIO Name) N = ACAO
    // 1 = Off  |  0 = On

    //RELE 01
    if($_POST['10'] == "10") {
        shell_exec('gpio write 0 0');
    } elseif($_POST['11'] == "11") {
        shell_exec('gpio write 0 1');
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
        <button name="10" value="10">On</button>
        <button name="11" value="11">Off</button>
        </section>
        </form>
    </main>
    </div>
</body>
</html>