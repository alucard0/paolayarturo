	<!-- Google -->
    <script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-87965880-1', 'auto');
	  ga('send', 'pageview');

	</script>


    <!-- jQuery -->
    <!--<script src="lib/jquery/jquery-3.2.1.min.js"></script>-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!-- API DE GOOGLE MAPS -->
    <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js"></script>

    <!-- Mapas Contacto-->
	<script> 
        var map;
        //var mapFooter;
        function initialize() 
        {
            var variableCorreo = "<?php echo $lang['MODAL_FORM_CORREO']; ?>" ;
            var variableTel = "<?php echo $lang['MODAL_FORM_TELEFONO']; ?>" ;
            var iconImage = "images/contacto/marcador.png";
            var locationQTech = new google.maps.LatLng(19.394140, -99.174324);
            var contentString = "<div class=\"infoWindowContent\">"+"<h4 class=\"tituloCentrado robotoMedium500\">CONTACTO Y SOPORTE</h4>"+
            "<hr id=\"lineaInfoWindow\">"+
            "<ul class=\"list-unstyled robotoNormal400\">"
            	+"<li>"+"<p class=\"fontContentBlue\">Montecito #38 Piso 30 Oficina 32</p>"+"</li>"+
            	"<li>"+"<p class=\"fontContentBlue\">Col. Nápoles, Del. Benito Juárez</p>"+"</li>"+
            	"<li>"+"<p class=\"fontContentBlue\">C.P. 03810 México D.F.</p>"+"</li>"+
            	"<li>"+"<p class=\"fontContentBlue\">"+variableTel+": (+52)55 9000-0120</p>"+"</li>"+
            	"<li>"+"<p class=\"fontContentBlue\">Fax: (+52)55 9000-4931</p>"+"</li>"+
            	"<li>"+"<p class=\"fontContentBlue\">"+variableCorreo+": sales@qtech.com.mx</p>"+"</li>"+
            "</ul>"+
            "</div>";


            var infowindow = new google.maps.InfoWindow({
			    content: contentString,
			  });

            //Inicia Mapa QTech
            var mapCanvas = document.getElementById('mapa_QTech');

            var mapOptions = {
                    center: locationQTech,
                    zoom: 15,
                    zoomControl: true,
                    scrollwheel: false,
                    zoomControlOptions: 
                    {
                        style: google.maps.ZoomControlStyle.DROPDOWN_MENU,
                        position: google.maps.ControlPosition.LEFT_CENTER
                    },
                    mapTypeId: google.maps.MapTypeId.ROADMAP, 
                };
            if(mapCanvas !=null)
                map = new google.maps.Map(mapCanvas, mapOptions);
            
            
            var marker = new google.maps.Marker({
                position: locationQTech,
                map: map,
                title:"Q Tech Now",
                animation: google.maps.Animation.BOUNCE,
                icon: iconImage
                }); 

            infowindow.open(map, marker);
            marker.addListener('click', function() {
			    infowindow.open(map, marker);
			  });
            //Fin Mapa QTech
            
            //Mapa footer
            /*
            var mapCanvasFooter = document.getElementById('mapa_QTechFooter');
            mapFooter = new google.maps.Map(mapCanvasFooter, mapOptions);

            var markerFooter = new google.maps.Marker({
                position: locationQTech,
                map: mapFooter,
                title:"Q Tech Now",
                animation: google.maps.Animation.BOUNCE,
                icon: iconImage
                }); 
            */
            //Fin mapa footer
        }
        google.maps.event.addDomListener(window, 'load', initialize);
        
        google.maps.event.addDomListener(window, 'resize', function() {
            map.setCenter(locationQTech);
            mapFooter.setCenter(locationQTech);
        });

    </script>
    <!-- Fin Mapas Contacto y Footer -->
</body>
</html>