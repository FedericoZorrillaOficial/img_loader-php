<?php

 
  
  function cargar($prefijo) {
    
    move_uploaded_file(
      
      $_FILES["foto_1"]["tmp_name"],
      "../imagenes/{$prefijo}_imagen.jpg"
      
    );
    
  }
  
  
  
  //time para varias imagenes
  //1 para 1 imagen
  $unico = 1; //time();
  cargar($unico);
  
  
  
  
  
  
  echo '
    
    <!DOCTYPE html>
    <html lang="es">
      
      <head>
        
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <title>
          Input Imagen
        </title>
        
        <link rel="stylesheet" href="../css/style.css">
        
      </head>
      <body>
        
        <h1>
          Imagen cargada
        </h1>
        
        <img src="../imagenes/'.$unico.'_imagen.jpg" width="200">
        
        <a href="../">Subir otra imagen </a>
        
      </body>
      
    </html>
    
  ';
  
 

