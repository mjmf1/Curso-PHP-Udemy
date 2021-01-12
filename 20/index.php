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

        <div class="contenido">
              <h2>Agenda Teléfonica</h2>
            <?php 
              function usuario($nombre, $telf) {
                echo $nombre . '<br/>'; 
                echo $telf . '<br/>';
                echo '<hr>';

              }
              usuario('Marlon mora ', '12364-1234');
              usuario('miguel', '12364-1253');
              usuario('jorge', '1278524-12');
              
            ?>
              
        </div>
    </div>




  </body>
</html>
