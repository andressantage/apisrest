<?php

//para imprimir errores en ejecucion;

ini_set("display_errors", 1);

ini_set("display_startup_errors", 1);

error_reporting(E_ALL);

    header('Content-Type:application/json');
    
    require_once ("../config/Conectar.php");
    require_once ("../models/Camper.php");

    $camper= new Camper();


    $body=json_decode(file_get_contents("php://input"),true);

    switch($_GET["op"]){
        
        case "GetAll"://Obtener los registros de la tabla

            $datos=$camper->get_camper();//Metodo get
            echo json_encode($datos); //imprime todo el contenido que esta en camper
            //http://localhost/apiRest-master/apiRest-master/apiRest-master/backend/controles/campers.php?op=GetAll

        break;

        case "GetId":

            $datos=$camper->get_camper_id($_GET["id"]);
            echo json_encode($datos); //imprime lo que aparece en el link
            //segun el id: http://localhost/apiRest-master/apiRest-master/apiRest-master/backend/controles/campers.php?op=GetId&id=10

        break;

        case "insert":
            $data = $camper->insert_camper($body['id'], $body['imagen'], $body['nombre'], $body['edad'], $body['promedio'], $body['nivelCAmpus'], $body['nivelIngles'],$body['especialidad'], $body['direccion'], $body['celular'], $body['ingles'], $body['Ser'], $body['Review'], $body['Skills'], $body['Asitencia']);
            echo json_encode("Insertado correctamente");
            break;

        case "update":

            $datos=$camper->update_camper($_GET["id"],$_GET["imagen"],$_GET["nombre"],$_GET["edad"] ,$_GET["promedio"] ,$_GET["nivelCAmpus"], $_GET["nivelIngles"] , $_GET["especialidad"] , $_GET["direccion"] , $_GET["celular"] , $_GET["ingles"] , $_GET["Ser"] , $_GET["Review"] , $_GET["Skills"] , $_GET["Asitencia"]);
            echo json_encode("camper actualizado correctamente");
          
            break;
        
        case "delete":
        
            $datos=$camper->delete_camper($_GET["id"]);
            echo json_encode("camper eliminado correctamente");
          
            break;
    }

?>