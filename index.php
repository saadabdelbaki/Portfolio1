<?php
include 'config.php';

?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		
		
		<title>Portfolio  </title>
		
	
		<!--=====================================================
			CSS Stylesheets
		=====================================================-->
		<link rel='stylesheet' type='text/css' href='bootstrap/css/bootstrap.min.css' >
		<link rel='stylesheet' type='text/css' href='css/linea.css' >
		<link rel='stylesheet' type='text/css' href='css/ionicons.min.css' >
		<link rel='stylesheet' type='text/css' href='css/owl.carousel.css' >
		<link rel='stylesheet' type='text/css' href='css/magnific-popup.css' >
		<link rel='stylesheet' type='text/css' href='css/style.css' >
		<link href="https://unpkg.com/ionicons@4.5.5/dist/css/ionicons.min.css" rel="stylesheet">
		
	</head>
	<body>
		
		
		<!--=====================================================
			Preloader
		=====================================================-->
		<div id='preloader' >
			<div class='loader' ></div>
			<div class='left' ></div>
			<div class='right' ></div>
		</div>
		
		
		<div class='main-content' >
			
			<!--=====================================================
				Page Borders
			=====================================================-->
			<div class='page-border border-left' ></div>
			<div class='page-border border-right' ></div>
			<div class='page-border border-top' ></div>
			<div class='page-border border-bottom' ></div>
			
			
			
			<!--=====================================================
				Menu Button
			=====================================================-->
			<a href='#' class='menu-btn' >
				<span class='lines' >
					<span class='l1' ></span>
					<span class='l2' ></span>
					<span class='l3' ></span>
				</span>
			</a>
			
			
			<!--=====================================================
				Menu
			=====================================================-->
			<div class='menu' >
				<div class='inner' >
					<ul class='menu-items' >
						
						<li>
							<a href='#' class='section-toggle' data-section='intro' >
							<?php echo $lang['home']; ?>
							</a>
						</li>
						
						<li>
							<a href='#about' class='section-toggle' data-section='about' >
							<?php echo $lang['abt']; ?>
							</a>
						</li>
						
						<li>
							<a href='#resume' class='section-toggle' data-section='resume' >
							
							<?php echo $lang['resume']; ?>
							</a>
						</li>
						
						<li>
							<a href='#portfolio' class='section-toggle' data-section='portfolio' >
								Portfolio
							</a>
						</li>
						
						<li>
							<a href='#contact' class='section-toggle' data-section='contact' >
								Contact 
							</a>
						</li>
						<li>
						  <div id="languages">
                           <a href="index.php?lang=en"><img src="images/en.png" /></a>
	                       <a href="index.php?lang=fr"><img src="images/fr.png" /></a>
                               </div>
                    	  </li>
					</ul>
				</div>
			</div>
			
			<div class='animation-block' ></div>
			
			
			<!--=====================================================
				Sections
			=====================================================-->
			<div class='sections' >
				
				<!--=====================================================
					Main Section
				=====================================================-->
				
				<section id='intro' class='section section-main active' >
					
					<div class='container-fluid' >
						
						<div class='v-align' >
							<div class='inner' >
								<div class='intro-text' >
									
									<h1><?php echo $lang['ana']; ?> Saad ABDELBAKI </h1>
									
									<p>
									<?php echo $lang['desc1']; ?>
									</p>
									
									<div class='intro-btns' >
										
										<a href='#about' class='btn-custom section-toggle' data-section='about' >
										<?php echo $lang['disc']; ?> 
										</a>
										
										<a href='#contact' class='btn-custom section-toggle' data-section='contact' >
										<?php echo $lang['hire']; ?>
										</a>
										
									</div>
									
								</div>
							</div>
							
						</div>
						
					</div>
				
				</section>
				
				
				<!--=====================================================
					About Section
				=====================================================-->
				<section id='about' class='section about-section border-d' >
					
					<div class='section-block about-block' >
						<div class='container-fluid' >
							
							<div class='section-header' >
								<h2>
								<?php echo $lang['ana']; ?> <strong class='color' ><?php echo $lang['programmer']; ?></strong>
								</h2>
							</div>
							
							<div class='row' >
								
								<div class='col-md-4' >
									
									<ul class='info-list' >
										
										<li>
											<strong><?php echo $lang['name']; ?>:</strong>
											<span>Saad ABDELBAKI</span>
										</li>
										
										<li>
											<strong><?php echo $lang['job']; ?>:</strong>
											<span>Freelancer</span>
										</li>
										
										<li>
											<strong>Age:</strong>
											<span>23 <?php echo $lang['years']; ?></span>
										</li>
										
										<li>
											<strong>Residence:</strong>
											<span><?php echo $lang['mr']; ?></span>
										</li>
										
										<li>
											<strong><?php echo $lang['ht']; ?>:</strong>
											<span>Yousssoufia</span>
										</li>
										
										
										
									</ul>
									
								</div>
								
								<div class='col-md-8' >
								
									<div class='about-text' >
										<p>
										<?php echo $lang['desc2']; ?>
									</p>
										
										<p>
										<?php echo $lang['desc3']; ?>
									</p>
										
									</div>
									
									<div class='about-btns' >
										
										<a href='#' class='btn-custom btn-color' >
										<?php echo $lang['download']; ?>
										</a>
										
										<a href='#contact' class='btn-custom btn-color' data-section='contact'>
										<?php echo $lang['hire']; ?>
										</a>
										
									</div>
									
								</div>
								
							</div>
							
						</div>
					</div>
					
					<div class='section-block services-block' >
						
						<div class='container-fluid' >
							
							<div class='section-header' >
								
								<h2><?php echo $lang['my']; ?> <strong class='color' ><?php echo $lang['sr']; ?></strong></h2>
								
							</div>
							
							
							
							<div class='row' >
								
								<div class='col-md-4' >
									<div class='service' >
										
										<div class='icon' >
											<i class='icon-basic-photo' ></i>
										</div>
										
										<div class='content' >
											
											<h4><?php echo $lang['ux']; ?></h4>
											
											<p>
												<?php echo $lang['uxdex']; ?>
											</p>
											
										</div>
										
									</div>
								</div>
								
								<div class='col-md-4' >
									<div class='service' >
										
										<div class='icon' >
											<i class='icon-basic-keyboard' ></i>
										</div>
										
										<div class='content' >
											
											<h4><?php echo $lang['pr']; ?></h4>
											
											<p>
											<?php echo $lang['code']; ?>
											</p>
											
										</div>
										
									</div>
								</div>
								
								<div class='col-md-4' >
									<div class='service' >
										
										<div class='icon' >
											<i class='ion-social-wordpress-outline' ></i>
										</div>
										
										<div class='content' >
											
											<h4>WordPress</h4>
											
											<p>
												Ei constituam theophrastus per, sea dolorum disputationi in, vel menandri suavitate similique in. Vide assum conceptam eum.
											</p>
											
										</div>
										
									</div>
								</div>
								
								
								
							</div>
							
							
						</div>
						
					</div>
					
					<div class='section-block skills-block' >
						<div class='container-fluid' >
							
							<div class='section-header' >
								
								<h2>
								<?php echo $lang['my']; ?> <strong class='color' ><?php echo $lang['sk']; ?></strong>
								</h2>
								
							</div>
							
							<div class='row' >
								
								<div class='col-md-6' >
									
									<div class='skill' >
										
										<h4>HTML/CSS</h4>
										
										<div class='bar' >
											<div class='percent' style='width:85%;' ></div>
										</div>
										
									</div>
									
									
									<div class='skill' >
										
										<h4>php</h4>
										
										<div class='bar' >
											<div class='percent' style='width:90%;' ></div>
										</div>
										
									</div>
									
									
									<div class='skill' >
										
										<h4>jQuery</h4>
										
										<div class='bar' >
											<div class='percent' style='width:75%;' ></div>
										</div>
										
									</div>
									
								</div>
								
								<div class='col-md-6' >
									
									<div class='skill' >
										
										<h4>JavaScript</h4>
										
										<div class='bar' >
											<div class='percent' style='width:85%;' ></div>
										</div>
										
									</div>
									
									
									<div class='skill' >
										
										<h4>WordPress</h4>
										
										<div class='bar' >
											<div class='percent' style='width:90%;' ></div>
										</div>
										
									</div>
									
									
									<div class='skill' >
										
										<h4>SEO</h4>
										
										<div class='bar' >
											<div class='percent' style='width:75%;' ></div>
										</div>
										
									</div>
									
								</div>
								
							</div>
							
							
						</div>
					</div>
					
				</section>
				
				
				<!--=====================================================
					Resume Section
				=====================================================-->
				<section id='resume' class='section resume-section border-d' >
					
					<div class='section-block timeline-block' >
						
						<div class='container-fluid' >
							
							<div class='section-header' >
								
								<h2><?php echo $lang['my']; ?> <strong class='color' >Education</strong></h2>
								
							</div>
							
							<ul class='timeline' >
								
								<li>
									
									<div class='timeline-content' >
										
										<h4> YOUCODE</h4>
										
										<em>
											<span> <?php echo $lang['programmer']; ?></span>
											<span>2018-2020</span>
										</em>
										
										<p>
											Lorem ipsum dolor sit amet, id electram reprimique his, dicta saepe oporteat eos an, esse erat doming at lam. Nec quodsi suscipiantur an, ad graece nemore ocurreret lam, agam ipsum meliore quo ut.
										</p>
										
									</div>
									
								</li>
								
								<li>
									
									<div class='timeline-content' >
										
										<h4>ISTA NTIC</h4>
										
										<em>
											<span>Networking</span>
											<span>2015-2017</span>
										</em>
										
										<p>
											Lorem ipsum dolor sit amet, id electram reprimique his, dicta saepe oporteat eos an, esse erat doming at lam. Nec quodsi suscipiantur an, ad graece nemore ocurreret lam, agam ipsum meliore quo ut.
										</p>
										
									</div>
									
								</li>
								
								<li>
									
									<div class='timeline-content' >
										
										<h4>Technique School Jaber Bno Hayan </h4>
										
										<em>
											<span>baccalauréat</span>
											<span>2012-2015</span>
										</em>
										
										<p>
											Lorem ipsum dolor sit amet, id electram reprimique his, dicta saepe oporteat eos an, esse erat doming at lam. Nec quodsi suscipiantur an, ad graece nemore ocurreret lam, agam ipsum meliore quo ut.
										</p>
										
									</div>
									
								</li>
								
								
								
							</ul>
							
						</div>
						
					</div>
					
					<div class='section-block timeline-block' >
						
						<div class='container-fluid' >
							
							<div class='section-header' >
								
								<h2>My <strong class='color' >Experience</strong></h2>
								
							</div>
							
							<ul class='timeline' >
								
								<li>
									
									<div class='timeline-content' >
										
										<h4> traineeship at OCP </h4>
										
										<em>
											<span>Certificate</span>
											<span>2013-2016</span>
										</em>
										
										<p>
											Lorem ipsum dolor sit amet, id electram reprimique his, dicta saepe oporteat eos an, esse erat doming at lam. Nec quodsi suscipiantur an, ad graece nemore ocurreret lam, agam ipsum meliore quo ut.
										</p>
										
									</div>
									
								</li>
								
								<li>
									
									<div class='timeline-content' >
										
										<h4>traineeship at OCP </h4>
										
										<em>
											<span>Masters Degree</span>
											<span>F2016</span>
										</em>
										
										<p>
											Lorem ipsum dolor sit amet, id electram reprimique his, dicta saepe oporteat eos an, esse erat doming at lam. Nec quodsi suscipiantur an, ad graece nemore ocurreret lam, agam ipsum meliore quo ut.
										</p>
										
									</div>
									
								</li>
								
								<li>
									
									<div class='timeline-content' >
										
										<h4>CSS College Larkana</h4>
										
										<em>
											<span>Masters Degree</span>
											<span>2013-2016</span>
										</em>
										
										<p>
											Lorem ipsum dolor sit amet, id electram reprimique his, dicta saepe oporteat eos an, esse erat doming at lam. Nec quodsi suscipiantur an, ad graece nemore ocurreret lam, agam ipsum meliore quo ut.
										</p>
										
									</div>
									
								</li>
								
								
								
							</ul>
							
						</div>
						
					</div>
					
					
				</section>
				
				
				<!--=====================================================
					Portfolio Section
				=====================================================-->
				<section id='portfolio' class='section portfolio-section border-d' >
					
					<div class='section-block portfolio-block' >
						
						<div class='container-fluid' >
							
							
							<div class='section-header' >
								<h2>My <strong class='color' >Works</strong></h2>
							</div>
							
							<ul class='portfolio-filters' >
								<li>
									<a href='#' class='active' data-group='all' >
										All
									</a>
								</li>
								<li>
									<a href='#' data-group='web' >
										Web
									</a>
								</li>
								<li>
									<a href='#' data-group='tech' >
										Tech
									</a>
								</li>
								<li>
									<a href='#' data-group='photography' >
										UX/UI Desing
									</a>
								</li>
							</ul>
							
							<ul class='portfolio-items' >
								
								<li data-groups='["web","tech"]' >
									<div class='inner' >
										<img src='img/portfolio/1.jpg' alt>
										
										<div class='overlay' >
											
											<a href='#popup-1' class='view-project' >
												View Project
											</a>
											
											<!--project popup-->
											<div id='popup-1' class='popup-box zoom-anim-dialog mfp-hide' >
												<figure>
													
													<!--project popup image-->
													<img src='img/portfolio/1.jpg' alt>
												
												</figure>
												<div class='content' >
													
													<!--project popup title-->
													<h4>My Project Title</h4>
													
													<!--project popup description-->
													<p>
														Consul latine iudicabit eu vel. Cu has animal eruditi voluptatibus. Eu volumus explicari sed. Mel mutat vituperata suscipiantur et, et fabellas explicari adipiscing quo, no mucius euismod vis. Cu vim quem quod cibo.
													</p>
													
												</div>
												
											</div>
											
										</div>
										
									</div>
								</li>
								
								<li data-groups='["tech","photography"]' >
									<div class='inner' >
										<img src='img/portfolio/2.jpg' alt>
										
										<div class='overlay' >
											
											<a href='#popup-2' class='view-project' >
												View Project
											</a>
											
											<!--project popup-->
											<div id='popup-2' class='popup-box zoom-anim-dialog mfp-hide' >
												<figure>
													
													<!--project popup image-->
													<img src='img/portfolio/2.jpg' alt>
												
												</figure>
												<div class='content' >
													
													<!--project popup title-->
													<h4>My Project Title</h4>
													
													<!--project popup description-->
													<p>
														Consul latine iudicabit eu vel. Cu has animal eruditi voluptatibus. Eu volumus explicari sed. Mel mutat vituperata suscipiantur et, et fabellas explicari adipiscing quo, no mucius euismod vis. Cu vim quem quod cibo.
													</p>
													
												</div>
												
											</div>
											
										</div>
										
									</div>
								</li>
								
								<li data-groups='["web","photography"]' >
									<div class='inner' >
										<img src='img/portfolio/3.jpg' alt>
										
										<div class='overlay' >
											
											<a href='#popup-3' class='view-project' >
												View Project
											</a>
											
											<!--project popup-->
											<div id='popup-3' class='popup-box zoom-anim-dialog mfp-hide' >
												<figure>
													
													<!--project popup image-->
													<img src='img/portfolio/3.jpg' alt>
												
												</figure>
												<div class='content' >
													
													<!--project popup title-->
													<h4>My Project Title</h4>
													
													<!--project popup description-->
													<p>
														Consul latine iudicabit eu vel. Cu has animal eruditi voluptatibus. Eu volumus explicari sed. Mel mutat vituperata suscipiantur et, et fabellas explicari adipiscing quo, no mucius euismod vis. Cu vim quem quod cibo.
													</p>
													
												</div>
												
											</div>
											
										</div>
										
									</div>
								</li>
								
								
								<li data-groups='["web"]' >
									<div class='inner' >
										<img src='img/portfolio/4.jpg' alt>
										
										<div class='overlay' >
											
											<a href='#popup-4' class='view-project' >
												View Project
											</a>
											
											<!--project popup-->
											<div id='popup-4' class='popup-box zoom-anim-dialog mfp-hide' >
												<figure>
													
													<!--project popup image-->
													<img src='img/portfolio/4.jpg' alt>
												
												</figure>
												<div class='content' >
													
													<!--project popup title-->
													<h4>My Project Title</h4>
													
													<!--project popup description-->
													<p>
														Consul latine iudicabit eu vel. Cu has animal eruditi voluptatibus. Eu volumus explicari sed. Mel mutat vituperata suscipiantur et, et fabellas explicari adipiscing quo, no mucius euismod vis. Cu vim quem quod cibo.
													</p>
													
												</div>
												
											</div>
											
										</div>
										
									</div>
								</li>
								
								<li data-groups='["tech"]' >
									<div class='inner' >
										<img src='img/portfolio/5.jpg' alt>
										
										<div class='overlay' >
											
											<a href='#popup-5' class='view-project' >
												View Project
											</a>
											
											<!--project popup-->
											<div id='popup-5' class='popup-box zoom-anim-dialog mfp-hide' >
												<figure>
													
													<!--project popup image-->
													<img src='img/portfolio/5.jpg' alt>
												
												</figure>
												<div class='content' >
													
													<!--project popup title-->
													<h4>My Project Title</h4>
													
													<!--project popup description-->
													<p>
														Consul latine iudicabit eu vel. Cu has animal eruditi voluptatibus. Eu volumus explicari sed. Mel mutat vituperata suscipiantur et, et fabellas explicari adipiscing quo, no mucius euismod vis. Cu vim quem quod cibo.
													</p>
													
												</div>
												
											</div>
											
										</div>
										
									</div>
								</li>
								
								<li data-groups='["photography"]' >
									<div class='inner' >
										<img src='img/portfolio/6.jpg' alt>
										
										<div class='overlay' >
											
											<a href='#popup-6' class='view-project' >
												View Project
											</a>
											
											<!--project popup-->
											<div id='popup-6' class='popup-box zoom-anim-dialog mfp-hide' >
												<figure>
													
													<!--project popup image-->
													<img src='img/portfolio/6.jpg' alt>
												
												</figure>
												<div class='content' >
													
													<!--project popup title-->
													<h4>My Project Title</h4>
													
													<!--project popup description-->
													<p>
														Consul latine iudicabit eu vel. Cu has animal eruditi voluptatibus. Eu volumus explicari sed. Mel mutat vituperata suscipiantur et, et fabellas explicari adipiscing quo, no mucius euismod vis. Cu vim quem quod cibo.
													</p>
													
												</div>
												
											</div>
											
										</div>
										
									</div>
								</li>
								
							</ul>
							
						</div>
					
					</div>
					
				</section>
				
				
				<!--=====================================================
					Contact Section
				=====================================================-->
				<section id='contact' class='section contact-section border-d' >
					
					<div class='section-block contact-block' >
						
						<div class='container-fluid' >
							
							<div class='section-header' >
								<h2>Contact <strong class='color' >Me</strong></h2>
							</div>
							
							
							<div class='row' >
							
								<div class='col-md-8' >
									
									<div class='contact-form' >
									
										<form id='contact-form' data-toggle='validator' method='post' action='mail.php' >
										
											<div id='contact-form-result' ></div>
										
											<div class='row' >
												
												<div class='col-md-6' >
													<div class='form-group' >
														
														<input type='text' class='form-control' placeholder='Name' name='name' required>
														<div class='help-block with-errors' ></div>
														
													</div>												
												</div>
												
												<div class='col-md-6' >
													<div class='form-group' >
														
														<input type='email' class='form-control' placeholder='Email' name='email' required>
														<div class='help-block with-errors' ></div>
													
													</div>
												</div>
												
											</div>
											
											<div class='form-group' >
												
												<input type='text' class='form-control' placeholder='Subject' name='subject' required>
												<div class='help-block with-errors' ></div>
											
											</div>
											
											<div class='form-group' >
												
												<textarea class='form-control' placeholder='Message' name='message' rows='5' required></textarea>
												<div class='help-block with-errors' ></div>
												
											</div>
											
											<div class='form-group text-center' >
												<button type='submit' class='btn-custom btn-color' >
													Send Message
												</button>
											</div>
											
										</form>
										
									</div>
									
									
								</div>
								
								<div class='col-md-4' >
									
									<div class='contact-info-icons' >
										
										<div class='contact-info' >
											
											<i class='ion-ios-location-outline' ></i>
											
											<p>
												1254 Patterson Street<br>
												Houston, TX 77025
											</p>
											
										</div>
										
										
										<div class='contact-info' >
											
											<i class='ion-ios-telephone-outline' ></i>
											
											<p>
												(+123) 713-295-4383<br>
												(+123) 913-295-2583
											</p>
											
										</div>
										
										
										<div class='contact-info' >
											
											<i class='ion-android-globe' ></i>
											
											<p>
												www.google.com<br>
												www.example.com
											</p>
											
										</div>
										
										
										
										
									</div>
									
									
									
								</div>
								
								
							</div>
							
							
							
						</div>
					
					</div>
					
				</section>
				
			</div>
			
		</div>

		
		<!--=====================================================
			JavaScript Files
		=====================================================-->
		<script src='js/jquery.min.js' ></script>
		<script src='js/jquery.shuffle.min.js' ></script>
		<script src='js/owl.carousel.min.js' ></script>
		<script src='js/jquery.magnific-popup.min.js' ></script>
		<script src='js/validator.min.js' ></script>
		<script src='js/script.js' ></script>
		<script src="https://unpkg.com/ionicons@4.5.5/dist/ionicons.js"></script>

		
	</body>
</html>


