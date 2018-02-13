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


    <!-- Mapas Contacto-->
	    <script>
      function initMap() {
        var trescielos = {lat: 18.612878, lng: -99.279799};
        var map = new google.maps.Map(document.getElementById('mapa'), {
          zoom: 15,
          center: trescielos
        });
        var marker = new google.maps.Marker({
          position: trescielos,
          map: map
        });
      }
    </script>

    <!-- Fin Mapas Contacto y Footer -->
        <!-- API DE GOOGLE MAPS -->
    <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDk1MCbqAVZqEHzR8MawZ1_tbgd4GPc4tU&callback=initMap">
    </script>
</body>
</html>