
<!DOCTYPE html>
<html lang="en">
  <head>
        <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ChocoVal | Contacto</title>
    <link rel="stylesheet" href="../css/bootstrap.css" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500&display=swap" rel="stylesheet" />
    <link href="../css/fontawesome/all.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css" />
    <link rel="stylesheet" href="css/login.css" />
    
  </head>

  <body>
    <!-- Contenido -->
    <div class="login-box main-content">
      <div class="login-info-box">
        <div class="form-contact">
          <h3 class="text-center my-5">Login</h3>
          <form name="frmLogin" action="../form/authentication.php" onsubmit = "return validation()" method="post" autocomplete="off">
            <!-- NOMBRE DE USUARIO-->
            <div class="form-group row mb-3">
              <label for="name" class="col-md-4 form-control-label text-right">
                Usuario
              </label>
              <div class="input-group mb-3 w-50">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="fas fa-user"></i>
                  </span>
                </div>
                <input type="text" class="form-control" name="username" placeholder="" aria-describedby="inputGroup-sizing-default">
              </div>
            </div>
            <!-- PASSWORD -->
            <div class="form-group row mb-3">
              <label for="pass" class="col-md-4 form-control-label text-right">
                Contraseña
              </label>
              <div class="input-group mb-3 w-50">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="fas fa-key"></i>
                  </span>
                </div>
                <input type="password" class="form-control" name="password" aria-describedby="inputGroup-sizing-default">
              </div>
            </div>
            <!-- BTN ENVIAR FORM-->
            <div class="form-group row mb-3">
              <div class="col-md-12 text-center">
                <button class="btn btn-primary" type="submit">
                  LOGIN             
                </button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>

    <script src="../js/bootstrap.bundle.js"></script>
    <script>
      function validation()  
        {  
          var id=document.frmLogin.username.value;  
          var ps=document.frmLogin.password.value;  
          if(id.length=="" && ps.length=="") {  
              alert("Campos de usuario y contraseña vacios");  
              return false;  
          }  
          else  
          {  
              if(id.length=="") {  
                  alert("Nombre de usuario vacio");  
                  return false;  
              }   
              if (ps.length=="") {  
              alert("Campo contraseña vacio");  
              return false;  
              }  
          }                             
        }  
    </script>
  </body>
</html>
