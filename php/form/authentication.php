<?php      
    include('../pages/conexion.php');  
    $username = $_POST['username'];  
    $password = $_POST['password'];  
    $error = '';

    if(strlen($username) == 0){
        $error .= '<p>Escriba el usuario</p>';
    }
    if(strlen($password)==0){
        $error .= '<p>Campo contraseña vacio</p>';
    }

    if(!$error){
        //to prevent from mysqli injection  
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($conn, $username);  
        $password = mysqli_real_escape_string($conn, $password);  

        $sql = "select *from login where username = '$username' and password = '$password'";  
        $result = mysqli_query($conn, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
            
        if($count == 1){  
            echo "<h1><center> Login satisfactorio </center></h1>";  
        }  
        else{  
            echo "<h1> Acceso fallido. Nombre de usuario o contraseña no valido</h1>";  
        }
    }else{
        echo $error;
    }
?>
