<?php

    if(!empty($_GET['id']))
    {
        include_once('../database/dbConfig.php');
        
        $id = $_GET['id'];

        $sqlSelect = "SELECT * FROM users WHERE id=$id";

        $result = $conn->query($sqlSelect);
        
        if($result->num_rows > 0 ){
             while($user_data = mysqli_fetch_assoc($result))
            {
                $nome = $user_data['nome'];
                $email = $user_data['email'];
                $phone = $user_data['telefone'];
                $interest = $user_data['interesses'];
            }
        }else{
            header('Location: getUsers.php');
        }
           
    }else{
        header('Location: getUsers.php');
    }

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
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
    <title>User Update</title>
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
          </div>
        </nav>
      </div>
    </section>
      <div class="container" style="padding-left:400px ;
        padding-top: 10px;">
        <div class="card bg-light mb-3" style="max-width: 18rem;
        ">
        <div class="card-header">Update</div>
          <div class="card-body">
            
            <div class="form-group">
              <form
                action="saveEdit.php"
                class="form-group"
                method="post"
              >
                <div class="form-group">
                  <label>Name:</label>
                  <input type="text" name="nome" class="form-control" value="<?php echo $nome?>"/>
                </div>
                <div class="form-group">
                  <label>Email:</label>
                  <input type="email" name="email" class="form-control" value="<?php echo $email?>"/>
                </div>
                <div class="form-group">
                  <label>Phone:</label>
                  <input type="tel" name="phone" class="form-control" value="<?php echo $phone?>"/>
                </div>
                <div class="form-group">
                  <label>Interest:</label>
                      <select name="interesses">
                        <option>Cursos para área de TI</option>
                      </select>
                <input type="hidden" name="id" value="<?php echo $id?>">
                <div>
                  <button
                    type="submit"
                    name="update"
                    class="btn btn-primary"
                    style="margin-top: 10px;"
                    onclick="clickButton()"
                  >
                    Submit
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script>
      function clickButton() {
        window.alert("Alterado com sucesso!");
      }
    </script>
  </body>
</html>