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
                <?php 
                     $tecnologias = array('CSS', 'HTML5', 'JavaScrip', 'Jquery');    
                     $existe = in_array('HTML5', $tecnologias);

                 ?>
                  
                  <pre>
                  <?php var_dump($existe);  ?>
                  </pre>

                  <?php 
               $persona = array(
                 'nombre' => 'Marlon',
                 'pais' => 'Colombia',
                 'profesion' => 'Desarrolador Web'
               );
             ?>

<?php   $existe2 =in_array('Marlon2', array_values($persona));?>

<pre>
                  <?php var_dump($existe2);  ?>
                  </pre>


                  
                  
                  
    </div>




  </body>
</html>
