<style>
  .carousel-item img {
    width: 400px; /* Tamaño deseado */
    height: 400px; /* Tamaño deseado */
    object-fit: cover; /* Ajuste de la imagen */
  }
</style>

<div id="carouselExample" class="carousel slide">
  <div class="carousel-inner">
    <div class="carousel-item active">
  <img src="<?php echo base_url(); ?>/plantilla/img/c1.jpg" class="d-block w-100" alt="VOTOS">
    </div>
    <div class="carousel-item">
      <img src="<?php echo base_url(); ?>/plantilla/img/c3.jpg" class="d-block w-100" alt="VOTOS">
    </div>
    <div class="carousel-item">
      <img src="<?php echo base_url(); ?>/plantilla/img/c2.jpg" class="d-block w-100" alt="VOTOS">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>


<br>


<div class="container">
  <div class="row">
    <div class="col-md-8">
      <h3>IMPORTANCIA ELECCIONES</h3>
      <p class="text-justify">A través del ejercicio del voto, la ciudadana y el ciudadano cumplen con una función constitutiva del sistema democrático. En su sentido funcional, el carácter voluntario del voto como derecho pasa a un segundo plano para imponerse su carácter de compromiso, de deber ciudadano.</p>
    </div>
    <div class="col-md-4">
      <img src="<?php echo base_url(); ?>/plantilla/img/i1.jpeg" alt="">
    </div>
  </div>
</div>


<br>

<div class="container">
  <div class="row">
    <div class="col-md-3">
      <a href="<?php echo site_url() ?>/candidatos/presidentes"><p><img src="<?php echo base_url(); ?>/plantilla/img/1.png" alt="presidente">REPORTE PRESIDENTES</p></a>
    </div>
    <div class="col-md-4">
      <a href="<?php echo site_url() ?>/candidatos/nacionales"><p><img src="<?php echo base_url(); ?>/plantilla/img/1.png" alt="nacionales">REPORTE ASAMBLEISTAS NACIONALES</p></a>
    </div>
    <div class="col-md-5">
      <a href="<?php echo site_url() ?>/candidatos/provinciales"><p><img src="<?php echo base_url(); ?>/plantilla/img/1.png" alt="provinciales">REPORTE ASAMBLEISTAS PROVINCIALES</p></a>
    </div>
  </div>
</div>
