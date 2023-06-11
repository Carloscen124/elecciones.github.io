
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
					var centro=new google.maps.LatLng(-0.9330512504268328, -78.61452689062011);
					var mapaLugaresTuristicos=new google.maps.Map(
						document.getElementById('mapaLugares'),
						{
							center:centro,
							zoom: 3,
							mapTypeId:google.maps.MapTypeId.HYBRID
						}
					);
				<?php if($candidatos): ?>
						<?php foreach($candidatos as $candidatosTemporal): ?>
						var coordenadaTemporal=new google.maps.LatLng(<?php echo $candidatosTemporal->latitud; ?>, <?php echo $candidatosTemporal->longitud; ?>);
						var marcador=new google.maps.Marker({
								position:coordenadaTemporal,
								title: "<?php echo $candidatosTemporal->provincia; ?>",
								map:mapaLugaresTuristicos
						});
						<?php endforeach; ?>
				<?php endif; ?>


			} //CIERRE DE LA FUNCION INIT MAP
			//DEBER DE SIG:
			//SISTEMA D EINFORMACION GEOGRAFICA REGISTRAR INFORMACIÓN DE LOS CANDIDATOS
			//NUEVO CANDIDATO, DIGNIDAD:(SELECT: PRESIDENTE, ASAMBLEISTA NACIONAL, ASAMBLEISTA PROVINCIAL)
			//APELLIDO DEL CANDIDATO, NOMBRE DEL CANDIDATO, MOVIMIENTO (PARTIDO POLITICO)
			//INGRESAR LATITUD Y LONGITUD (DIRECCION DEL CANDIDATO)
			//BOTON GUARDAR Y CANCELAR
			//MENU DE 3 BOTONES
			//REPORTE PRESIDENTES
			//REPORTE ASAMBLEISTA NACIONALES
			//REPORTE ASAMBLEISTA PROVINCIALES
			//REPORTE GENERAL
			//EN CADA REPORTE ABRIR UN MAPA Y GRAFICAR LOS DATOS
			//REVISAR DISEÑO DE LA BASE DE DATOS, DISEÑO INTERFAZ GRÁFICA DE USUARIO,SUBIR A GITLAB (1 COMMIT POR CADA REPORTE = MAS DE 7 COMMITS)
			//INSERCION DE CANDIDATOS, REPORTE (GENERAL MAS QUE) CON EL ICON YA CAMBIAMOS DE COLOR
			//BASE DE DATOS MAS DOS CAMPOS

			//TRAER LA HOJA CON LA RUBRICA DE CADA ITEM
		</script>
