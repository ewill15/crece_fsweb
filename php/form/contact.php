<?php

    $error = '';
    if(isset($_POST['name'])){
        $name = $_POST['name'];
    }else{
        $error .= 'Escriba un nombre<br>';
    }
    if(isset($_POST['lastname'])){
        $lastname = $_POST['lastname'];
    }else{
        $error .= 'Escriba un apellido<br>';
    }
    if(isset($_POST['email'])){
        if(strpos($_POST['email'],'gmail') || strpos($_POST['email'],'hotmail')){
            $email = $_POST['email'];
        }else{
            $error .= 'El correo solo puede ser hotmail o gmail<br>';
        }
    }else{
        $error .= 'Escriba un email<br>';
    }
    if(isset($_POST['phone'])){
        $phone = $_POST['phone'];
    }else{
        $error .= 'Escribe tu número de teléfono<br>';
    }
    if(isset($_POST['ciudad'])){
        $city = $_POST['ciudad'];
    }else{
        $error .= 'Selecciona tu ciudad<br>';
    }
    if(isset($_POST['comment'])){
        $comment = $_POST['comment'];
    }else{
        $error .= 'Escribe tu comentario<br>';
    }
    if(isset($_POST['servicios'])){
        $service['tmp'] = $_POST['servicios'];
        $service['part'] = explode('_',$service['tmp']);
        $service['counter'] = count($service['part']);
        if($service['counter'] == 0){
            $error .= 'Selecciona el servicio<br>';
        }
    }else{
        $service['tmp'] = '';
        $service['part'] = [];
        $service['counter']=0;

        $error .= 'Selecciona el servicio<br>';
    }
    // var_dump(!$error);
    // die(1);
    if(!$error){
        include '../pages/conexion.php';

        if($conn->connect_error){
            echo "$conn->connect_error";
            die("Connection failed : ". $conn->connect_error);
        }else{
            $stmt = $conn->prepare("INSERT INTO contacts(nombre,apellido,telefono,email,ciudad,servicio,comentario) VALUES (?,?,?,?,?,?,?)");

            if($service['counter']==1){
                $stmt->bind_param("ssissss",$name,$lastname,$phone,$email,$city,$service['part'][0],$comment);
                $execval= $stmt->execute();
            }else{
                for ($i=0; $i <$service['counter']-1 ; $i++) { 
                    $stmt->bind_param("ssissss",$name,$lastname,$phone,$email,$city,$service['part'][$i],$comment);
                    $execval= $stmt->execute();
                }
            }
            echo "<script>alert('Gracias por llenar tus datos');location.href='javascript:history.back()'</script>";

            $stmt->close();
            $conn->close();
        }
    }else{
        echo "<script>alert('Formulario incompleto. Revisa e intenta nuevamente');location.href='javascript:history.back()'</script>";
    }    
?>