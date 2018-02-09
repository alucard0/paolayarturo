	<!-- Google -->
	<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

		ga('create', 'UA-1700556-2', 'auto');
		ga('send', 'pageview');

	</script>


    <!-- jQuery -->
    <script src="lib/jquery/jquery-3.2.1.min.js"></script>
    <!--<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>-->

    <!-- Bootstrap Core JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <!--<script src="lib/bootstrap/js/bootstrap.min.js"></script>-->

    <!-- Plugin JavaScript -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    <!-- Theme JavaScript -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

    <script src="js/home.min.js"></script>


 <script src="js/ScrollTrigger.min.js"></script>
 <script>
 	if( $(this).width() > 750)
    {
		window.counter = function() {
			// this refers to the html element with the data-scroll-showCallback tag
			var span = this.querySelector('section');
			var current = parseInt(span.textContent);

			span.textContent = current + 1;
		};

		document.addEventListener('DOMContentLoaded', function(){
		  var trigger = new ScrollTrigger({
			  addHeight: true
		  });
		});


	}
	</script>
</body>
</html>