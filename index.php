<?php
$userAge = 18;
$canAccess = ($userAge >= 18);
$user1 = ["VOILA VOILA", "mail@gmail.com", 18];
$user2 = ["VOILA VOILOU", "mail2@gmail.com2", 16];
$users = [$user1, $user2];

$user3 = [
    "name" => "Sacha SORGIATI",
    "email" => "sacha.sorgiati@gmail.com",
];
$user4 = [
    "name" => "test TEST",
    "email" => "test.test@gmail.com",
];
$users2 = [$user3, $user4];

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
                for ($i = 0; $i < 2; $i++) {
                    echo $users[$i][2] . '<br>';
                }
                foreach ($users as $user) {
                    echo $user[1] . '<br>';
                }
                foreach ($users2 as $user) {
                    echo $user["name"] . '<br>' . $user["email"] . '<br><br>';
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