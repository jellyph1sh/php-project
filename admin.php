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
    $allUsersQuery = "SELECT fullname, email, age FROM users";
    $allUsersQueryState = $db->prepare($allUsersQuery);
    $allUsersQueryState->execute() or die(print_r($db->errorInfo()));
    $allUsers = $allUsersQueryState->fetchAll();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORUM | ADMIN</title>
</head>
<body>
    <h1>Administration</h1>
    <table>
        <thead>
            <th colspan="3">Registered Users</th>
        </thead>
        <tbody>
            <?php foreach ($allUsers as $user) { ?>
                <tr>
                    <td><?php echo $user["fullname"]; ?></td>
                    <td><?php echo $user["email"]; ?></td>
                    <td><?php echo ($user["age"] . "ans"); ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>