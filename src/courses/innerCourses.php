<?php

include_once('../database/dbConfig.php');


$sql = " SELECT * FROM cursos
         INNER JOIN users on users.cursos_id = cursos.id;
";
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
      crossorigin="anonymous"
    />
    <link
      rel="shortcut icon"
      href="../indexView/assets/images/favicon.png"
      type="image/png"
    />
    <!--====== Magnific Popup CSS ======-->
    <link
      rel="stylesheet"
      href="../indexView/assets/css/magnific-popup.css"
    />

    <!--====== Slick CSS ======-->
    <link rel="stylesheet" href="../indexView/assets/css/slick.css" />

    <!--====== Line Icons CSS ======-->
    <link rel="stylesheet" href="../indexView/assets/css/LineIcons.css" />

    <!--====== Bootstrap CSS ======-->
    <link
      rel="stylesheet"
      href="../indexView/assets/css/bootstrap.min.css"
    />

    <!--====== Default CSS ======-->
    <link rel="stylesheet" href="../indexView/assets/css/default.css" />

    <!--====== Style CSS ======-->
    <link rel="stylesheet" href="../indexView/assets/css/style.css" />
    <title>Document</title>
</head>
<body>
    <section>
        
      <div>
        <nav class="navbar navbar-expand-lg bg-primary">
          <a class="navbar-brand" href="../indexView/index.html">
          <img src="../indexView/assets/images/logo.svg" width="30" height="30" alt="">
          <div class="collapse navbar-collapse">
        <a href="../view/userView/userRegister.html"style="color:white;
          padding-left:10px">
          Cadastro
        </a>
        <a href="../users/getUsers.php"style="color:white;
          padding-left:10px">
          Listar usuarios
        </a>
        <a href="innerCourses.php"style="color:white;
          padding-left:10px">
           Listar Cursos
        </a>
          </div>
        </nav>
      </div>
    </section>
    <h2 class="display-6 text-center">Lista de Cursos ativos</h2>
    <div class="m-5">
        <table class="table table-bg">
     <thead>
                <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">Especialização</th>
                    <th scope="col">Cursos</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    while($row_dados = mysqli_fetch_assoc($result))
                    {
                        echo "<tr>";
                        echo "<td>".$row_dados['nome']."</td>";
                        echo "<td>".$row_dados['area']."</td>";
                        echo "<td>".$row_dados['escolhas']."</td>";
                        echo "</tr>";
                    }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>