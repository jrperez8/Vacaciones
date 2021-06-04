<main>
<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 mt-2">
                <h2 class="display-4  d-flex justify-content-center caveat" >Hospedajes & Vacaciones</h2> 
            </div>
            <div class="col-sm-6 mb-1">
                    <input class="btn btn-dark btn-lg" type="button" value="Volver a Mi Perfil"  onclick="location.href='rol'" name="volverperfil">
            </div>  
            <div class="col-sm-12 mt-2">
                <div class="input-group mb-3">                    
                    <label class="input-group-text bg-primary text-white" for="inputGroupSelect01">El Viaje de tus sueños</label>
                    <form action="<?php echo base_url();?>/pais" method="POST" >
                        <select class="form-select form-select-lg" id="paisapto" name="paisapto" onchange="this.form.submit();">
                            <option selected>Seleccione un País...</option>
                            <option value="Colombia">Colombia</option>
                            <option value="Peru">Perú</option>
                            <option value="Ecuador">Ecuador</option>
                            <option value="Mexico">México</option>
                            <option value="Argentina">Argentina</option>
                            <option value="Brasil">Brasil</option>
                        </select>
                    </form> 
                </div>                                 
            </div>                
        </div>
    </div>
</section>
<section>
    <div class="container">
        <div class="row">      
        <?php foreach ($paisaptos as $apto):?>            
            <div class="col-12 col-sm-12 col-md-6 col-lg-4 mt-3">
                <div class="card mb-3" style="max-width: 540px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="<?php echo ($apto->imagen_apto)?>" class="card-img-top special__img" alt="Descubre más...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo ($apto->ciudad)?></h5>
                                  <p class="card-text"><?php echo ($apto->resena_apto)?></p>
                                  <p class="card-text"><small class="text-muted">Valor noche $ <?php echo ($apto->valor_noche)?></small></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>       
        <?php endforeach ?> 
        </div>
    </div>
</section>
<section>
    <div>
        <h4 class="display-5  d-flex justify-content-center amiri" >Busca tu Alojamiento Favorito</h4>
    </div>
</section>       
            

</main>
