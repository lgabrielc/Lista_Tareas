<?php
    
    require_once __DIR__."/model/conexion.php";

    $obj = new Conexion();
    
    $conexion = $obj-> obtenerConexion();
    

    if($_SERVER["REQUEST_METHOD"]=="GET"){
        $option = $_GET["option"];

        switch ($option) {
            case 'todos':
                
                $resultado = $obj -> consultar("select * from tareas");
                $data = $resultado ->fetch_all(MYSQLI_ASSOC);
                
                break;
            
            case 'completados':
                # code...
                break;
            
            case 'nocompletados':
                # code...
                break;

            default:
                # code...
                break;
        }

        header("Content-type: application/json;");
        print json_encode($data, JSON_UNESCAPED_UNICODE);
    }


?>