<?php

$alumnoA = new AlumnoControlador();
$accion= $_REQUEST['accion'];
switch ($accion){
   case 'save':
       if(isset($_REQUEST['bot'])){
          $alumnoA->setId('NULL');
          $alumnoA->setNombre($_REQUEST['nombre']);
          $alumnoA->setApellido($_REQUEST['apellido']);
          $alumnoA->setCarnet($_REQUEST['carnet']);
          $alumnoA->setDir($_REQUEST['dir']);
          $alumnoA->setFechaNac($_REQUEST['fecha_nac']);
          $alumnoA->setSeccion($_REQUEST['seccion']);
          $datosObj=array($alumnoA->getId(),
                          $alumnoA->getNombre(),
                          $alumnoA->getApellido(),
                          $alumnoA->getFechaNac(),
                          $alumnoA->getDir(),
                          $alumnoA->getCarnet(),
                          $alumnoA->getSeccion();
          print $alumno->guardarDatos($con,$datosObj);
          print '<a href=\'manejadorAlumno.php?accion=con\'>Ver datos</a>';
      }else{
          print 'No se ha enviado datos';
      }
        break,
      case 'con':
            $sql = 'SELECT * FROM alumno';
            print consultaD($con,$sql,2,TRUE);
            break;
        case 'del':
            $sql = 'DELETE from alumno WHERE id='.$_REQUEST['id'].';';
            print consultaA($con,$sql);
            break;
        default:
            print 'No hay Accion que realizar';
            break;
       }    

