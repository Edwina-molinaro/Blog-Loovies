<?php
require '../config/config.php';
require '../models/connect.php';

//  insertion de l'utilisateur et de son pass hashé
if (isset($_POST['login'])){
    $login=htmlspecialchars(trim($_POST['login']));
} else {
    $login = '';
}

if (isset($_POST['password'])){
    $password=htmlspecialchars(trim($_POST['password']));
} else {
    $password = '';
}

//$pass_hash = password_hash($pass, PASSWORD_BCRYPT);
$password_hash = hash('sha512', $password);


$db = connection();

$sqlUpdateUser= "UPDATE user SET login = :login, password = :password";
$reqUpdateUser= $db->prepare($sqlUpdateUser);
$reqUpdateUser->bindParam(':login', $login);
$reqUpdateUser->bindParam(':password', $password_hash);
$reqUpdateUser->execute();

if ($reqUpdateUser->rowCount() == 1){
    header('Location: admin-panel.php');
} else {
    echo 'requete KO';
}
