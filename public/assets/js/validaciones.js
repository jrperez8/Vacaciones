
function loginvalidation (){
    let user = document.getElementById("email");
    let clave = document.getElementById("password");
        
    
        if (user.value === '' || clave.value === ''){
            alert("Todos los campos son Obligatorios")
            
        }
        else (
            alert("Bienvenido")
        )          
}

function registervalidation(){   

    let name = document.getElementById("name").value;
    let email = document.form1.email.value;
    let clave1 = document.getElementById("password1").value;
    let clave2 = document.getElementById("password2").value;
    let pais = document.getElementById("country");
    let ciudad = document.getElementById("city");    
    let perfil = document.getElementById("review");
    let rol = document.getElementsByName("rol").value;  

    var expresion = /^[a-z][\w.-]+@\w[\w.-]+\.[\w.-]*[a-z][a-z]$/i;
    
    if( name == null || name.length == 0 || /^\s+$/.test(name) ) {
        alert ("El Campo Nombre debe ser Diligenciado");
      }
    else{
      if ( !expresion.test(email) ){
          alert("Debe Introducir una dirección de Correo Electrónico valida");
      }
      else{ 
          if (clave1 == null || clave1.length == 0 || /^\s+$/.test(clave1) && clave2 == null || clave2.length == 0 || /^\s+$/.test(clave2)){
              alert ("Debes diligenciar ambos campos de Password")
          }       
        else{
             if (clave1 != clave2){
            alert("Las Claves Introducidas no coinciden");
        }
        else{
            if (clave1.length < 8 || clave2.length < 8){
                alert("La Clave debe contener mas de 8 carácteres")
            }
            else{
                alert(clave1);
                alert(clave2);
            }
        }
        }
     }      
    } 
    
   
}


