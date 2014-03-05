

<?php 

include ('header.php');

 ?>

<section>
	<div class="full-contact">
		<article class="row">
			<div class="large-6 columns right transparent_box bmargin-top">
				<p class="banner">The big <span class="bold">art of design</span> is to <span class="bold">make complicated things simple</span></p>
				<br>
<!-- 				<a href="#" target="_blank" class="resume">get my resume</a>
 -->			</div>
		</article>
	</div>
	
	<article class="contact-me">
		<div class="row">
			<div class="large-6 columns bmargin-top bpadding-right">
				<h4>Get in touch</h4>
				<form method="post" action="javascript:function();" name="form" id="form">
					<label for="name">Name:</label>
					<input type="text" name="contactname" id="contactname" value="" class="required" />
				
					<label for="email">Email:</label>
					<input type="text" name="email" id="email" value="" class="required email" />
				
					<label for="subject">Subject:</label>
					<input type="text" name="subject" id="subject" value="" class="required" />
				
					<label for="message">Message:</label>
					<textarea rows="8" name="message" id="message" class="required"></textarea>
						
				    <input type="submit" value="Send" name="submit" id="send" />
				</form>
				<div class="thanks">
					<p></p>
				</div>
			</div>
			<div class="large-6 columns bmargin-top">
				<p class="getintouch">I understand that every project requires a different and specific mix of media, which is why I am constantly innovating in both print and digital.</p> 
				<p>At heart I am a strategist and innovator, as much as graphic designer and underpinning everything I do is a belief that, for design to be effective, it must be perfectly aligned with your business objectives.</p>

				<!-- <h4>Places where I worked</h4>
				<img src="img/map.png" alt="">
				<div class="a trans1"></div>
				<div class="b trans1"></div>
				<div class="g trans1"></div> -->
			</div>
		</div>
	</article>
</section>
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
<script>
	$(document).ready(function (){

           $("#form").submit(function() {
           			$("#form").fadeOut(1000);

                   var contactname = $("#contactname").val();
                   var email = $("#email").val();
                   var subject = $("#subject").val();
                   var message = $("#message").val();

                   $.ajax({
                       type: "POST",
                       url:"email.php",
                       data: {contactname: contactname, email: email, subject: subject, message: message}
                   });

                   setTimeout(function() {
	                   	$(".thanks p").delay(2000).html("Thanks " + contactname + " for your message. I will contact you shortly.");
                   }, 3000);
                   				          
           
           });
   });
	</script>

<?php 
include ("footer.php");
 ?>