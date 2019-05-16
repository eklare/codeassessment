<!DOCTYPE html>
<html>

	
	<?php include("header.php");?>
	<?php include("nav.php");?>
		

		<main class="wrapper">
			
			<section id="hero">

				<div class="container">
					<div class="half">
						<img src="./assets/img/logo.png" alt="Standing Out" />
						<h3>The right interpersonal Power Skills to master career progression.</h3>
						<a class="button" href="#section4">Sign up Now</a>
					</div>
					
				</div>

			</section>

			<section id="w3" class="nav">
				<a id="section1" class="anchor"></a>
				<div class="container">
					<div class="half">
						<h2>Winning in the Work World</h2>

						<h5>The right interpersonal PowerSkills to start careers on the best path forward</h5>

						<p>The difference between new hires lasting more than six months or not is Standing Out</p>

						<p>Help employees progress in their careers with the right interpersonal PowerSkills</p>
						

					</div>

					<div class="line"></div>

					<div class="half">
						<h4>21 Class A Videos</h4>
						<ul class="checklist">
							<li>First Impressions Make All the Difference</li>
							<li>Having the Ideal Mindset and Determining Your Winning Approach</li>
							<li>Global Executive Mindset - GEM Seven Rules</li>
							<li>Written and Unwritten Rules of the Game</li>
							<li>Scenarios You Will Experience in the Work World</li>
							<li>Building Networks Internally and Externally</li>
						</ul>


						
					</div>
					
				</div>

			</section>

			<section id="gem"  class="nav">

				<a id="section2" class="anchor"></a>

				<div class="container">

					<div class="half">

						<h4>10 Class B Videos</h4>
						<ul class="checklist">
							<li>How to use GEM Philosophy to Stand Out </li>
							<li>Connecting Personally at All levels</li>
							<li>Articulating  your POV clearly</li>
							<li>Communicating Confidently</li>
							<li>Building trust with Key Stakeholders</li>
							<li>Providing Direct Feedback Positively</li>
							<li>Taking Ownership authentically Stand Out</li>
							<li>Coaching and Recognize other </li>
							<li>Personal Action Planning</li>
						</ul>
						

					</div>

					<div class="line"></div>

					<div class="half">
						<h2>Global Executive Mindset</h2>

						<h5>The right interpersonal PowerSkills to drive career progression</h5>

						<p>The difference between being seen and heard, and not, is Standing Out</p>

						<p>Help employees progress in their careers with the right interpersonal PowerSkills</p>


						<button><a href="#section4">Sign up Now</a></button>

					</div>
					
				</div>

			</section>


			<section id="logos">

				<div class="container">

					<h5>Professional School is based on the very successful Instructor Led Training (ILT) Global Executive Mindset experiences at these Multi National Corporations and others</h5>
					<ul class="logos">
						<?php 

						$files = glob("./assets/img/logo/*.png");
						foreach($files as $png){  ?>

							<li><a href="#"><img src="<?php echo $png ?>" /></a></li>

						<?php }  ?>
						
						<?php ?>

					</ul>
				</div>

			</section>

			<section id="bios" class="nav">

				<a id="section3" class="anchor"></a>

				<div class="container">

					<div class="half">
						<div class="title">
							<img src="./assets/img/stephenkrempl.png" alt="Stephen Krempl"/>
							<h2>Steve<br>Smith</h2>
						</div>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ut consectetur velit. Aliquam erat volutpat. Pellentesque in dapibus est, ac hendrerit dui. Nulla velit orci, tincidunt a molestie ut, condimentum at ante. Aliquam sed eros vel velit pharetra pretium vel vitae libero. Class aptent taciti sociosqu ad litora torquent per conubia nostra.</p> 
						<p>Per inceptos himenaeos. Sed lacinia ornare sapien sed tincidunt. Nam pretium velit in lacinia semper. Duis mattis eget enim sed pulvinar. Fusce nec porta magna. Curabitur maximus leo neque, vitae gravida arcu suscipit vitae. Nullam tincidunt, nibh et tristique porttitor, elit felis tristique mi, auctor ullamcorper diam dolor vitae orci. Nulla facilisi. Proin malesuada tristique massa, sit amet feugiat nisl tristique eget.</p>
						
						
					</div>
					<div class="half">
						<div class="title">
							<img src="./assets/img/bobkelner.png"  alt="Bob Kelner"/>
							<h2><span style="font-family:serif;">Bob<br>Anderson</span></h2>
						</div>
						<p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Curabitur aliquam semper convallis. Nullam vitae metus leo. Vestibulum tincidunt et risus ac aliquet. Fusce placerat nisi sit amet dolor vehicula viverra. Nunc libero urna, lacinia eu leo vestibulum, blandit auctor dui. Phasellus ultricies at turpis ac efficitur. Vestibulum sodales tempor odio, a interdum lorem dapibus interdum. Sed rhoncus aliquet ligula. Etiam ornare dui in nisl elementum elementum.</p>
						<p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Curabitur aliquam semper convallis. Nullam vitae metus leo. Vestibulum tincidunt et risus ac aliquet.</p>
					</div>
				</div>

			</section>

			<section id="contact" class="nav">

				<a id="section4" class="anchor"></a>

				<div class="container">

					<h2>Need more info?</h2>
					<form id="sendContact" onsubmit="return false;">
		
						

						<div class="row split">
							<div class="field">
								<input type="text" id="name" name="name" placeholder="Name" >
							</div>
							<div class="field">
								<input type="email" id="email" name="email" placeholder="Email Address">
							</div>
						</div>


						<div class="row">
							<div class="field">
								<textarea id="comments" name="comments" placeholder="Message"></textarea>
							</div>
						</div>

						<div class="row split">
							<div class="field">
								<div class="formResponse"></div>
								<button class="button" type="submit" id="submit" name="submit"><span class="text">Submit</span></button>
							</div>
						</div>

						<input id="url" name="url" type="text" value="0" style="display:none;"/>

					</form>	
					
				</div>

			</section>

		</main>

		<footer>

		</footer><!-- end footer -->

		


	</body>

</html>