<main>
<section>
  <div class="container-flex mt-1" style="background: url(<?php echo base_URL();?>/assets/images/ima16.jpg) no-repeat left center; background-size: cover;">
    <div class="row">
      <div class="col-sm-5">
        <div class="col-sm-12 rounded my-4">
          <img src="<?php echo base_URL();?>/assets/images/atencion.jpg" class="rounded-circle img-fluid img-thumbnail mx-auto d-block"  width="120" height="120">
        </div> 
          <div class="col-sm-12 d-flex justify-content-center mb-4" data-bs-toggle="modal" data-bs-target="#exampleModal">
              <button class="btn btn-warning btn-sm" type="submit">Actualizar Imagen</button>
          </div>         
        </div>
      <div class="col-sm-7">          
            <div class="col-sm-12 my-4">
              <?php 
               foreach ($datousuarios as $datousuario){
                echo "<h1 class='text-center caveat display-3 text-white'>Hola, Bienvenido {$datousuario->name} </h1>";
                } ?>               
            </div>    
            <div class="col-sm-12 d-flex justify-content-center pt-4 ">
             <h3><button class="btn btn-warning amiri" onclick="location.href='aptos'">Registra o Gestiona acá tus Inmuebles</button></h3>
           </div>                
      </div>
    </div>   
  </div>   
</section>
<section>
    <div class="container-flex">
      <div class="row">
        <div class="col-sm-8 mx-auto">                  
            <div class="col-sm-12 mt-3">
                <?php
                 foreach ($datousuarios as $datousuario){
                 echo "<p class='amiri display-5 text-center '>Algunos de tus inmuebles registrados en {$datousuario->city} </p>";
                } ?>
            </div>      
            <div class="col-sm-12 mb-3">
              <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="<?php echo base_URL();?>/assets/images/ima3.jpg" class="d-block w-100 special__img rounded" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="<?php echo base_URL();?>/assets/images/ima4.jpg" class="d-block w-100 special__img rounded" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="<?php echo base_URL();?>/assets/images/ima5.jpg" class="d-block w-100 special__img rounded" alt="...">
                </div>
              </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
           </div>          
       </div>
      </div>
    </div>              
</section>
<section>
  <div class="container">
   <div class="row">
     <div class="col-sm-12 pt-1 mt-1 mb-1">
     <button class="btn btn-dark btn-lg" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
      Leer Mi Reseña
     </button>
     <div class="collapse" id="collapseExample">
      <div class="card card-body">
      <?php
        foreach ($datousuarios as $datousuario){
                echo "<h2 class='text-center caveat text-dark bg-white'>{$datousuario->review} </h2>";
                } ?> 
        <div class="col-sm-12 d-flex justify-content-center mt-4 pb-1">
          <button class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Actualizar Mi Reseña</button>
        </div> 
      </div>                       
     </div>                
   </div>         
  </div>  
  </div>             
</section>

     
  

  <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
   <div class="modal-dialog modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Escriba su Reseña - Max 150 carácteres</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <textarea class="form-control" id="review" rows="4"></textarea>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Actualizar</button>
      </div>
    </div>
   </div>
  </div>

  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Actualizar Foto</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
       <div class="col-sm-12 pt-1 mt-1 mb-3">
          <form action="" method="POST" enctype="multipart/form-data">
            <label for="formFileSm" class="form-label">Selecciona o actualiza tu Foto de perfil</label>
            <input class="form-control form-control-sm " id="foto_perfil" type="file">                       
          </form>        
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary">Guardar</button>
      </div>
    </div>
  </div>
</div>
</div>
</main>