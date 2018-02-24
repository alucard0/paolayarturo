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
			<hr>
		</div>
	</div>
<figure class="nomargin"><img src="images/mosaicos/mosaicoDivision.png" alt="" class="img-fluid"></figure>
	<div class="container-fluid" id="boletos">
		<div class="row justify-content-center no-gutters">
			
			<div class="col-12 col-sm-6">
				<div class="row">
					<div class="col-12">
						<p class="frase">Para nosotros es un honor  que nos acompañes y seas parte de nuestro sueño,  por que como dice Michael J. Fox, "La familia no es algo importante. Lo es todo."</p>

						<p class="restriccion">Evento sólo para mayores de 21 años</p>
					</div>
					<div class="col-12" id="lugarFecha">
						<p class="titulo">Lugar y Fecha</p>
					</div>
				</div>
			</div>

			<div class="col-12 col-sm-6 bgBoletos">
				<div class="row botonBoleto justify-content-center no-gutters">
					<div class="col-2">
						<figure class="nomargin text-left"><img src="images/mosaicos/2_ICONO_IZQ_PYA.png" alt="" class="img-fluid"></figure>
					</div>
					<div class="col-10 col-sm-8 bgBoletos">
						<a href="#" data-toggle="modal" data-target="#modalBoletos">
							<p class="titulo">Boletos</p>
						</a>
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
				<hr>
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
				<p class="titulo">¿Cómo llegar?</p>
				<hr>
				<p class="direccion">Lago de Teques lt 36 4ª sección Tequesquitengo, Jojutla, Morelos (Bajada 6 Hasta el fondo)</p>
			</div>
			<div class="col-12 col-sm-6">
				<div class="row">
					<div class="col transporte">
						<div class="row">
							<figure class="col text-right">
								<img src="images/iconos/car.png" alt="hotel" class="img-fluid">
							</figure>
							<figure class="col text-center">
								<img src="images/iconos/bus.png" alt="hotel" class="img-fluid">
								<figcaption>CENTRAL DE AUTOBUSES TAXQUEÑA
								Tomar la partida a Jojutla / entrando a Teques  pedir al conductor que los deje en el módulo de Jojutla y pedir taxi. solicitar que los lleve al faro en la bajada 6 del lago.
								</figcaption>
							</figure>

						</div>
						
					</div>
					<div class="col">
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
										<figure class="text-left">
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
	<div class="container">
		
		
		<div class="row infoTransporte">
			<div class="col text-right">
				<a href="https://www.waze.com/location?ll=18.612878,-99.279799" target="_blank" rel="noopener" ><figure><img src="images/iconos/waze.png" alt="mapa de waze" class="img-fluid"></figure></a>
			</div>
			<div class="col text-left">
				<figure><img src="images/iconos/googlemaps.png" alt="" class="img-fluid"></figure></a>
			</div>
		</div>
		<div class="row infoTransporte">
			<div class="col-3 text-right">
				<figure><img src="images/iconos/car.png" alt="" class="img-fluid"></figure>
			</div>
			<div class="col-9">
				<p>Lago de Teques lt 36 4ª sección Tequesquitengo, Jojutla, Morelos (Bajada 6 Hasta el fondo)</p>
			</div>
			<div class="col-3 text-right">
				<figure><img src="images/iconos/bus.png" alt="" class="img-fluid"></figure>
			</div>
			<div class="col-9">
				<p>CENTRAL DE AUTOBUSES TAXQUEÑA
				Tomar la partida a Jojutla / entrando a Teques  pedir al conductor que los deje en el módulo de Jojutla y pedir taxi. solicitar que los lleve al faro en la bajada 6 del lago.
				</p>
			</div>
		</div>
	</div>




	<div class="container" id="dressCode">
		<div class="row">
			<div class="col-2 nopaddingR">
				<figure class="nomargin text-right"><img src="images/mosaicos/5_ICONO_IZQ_PLANTA.png" alt="" class="img-fluid img-tmp"></figure>
			</div>
			<div class="col bgDressCode">
				<p>Dress code</p>
				<!--<figure class="nomargin text-right"><img src="images/mosaicos/5_ICONO_CENTRO_PLANTAS.png" alt="" class="img-fluid"></figure>-->
			</div>
			<div class="col-2 nopaddingL">
				<figure class="nomargin text-left"><img src="images/mosaicos/5_ICONO_DER_GATOS.png" alt="" class="img-fluid img-tmp"></figure>
			</div>
		</div>
	</div>
	<div class="container infoDressCode">
		<div class="row">
			<p>Formal playa/lino</p>
		</div>
		<div class="bgGris">
			<div class="owl-carousel owl-theme">
				<figure class="item"><img src="images/dresscode/mujeres/5_DRESSCODE-MUJER.jpg" alt=""></figure>
				<figure class="item"><img src="images/dresscode/mujeres/2_DRESSCODE-MUJER.jpg" alt=""></figure>
				<figure class="item"><img src="images/dresscode/mujeres/4_DRESSCODE-MUJER.jpg" alt=""></figure>
				<figure class="item"><img src="images/dresscode/mujeres/6_DRESSCODE-MUJER.jpg" alt=""></figure>
				<figure class="item"><img src="images/dresscode/mujeres/7_DRESSCODE-MUJER.jpg" alt=""></figure>
				<figure class="item"><img src="images/dresscode/mujeres/8_DRESSCODE-MUJER.jpg" alt=""></figure>
			</div>
			<div class="infoMujeres">
				<p class="titulo"><span class="iconoM"></span>Mujeres</p>
				<p class="subtitulo">Vestido largo o 3/4 halter o strapless</p>
				<div class="row justify-content-center">
					<ul >
						<li><strong>Color:</strong></li>
						<li>Liso claro, pasteles, alegres y/o </li>
						<li>vivos colores </li>
						<li>No rosa mexicano ni fucsia</li>
						<li>No blancos ni crema</li>
						<li>No negros</li>
						<li>Evitar brillos y estampados</li>
						<li>Tacones o zapato abierto</li>
					</ul>
				</div>
			</div>
			
			<div class="owl-carousel owl-theme">
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
			<div class="infoHombres">
				<p class="titulo"><span class="iconoH"></span>Hombres</p>
				<p class="subtitulo">Traje de lino o algodón</p>
				<p class="subtitulo">Agradecemos atentamente no vestir guayaberas</p>
				<div class="row justify-content-center">
					<ul >
						<li>Camisa de lino, algodón liviano o</li>
						<li>seda ligera</li>
						<li>Evitar texturas o impresos en la camisa </li>
						<li>Se puede utilizar algún patrón discreto</li>
						<li>Pantalón de lino o algodón</li>
						<li><strong>Color:</strong></li>
						<li>Claro,  blanco o arena, azules o negros.</li>
						<li><strong>Calzado:</strong></li>
						<li>Mocasín / calcetín adecuado</li>
						<li>Zapato</li>
					</ul>
				</div>
			</div>
		</div>
	</div>




	<div class="container" id="mesaRegalos">
		<div class="row">
			<div class="col-2 nopaddingR">
				<figure class="nomargin text-right"><img src="images/mosaicos/6_ICONO_IZQ_ELEFANTE.png" alt="" class="img-fluid img-tmp"></figure>
			</div>
			<div class="col nopadding bgMesaRegalos">
				<p>Mesa de regalos</p>
			</div>
			<div class="col-2 nopaddingL">
				<figure class="nomargin text-left"><img src="images/mosaicos/6_ICONO_DER_AVION.png" alt="" class="img-fluid img-tmp"></figure>
			</div>
		</div>
	</div>
	<div class="container bannerMesaRegalos">
		<div class="row justify-content-center">
			<div class="col">
				<p>Asian Wanderlust</p>
			</div>
			
		</div>
		
	</div>

	<div class="container infoMesaRegalos">
		<div class="row justify-content-center">
			<div class="col-12">
				<p>Sabores, fotos y aprendizaje… los viajes siempre nos han apasionado y queremos concretar un sueño…  Asia!</p>
			</div>
			<div class="col-12">
				<p>¿Qué tal si nos invitas un desayuno o la entrada al Gran Palacio Real en Bangkok?</p>
			</div>
			<div class="col-12">
				<p>Elige alguna opción de la mesa de regalos y ayúdanos a vivir nuestra luna de miel soñada.  :)
			</p>
			</div>
			<a href="https://boda-paoyarturo.zankyou.com/mx/mesa-regalos/mesa-regalos" target="_blank" rel="noopener" class="btn btn-primary">Ver mesa de Regalo</a>
		</div>
	</div>

<?php include 'footer.php';?>