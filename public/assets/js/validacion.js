function loginValidation (){
    let user = document.getElementById("email");
    let clave = document.getElementById("password");
        
    
        if (user.value === '' || clave.value === ''){
            alert("Todos los campos son Obligatorios")
            return false;            
        }
        else {
            return true;
        }          
        
}

function registerValidation(){   

    let name = document.getElementById("name").value;
    let email = document.form1.email.value;
    let clave1 = document.getElementById("password1").value;
    let clave2 = document.getElementById("password2").value;
    let pais = document.getElementById("country").value;
    let ciudad = document.getElementById("city").value;    
    let review = document.getElementById("review").value;
    let rol = document.getElementsByName("rol").value;  

    var expresion = /^[a-z][\w.-]+@\w[\w.-]+\.[\w.-]*[a-z][a-z]$/i;
    
    if( name == null || name.length == 0 || /^\s+$/.test(name) ) {
        alert ("El Campo Nombre debe ser Diligenciado");
        return false;
      }
    else{
      if ( !expresion.test(email) ){
          alert("Debe Introducir una dirección de Correo Electrónico valida");
          return false;
      }
      else{ 
          if (clave1 == null || clave1.length == 0 || /^\s+$/.test(clave1) && clave2 == null || clave2.length == 0 || /^\s+$/.test(clave2)){
              alert ("Debes diligenciar ambos campos de Password");
              return false;
          }       
        else{
             if (clave1 != clave2){
                 alert("Las Claves Introducidas no coinciden");
                 return false;
        }
        else{
                if (clave1.length < 8 || clave2.length < 8){
                 alert("La Clave debe contener mas de 8 o más carácteres");
                 return false;
                 }
            else{
                    if (pais == null || pais.length == 0 || /^\s+$/.test(pais)){
                    alert("Debe diligenciar el campo País");
                    return false;
                     }
                else{
                    if (ciudad == null || ciudad.length == 0 || /^\s+$/.test(ciudad)){
                        alert("Debe diligenciar el campo Ciudad");
                        return false;
                         }
                    else{
                        if (review == null || review.length == 0 || /^\s+$/.test(review)){
                            alert("Por favor diligencie una breve reseña");
                            return false;
                             }
                       else{
                              if(!document.querySelector('input[name="rol"]:checked')){
                                  alert("Debes Seleccionar un Rol");
                                  return false;
                              } 
                              else{
                                  return true;
                              }                    
                           
                        }
                    }
                }
            }
        }
        }
     }      
    } 
    
   
}

function updateValidation(){   

    let name = document.getElementById("name").value;
    let email = document.form2.email.value;
    let clave1 = document.getElementById("password1").value;
    let clave2 = document.getElementById("password2").value;
    let pais = document.getElementById("country").value;
    let ciudad = document.getElementById("city").value; 
    //let rol = document.getElementsByName("rol").value;  

    var expresion = /^[a-z][\w.-]+@\w[\w.-]+\.[\w.-]*[a-z][a-z]$/i;
    
    if( name == null || name.length == 0 || /^\s+$/.test(name) ) {
        alert ("El Campo Nombre debe ser Diligenciado");
        return false;
      }
    else{
      if ( !expresion.test(email) ){
          alert("Debe Introducir una dirección de Correo Electrónico valida");
          return false;
      }
      else{ 
          if (clave1 == null || clave1.length == 0 || /^\s+$/.test(clave1) && clave2 == null || clave2.length == 0 || /^\s+$/.test(clave2)){
              alert ("Debes diligenciar ambos campos de Password");
              return false;
          }       
        else{
             if (clave1 != clave2){
                 alert("Las Claves Introducidas no coinciden");
                 return false;
        }
        else{
                if (clave1.length < 8 || clave2.length < 8){
                 alert("La Clave debe contener mas de 8 o más carácteres");
                 return false;
                 }
            else{
                    if (pais == null || pais.length == 0 || /^\s+$/.test(pais)){
                    alert("Debe diligenciar el campo País");
                    return false;
                     }
                else{
                    if (ciudad == null || ciudad.length == 0 || /^\s+$/.test(ciudad)){
                        alert("Debe diligenciar el campo Ciudad");
                        return false;
                         }
                         else{
                                  return true;
                              }                    
                           
                        }
                    }
                }
            }
        }
        
          
    } 
    
   
}

function removeApto(){    
    let opcion = confirm ("Desea Eliminar este Inmueble?");
    if (opcion == false){
        alert ("Operación Cancelada");
        return false
    }else {
        alert ("Inmueble Retirado");
        return true;
    }   

}

