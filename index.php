<!DOCTYPE html>
<html lang="es">
  <head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>
      Input Imagen
    </title>
    
    <link rel="stylesheet" href="css/style.css">
    
  </head>
  <body>
   
    
    <h1>
      Sube una imagen
    </h1>
    
    <form action="php/loader.php" method="POST" enctype="multipart/form-data">
      
      
      <div class="inputFoto_contn">
        
        <label 
          for="foto_principal"
          id="dropzone"
          class="btn_subir">
          <span id="label-text">
            +
          </span>
        </label>
        
        <input 
          id="foto_principal" 
          class="file_box" 
          type="file" 
          accept="image/*" 
          onchange="previewSingle(this)" 
          name="foto_1" 
        required>
        
      </div>
      
      <button>
        Subir
      </button>
      
    </form>
    
   
  </body>
  
  <script src="js/control.js"></script>
  
</html>