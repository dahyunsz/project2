<?php 
    include "connect.php";
    $stmt = $pdo->prepare("SELECT * FROM door");
    $stmt->execute();
    while($row = $stmt->fetch()){
        echo '
            <p>
                <img src="door/'.$row["id"].'.jpg" alt="Img" height="160" width="160">
                <span style="color:blue;"> name : </span>'.$row["firstname"].' <br>
                <span style="color:blue;"> date : </span>'.$row["day"].'-'.$row["month"].'-'.$row["year"].'
                <span style="color:blue;"> time : </span>'.$row["hour"].':'.$row["minute"].':'.$row["second"].' <br>
                <span style="color:blue;"> status : </span> <span style="color:green;">'.$row["status"].'</span>
            </p>
            ';
    }
?>