

<?php 

include ('header.php');

 ?>

<section>
	<div class="about-me">
	<article class="row">
		<div class="large-6 columns right bmargin-top">
			<h2>I'm María</h2>
			<p>I have a very atypical path both personally and professionally. I was born in Cameroun and raised in 6 different countries and 3 continents. I speak English, French and Spanish fluently.
			<br>I have been good at math and science since my childhood, studying and obtaining a diploma in Electronics Engineering. After working in that field for a couple of years, I decided to learn design on my own and have been working as a designer and developer since July 2007.</p>
		</div>
		<div class="large-8 columns right text-center smargin">
				<a href="#" target="_blank" class="resume">get my resume</a>
		</div>
		<!-- <div class="large-4 columns right">
			<p class="quote">One of the greatest things about being a designer with an engineer background is that not only can I take care of the graphical aspects of a project, but can also fully understand, participate and even take care of the highly technical aspects of those projects.</p>
			
		</div> -->
	</article>
	</div>
	<article class="contact-me">
		<div class="row">
			<div class="large-6 columns bmargin-top bpadding-right">
				<h2>Contact me</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit mollitia expedita inventore sint dolorem accusamus cum optio! Dignissimos, enim, earum iste recusandae sequi qui quibusdam repudiandae iusto corporis maiores rem.</p>
				<form action="">
					<label for="name">Name:</label>
					<input type="text" name="contactname" id="contactname" value="" class="required" />
				
					<label for="email">Email:</label>
					<input type="text" name="email" id="email" value="" class="required email" />
				
					<label for="subject">Subject:</label>
					<input type="text" name="subject" id="subject" value="" class="required" />
				
					<label for="message">Message:</label>
					<textarea rows="8" name="message" id="message" class="required"></textarea>
						
				    <input type="submit" value="Send Message" name="submit" id="send" />
				    <a href="mailto:mail@machi.com" class="mailto">mail@machi</a>
				</form>
			</div>
			<div class="large-6 columns map bmargin-top">
				<h2>Places where I worked</h2>
				<img src="img/map.png" alt="">
				<div class="a trans1"></div>
				<div class="b trans1"></div>
				<div class="g trans1"></div>
			</div>
		</div>
	</article>
</section>

<?php 
include ("footer.php");
 ?>