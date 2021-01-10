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
          
          <?php /*
                  $tecnologias = array('CSS', 'HTML', 'JavaScript', 'jQuery','Python');
           */?>
           <?php // for loops ?>

              
           <?php for($i = 0 ; $i<100; $i++ ){
                echo $i . '<br/>';

           }?>

           <hr>
 
           <?php for($i = 0 ; $i<100; $i++ ){
                if ($i == 5) {
                  echo "Cinco <br/>";
                  continue ;
                }
                echo $i . '<br/>';

           }?>
        </div>
    </div>




  </body>
</html>
