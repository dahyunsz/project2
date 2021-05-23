<?php
    echo '<a><img src="../project/images/logo.png" alt="LOGO" height="52" width="52"></a>';
?>
<?php
    if(!empty($_SESSION["firstname"])){
        echo "<a>ADMIN : ".$_SESSION["firstname"] ."</a> <a>".$_SESSION["lastname"]."</a>";
    }
    else{
        echo "FACE RECOGNITION SYSTEM";
    }
?>