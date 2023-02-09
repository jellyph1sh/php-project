<?php
$userAge = 18;
$canAccess = false;
if ($userAge >= 18) {
    $canAccess = true;
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Page HTML de test</title>
    </head>
    <body>
            <?php
                if ($canAccess) {
                    echo "<h1>Tu peux y accéder!</h1>";
                } else {
                    echo "<h1>Tu ne peux pas accéder!</h1>";
                }
            ?>
            <?php if ($canAccess):?>
                <h3><?php echo "Vous avez $userAge ans"?></h3>
            <?php endif; ?>
            <h1>Bonjour, <?php echo "Je n'ai pas encore ton pseudo mais j'écris ça en PHP"?></h1>
            <h2>Vous avez commencé à consulter la page le <?php echo date("d/m/Y h:i:s");?></h2>
            <p>
                Cette page contient <strong>uniquement</strong> du code HTML.<br>
                Voici quelques tests:
            </p>
            <ul>
                <li style="color:blue;">Blue</li>
                <li style="color:red;">Red</li>
                <li style="color:green;">Green</li>
            </ul>
        </body>
</html>