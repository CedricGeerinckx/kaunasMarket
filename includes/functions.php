<?php
function login($user, $password){
    include("db_connect.php");
    $status = false;
    if($user == ''){
        $errmsg = 'You must enter your Username';
    }
    elseif($password == ''){
        $errmsg = 'You must enter your Password';
    }
    else{
        $status = true;
    }
    if($status){
        $result = $conn->prepare("SELECT * FROM users WHERE username= ? AND password= ?");
        $result->bindParam(1, $user);
        $result->bindParam(2, $password);
        $result->execute();
        $rows = $result->fetch(PDO::FETCH_NUM);
        if($rows == 0){
            $errmsg = "Username and Password don't match";
            $status = false;
        }
        elseif($rows > 0) {
            $_SESSION['LOGIN_STATUS'] = "logged";
            $status = true;
        }
        else{
            $errmsg = "Username and Password don't match";
            $status = false;
        }
    }
    if(isset($errmsg)){
        $_SESSION["ERRMSG"] = $errmsg;
    }
    return $status;
}
?>
