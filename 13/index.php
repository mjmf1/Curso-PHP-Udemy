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
               $persona = array(
               
                'datos' => array(
                  'nombre' => 'Marlon',
                 'pais' => 'Colombia',
                 'profesion' => 'Desarrolador Web'

                ),
                'lenguaje' => array(
                  'front_end' => array('Html', 'Css', 'JavaScipt', 'Jquery'),
                  'back_end' => array('php', 'Mysql', 'python')

                )
              );
          ?>
           <pre>
           <?php print_r($persona) // se puede acceder mas al array con [][][] ?>
           </pre>
              
        </div>
    </div>




  </body>
</html>
