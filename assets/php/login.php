<?php
require_once "connection.php";
require_once "jwt.php";

if($_SERVER['REQUEST_METHOD'] == 'GET'){
    if(isset($_GET['email']) && isset($_GET['password'])){
        $e = $_GET['email'];
        $p = $_GET['password'];
        $con = connection();
        $sql = $con->prepare("SELECT email, name, role FROM users WHERE email=:e AND password=:p");
        $sql->bindValue(":e", $e);
        $sql->bindValue(":p", $p);
        $sql -> execute();
        $sql -> setFetchMode(PDO::FETCH_ASSOC);
        $user = $sql->fetch();
        if($user){
            $jwt = JWT::create($user,Config::SECRET, 60*60*24*30);
            echo json_encode(["user"=>$user, "jwt"=>$jwt]);
        }else{
            header("HTTP/1.1 401 Unauthorized");
            echo json_encode(["error"=>"Usuario o contrasenia incorrecta"]);
        }
    }else{
        header("HTTP/1.1 400 Bad Request");
    }
}else{
    header("HTTP/1.1 405 Method Not Allowed");
}