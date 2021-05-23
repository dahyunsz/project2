<?php
    include "connect.php";
    $stmt = $pdo->prepare("SELECT * FROM user WHERE username = ?");
    $stmt->bindParam(1, $_GET["username"]);
    $stmt->execute();
    $row = $stmt->fetch();
    if (!empty($row)) {
        echo "Username already use";
    } else {
        echo "Username can use";
    }
?>