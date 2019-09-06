/* Script que conecta una base de datos a php */
<?php
 
    define("HOST_DB", "localhost");
    define("USER_DB", "root");
    define("PASS_DB", "");
    define("NAME_DB", "basedatos");
 
    $conexion = new mysqli(
        constant("HOST_DB"),
        constant("USER_DB"),
        constant("PASS_DB"),
        constant("NAME_DB")
    );
 
?>
