<?php
    include_once('../../database/dbConfig.php');

    $sqlItem1 = "SELECT area FROM cursos";
    $result1 = $conn->query($sqlItem1);

    $sqlItem2 = "SELECT escolhas FROM cursos";
    $result2 = $conn->query($sqlItem2);
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
      href="../../indexView/assets/images/favicon.png"
      type="image/png"
    />
    <!--====== Magnific Popup CSS ======-->
    <link
      rel="stylesheet"
      href="../../indexView/assets/css/magnific-popup.css"
    />

    <!--====== Slick CSS ======-->
    <link rel="stylesheet" href="../../indexView/assets/css/slick.css" />

    <!--====== Line Icons CSS ======-->
    <link rel="stylesheet" href="../../indexView/assets/css/LineIcons.css" />

    <!--====== Bootstrap CSS ======-->
    <link
      rel="stylesheet"
      href="../../indexView/assets/css/bootstrap.min.css"
    />

    <!--====== Default CSS ======-->
    <link rel="stylesheet" href="../../indexView/assets/css/default.css" />

    <!--====== Style CSS ======-->
    <link rel="stylesheet" href="../../indexView/assets/css/style.css" />
    <title>Document</title>
</head>
<body>
    <section>
      <div>
        <nav class="navbar navbar-expand-lg bg-primary">
          <a class="navbar-brand" href="../indexView/index.html">
          <img src="../../indexView/assets/images/logo.svg" width="30" height="30" alt="">
          <div class="collapse navbar-collapse">
        <a href="../view/userView/userRegister.html"style="color:white;
          padding-left:10px">
          Cadastro
        </a>
        <a href="getUsers.php"style="color:white;
          padding-left:10px">
          Listar usuarios
        </a>
          </div>
        </nav>
      </div>
    </section>
    <div class="container" style="padding-left:400px ;
      padding-top: 10px;">
      <div class="card bg-light mb-3" style="max-width: 18rem;
       ">
        <div class="card-header">Qual curso você deseja?</div>
          <div class="card-body">
            <div class="form-group">
            <form
              action="../../courses/innerCourses.php"
              class="form-group"
            >
              <div class="form-group">
                <label>Cursos:</label>
                 <select name="area">
                    <?php
                        foreach($result2 as $key => $value){?>
                    <option value="<?=$value['escolhas'];?>"><?=$value['escolhas'];?></option>
                   <?php }?>
                </select>
              </div>
                <button
                  type="submit"
                  class="btn btn-primary"
                  onclick="clickButton()"
                  style="margin-top: 10px;">
                  Submit
                </button>
              </div>
            </form>
      </div>
  </div>
  <script>
       function clickButton() {
        window.alert("Enviado com sucesso!");
      }
  </script>
</body>
</html>