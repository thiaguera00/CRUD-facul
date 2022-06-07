<?php
  if(!empty($_GET['id']))
    {
        include_once('../database/dbConfig.php');
        
        $id = $_GET['id'];

        $sqlSelect = "SELECT * FROM users WHERE id=$id";

        $result = $conn->query($sqlSelect);
        
        if($result->num_rows > 0 ){
            $sqlDelete = "DELETE FROM users WHERE id= $id ";
            $resultDelete = $conn->query($sqlDelete);
            header('Location: getUsers.php');
        }
    }else{
        header('Location: getUsers.php');
    }
