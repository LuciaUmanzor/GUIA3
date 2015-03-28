<?php
include './clases/Coneccion.php';
include './clases/seccion.php';
include './clases/seccionControlador.php';
$seccionA = new seccionControlador();
$accion= $_REQUEST['accion'];
switch ($accion) {
   case 'save':
      if(isset($_REQUEST['bot'])){
         $seccionA->setId('NULL');
         $seccionA->setNombre($_REQUEST['nombre']);
         $seccionA->setEscuela($-REQUEST['escuela']);

         $datosObj=array)($seccionA->getId(),
                         $seccionA->getNombre(),
                         );

         print $seccionA->guardarDatos($con,$datosObj);
         print '<a href=\'manejadorSeccion.php?accion=con\'>Ver datos</a>';

       }else{
          print 'No se ha enviado datos';
       }
        break;
    case 'con':
      $sql = 'SELECT * FROM seccion';
      print consultaD($con, $sql, 2, TRUE);
      break;
      
    default:
       print 'No hay Accion que realizar';
       break;
   }