<?php
session_start(); 
require '../config/config.php';
require '../models/connect.php';

//  récuperation de l'utilisateur et de son pass hashé
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

$db = connection();


//$pass_hash = password_hash($password, PASSWORD_BCRYPT);
$password_hash = hash('sha512', $password);


$sqlSelectUser='SELECT login, password FROM user';
$reqSelectUser=$db->prepare($sqlSelectUser);
$reqSelectUser->bindParam(':login', $login, PDO::PARAM_STR, 45);
$reqSelectUser->execute();
$resultat=$reqSelectUser->fetchObject();

$isPasswordCorrect=hash_equals($password_hash, $resultat->password);

  if (!$resultat)
  {
      echo 'Mauvais identifiant ou mot de passe !';
  }
  else
  {
      if ($isPasswordCorrect) {
          session_start();
          header('location:admin-panel.php');
      }
      else {
          echo 'Mauvais identifiant ou mot de passe !';
      }
  }
