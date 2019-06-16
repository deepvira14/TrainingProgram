<!DOCTYPE html>
<html>
<body>
<!-- HEADER -->
		<header id="header" class="header6  header_fixed_enabled">
		
			<!-- Main Header -->
			<div id="main-header" class="bg-white color-dark">
				<div class="container">
					<div class="row">
					
						<div class="col-lg-3 col-md-3">
							<div class="logo">
								<a href="#"><img src="img/logo.png" alt="Logo"></a>
							</div>
						</div>
						
						<div class="col-lg-9 col-md-9">	
							<div class="navigation">
								<nav id="main-nav" class="color-dark-gray active-color-blue dropdown-light border-color-blue ">
																
								<div id="mobile-menu-button">
									<span></span>
									<span></span>
									<span></span>
								</div>
							
								<div class="menu">
									<ul id="primary-nav" class="primary-nav">
										<li class="<?php if ($xyz=="home") {echo "current-menu-ancestor";}?> menu-item-has-children megamenu megamenu-columns-4">
											<a href="index.php">Home</a>
										</li>
										<li class="<?php if ($xyz=="aboutus") {echo "current-menu-ancestor";}?> menu-item-has-children megamenu megamenu-columns-4">
											<a href="aboutus.php">About Us</a>
										</li>
										<li class="<?php if ($xyz=="services") {echo "current-menu-ancestor";}?>" menu-item-has-children>
											<a href="services.php">Services</a>
											<ul class="mn-sub">
												<li><a href="websitedesign.php">Website dDesign</a></li>
												<li><a href="websitedevelopment.php">Website Development</a></li>
												<li><a href="digitalmarketing.php">Digital Marketing</a></li>
												<li><a href="softwaredevelopment.php">Software Development</a></li>
												<li><a href="mobileappdevelopment.php">Mobile App Development</a></li>
												<li><a href="webhosting.php">Web Hosting Services</a></li>
												<li><a href="ecommercesolution.php">E-commerce Solutions</a></li>
											</ul>
										</li>
										<li class="<?php if ($xyz=="portfolio") {echo "current-menu-ancestor";}?> menu-item-has-children">
											<a href="portfolio.php">Portfolio</a>
										</li>
										<li class="<?php if ($xyz=="carrers") {echo "current-menu-ancestor";}?> menu-item-has-children">
                                            <a href="carrers.php">Careers<span class="color-red"><sup>*NEW</sup></span></a>
										</li>
										<li class="<?php if ($xyz=="contactus") {echo "current-menu-ancestor";}?> menu-item-has-children">
											<a href="contactus.php">Contact Us</a>
										</li>
										
							</nav>
							</div>
						</div>

					</div>
				</div>
			</div>
			<!-- /Main Header -->
			
		</header>
		<!-- /HEADER -->
</body>
</html>