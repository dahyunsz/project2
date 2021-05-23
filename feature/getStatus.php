<?php 
    include "connect.php";
    $stmt = $pdo->prepare("SELECT * FROM door where firstname = ?");
    $stmt->bindParam(1, $_GET["firstname"]);
    $stmt->execute();
    while($row = $stmt->fetch()){
        echo '
            <p>
                <span style="color:blue;"> date : </span>'.$row["day"].'-'.$row["month"].'-'.$row["year"].'
                <span style="color:blue;"> time : </span>'.$row["hour"].':'.$row["minute"].':'.$row["second"].'
                <span style="color:blue;"> status : </span> <span style="color:green;">'.$row["status"].'</span>
            </p>
            ';
    }
?>