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
        $result = $conn->prepare("SELECT * FROM admin WHERE username= ? AND pass= ?");
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

function getGallery(){
    include("db_connect.php");
    $sql="SELECT * FROM image WHERE type = 'gallery';";
    $result = $conn->prepare($sql);
    $result->execute();
    return $result;
}
function getPage($page){
    $name = $page;
    include("db_connect.php");
    $sql="SELECT * FROM pages WHERE name=?;";
    $result = $conn->prepare($sql);
    $result->bindParam(1, $name);
    $result->execute();
    return $result;
}
?>
