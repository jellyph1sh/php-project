<h1>test!</h1>
<?php
    if (!isset($_POST["email"])) {
        echo("DEGAGE!");
        return;
    }
    echo htmlspecialchars($_POST["email"]);
?>