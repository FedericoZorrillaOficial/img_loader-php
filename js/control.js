
 
  
  function previewSingle(input) {
   
    
    if (input.files && input.files[0]) {
      
      var reader = new FileReader();
      
      
      reader.onload = function(e){
       
        
        const box = document.getElementById('dropzone');
        const text = document.getElementById('label-text');
        
        box.style.backgroundImage = `url('${e.target.result}')`;
        box.style.border = "none";
        text.style.display = "none";
        
       
      }
      
      
      reader.readAsDataURL(input.files[0]);
      
    }
    
  }
  
 

