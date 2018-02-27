jQuery(function($){
	 /*Contador de caracteres */
	$("textarea[maxlength]").each(function() {
	    var $this = $(this);
	    var maxLength = parseInt($this.attr('maxlength'));
	    $this.attr('maxlength', null);
	   
	    var el = $("<span class=\"character-count\"> " + maxLength + " caracteres </span>");
	    //el.insertAfter('#cmpCarrera + label');
	    
	   
	    $("#lbRazon").append(el);

	    $this.bind('keyup', function() {
	        var cc = $this.val().length;
	        var carac=maxLength - cc;
	        el.text(carac+" caracteres");
	        
	        if(maxLength < cc) {
	            el.css('color', '#c30824');
	            $(".enviar").attr('disabled',true);
	        } else {
	            el.css('color', 'black');
	            $(".enviar").attr('disabled',false);
	        }
	    });
	});
});

jQuery(function($){
	$('.success').hide();
	$('form').on('submit', function (e) {

	    e.preventDefault();

	    $.ajax({
	            type: 'post',
	            url: 'controlador/controllerBoletos.php',
	            data: $('form').serialize(),
	            success: function () {
	              $('#formContacto').fadeOut();
    			  $('.success').delay(500).fadeIn();
	            }
	    });

	});
});
