
		<br>
		<h1 class="text-center">REPORTE GENERAL</h1>
		<br>
		<div class="container">
				<div class="col-md-12">
					<div id="mapaLugares" style="height:600px; width:100%; border:2px solid black;"></div>
				</div>
		</div>

		<script type="text/javascript">
			function initMap(){
					var centro=new google.maps.LatLng(-0.17834732047773233, -78.46352701164128);
					var mapaLugaresTuristicos=new google.maps.Map(
						document.getElementById('mapaLugares'),
						{
							center:centro,
							zoom: 10,
							mapTypeId:google.maps.MapTypeId.HYBRID
						}
					);
				<?php if($candidatos): ?>
						<?php foreach($candidatos as $lugarTemporal): ?>
						var coordenadaTemporal=new google.maps.LatLng(<?php echo $lugarTemporal->latitud; ?>, <?php echo $lugarTemporal->longitud; ?>);
						var marcador=new google.maps.Marker({
								position:coordenadaTemporal,
								title: "<?php echo $lugarTemporal->provincia; ?>",
								// icon:"<?php echo base_url(); ?>/plantilla/img/pon.png",
								map:mapaLugaresTuristicos
						});
						<?php endforeach; ?>
				<?php endif; ?>
			}
		</script>
