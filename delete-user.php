<?php

require_once 'includes.php';

if (strtolower($_SERVER['REQUEST_METHOD']) !== 'post'){
    echo '<h3>La méthode n\'est pas autorisé</h3> ';
    die;
}

$query = $connection->prepare(
    'DELETE FROM `user` WHERE id=:id'
);

$query->bindValue('id', $_GET['id']);


if (!$query->execute()) {
    echo "La suppression a échoué";
    die;
}

header('Location : /');
exit;
