<?php

class Coneccion {
    $dsn = 'mysql:dbname0alumnos;host=127.0.01';
    $usuario = 'root';
    $clave = '';
        try {
            $con = new POD($dsn,$usuario, $clave);
        } catch (PDOExcepcion $e) {
             print $e->getTraceAsString();
        }    

     function consultaA($coneccion, $sql){
        $ejecutor =$coneccion;
        $msgok = NULL;
        $msgok= NULL;
     }

     try {

        $condicion = strstr(trim ($sql), " ", TRUE);
        switch ($condicion)
         {
        	case "INSERT":
        		$msgerror = "No se ha Podido Insertar los Datos";
        		$msgok = "Datos Insertados";

        		break;
        		case "DELETE":
        			$msgerror = "No se ha Podido Eliminar los Datos";
        			$msgerror = "Datos Eliminados";
        			break;
        		case "UPDATE":
        			$msgerror = "No se ha Podido Actualizar los datos ";
        			$msgok = "Datos Actualizados"
        				break;	
        	default:
        		$msgerror = "Es posible que no use un estandar de consulta SQL";
        		break;
        }
     } catch (Exception $exc) {
     	$ejecutor->rollBack();
     	return $msgerror. ":(<br>". $exc->getMessage();

     }	

                $ejecutor->beginTransaction();
                $fila = $ejecutor->exec($sql);
                $ejecutor->commit();

    if($fila ==0)¨{
    	$msgok = $msgerror."<br> No existe coincidencia para realizar la accion sobre los"
    }

    return $msgok. "Filas Afectadas ".$fila;
     
    function consultaD(4coneccion, $sql,$modo=2,$presentacion=FALSE)
    {
            

    }
    $ejecutor = $coneccion;
    $manejador = trim($sql);
    $devolucion = "";

    try {
    	$datos = $ejecutor->query($manejador);
    	$datos->setFetchMode($modo);

    } catch (Exception $exc) {
        return "No se pudieron Consultar los Datos<br/>".$exc->getMessage();
    }

    return $devolucion;

    if($presentacion == TRUE){
    	$devolucion .="<table border=1>";
    }else{
    	$contenedor = $datos->fetchAll();
    	$devolucion=$contenedor;

    }

    foreach ($datos->fetchAll() as $registros) {
       $devolucion.="<tr>";

       $devoluvion.="</tr>";
   
    }

    foreach ($registros as $valor) {
    	$devolucion.="<td>".$valor."</td>";
    }

    $devolucion .="</table>";

