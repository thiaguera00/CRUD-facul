<?php
    include_once('../database/dbConfig.php');


    $sql = "SELECT * FROM users ORDER BY id ASC";

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
     <!--====== Favicon Icon ======-->
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
    <title>List users</title>
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
        <a href="getUsers.php"style="color:white;
          padding-left:10px">
          Listar usuarios
        </a>
        <a href="../courses/innerCourses.php"style="color:white;
          padding-left:10px">
           Listar Cursos
        </a>
          </div>
         
        </nav>
      </div>
    </section>
    <h2 class="display-6 text-center">Lista de Cursos</h2>
        <div class="m-5">
        <table class="table table-bg">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Name</th>
                    <th scope="col">email</th>
                    <th scope="col">phone</th>
                    <th scope="col">interest</th>
                    <th scope="col">...</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    while($user_data = mysqli_fetch_assoc($result))
                    {
                        echo "<tr>";
                        echo "<td>".$user_data['id']."</td>";
                        echo "<td>".$user_data['nome']."</td>";
                        echo "<td>".$user_data['email']."</td>";
                        echo "<td>".$user_data['telefone']."</td>";
                        echo "<td>".$user_data['interesses']."</td>";
                        echo "<td> 
                            <a class ='btn btn-sm btn-primary' href= 'updateUsers.php?id=$user_data[id]'>
                            <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil' viewBox='0 0 16 16'>
                            <path d='M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z'/>
                            </svg> 
                            </a>
                            <a class='btn btn-danger btn-sm' href= 'deleteUsers.php?id=$user_data[id]'>
                            <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash-fill' viewBox='0 0 16 16'>
                                <path d='M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z'/>
                            </svg>
                            </a>
                        </td>";
                        echo "</tr>";
                    }
                ?>
        </tbody>
        </table>
    </div> 
</body>
</html>