<html>
<head>
    <meta charset="UTF-8">
</head>
<body>
    <?php
        $pdo = new PDO("mysql:host=localhost;dbname=project;charset=utf8", "root", "");
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    ?>
</body>
</html>