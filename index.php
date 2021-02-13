<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
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

    //RELE 02
    if($_POST['20'] == "20") {
        shell_exec('gpio write 1 0');
    } elseif($_POST['21'] == "21") {
        shell_exec('gpio write 1 1');
    }

    //RELE 03
    if($_POST['30'] == "30") {
        shell_exec('gpio write 2 0');
    } elseif($_POST['31'] == "31") {
        shell_exec('gpio write 2 1');
    }

    //RELE 04
    if($_POST['40'] == "40") {
        shell_exec('gpio write 3 0');
    } elseif($_POST['41'] == "41") {
        shell_exec('gpio write 3 1');
    }

    //RELE 05
    if($_POST['50'] == "50") {
        shell_exec('gpio write 4 0');
    } elseif($_POST['51'] == "51") {
        shell_exec('gpio write 4 1');
    }

    //RELE 06
    if($_POST['60'] == "60") {
        shell_exec('gpio write 5 0');
    } elseif($_POST['61'] == "61") {
        shell_exec('gpio write 5 1');
    }

    //RELE 07
    if($_POST['70'] == "70") {
        shell_exec('gpio write 6 0');
    } elseif($_POST['71'] == "71") {
        shell_exec('gpio write 6 1');
    }

    //RELE 08
    if($_POST['80'] == "80") {
        shell_exec('gpio write 21 0');
    } elseif($_POST['81'] == "81") {
        shell_exec('gpio write 21 1');
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

        <div class="rele1">
        <span>Rele 01</span>
        <div>
        <button name="10" value="10">On</button>
        <button name="11" value="11">Off</button>
        </div>
        </div>

        <div class="rele2">
        <span>Rele 02</span>
        <div>
        <button name="20" value="20">On</button>
        <button name="21" value="21">Off</button>
        </div>
        </div>

        <div class="rele3">
        <span>Rele 03</span>
        <div>
        <button name="30" value="30">On</button>
        <button name="31" value="31">Off</button>
        </div>
        </div>

        <div class="rele4">
        <span>Rele 04</span>
        <div>
        <button name="40" value="40">On</button>
        <button name="41" value="41">Off</button>
        </div>
        </div>

        <div class="rele5">
        <span>Rele 05</span>
        <div>
        <button name="50" value="50">On</button>
        <button name="51" value="51">Off</button>
        </div>
        </div>

        <div class="rele6">
        <span>Rele 06</span>
        <div>
        <button name="60" value="60">On</button>
        <button name="61" value="61">Off</button>
        </div>
        </div>

        <div class="rele7">
        <span>Rele 07</span>
        <div>
        <button name="70" value="70">On</button>
        <button name="71" value="71">Off</button>
        </div>
        </div>

        <div class="rele8">
        <span>Rele 08</span>
        <div>
        <button name="80" value="80">On</button>
        <button name="81" value="81">Off</button>
        </div>
        </div>

        </form>
    </main>
    </div>
</body>
</html>