<?php

require_once 'includes.php';

$user = $connection->query('SELECT * FROM user WHERE id=' . $_GET['id'])->fetch(PDO::FETCH_ASSOC);




if (strtolower($_SERVER['REQUEST_METHOD']) === 'post') {
    $editUser = $connection->prepare(
        "UPDATE `user` SET
                full_name=:full_name, first_name=:first_name, name=:name,
                  gender=:gender, email=:email, phone=:phone WHERE id=:id"
    );

    $editUser->bindValue('full_name', $_POST['first_name'] . ' ' . $_POST['name']);
    $editUser->bindValue('first_name', $_POST['first_name']);
    $editUser->bindValue('name', $_POST['name']);
    $editUser->bindValue('gender', $_POST['gender']);
    $editUser->bindValue('email', $_POST['email']);
    $editUser->bindValue('phone', $_POST['phone']);
    $editUser->bindValue('id', $_GET['id']);

    $editUser->execute();

    header('Location: ' . $_SERVER['REQUEST_URI']);
    exit;
}
?>


<?php
require_once 'template_head.php';
require_once 'user-form.php';

