<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

<title>ESI - EDIfly Solusi Indonesia</title>

<!-- Fav Icon -->
<link rel="icon" href="images/faviconesi.png" type="image/x-icon">

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Ubuntu:300,300i,400,400i,500,500i,700,700i&display=swap" rel="stylesheet">

<!-- Stylesheets -->
<link href="css/font-awesome-all.css" rel="stylesheet">
<link href="css/flaticon.css" rel="stylesheet">
<link href="css/owl.css" rel="stylesheet">
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/jquery.fancybox.min.css" rel="stylesheet">
<link href="css/animate.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="css/responsive.css" rel="stylesheet">

</head>


<!-- page wrapper -->
<body class="boxed_wrapper">
<?php include "koneksi.php";?>

    <!-- preloader -->
    <div class="preloader"></div>
    <!-- preloader -->

    <!-- main header -->
    <header class="main-header style-three">
	<div class="header-upper">
        <div class="outer-container">
            <div class="container">
                <div class="main-box clearfix">
                    <div class="logo-box pull-left">
                        <figure class="logo"><a href="index.php"><img src="images/Logoesi.png" alt="EDIfly Solusi Indonesia" height="80%" width="80%"></a></figure>
                    </div>
                    <div class="menu-area pull-right clearfix">
                        <!--Mobile Navigation Toggler-->
                        <div class="mobile-nav-toggler">
                            <i class="icon-bar"></i>
                            <i class="icon-bar"></i>
                            <i class="icon-bar"></i>
                        </div>
                        <nav class="main-menu navbar-expand-md navbar-light">
                            <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                                <ul class="navigation clearfix">
                                    <li class="current dropdown"><a href="index.php">Home</a>
                                    </li> 
                                    <li class="dropdown"><a href="#">Product</a>
                                        <ul>
                                            <?php
											$query = mysqli_query($koneksi, "select id_product,product from product where status='publish' ");
											while ($rowquery = mysqli_fetch_array($query)) {
											?>
											<li><a href="index.php?page=product&&prd=<?php echo $rowquery['id_product']; ?>"><?php echo $rowquery['product']; ?> </a></li>
											<?php
											}
											?>
                                        </ul>
                                    </li>
									<li><a href="index.php?page=client">Clients</a>
                                    </li>
                                    <li><a href="index.php?page=event">Events</a></li>
									<li><a href="index.php?page=about">About Us</a></li>  
                                    <!--<li class="dropdown"><a href="#">Solutions</a>
                                        <ul>
                                            <li><a href="blog.html">Latest News</a></li>
                                            <li><a href="blog-details.html">News Details</a></li>
                                        </ul>
                                    </li> -->                             
                                    <li><a href="index.php?page=contact">Contact</a></li>
                                </ul>
                            </div>
                        </nav>
                        <div class="btn-box"><a href="#">Call Now</a></div>
                    </div>
                </div>
            </div>
        </div>

        <!--sticky Header-->
        <div class="sticky-header">
            <div class="container clearfix">
                <figure class="logo-box"><a href="index.php"><img src="images/Logoesi-light.png" height="60%" width="60%" alt=""></a></figure>
                <div class="menu-area">
                    <nav class="main-menu clearfix">
                        <!--Keep This Empty / Menu will come through Javascript-->
                    </nav>
                </div>
            </div>
        </div>
      </div>
    </header>
    <!-- main-header end -->

    <!-- Mobile Menu  -->
    <div class="mobile-menu">
        <div class="menu-backdrop"></div>
        <div class="close-btn"><i class="fas fa-times"></i></div>
        
        <nav class="menu-box">
            <div class="nav-logo"><a href="index.html"><img src="images/logo.png" alt="" title=""></a></div>
            <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
            <div class="contact-info">
                <h4>Contact Info</h4>
                <ul>
                    <li>Chicago 12, Melborne City, USA</li>
                    <li><a href="tel:+8801682648101">+88 01682648101</a></li>
                    <li><a href="mailto:info@example.com">info@example.com</a></li>
                </ul>
            </div>
            <div class="social-links">
                <ul class="clearfix">
                    <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                    <li><a href="#"><span class="fab fa-facebook-square"></span></a></li>
                    <li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
                    <li><a href="#"><span class="fab fa-instagram"></span></a></li>
                    <li><a href="#"><span class="fab fa-youtube"></span></a></li>
                </ul>
            </div>
        </nav>
    </div><!-- End Mobile Menu -->
<?php
                                error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
                                //FORM INPUT dan EDIT
                               if ($_GET['page']=="contact"){
									include "contact.php";
								}elseif($_GET['page']=="about"){
									include "about.php";
								}elseif($_GET['page']=="client"){
									include "about.php";
								}elseif($_GET['page']=="event"){
									include "about.php";
								}else{
								?>	
									
								

    <!-- banner-section -->
    <section class="banner-style-12">
			
			<div class="video-layer" >
							<video height="760px" autoplay="" loop="" muted="" poster="">
							<source src="https://www.edifly-si.com/newweb/email.webm" type="video/webm" />
							</video>
			</div>
			<div class="video-overlay"></div>
        <div class="pattern-bg" style="background-image: url(images/icons/shap-15.png);"></div>
			
        <div class="image-layer" style="background-image: url(images/icons/banner-bg-11.png);"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                    <div class="content-box">
                        <h1>Integration with EDIfly and Build Smart Data.</h1>
                        <div class="text">Provides the best solution in the field of information technology through international standard quality products to improve the effectiveness and efficiency of the company</div>
                        <div class="btn-box">
                            <a href="#" class="btn-one"><i class="fas fa-envelope"></i>Contact with Email</a>
                            <a href="#" class="btn-two">More EDIfly</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                    <div class="image-box">
                        <div class="bg-layer" style="background-image: url(images/icons/shap-14.png);"></div>
                        <figure class="image wow slideInRight" data-wow-delay="300ms" data-wow-duration="1500ms"><img src="images/misc/home1.png" alt=""></figure>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner-section end -->


    <!-- clients-section -->
    <section class="clients-section home-12">
        <div class="container">
            <div class="sec-title">
                <h2>Trusted By Companies</h2>
                <p>Trusted in several companies, institutions, national airlines and several international airlines  <br />& as well as in cargo and others.</p>
            </div>
            <div class="clients-carousel owl-carousel owl-theme owl-dots-none">
									<?php
									$query_cl= mysqli_query($koneksi, "select *from client");
									while ($row_query_cl= mysqli_fetch_array($query_cl)){
									
									?>
									<figure class="image-box"><a href="#"><img src="images/client/<?php echo $row_query_cl['images']; ?>" alt=""></a></figure>
									<?php
										}
									?>
                
            </div>
        </div>
    </section>
    <!-- clients-section end -->


    <!-- designe-process -->
    <section class="designe-process">
        <div class="container">
            <div class="sec-title center"><h2>We provides international standard quality products to improve the effectiveness and efficiency of the company.
										</h2></div>
            <div class="row">
							<?php
							$querypilar = mysqli_query($koneksi, "select * from 3_pilar where status='publish' ");
									while ($rowqueryplr = mysqli_fetch_array($querypilar)) {
							?>
                <div class="col-lg-4 col-md-6 col-sm-12 single-column ">
                    <div class="single-item wow fadeInLeft" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="left-layer"></div>
                            <div class="right-layer"></div>
                            <div class="icon-box">
                                <i class="<?php echo $rowqueryplr['icon']; ?>"></i>
                            </div>
                            <h4><a href="#"><?php echo $rowqueryplr['title']; ?></a></h4>
                            <div class="text">
							<p>
							<?php echo $rowqueryplr['isi']; ?>
							</p>
							</div>
                        </div>
                    </div>
                </div>
				<?php
				}
				?>
                
            </div>
        </div>
    </section>
    <!-- designe-precess end -->


    <!-- solution-section -->
    <section class="solution-section">
        <div class="container">
            <div class="sec-title center"><h2>A flexible design solution that<br />adapts to your Business.</h2></div>
            <div class="inner-content">
                <div class="inner-box">
                    <div class="row align-items-center">
                        <div class="col-lg-7 col-md-12 col-sm-12 image-column">
                            <div id="image_block_31">
                                <div class="image-box wow slideInLeft" data-wow-delay="00ms" data-wow-duration="1500ms">
                                    <figure class="image"><img src="images/misc/screen_app.png" alt=""></figure>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-12 col-sm-12 content-column">
                            <div id="content_block_32">
                                <div class="content-box wow fadeInRight" data-wow-delay="00ms" data-wow-duration="1500ms">
                                    <div class="icon-box">
                                        <figure class="icon"><img src="images/Logoesi.png" alt="" width="50%" height="50%"></figure>
                                        <figure class="icon"><img src="images/product-logo/edifly-new.png" width="50%" height="50%" alt=""></figure>
                                    </div>
                                    <div class="sec-title"><h2>Create Interconnected Applications</h2></div>
                                    <div class="text">A big part of design process application is interconnected Data. One of our applications is <b>EDIFLY</b>, with them the efficiency of time and costs it becomes down and the work process is more efficient</div>
                                    <div class="btn-box"><a href="#" class="theme-btn">Read More<i class="fas fa-angle-right"></i></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="inner-box">
                    <div class="row align-items-center">
                        <div class="col-lg-7 col-md-12 col-sm-12 content-column">
                            <div id="content_block_32">
                                <div class="content-box wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
                                    <div class="icon-box">
                                        <figure class="icon"><img src="images/Logoesi.png" alt="" width="50%" height="50%"></figure>
                                        <figure class="icon"><img src="images/product-logo/edifly-new.png" width="50%" height="50%" alt=""></figure>
                                    </div>
                                    <div class="sec-title"><h2>We Give Best Solution for Your Small, Medium and Enterprise Company</h2></div>
                                    <div class="text">We are READY to provide various SOLUTIONS for every business process you need. </br>
									We have applications that have been installed and used in several different industries, including in the fields of Airlines, Cargo Terminals, Customs and many others.
									</div>
                                    <div class="btn-box"><a href="#" class="theme-btn">Get Us<i class="fas fa-angle-right"></i></a></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-12 col-sm-12 image-column">
                            <div id="image_block_32">
                                <div class="image-box wow slideInRight" data-wow-delay="300ms" data-wow-duration="1500ms">
                                    <figure class="image"><img src="images/misc/screen_app2.png" alt=""></figure>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- solution-section end -->
	<section class="userfree-section testimonial-style-five">
        <div class="pattern-bg" style="background-image: url(images/icons/pattern-20.png);"></div>
        <div class="container">
		<div class="sec-title">
                <h2>PT.ESI Products</h2>
                <p>Innovative Ideas for Every Our Apps and Through International Standard Quality Products</p>
            </div>
            <div class="two-column-carousel owl-carousel owl-theme">
											<?php
											$query = mysqli_query($koneksi, "select id_product,images,deskripsi,part,product from product where status='publish' ");
											while ($rowquery = mysqli_fetch_array($query)) {
												$desk = $rowquery['deskripsi'];
										$arr = explode(" ", $desk);
										$limit = 15;
										$new = [];

										if (count($arr) > $limit) {
											for ($i = 0; $i < $limit; $i++) {
												array_push($new, $arr[$i]);
											}
										}

										if ($new) {
											$new = implode(" ", $new);
											$desk2 = $new;
											$desk2 = $new . "...";
										} else {
											$desk2 = $desk;
										}
											?>
											
											
                <div class="testimonial-content">
                    <div class="inner-box">
                        
                        <div class="author-info">
                            <figure class="image-box"><img src="images/product-logo/<?php echo $rowquery['images']; ?>" alt=""></figure>
                            <h5 class="name"><?php echo $rowquery['product']; ?></h5>
                            <span class="designation"><?php echo $rowquery['part']; ?></span>
                        </div>
                        <div class="text"><?php echo $desk2; ?></div>
                    </div>
                </div>
											<?php
											}
											?>
                
            </div>
        </div>
    </section>

    <!-- designe-process-two -->
    <section class="testimonial-style-ten">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-12 col-md-12 user-column">
                    <div class="user-thumb">
                        <div class="thumb-box">
                            <div class="pattern-bg1" style="background-image: url(images/icons/thumb-bg.png);"></div>
                            <div class="pattern-bg2" style="background-image: url(images/icons/map-shap-3.png);"></div>
                            <figure class="thumb thumb-1"><img src="images/ui/edi-circle.png" alt=""></figure>
                            <figure class="thumb thumb-2"><img src="images/ui/other-circle.png" alt=""></figure>
                            <figure class="thumb thumb-3"><img src="images/ui/airport-circle.png" alt=""></figure>
                            <figure class="thumb thumb-4"><img src="images/ui/carg-circle.png" alt=""></figure>
                            <figure class="thumb thumb-5"><img src="images/ui/ground-circle.png" alt=""></figure>
                            <figure class="thumb thumb-6"><img src="images/ui/flight-circle.png" alt=""></figure>
                            <figure class="thumb thumb-7"><img src="images/ui/bc-circle.png" alt=""></figure>
                            <figure class="thumb thumb-8"><img src="images/ui/cargo-circle.png" alt=""></figure>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-12 col-md-12 content-column">
                    <div class="content-box">
                        <div class="sec-title"><h2>How Clients React</h2></div>
                        <div class="testimonial-carousel-2 owl-carousel owl-theme">
                            <div class="testimonial-content">
                                <div class="inner-box">
                                    <div class="text">“Even if you use Okta for deprovisioning, it can’t do everything you need to do. BetterCloud picks up where Okta leaves off.”</div>
                                    <div class="author-info">
                                        <ul class="rating clearfix">
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                        </ul>
                                        <h4 class="name">Ryan Donnon</h4>
                                        <span class="designation">Head of IT, First Round Capital</span>
                                    </div>
                                </div>
                            </div>
                            <div class="testimonial-content">
                                <div class="inner-box">
                                    <div class="text">“Even if you use Okta for deprovisioning, it can’t do everything you need to do. BetterCloud picks up where Okta leaves off.”</div>
                                    <div class="author-info">
                                        <ul class="rating clearfix">
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                        </ul>
                                        <h4 class="name">Ryan Donnon</h4>
                                        <span class="designation">Head of IT, First Round Capital</span>
                                    </div>
                                </div>
                            </div>
                            <div class="testimonial-content">
                                <div class="inner-box">
                                    <div class="text">“Even if you use Okta for deprovisioning, it can’t do everything you need to do. BetterCloud picks up where Okta leaves off.”</div>
                                    <div class="author-info">
                                        <ul class="rating clearfix">
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                        </ul>
                                        <h4 class="name">Ryan Donnon</h4>
                                        <span class="designation">Head of IT, First Round Capital</span>
                                    </div>
                                </div>
                            </div>
                            <div class="testimonial-content">
                                <div class="inner-box">
                                    <div class="text">“Even if you use Okta for deprovisioning, it can’t do everything you need to do. BetterCloud picks up where Okta leaves off.”</div>
                                    <div class="author-info">
                                        <ul class="rating clearfix">
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                        </ul>
                                        <h4 class="name">Ryan Donnon</h4>
                                        <span class="designation">Head of IT, First Round Capital</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- designe-process-two end -->


    <!-- designe-process-three -->
    <section class="designe-process-three">
        <div class="container">
            <div class="sec-title"><h2>Our Events and<br />Cooperation with clients</h2></div>
            <div class="inner-content">
                <div class="four-item-carousel owl-carousel owl-theme owl-dots-none">
									<?php
									$query_ev= mysqli_query($koneksi, "select *from event order by id_event DESC");
									while ($row_query_ev = mysqli_fetch_array($query_ev)){
									$isi = $row_query_ev['isi'];
										$arr = explode(" ", $isi);
										$limit = 10;
										$new = [];

										if (count($arr) > $limit) {
											for ($i = 0; $i < $limit; $i++) {
												array_push($new, $arr[$i]);
											}
										}

										if ($new) {
											$new = implode(" ", $new);
											$isi2 = $new;
											$isi2 = $new . "...";
										} else {
											$isi2 = $isi;
										}
									?>
                    <div class="single-item">
                        <div class="inner-box">
                            <h3><a href="#"><?php echo $row_query_ev['judul']; ?></a></h3>
                            <div class="text"><?php echo $isi2; ?></div>
                            <figure class="image-box"><img src="images/event/<?php echo $row_query_ev['gambar']; ?>" alt=""></figure>
                        </div>
                    </div>
									<?php
									}
									?>
                    
                </div>
            </div>
        </div>
    </section>
    <!-- designe-process-three end -->


    <!-- streamline-section -->
    <section class="streamline-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                    <div id="content_block_33">
                        <div class="content-box">
                            <h2>Streamline your design workflow and unify your team.</h2>
                            <div class="text">From conception to presentation with one online solution.</div>
                            <a href="#">Get Started</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                    <div id="image_block_33">
                        <div class="image-box wow slideInRight" data-wow-delay="300ms" data-wow-duration="1500ms">
                            <figure class="image clearfix js-tilt"><img src="images/misc/tjutjuk.png" alt=""></figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- streamline-section end -->
<?php
}
?>

    <!-- main-footer -->
    <footer class="main-footer">
        <div class="image-layer" style="background-image: url(images/icons/footer-bg-3.png);"></div>
        <div class="container">
            <div class="footer-top">
                <div class="widget-section">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-sm-12 footer-column">
                            <div class="about-widget footer-widget">
                                <figure class="footer-logo"><a href="index.html"><img src="images/Logoesi.png" alt=""></a></figure>
                                <div class="text">Lorem ipsum dolor sit consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim lorem sed do eiusmod.</div>
                                <ul class="social-links">
                                    <li><h6>Follow Us :</h6></li>
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                            <div class="links-widget footer-widget">
                                <h4 class="widget-title">Support</h4>
                                <div class="widget-content">
                                    <ul class="list clearfix">
                                        <li><a href="#">Contact Us</a></li>
                                        <li><a href="#">Visit Knowledge Base</a></li>
                                        <li><a href="#">Support System</a></li>
                                        <li><a href="#">Professional Services</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                            <div class="contact-widget footer-widget">
                                <h4 class="widget-title">Contact Info</h4>
                                <div class="widget-content">
                                    <ul class="list clearfix">
									
                                        <li><i class="fas fa-map-marker-alt"></i>Graha ESI
												Jl. Raya Pasar Kecapi No. 16, Bekasi 17414,<br />Jawa Barat, Indonesia</li>
                                        <li><i class="fas fa-calendar-alt"></i> Monday-Friday: 9.00AM–5.00PM</li>
										<li>
                                            <i class="fas fa-phone-volume"></i>
                                            <a href="tel:+622122107817">+62 21 2210 7817 (24×7)</a>
                                        </li>
                                        <li>
                                            <i class="fas fa-envelope"></i>
                                            <a href="mailto:info@example.com">info@edifly-si.com</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="copyright">&copy; 2022 <a href="#">IT Team PT.ESI</a>. All rights reserved</div>
            </div>
        </div>
    </footer>
    <!-- main-footer end -->



<!--Scroll to top-->
<button class="scroll-top scroll-to-target" data-target="html">
    <span class="fa fa-arrow-up"></span>
</button>


<!-- jequery plugins -->
<script src="js/jquery.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/owl.js"></script>
<script src="js/wow.js"></script>
<script src="js/validation.js"></script>
<script src="js/jquery.fancybox.js"></script>
<script src="js/appear.js"></script>
<script src="js/scrollbar.js"></script>
<script src="js/jquery.paroller.min.js"></script>
<script src="js/tilt.jquery.js"></script>

<!-- main-js -->
<script src="js/script.js"></script>

</body><!-- End of .page_wrapper -->
</html>
