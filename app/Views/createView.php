<form class="row g-3 needs-validation" action="<?php echo base_url(). '/add'?>" method="POST" name="form1" onsubmit="registervalidation()" novalidate>
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
            <button type="submit" value="REGISTRARSE" class="btn btn-warning" id="btn_registro" onclick="registervalidation()">Registrarse</button>
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
         </div>
</form>