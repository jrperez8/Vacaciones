<main>
 <section>  
   <div class="container-fluid" style="background: url(<?php echo base_URL();?>/assets/images/ima8.jpg) no-repeat left center; background-size: cover;" >     
   <div class="px-5 py-5 my-1 mb-1 text-center ">  
  <h1 class="display-1 text-warning fw-bold amiri mb-5 pt-5">Hospedajes & Vacaciones</h1>
  <div class="col-lg-6 mx-auto">
    <p class="lead caveat h1 text-white">Escápate a la Naturaleza, Descubre alojamientos cerca de ti o Vive en cualquier lugar del mundo</p>
    <div class="d-grid gap-2 d-sm-flex justify-content-sm-center mt-5 mb-5 pt-4">
      <button type="button" class="btn btn-outline-light btn-lg px-4 me-sm-3 amiri" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">INGRESE</button>
      <button type="button" class="btn btn-warning btn-lg px-4 amiri" data-bs-toggle="modal" data-bs-target="#exampleModal2">REGISTRESE</button>
    </div>
  </div>
  </div>
   </div>  
 </section>
  <section class="text-center container-flex">
    <div class="row py-lg-5 bg-warning">
      <div class="col-lg-6 col-md-8 mx-auto">
        <h1 class="fw-light display-5 text-white amiri">Bienvenidos a tu Alojamiento Soñado</h1>
        <p class="lead text-muted caveat h1">Acá encontraras en lugar ideal para disfrutar tus viajes de descanso o negocio</p>        
      </div>
    </div>
  </section>
  <div class="album">
    <div class="container">
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 g-3">
        <div class="col">
            <div class="card my-1" style="width: 17rem;">
                <img src="<?php echo base_URL();?>/assets/images/ima9.jpg" class="card-img-top special__img px-1 py-1" alt="Sueña">
            <div class="card-body">
                <h5 class="card-title text-center amiri">Sueña</h5>           
            </div>
            </div>
        </div>
        <div class="col">
            <div class="card my-1" style="width: 17rem;"> 
                <img src="<?php echo base_URL();?>/assets/images/ima7.jpg" class="card-img-top special__img px-1 py-1" alt="Encuentra">
            <div class="card-body">
                <h5 class="card-title text-center amiri">Viaja</h5>  
            </div>
            </div>
        </div>
        <div class="col">
            <div class="card my-1" style="width: 17rem;">
                <img src="<?php echo base_URL();?>/assets/images/ima2.jpg" class="card-img-top special__img px-1 py-1" alt="Viaja">
            <div class="card-body">
                <h5 class="card-title text-center amiri">Encuentra</h5> 
            </div>
            </div>
        </div>
        <div class="col">
            <div class="card my-1" style="width: 17rem;">
                <img src="<?php echo base_URL();?>/assets/images/ima5.jpg" class="card-img-top special__img px-1 py-1" alt="Disfruta">
            <div class="card-body">
                <h5 class="card-title text-center amiri">Disfruta</h5>
            </div>
            </div>
        </div>
     </div>
    </div>
   </div>



  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header bg-warning">
        <h5 class="modal-title text center amiri" id="exampleModalLabel">INICIO DE SESIÓN</h5> 
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>       
      </div>
      <div class="modal-body">
      <form method="POST" action="<?php echo base_url();?>/signin" onsubmit="return loginvalidation()">
                <div class="mb-3">
                 <label for="exampleInputEmail1" class="form-label">Email</label>
                  <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
                  <div id="emailHelp" class="form-text">No tiene una Cuenta? <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal2">Cree una</a></div>
                 </div>
                 <div class="mb-3">
                     <label for="exampleInputPassword1" class="form-label">Password</label>
                     <input type="password" class="form-control" id="password" name="password">                     
                 </div>                 
                 <div class="mb-3">
                    <button type="submit" value="" class="btn btn-warning" id="btn_ingreso">INICIAR SESIÓN</button> 
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">CANCELAR</button>                   
                 </div>                 
             </form>
      </div>     
    </div>
  </div>
</div> 


<div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header bg-warning">
        <h5 class="modal-title" id="exampleModalLabel">INGRESE SUS DATOS PERSONALES</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
    <form class="row g-3 needs-validation" action="<?php echo base_url(). '/add'?>" method="POST" name="form1" onsubmit="return registervalidation()" novalidate>
       <div class="col-md-12">
         <label for="validationCustom01" class="form-label">Nombre Completo</label>
         <input type="text" class="form-control" id="name" name="name" required>
      </div>
      <div class="col-md-12">
        <label for="validationCustomUsername" class="form-label">Email</label>
        <div class="input-group has-validation">
          <span class="input-group-text" id="inputGroupPrepend">@</span>
          <input type="text" class="form-control" id="email" name="email" aria-describedby="inputGroupPrepend" required>     
        </div>
      </div>
  <div class="col-md-6">
    <label for="validationCustomUsername" class="form-label">Password</label>
    <div class="input-group has-validation">
     <input type="password" class="form-control" id="password1" name="password" required>      
    </div>
  </div>
  <div class="col-md-6">
    <label for="validationCustomUsername" class="form-label">Confirme su Password</label>
    <div class="input-group has-validation">
     <input type="password" class="form-control" id="password2" required>      
    </div>
  </div>
  <div class="col-md-6">
    <label for="validationCustom03" class="form-label">País</label>
    <input type="text" class="form-control" id="country" name="country" required>    
  </div>
  <div class="col-md-6">
    <label for="validationCustom03" class="form-label">Ciudad</label>
    <input type="text" class="form-control" id="city" name="city" required>    
  </div> 
    <div class="">
      <label for="exampleFormControlTextarea1" class="form-label">Ingresa acá una breve reseña sobre ti y tus inmuebles...</label>
      <textarea class="form-control" id="review" name="review" rows="4"></textarea>
    </div>    
      <div>
         <label for="">SELECCIONA TU PERFIL</label>
            <input class="form-check-input" type="radio" name="rol" value="anfitrion">Anfitrión</input>           
            <input class="form-check-input" type="radio" name="rol" value="cliente">Cliente</input>             
       </div>
        <div class="col-12">
            <button type="submit" value="REGISTRARSE" class="btn btn-warning" id="btn_registro">Registrarse</button>
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
         </div>
      </form>
      </div>      
    </div>
  </div>
</div>
</main>