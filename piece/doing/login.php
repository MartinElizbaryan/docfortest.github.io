<?php
$sorry = '';
if (isset($_POST['click'])){
    $login = sanitizeString($_POST["login"]);
    $pass = sanitizeString($_POST["pass"]);
    $from_db_pass = '';

    if($login !='' & $pass!=''){
        $sql =("SELECT * FROM users WHERE login='$login'");
        $result = $connection->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $from_db_pass = $row["password"];
                $money = $row["money"];
                $gold_money = $row["gold_money"];
            }
        }
        if ($pass == $from_db_pass){
            session_start();
            $_SESSION["login"]=$login;
            $_SESSION["money"]=$money;
            $_SESSION["gold"]=$gold_money;
            header('Location: user_player.php');
        }
        else{
            $sorry ='Wrong login or password';
        }
    }
    else{
        $sorry = 'Please sign the form';
    }
}