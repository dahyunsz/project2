<?php 
    include "connect.php";
    $stmt = $pdo->prepare("SELECT * FROM user");
    $stmt->execute();
    while($row = $stmt->fetch()){
        echo '
            <div class="section">
                <ul>
                    <li>
                        <div class="boxUserList">
                            <div class="box">
                                <a href="user.php?username='.$row["username"].'&id='.$row["id"].'&firstname='.$row["firstname"].'">
                                    <img src="user/'.$row["id"].'.jpg" alt="Img" height="160" width="160">
                                </a>
                            </div>
                            <p>
                                Firstname: '.$row["firstname"].'<br>
                                Lastname: '.$row["lastname"].'<br>
                                Email: '.$row["email"].'
                                <a class="more" href="user.php?username='.$row["username"].'&id='.$row["id"].'&firstname='.$row["firstname"].'"">ตรวจสอบ</a>
                            </p>
                        </div>
                    </li>
                </ul>
            </div>
            ';
        
    }
?>