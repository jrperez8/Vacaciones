<main>
  <section>
  <div class="container-flex" style="background: url(<?php echo base_URL();?>/assets/images/ima19.jpg) no-repeat left center; background-size: cover;">    
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
          <input class="btn btn-dark btn-lg" type="button" value="Ver Mi Perfil"  onclick="location.href='perfil'" name="volverperfil">
        </div> 
        <div class="col-sm-6 mb-1">
          <input class="btn btn-warning btn-lg" type="button" value="Agregar Inmueble" name="agregar" data-bs-toggle="modal" data-bs-target="#exampleModal">
        </div>  
        <div class="col-sm-12 mt-3">      
         <div class="card" style="width: 18rem;">
              <img src="<?php echo base_URL();?>/assets/images/ima5.jpg" class="card-img-top" alt="...">
            <div class="card-body">          
              <button type="button" class="btn btn-outline-dark" data-bs-toggle="modal" data-bs-target="#modal_actualiza">
                  Editar
              </button>
              <button type="button" class="btn btn-outline-danger" data-toggle="modal" data-bs-target="modal_actualiza">    
                  Eliminar
              </button>
            </div>  
          </div>          
        </div>
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
            </div>                
            <div class="modal-footer mt-2">
              <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancelar</button>
              <button type="submit" class="btn btn-outline-info" name="btnEditar">Actualizar</button>
            </div>
               </form>
              </div>                                
            </div>
          </div>
  </div> 

  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
     <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">AGREGA ACA TU APARTAMENTO</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">    
       <div class="col-sm-12 mt-3">
          <form class="row g-3 needs-validation">
                  <div class="col-md-12">
                     <label for="validationCustom01" class="form-label">Ingrese la Ciudad</label>
                     <input type="text" class="form-control" id="validationCustom01" required>                         
                  </div>
                  <div class="col-md-12">
                     <label for="validationCustom01" class="form-label">Ingrese el Pais</label>
                     <input type="text" class="form-control" id="validationCustom01" required>                        
                  </div>
                  <div class="col-md-12">
                     <label for="validationCustom01" class="form-label">Ingrese Direccion Completa</label>
                     <input type="text" class="form-control" id="validationCustom01" required>                        
                  </div>
                  <div class="col-md-12 mb-3">
                    <label for="formFile" class="form-label">Añada las imagenes del Inmueble</label>
                    <input class="form-control" type="file" id="formFile">
                  </div>
                  <div class="col-md-4">
                     <label for="validationCustom01" class="form-label"># de Habitaciones</label>
                     <input type="text" class="form-control" id="validationCustom01" required>                        
                  </div>
                  <div class="col-md-8">
                     <label for="validationCustom01" class="form-label">Valor por Noche</label>
                     <input type="text" class="form-control" id="validationCustom01" required>                        
                  </div>
                  <div class="col-md-12 mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Por Favor Ingrese una Breve Reseña del Inmueble</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" required rows="3"></textarea>
                  </div>
                  <div class="col-md-6">
                      <label class="mb-2" for="">SELECCIONE SU UBICACIÓN</label>
                      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.140575193116!2d-75.5640742857272!3d6.245198595479445!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e442859d833cfa3%3A0xa3fca5c91547777f!2sCESDE.!5e0!3m2!1ses!2sco!4v1617145891903!5m2!1ses!2sco" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                  </div>              
         </form>                  
        </div>           
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-primary">Guardar</button>
      </div>
    </div>
  </div>
</div>      
</main>