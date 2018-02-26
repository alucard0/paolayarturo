<?php 
include 'header.php';
/**
* 	@author Amilkhael Chávez Delgado;
*	Documento: Live del micrositio
*/
?>
	<div class="container-fluid bgAzul">
		<div class="fraseIntro justify-content-center">
			<p>Hagamos de este día un mosaico de experiencias</p>
			<p>¿Qué sería de nosotros sin tí? :D</p>
		</div>
	</div>
<figure class="nomargin"><img src="images/mosaicos/mosaicoDivision.png" alt="" class="img-fluid"></figure>
	<div class="container-fluid" id="boletos">
		<div class="row justify-content-center no-gutters">
			
			<div class="col-12 col-sm-6">
				<div class="row no-gutters">
					<div class="col-12">
						<p class="frase">Para nosotros es un honor  que nos acompañes y seas parte de nuestro sueño,  por que como dice Michael J. Fox, "La familia no es algo importante. Lo es todo."</p>

						<p class="restriccion">Evento sólo para mayores de 21 años</p>
					</div>
					<div class="col-2 col-sm-2 lugar">
						<figure class="text-right mosaico">
							<img src="images/mosaicos/hotel/4_ICONO-PALMA_100X100.png" alt="" class="img-fluid">
						</figure>
					</div>
					<div class="col-10 col-sm-10" id="lugarFecha">
						<p class="titulo">Lugar y Fecha</p>
						<hr class="rosa">
					</div>
				</div>
			</div>
				
			<div class="col-12 col-sm-6 bgBoletos" data-toggle="modal" data-target="#modalBoletos">
				<div class="row botonBoleto justify-content-center no-gutters">
					<div class="col-2">
						<figure class="nomargin text-left"><img src="images/mosaicos/2_ICONO_IZQ_PYA.png" alt="" class="img-fluid"></figure>
					</div>
					<div class="col-10 col-sm-8 bgBoletos">
						
						<p class="titulo">Boletos</p>
						
					</div>
					<div class="col-2"></div>

					<div class="col-12">
						<p class="contenido">Obten tus boletos<br><span class="oi oi-data-transfer-download"></span></p>
					</div>
				</div>
			</div>

		</div>
	</div>

	
	<!-- Modal -->
	<div class="modal fade" id="modalBoletos" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog modal-dialog-centered" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLabel">Descarga tus boletos</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	        <form action="#">
	        	<div class="form-group">
	        		<label for="correo">Dirección de correo</label>
    				<input type="email" class="form-control" id="correo" aria-describedby="emailHelp" placeholder="Escribe tu correo" required="required">
    				<small id="emailHelp" class="form-text text-muted">Los boletos te llegarán a tu correo.</small>
	        	</div>
	        	<button type="submit" class="btn btn-primary">Obtener boletos</button>
	        </form>
	      </div>
	      <div class="modal-footer">
	       
	      </div>
	    </div>
	  </div>
	</div>

	<div class="container-fluid" id="ceremonia">
		<div class="row justify-content-center">
			<div class="col-12">
				<p class="contenido">La ceremonia religiosa y el banquete tendrá lugar el 14<br> de julio 2018 en el hotel Tres Cielos Tequesquitengo.</p>
				<a href="http://trescielos.mx/" target="_blank" rel="noopener" class="mx-auto">trescielos.mx</a>
			</div>
		</div>
	</div>


	<div class="bannerHotel infoHotel">
		<div class="container">
			<div class="row justify-content-center">
				<figure class="text-center">
					<img src="images/trescielos/3Cielos_Logo.png" alt="logo Hotel Tres Cielos" class="img-fluid">
				</figure>
			</div>
			<div class="row justify-content-center">
				<p>¿Qué mejor lugar para consentir a nuestros invitados?</p>

			</div>
		</div>
	</div>
	<!--Aqui va carrousel-->
	<div class="container-fluid">
		<div class="row">
			<div class="owl-carousel owl-theme">
  	  	<figure class="item">
			<img src="images/trescielos/8_TRESCIELOS.jpg" alt="" class="img-fluid">
   		</figure>
	  	<figure class="item">
   			<img src="images/trescielos/5_TRESCIELOS.jpg" alt="" class="img-fluid">
   		</figure>
	  	<figure class="item">
   			<img src="images/trescielos/4_TRESCIELOS.jpg" alt="" class="img-fluid">
   		</figure>
   		<figure class="item">
   			<img src="images/trescielos/3_TRESCIELOS.jpg" alt="" class="img-fluid">
   		</figure>
		<figure class="item">
   			<img src="images/trescielos/2_TRESCIELOS.jpg" alt="" class="img-fluid">
   		</figure>
   		<figure class="item">
   			<img src="images/trescielos/6_TRESCIELOS.jpg" alt="" class="img-fluid">
   		</figure>
   		<figure class="item">
   			<img src="images/trescielos/7_TRESCIELOS.jpg" alt="" class="img-fluid">
   		</figure>
	   		<figure class="item">
	  			<img src="images/trescielos/1_TRESCIELOS.jpg" alt="" class="img-fluid">
		</figure>
   		<div class="item videoWrapper">
   			<iframe width="100%" src="https://www.youtube.com/embed/5sI5OTtQmxc?rel=0&amp;showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
   		</div>
 	</div>
		</div>
	</div>
	
	<div class="container-fluid" id="hotel">
		<div class="row no-gutters">
			<div class="col-2 col-sm-1">
				<figure class="text-right mosaico">
					<img src="images/mosaicos/hotel/4_ICONO-PALMA_100X100.png" alt="" class="img-fluid">
				</figure>
			</div>
			<div class="col-10 col-sm-5">
				<p class="titulo">Hotel</p>
				<p class="subtituloR">Reservación</p>
				<hr class="rosa">
			</div>
			<div class="col-12 col-sm-6">
				<div class="row">
					<div class="col-3">
						<figure class="text-right">
							<img src="images/iconos/cama.png" alt="hotel" class="img-fluid">
						</figure>
					</div>
					<div class="col-3">
						<p class="disponibilidad">Disponibilidad<br><span>12 habitaciones dobles</span></p>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-12 col-sm-6 contactoHotel">
				<p>Verónica</p>
				<a href="mailto:vero@trescielos.mx" class="mx-auto">vero@trescielos.mx</a>
				<a href="mailto:reservaciones@trescielos.mx" class="mx-auto">reservaciones@trescielos.mx</a>
				<br>
				<a href="tel://55-6845-6444" class="mx-auto">(55) 6845 6444</a>
				<a href="tel://734-3470-613" class="mx-auto">(734) 3470 613</a>
				<br>
				<p class="mx-auto">de 8:00 a 17:00 h</p>
			
			</div>
			<div class="col-12 col-sm-6 infoReservacion">
				<p class="precio">$2,200.00</p>
				<p class="contenido">Precio por 1 noche<br>3 pagos mensuales de<br>$733.33 a liquidar en abril</p>
				<p class="tituloServicios">Servicios</p>
				<p class="contenidoSerivicios">Cancha de tenis / Cancha de padel / Alberca<br>Muelle / Snackbar / Palapa</p>
			</div>
		</div>
		<div class="row">
			<div id="mapa"></div>	
		</div>
	</div>			   		
	

	<div class="container-fluid" id="comoLlegar">
		<div class="row no-gutters">
			<div class="col-2 col-sm-1">
				<figure class="text-right mosaico">
					<img src="images/mosaicos/hotel/4_ICONO-PALMA_100X100.png" alt="" class="img-fluid">
				</figure>
			</div>
			<div class="col-10 col-sm-5">
				<p class="titulo ">¿Cómo llegar?</p>
				<hr class="rosa">
				<p class="direccion">Lago de Teques lt 36 4ª sección Tequesquitengo, Jojutla, Morelos (Bajada 6 Hasta el fondo)</p>
			</div>
			<div class="col-12 col-sm-6">
				<div class="row">
					<div class="col-12 col-sm-6 transporte">
						<div class="row">
							<figure class="col text-center">
								<img src="images/iconos/car.png" alt="hotel" class="img-fluid">
							</figure>
							<figure class="col text-center">
								<img src="images/iconos/bus.png" alt="hotel" class="img-fluid btn-sonar">
								<figcaption>CENTRAL DE AUTOBUSES TAXQUEÑA
								Tomar la partida a Jojutla / entrando a Teques  pedir al conductor que los deje en el módulo de Jojutla y pedir taxi. solicitar que los lleve al faro en la bajada 6 del lago.
								</figcaption>
							</figure>

						</div>
						
					</div>
					<div class="col-12 col-sm-6 ">
						<div class="row">
							<div class="col">
								<a href="https://www.waze.com/location?ll=18.612878,-99.279799" target="_blank" rel="noopener" >
									<figure class="text-center">
										<img src="images/iconos/waze.png" alt="hotel" class="img-fluid">
									</figure>
								</a>
							</div>
							<div class="col">
								<a href="https://www.google.com.mx/maps/place/%22EL+FARO%22/@18.612878,-99.2819877,17z/data=!3m1!4b1!4m5!3m4!1s0x85cdd362b84e3e91:0xf16fbfd753a2e978!8m2!3d18.612878!4d-99.279799?shorturl=1" target="_blank" rel="noopener" >
										<figure class="text-center">
											<img src="images/iconos/googlemaps.png" alt="hotel" class="img-fluid">
										</figure>
									</a>
							</div>
						</div>
					</div>
				</div>	
			</div>
		</div>
	</div>
	<div class="container-fluid" id="textoCursi">
		<div class="row">
			<p>Esa energía tan inmensa y el amor que tienes por la vida...La forma en la que todo termina con una sonrisa, creer que apoyándonos mutuamente podemos lograrlo todo... gracias  por tu inspiración, gracias amor :)</p>
		</div>
	</div>


	<div class="container-fluid" id="dressCode">
		<div class="row justify-content-center">
			<div class="col">
				<p class="titulo">Dress code</p>
				<p class="subtitulo">Formal Playa Lino</p>
				<hr class="rosa">
			</div>
		</div>
		<div class="row">
			<div class="owl-carousel owl-theme">
					<figure class="item">
						<img src="images/dresscode/mujeres/5_DRESSCODE-MUJER.jpg" alt="">
					</figure>
					<figure class="item">
						<img src="images/dresscode/mujeres/2_DRESSCODE-MUJER.jpg" alt="">
					</figure>
					<figure class="item">
						<img src="images/dresscode/mujeres/4_DRESSCODE-MUJER.jpg" alt="">
					</figure>
					<figure class="item">
						<img src="images/dresscode/mujeres/6_DRESSCODE-MUJER.jpg" alt="">
					</figure>
					<figure class="item">
						<img src="images/dresscode/mujeres/7_DRESSCODE-MUJER.jpg" alt="">
					</figure>
					<figure class="item">
						<img src="images/dresscode/mujeres/8_DRESSCODE-MUJER.jpg" alt="">
					</figure>
					<figure class="item">
						<img src="images/dresscode/hombres/1_DRESSCODE-HOMBRE.jpg" alt="hombres" class="img-fluid">
					</figure>
					<figure class="item">
						<img src="images/dresscode/hombres/2_DRESSCODE-HOMBRE.jpg" alt="">
					</figure>
					<figure class="item">
						<img src="images/dresscode/hombres/3_DRESSCODE-HOMBRE.jpg" alt="">
					</figure>
					<figure class="item">
						<img src="images/dresscode/hombres/4_DRESSCODE-HOMBRE.jpg" alt="">
					</figure>
					<figure class="item">
						<img src="images/dresscode/hombres/5_DRESSCODE-HOMBRE.jpg" alt="">
					</figure>
					<figure class="item">
						<img src="images/dresscode/hombres/6_DRESSCODE-HOMBRE.jpg" alt="">
					</figure>
					<figure class="item">
						<img src="images/dresscode/hombres/7_DRESSCODE-HOMBRE.jpg" alt="">
					</figure>
				</div>
		</div>
		<p class="instruccion">
			Telas frescas, colores vivos y toda la actitud para lucirte en el verano.
		</p>	
	</div>
	<div class="container-fluid infoDressCode">
		<div class="row">
			<div class="col-12 col-sm-6 infoMujeres">
				<figure class="text-center"><img src="images/iconos/mujer.png" alt=""></figure>
				<p class="titulo">Mujeres</p>
				<p class="subtitulo">Vestido largo, 3/4 halter o<br>strapless</p>
				<div class="row">
					<div class="col info">
						<p class="color"><strong>Color:</strong></p>
						<p>Liso claro, pasteles, alegres y/o vivos colores</p>
						<br>
						<p class="calzado"><strong>Calzado:</strong></p>
						<p>Tacones o zapato abierto</p>
						<br>
						<p class="restriccion">No rosa mexicano ni fucsia</p>
						<p class="restriccion">No blancos ni crema</p>
						<p class="restriccion">No negros</p>
						<p class="restriccion">Evitar brillos y estampados</p>
					</div>
				</div>
			</div>
			<div class="col-12 col-sm-6 infoHombres">
				<figure class="text-center"><img src="images/iconos/hombre.png" alt=""></figure>
				<p class="titulo">Hombres</p>
				<p class="subtitulo">Traje de lino o algodón</p>
				<p class="subtitulo">Agradecemos atentamente <strong>no vestir guayaberas</strong></p>
				<div class="row">
					<div class="col info">
						<p class="color"><strong>Color:</strong></p>
						<p>Claro,  blanco o arena, azules o negros.</p>
						<br>
						<p class="calzado"><strong>Calzado:</strong></p>
						<p>Mocasín / calcetín adecuado / Zapato</p>
						<br>
						<p>Camisa de lino, algodón liviano o seda ligera</p>
						<p>Se puede utilizar algún patrón discreto</p>
						<br>
						<p>Pantalón de lino o algodón</p>
						<br>
						<p class="restriccion">Evitar texturas o impresos en la camisa</p>
					</div>
				</div>
			</div>
		</div>
	</div>




	<div class="container-fluid" id="mesaRegalos">
		<div class="row">
			<div class="col">
				<p class="titulo">Mesa de regalos</p>
				<p class="subtitulo">Luna de miel en Asia</p>
				<hr class="azul">
			</div>
		</div>
		<div class="row">
			<div class="col infoMesaRegalos">
				<p>Sabores, fotos y aprendizaje… los viajes siempre nos han apasionado y queremos concretar un sueño…  Asia!</p>
				<p>¿Qué tal si nos invitas un desayuno o la entrada al Gran Palacio Real en Bangkok?</p>
			</div>
		</div>
		<div class="row justify-content-center">
			<a href="https://boda-paoyarturo.zankyou.com/mx/mesa-regalos/mesa-regalos" target="_blank" rel="noopener" class="boton">ir a mesa de Regalo</a>
		</div>
		
	</div>
	<div class="container-fluid foto">
		<div class="row">
			<figure>
				<img src="images/mesaRegalos/foto.jpg" alt="" class="img-fluid">
			</figure>
		</div>
	</div>
	<div class="container-fluid" id="despedida">
		<p class="titulo">¡Nos vemos en julio!</p>
	</div>

<?php include 'footer.php';?>