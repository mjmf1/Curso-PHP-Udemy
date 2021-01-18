<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Aprendiendo PHP</title>
    <link href="https://fonts.googleapis.com/css?family=Proza+Libre" rel="stylesheet">

    <link rel="stylesheet" href="css/estilos.css" media="screen" title="no title">
  </head>
  <body>

    <div class="contenedor">
      <h1>Aprendiendo PHP</h1>
       
      <?php $resultado = $_POST;?>
      <?php $nombre= $resultado['nombre'];?>
      <?php $apellido = $resultado['apellido'];?>
       
      <?php if(!(filter_has_var(INPUT_POST,'nombre') && (strlen(filter_input(INPUT_POST,'nombre')) > 0))) {
        echo "El nombre es obligatorio";
      }else {  ?>
        <p>Nombre:<?php  echo $nombre; ?></p>
        <?php } ?>

        <?php if(!isset($apellido) || trim($apellido) != '' ) { ?>
          <p>Apellido: <?php  echo $apellido; ?></p>
          <?php } else {
            echo "El apellido es obligatorio";
          } ?>   

          <hr>  

           <?php // validar chekcbox (singular) ?>
 
           <?php if (isset($_POST['notificaciones'])) {
             $notificaciones = $_POST['notificaciones'];
             if ($notificaciones == 'on') {
               echo 'se ha inscrito correctamente a las notifiaciones';
             }
           }
           ?>

           
           
           <?php //validar array de checkboxes ?>


           <?php if(isset($_POST['curso'])){
             $cursos = $_POST['curso'];
             echo 'Tus cursos son </br>' ;
             foreach($cursos as $curso){
               echo $curso . ' <br/>';
             }
           }else {
             echo 'no has elegido ningun curso';
           }
           ?> 
          
           <hr>

         
         <?php   // validar select ?>

         <?php  if (isset($_POST['area'])) {
          $area = $_POST['area'];
          echo '<h2>Area de especializacion</h2>';
          switch ($area) {
            case 'fe':
              echo 'Front End';
              break;
            case 'be':
              echo 'Back End';
              break;
            case 'fs':
              echo 'Full Stack';
              break;
            default:
              echo 'Por favor elegi un area';
            break;
          }
         } ?> 

         <hr>

       <?php   //validar radio buttons ?>

       <?php  $opciones = array(
                      'pres' => 'Presencial',
                      'online' => 'En Línea'
                  );?>

                  <h2>Tipo de curso elegido</h2>


       <?php if(isset($_POST['opciones']) && array_key_exists($_POST['opciones'],$opciones)){
           $tipo_curso = $_POST['opciones'];
           switch ($tipo_curso) {
             case 'pres':
              echo 'Elegiste presencial';
               break;
              case 'online':
                echo 'Elegiste en linea';
                break;
               // default:
               // echo 'no elegiste tipo de curso';
             // break;
                
     }
       }else {
         echo 'no elegiste tipo de curso';
       } ?>

       
    </div>
  </body>
</html>
