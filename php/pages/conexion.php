<?php
    $host_name = 'localhost';
    $db_name = 'db_chocoval';
    $db_user = 'root';
    $db_pass = '';

    $conn = new mysqli($host_name,$db_user,$db_pass,$db_name);
    mysqli_query($conn,"SET CHARACTER SET 'utf8'");
    mysqli_query($conn,"SET SESSION collation_connection - 'utf8_unicode_ci'");    
?>