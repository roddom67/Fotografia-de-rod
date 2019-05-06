	<section>
		<?php
			if(isset($parrafo[$n])){
				echo '<p class="hidden-txt">'.$parrafo[$n].'</p>';
			}
		?>
	</section>
	<footer>
		<div class="logo-area">
			<div class="logo">
				<a href="./"><img src="imgs/logo_Rod.png" alt="Fotografía de Rod" id="logo"></a>
			</div>
			<h4>Fotografía de Rod - © Rodolfo Dominguez</h4>
			<small>Todos los derechos reservados. Prohibida la reproducción parcial o total sin la autorizacion del autor.<br>All rights reserved. Reproduction in whole or part without the author's permission.</small>
		</div>
		<div>
			<h3>Contacto</h3>
			<p class="pc"><strong>WhatsApp: </strong><a href="https://wa.me/1540873213" title="WhatsApp" class="amarillo">(+54 9 11) 4087-3213</a></p>
			<p><strong>E-mail:</strong> <a href="mailto:roddom67@gmail.com" title="Email" class="amarillo">roddom67@gmail.com</a></p>
		</div>
		<div>
			<h3>Seguime en</h3>
			<ul class="redes">
				<!--li><a href="http://www.facebook.com/FotografiaDeRod?fref=ts" target="_blank" id="fb" title="Facebook: FotografiaDeRod"></a></li-->
				<li><a href="https://www.instagram.com/roddom67/" target="_blank" id="ig" title="Instagram: roddom67"></a></li>
				<!--li><a href="https://fotografiaderod.tumblr.com/" target="_blank" id="tb" title="Blog de Rod"></a></li-->
				<li class="mobile"><a href="https://api.whatsapp.com/send?phone=5491140873213" id="wa" title="WhatsApp"></a></li>
			</ul>
		</div>
	</footer>
</div>

	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
	<script type="text/javascript">
		$(function){
			
			/* Menu Mobile */
			$('a#menu-icon').bind('click',function(){
       		$(this).hasClass("menuactive")?$(this).removeClass("menuactive"):$(this).addClass("menuactive");
       		$('#menutodo').toggle();

     		});
     		
     	})
	</script>
	<!-- FlexSlider -->
  	<script>window.jQuery || document.write('<script src="js/jquery-1.7.min.js">\x3C/script>')</script>

  	<script defer src="js/jquery.flexslider.js"></script>
  
  	<script defer src="js/function-flexslider.js"></script>

  	<!-- Optional FlexSlider Additions -->
  	<script src="js/jquery.easing.js"></script>
  	<script src="js/jquery.mousewheel.js"></script>
  	<script defer src="js/demo.js"></script>
	<script src="js/jquery.validate.min.js" type="text/javascript"></script>

<script>
	$(document).ready(function($) {
		var container = $('div.container');
		// validate the form when it is submitted
		var validator = $("#commentForm").validate({
			errorContainer: container,
			errorLabelContainer: $("ol", container),
			wrapper: 'li',
			meta: "validate"
		});
		$.validator.setDefaults({
			submitHandler: function() {}
		});
		$("#commentForm").validate();
		$(".cancel").click(function() {
			validator.resetForm();
		});
		
	});
		
	
</script>
</body>

</html>