<?php
    try {
        $db = new PDO(
            "mysql:host=localhost;dbname=test;charset=utf8",
            "root",
            "root",
            [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION],
        );
    } catch (Exception $e) {
        die("Error: " . $e->getMessage());
    }
    $addUserQuery = "INSERT INTO users(fullname, email, password, age) VALUES (:fullname, :email, :password, :age)";
    $addUser = $db->prepare($addUserQuery);

    if (isset($_POST["fullname"]) && isset($_POST["email"]) && isset($_POST["password"]) && isset($_POST["age"])) {
        $addUser->execute([
            "fullname" => $_POST["fullname"],
            "email" => $_POST["email"],
            "password" => $_POST["password"],
            "age" => $_POST["age"]
        ]);
    }
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORUM | REGISTER</title>
</head>
<body>
    <?php if (!isset($_POST["fullname"]) && !isset($_POST["email"]) && !isset($_POST["password"]) && !isset($_POST["age"])): ?>
    <form action="" method="post">
        <input type="text" name="fullname" id="fullname">
        <input type="email" name="email" id="email">
        <input type="password" name="password" id="password">
        <input type="number" name="age" id="age">
        <button type="submit">Register</button>
    </form>
    <?php else: ?>
        <p>Vous êtes déjà enregistré!</p>
        <a href="./index.php">Retourner sur la page d'accueil</a>
    <?php endif; ?>
</body>
</html>