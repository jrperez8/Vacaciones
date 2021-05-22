<main>
  <section>
  <div class="container-flex mt-1" style="background: url(<?php echo base_URL();?>/assets/images/ima19.jpg) no-repeat left center; background-size: cover;">    
     <div class="row">
      <div class="col-sm-12 d-flex my-5 justify-content-center">
        <h1 class="caveat display-3 text-warning">Gestión de Inmuebles</h1>        
      </div>      
     </div>    
  </div>
  </section>
  <section>
    <div class="container mt-1">
      <div class="row">
        <div class="col-sm-6 mb-1">
          <input class="btn btn-dark btn-lg" type="button" value="Volver a Mi Perfil"  onclick="location.href='perfil'" name="volverperfil">
        </div> 
        <div class="col-sm-6 mb-1">
          <input class="btn btn-warning btn-lg" type="button" value="Agregar Inmueble" name="agregar" data-bs-toggle="modal" data-bs-target="#exampleModal3">
        </div> 
        <div>
         
        </div>
        <div class="container">
          <div class="row">
          <?php 
          foreach ($datosaptos as $datoapto){  
              $route = base_url()."/deleteapto?id_apto={$datoapto->id_apto}";
              $routeupdate = base_url()."/updateapto?id_apto={$datoapto->id_apto}";
              $template = "              
              <div class='col-12 col-sm-12 col-md-6 col-lg-4 mt-3'>              
               <div class='card' style='width: 18rem;'>                
                <h3 class='card-title'>{$datoapto->pais}</h3>
                <img src='{$datoapto->imagen_apto}' class='card-img-top special__img'>
                <div class='card-body'>
                  <h5 class='card-text'>{$datoapto->ciudad}</h5>
                  <p class='card-text'>{$datoapto->resena_apto}</p>
                  <p class='card-text'>Valor noche $ {$datoapto->valor_noche}</p>
                  <a href='{$route}' class='btn btn-outline-danger' onclick='return removeapto()'>Delete</a>
                  <button type='button' class='btn btn-outline-dark' data-bs-toggle='modal' data-bs-target='#editar'>Editar</button>                
                </div>
               </div>
               </div>           
               ";
              
              echo $template;           
              
          }          
          ?>      
          </div>        
        </div>
        
        
        
      </div>        
    </div>
  </section>
  <div class="modal fade" id="editar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                <h3 class="modal-title caveat" id="exampleModalLabel">ACTUALIZA LOS DATOS DE TU APARTAMENTO</h3>        
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>                 
                </div>
                <div class="modal-body">
                <form class="row g-3 needs-validation" action="<?php echo $routeupdate?>" method="POST" enctype="multipart/form-data" onsubmit="addDataModal()">                     
                  
                  <div class="col-md-12">
                     <label for="validationCustom01" class="form-label">Ingrese la Ciudad</label>
                     <input type="text" class="form-control" value="<?php echo ($datoapto->ciudad)?>"  id="actciudad" name="actciudad" required>                         
                  </div>
                  <div class="col-md-12">
                     <label for="validationCustom01" class="form-label">Ingrese el Pais</label>
                     <input type="text" class="form-control" value="<?php echo ($datoapto->pais)?>" id="actpais" name="actpais" required>                        
                  </div>
                  <div class="col-md-12">
                     <label for="validationCustom01" class="form-label">Ingrese Direccion Completa</label>
                     <input type="text" class="form-control" value="<?php echo ($datoapto->direccion)?>" id="actdireccion" name="actdireccion" required>                        
                  </div>                  
                  <div class="col-md-4">
                     <label for="validationCustom01" class="form-label"># de Habitaciones</label>
                     <input type="text" class="form-control" value="<?php echo ($datoapto->habitacion)?>" id="acthabitaciones" name="acthabitaciones" required>                        
                  </div>
                  <div class="col-md-8">
                     <label for="validationCustom01" class="form-label">Valor por Noche</label>
                     <input type="text" class="form-control" value="<?php echo ($datoapto->valor_noche)?>" id="actvalornoche" name="actvalornoche" required>                        
                  </div>                                   
                  <div class="col-md-12 mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Por Favor Ingrese una Breve Reseña del Inmueble</label>
                    <textarea class="form-control" id="actresena" name="actresena" required rows="3"></textarea>
                  </div>
                  <div class="col-md-12 mb-3">
                    <label for="formFile" class="form-label">Añada la imagen del Inmueble</label>
                    <input class="form-control" type="file" id="actfoto_apto" name="actfoto_apto" required>
                  </div>
                  <div class="col-md-12 mb-3">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary">Actualizar</button>  
                  </div>                                              
              </form>                  
              </div>                                
            </div>
          </div>
  </div> 

  <div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
     <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title caveat" id="exampleModalLabel">AGREGA TU APARTAMENTO</h3>        
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>      
      <div class="modal-body">    
       <div class="col-sm-12 mt-3">
          <form class="row g-3 needs-validation" action="<?php echo base_url(). '/newapto'?>" method="POST" enctype="multipart/form-data" onsubmit="addapto()">                     
                  
                  <div class="col-md-12">
                     <label for="validationCustom01" class="form-label">Ingrese la Ciudad</label>
                     <input type="text" class="form-control" id="ciudad" name="ciudad" required>                         
                  </div>
                  <div class="col-md-12">
                     <label for="validationCustom01" class="form-label">Ingrese el Pais</label>
                     <input type="text" class="form-control" id="pais" name="pais" required>                        
                  </div>
                  <div class="col-md-12">
                     <label for="validationCustom01" class="form-label">Ingrese Direccion Completa</label>
                     <input type="text" class="form-control" id="direccion" name="direccion" required>                        
                  </div>                  
                  <div class="col-md-4">
                     <label for="validationCustom01" class="form-label"># de Habitaciones</label>
                     <input type="text" class="form-control" id="habitaciones" name="habitaciones" required>                        
                  </div>
                  <div class="col-md-8">
                     <label for="validationCustom01" class="form-label">Valor por Noche</label>
                     <input type="text" class="form-control" id="valornoche" name="valornoche" required>                        
                  </div>                                   
                  <div class="col-md-12 mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Por Favor Ingrese una Breve Reseña del Inmueble</label>
                    <textarea class="form-control" id="resena" name="resena" required rows="3"></textarea>
                  </div>
                  <div class="col-md-12 mb-3">
                    <label for="formFile" class="form-label">Añada la imagen del Inmueble</label>
                    <input class="form-control" type="file" id="foto_apto" name="foto_apto" required>
                  </div>
                  <div class="col-md-12 mb-3">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary">Guardar</button>  
                  </div>                                              
         </form>                  
        </div>           
      </div>
      
    </div>
  </div>
</div>  



</main>