<?php
require '../config/config.php';
require '../models/connect.php';

if (isset($_POST['titre'])){
    $titre=htmlspecialchars(trim($_POST['titre']));
} else {
    $titre = '';
}

if (isset($_POST['text'])){
    $text=htmlspecialchars(trim($_POST['text']));
} else {
    $text = '';
}


$db = connection();

$sqlInsertPost= 'insert INTO post (titre, text) VALUES (:titre, :text)';
$reqInsertProducts= $db->prepare($sqlInsertPost);
$reqInsertProducts->bindParam(':titre', $titre);
$reqInsertProducts->bindParam(':text', $text);
$reqInsertProducts->execute();

if ($reqInsertProducts->rowCount() == 1){
    header('Location: ../../index.php');
} else {
    echo 'error';
}