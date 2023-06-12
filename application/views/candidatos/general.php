
		<br>
		<h1 class="text-center">REPORTE GENERAL</h1>
		<br>
		<div class="container">
				<div class="col-md-12">
					<div id="mapaLugares" style="height:600px; width:100%; border:2px solid black;"></div>
				</div>
		</div>

		<script type="text/javascript">
		  function initMap() {
		    var centro = new google.maps.LatLng(-0.17834732047773233, -78.46352701164128);
		    var mapaLugares = new google.maps.Map(
		      document.getElementById('mapaLugares'), {
		        center: centro,
		        zoom: 10,
		        mapTypeId: google.maps.MapTypeId.HYBRID,
						apiKey: 'AIzaSyCoObNZz2rn6AMxGvMKq1GDTFvd7CzGwdY'
		      }
		    );

		    <?php if($candidatos): ?>
		      <?php foreach($candidatos as $lugarTemporal): ?>
		        <?php if($lugarTemporal->dignidad == "Presidente"): ?>
		          var icono = "<?php echo base_url(); ?>/plantilla/img/presidentes.png";
		        <?php elseif($lugarTemporal->dignidad == "Asambleista Provincial"): ?>
		          var icono = "<?php echo base_url(); ?>/plantilla/img/placeholder.png";
		        <?php elseif($lugarTemporal->dignidad == "Asambleista Nacional"): ?>
		          var icono = "<?php echo base_url(); ?>/plantilla/img/nac.png";
		        <?php else: ?>
		          var icono = null;
		        <?php endif; ?>

		        var coordenada = new google.maps.LatLng(<?php echo $lugarTemporal->latitud; ?>, <?php echo $lugarTemporal->longitud; ?>);
		        var marcador = new google.maps.Marker({
		          position: coordenada,
		          title: "<?php echo $lugarTemporal->dignidad; ?>",
		          icon: icono,
		          map: mapaLugares
		        });
		      <?php endforeach; ?>
		    <?php endif; ?>
		  }
		</script>
