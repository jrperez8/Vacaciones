<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hospedajes & Vacaciones</title>
    <link  rel="icon"   href="<?php echo base_URL();?>/assets/images/ima8.jpg" type="image/png"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_URL();?>/assets/css/estilos.css">
    <link rel="stylesheet" href="<?php echo base_URL();?>/assets/css/fontello.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">    
</head>
<body>
  <header>
    <nav class="navbar navbar-dark bg-dark">
      <div class="container-fluid">
       <a href="<?php echo base_URL();?>" class="navbar-brand pe-2 text-warning">Hospedajes & Vacaciones</a>
      <form class="d-flex text-white">
        <p class="main-header__contacInfo__phone">
            <span class="icon-phone">(4) 444-4444</span>
         </p>
         <p class="main-header__contacInfo__address mx-3">
            <span class="icon-location">Medellín - Colombia</span>
         </p>
         <?php 
               foreach ($datousuarios as $datousuario){
                echo "<h4 class='text-warning amiri'>Hola {$datousuario->name} </h4>";
                } ?>         
        <button type="button" class="btn btn-outline-warning mx-2" data-bs-toggle="modal" data-bs-target="#exampleModal">Cerrar Sesión</button>     
      </form>      
     </div>
   </nav>
  </header> 

  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header bg-warning text-white">
        <h5 class="modal-title" id="exampleModalLabel">Cerrar Sesión</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
       <p>Deseas Cerrar tu Sesión?</p>
      </div>
      <div class="modal-footer">
        <form method="POST" action="<?php echo base_url();?>/signout">
         <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
         <button type="submit" class="btn btn-warning" onclick="location.href='<?php echo base_URL();?>'">Confirmar</button>
        </form>        
      </div>
    </div>
  </div>
</div>