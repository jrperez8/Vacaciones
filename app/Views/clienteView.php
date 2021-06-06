<main>
<section>
    <div class="container-flex" style="background: url(<?php echo base_URL();?>/assets/images/ima1.jpg) no-repeat left center; background-size: cover;">
        <div class="row">
            <div class="col-sm-12 mt-2">
                <h1 class="display-1  d-flex justify-content-center caveat text-warning" >Hospedajes & Vacaciones</h1> 
            </div>
            <div class="col-sm-12 my-3 mx-3">
                <form action="<?php echo base_url();?>/pais" method="POST">
                    <button type="submit" value="" class="btn btn-dark text-warning amiri" id="btn_ingreso">ENCUENTRA LOS MEJORES ALOJAMIENTOS</button>
                </form>                  
            </div>                
        </div>
    </div>
</section>
<section>    
        <div class="container">
            <div class="row">
              <div class="col-sm-6 pt-1 mt-1 mb-1">
                <button class="btn btn-dark btn-lg" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample2" aria-expanded="false" aria-controls="collapseExample">
                    Actualizar Mi Información de Pérfil
                </button>
                <div class="collapse" id="collapseExample2">
                    <div class="card card-body">
                    <h4 class="caveat text-center col-sm-12 mt-3">Actualizar Información</h4> 
             <form class="row g-3 needs-validation" action="<?php echo base_url(). '/updateuser'?>" method="POST" name="form2" onsubmit="return updateValidation()" novalidate>
                <div class="col-md-8">
                    <label for="validationCustom01" class="form-label amiri">Nombre Completo</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="col-md-8">
                    <label for="validationCustomUsername" class="form-label amiri">Email</label>
                    <div class="input-group has-validation">
                    <span class="input-group-text" id="inputGroupPrepend">@</span>
                    <input type="text" class="form-control" id="email" name="email" aria-describedby="inputGroupPrepend" required>     
                    </div>
                </div>
                    <div class="col-md-5">
                    <label for="validationCustomUsername" class="form-label amiri">Password</label>
                    <div class="input-group has-validation">
                    <input type="password" class="form-control" id="password1" name="password" required>      
                    </div>
                    </div>
                    <div class="col-md-5">
                    <label for="validationCustomUsername" class="form-label amiri">Confirme su Password</label>
                    <div class="input-group has-validation">
                    <input type="password" class="form-control" id="password2" required>      
                    </div>
                    </div>
                    <div class="col-md-8">
                    <label for="validationCustom03" class="form-label amiri">País</label>
                    <input type="text" class="form-control" id="country" name="country" required>    
                    </div>
                    <div class="col-md-8">
                    <label for="validationCustom03" class="form-label amiri">Ciudad</label>
                    <input type="text" class="form-control" id="city" name="city" required>    
                    </div> 
                   
                    <div class="col-12 mb-2">
                    <button type="submit" value="REGISTRARSE" class="btn btn-warning" id="btn_registro">Actualizar</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                </div>
                </form>
                </div>                       
              </div>                
             </div> 
             
                <div class="col-sm-5">
                    <div class="col-sm-12 rounded my-2">
                        <?php 
                            foreach ($datousuarios as $datousuario){
                                echo "<img src= {$datousuario->photo} class='rounded-circle img-fluid img-thumbnail mx-auto d-block' width='120' height='120'> </img>";
                                } ?>           
                    </div> 
                    <div class="col-sm-12 d-flex justify-content-center mb-2" data-bs-toggle="modal" data-bs-target="#exampleModal3">
                        <button class="btn btn-warning btn-sm" type="submit">Actualizar Foto</button>
                    </div>   
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
                                <button class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Actualizar</button>
                                </div> 
                            </div>                       
                            </div>                
                        </div>         
                </div>
                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">Escriba su Reseña - Máx 300 carácteres</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                        <form action="<?php echo base_url();?>/review" method="POST">
                            <textarea class="form-control mb-2" id="actreview" name="actreview" rows="4"></textarea>
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Actualizar</button> 
                        </form>
                        </div>
                            
                        </div>
                    </div>
                    </div>
                
                <div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Actualizar Foto</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                    <div class="col-sm-12 pt-1 mt-1 mb-3">

                        <form action="<?php echo base_url();?>/images" method="POST" enctype="multipart/form-data">
                            <label for="formFileSm" class="form-label">Selecciona o actualiza tu Foto de perfil</label>
                            <input class="form-control form-control-sm mb-2" id="foto_perfil" type="file" name="foto_perfil" required> 
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                            <button type="submit" class="btn btn-primary">Guardar</button>                    
                        </form>   

                        </div>
                    </div>                    
                    </div>
                </div>
             </div>                    
            </div>  
        </div>  
</section>       
            

</main>
