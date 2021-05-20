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
        
        <?php 
          foreach ($datosaptos as $datoapto){
              $template = "
              <div class='col-12 col-sm-12 col-md-6 col-lg-4 mt-3'> 
               <div class='card' style='width: 18rem;'>
                <img src='{$datoapto->imagen_apto}' class='card-img-top special__img'>
                <div class='card-body'>
                  <h5 class='card-title'>{$datoapto->ciudad}</h5>
                  <p class='card-text'>{$datoapto->resena_apto}</p>
                  <p class='card-text'>{$datoapto->valor_noche}</p>
                  <a href='' class='btn btn-outline-danger' data-bs-toggle='modal' data-bs-target='#exampleModal4'>Delete</a>
                  <button type='button' class='btn btn-outline-dark' data-toggle='modal' data-target=''>  
                                Editar
                </button>                
                </div>
               </div>
               </div>
              ";
              echo $template; 
          }          
          ?>      
        
      </div>        
    </div>
  </section>
  <div class="modal fade" id="modal_actualiza" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="modal_actualiza" style="color: #008080;">Hospedajes & Vacaciones © Editar Alojamiento</h5>                 
                </div>
                <div class="modal-body">
                  <form action="" method="POST">
                  <div class="form-group">
                    <label style="color: #008080;">Nombre:</label>
                  <input type="text" class="form-control" name="nameEditar" value="">
                  </div>
                  <div class="form-group">
                    <label style="color: #008080;">Ciudad:</label>
                  <input type="text" class="form-control" name="cityEditar" value="">
                  </div>
                  <div class="form-group">
                    <label style="color: #008080;">Email:</label>
                  <input type="text" class="form-control" name="emailEditar" value="">
                  </div>
                  <div class="form-group">
                    <label style="color: #008080;">Celular:</label>
                  <input type="text" class="form-control" name="celEditar" value="">
                  </div>         
            <div class="form-group">
              <label style="color: #008080;">Descripcion:</label>
                <textarea class="form-control" rows="3" name="descripcionEditar"></textarea>
                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancelar</button>
                <button type="submit" class="btn btn-outline-info" name="btnEditar">Actualizar</button>
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
                    <input class="form-control" type="file" id="foto_apto" name="foto_apto">
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

<div class="modal fade" id="exampleModal4" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header text-white bg-danger">
        <h5 class="modal-title" id="exampleModalLabel">Eliminar Inmueble</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>Estas seguro de Eliminar esta propiedad de tu lista de inmuebles registrados?</p>
      </div>
      <div class="modal-footer">
      <form action="POST" action="<?php echo base_url();?>/deleteapto">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-danger">Confirmar Eliminación</button>
      </form>        
      </div>
    </div>
  </div>
</div>

</main>