<?php

include_once("../database/dbConfig.php");



$name = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email',FILTER_SANITIZE_EMAIL);
$phone = filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_STRING);
$interest = filter_input(INPUT_POST, 'interest', FILTER_SANITIZE_STRING);
$cursos_id = filter_input(INPUT_POST, 'cursos_id', FILTER_SANITIZE_NUMBER_INT);



$result = "INSERT INTO users (nome, telefone, interesses, email, cursos_id) VALUES ('$name', '$phone', '$interest', '$email', '$cursos_id')";

$result_dados = mysqli_query($conn, $result); 

    

 if(mysqli_insert_id($conn)){
     header("Location:../view/courseView/coursesSelect.php");
 }else{
     header("Location:../view/index.html");
 }