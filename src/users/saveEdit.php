<?php

include_once("../database/dbConfig.php");

if(isset($_POST['update'])){
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $interest = $_POST['interest'];

    $sqlUpdate = "UPDATE users SET nome='$nome', email='$email',telefone='$phone',interesses='$interest'
    WHERE id=$id";

    $result = $conn->query($sqlUpdate);
}

header('Location: getUsers.php');