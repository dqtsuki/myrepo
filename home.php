<section aria-label="section-slider" class="fullwidthbanner-container" id="section-slider">
                <div id="revolution-slider">    
                    <ul>
						<li data-masterspeed="1500" data-slotamount="10" data-transition="fade">
                           
                            <div class="tp-caption custom-font-1" data-height="none" data-responsive_offset="on" data-splitin="none" data-splitout="none" data-start="1000" data-transform_in="y:-100px;opacity:0;s:800;e:Power2.easeOut;" data-transform_out="opacity:0;y:-20;s:500;e:Power2.easeInOut;" data-whitespace="nowrap" data-width="none" data-x="center" data-y="180">
                                Integration with EDIfly
                            </div>
                            <div class="tp-caption custom-font-3 text-center" data-height="none" data-responsive_offset="on" data-splitin="none" data-splitout="none" data-start="700" data-transform_in="y:-100px;opacity:0;s:800;e:Power2.easeOut;" data-transform_out="opacity:0;y:-20;s:700;e:Power2.easeInOut;" data-whitespace="wrap" data-width="550" data-x="center" data-y="center">
                                Build Smart Data <span class="id-color-2"></span>Aviation, Logistics and Many Industries
                            </div>
							<div class="tp-caption tp-text text-left" data-height="none" data-responsive_offset="on" data-splitin="none" data-splitout="none" data-start="1300" data-transform_in="y:100px;opacity:0;s:800;e:Power2.easeOut;" data-transform_out="opacity:0;y:30;s:700;e:Power2.easeInOut;" data-whitespace="nowrap" data-width="none" data-x="center" data-y="400">
                                <a class="btn-slider" href="#">Learn More</a>
                            </div>
                            
							<div class="de-video-overlay"></div>

						<!-- load your video here -->
							<video autoplay="" loop="" muted="" poster="">
							<source src="https://www.edifly-si.com/newweb/email.webm" type="video/webm" />
							</video>
							
                        </li>
						
                        <li data-masterspeed="1500" data-slotamount="10" data-transition="fade">
                            
                            <div class="tp-caption custom-font-1" data-height="none" data-responsive_offset="on" data-splitin="none" data-splitout="none" data-start="1000" data-transform_in="y:-100px;opacity:0;s:800;e:Power2.easeOut;" data-transform_out="opacity:0;y:-20;s:500;e:Power2.easeInOut;" data-whitespace="nowrap" data-width="none" data-x="center" data-y="180">
                                Integration with EDIfly
                            </div>
                            <div class="tp-caption custom-font-3 text-center" data-height="none" data-responsive_offset="on" data-splitin="none" data-splitout="none" data-start="700" data-transform_in="y:-100px;opacity:0;s:800;e:Power2.easeOut;" data-transform_out="opacity:0;y:-20;s:700;e:Power2.easeInOut;" data-whitespace="wrap" data-width="550" data-x="center" data-y="center">
                                High Performance <span class="id-color-2"></span> Message Broker and easiest implementation
                            </div>
                            <div class="tp-caption text-center tp-left" data-height="none" data-responsive_offset="on" data-splitin="none" data-splitout="none" data-start="1300" data-transform_in="y:100px;opacity:0;s:800;e:Power2.easeOut;" data-transform_out="opacity:0;y:30;s:700;e:Power2.easeInOut;" data-whitespace="nowrap" data-width="none" data-x="center" data-y="400">
                                <a class="btn-slider" href="#">Learn More</a>
                            </div>
                            
							<!-- load your video here -->
							<video autoplay="" loop="" muted="" poster="">
							<source src="https://www.edifly-si.com/newweb/email.webm" type="video/webm" />
							</video>							
                        </li>
						
                    </ul>
                </div>
            </section>

            <section id="section-highlight" class="relative pos-top no-top no-bottom mt-60 no-bg">

                <div class="container">
                    <div class="row">
							<?php
							$querypilar = mysqli_query($koneksi, "select * from 3_pilar where status='publish' ");
									while ($rowqueryplr = mysqli_fetch_array($querypilar)) {
							?>
                        <div class="col-lg-4 col-md-6 mb-sm-30 wow fadeInUp" data-wow-delay=".4s">
                            <div class="feature-box-type-1">
                                <i class="<?php echo $rowqueryplr['icon']; ?>"></i>
                                <div class="text">
                                    <h3><?php echo $rowqueryplr['title']; ?></h3>
									<div class="ceklist">
										<?php echo $rowqueryplr['isi']; ?>
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

            <section class="no-top no-bottom text" id="section-subscribe-no-bg"  data-stellar-background-ratio=".2">
                <div class="transparant-white">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8 offset-md-2">
                                <form action='blank.php' class="row" id='form_sb' method="post" name="myForm">
                                    <div id="subheader" class="col h5 text-center">
                                        PT. EDIfly Solusi Indonesia provides the best solution in the field of information technology through international standard quality products to improve the effectiveness and efficiency of the company.
										Providing comprehensive services to achieve measureable customer satisfaction.
                                        <div class="spacer-10"></div>
                                        
                                        <div class="clearfix"></div>
                                        <div class="spacer-10"></div>
                                        <div class="domain-ext">
                                            <div class="ext">
												<div class="feature-custom">
												<img src="images/ui/airport-svg.png" class="medium">
												</div>
                                                <h4>Airport</h4> 
                                            </div>

                                            <div class="ext">
												<div class="feature-custom">
												<img src="images/ui/airline-svg.svg" class="medium">
												</div>
                                                <h4>Airlines</h4> 
                                            </div>

                                            <div class="ext">
												<div class="feature-custom">
												<img src="images/ui/ground.png" class="medium">
												</div>
                                                <h4>Ground Handling</h4> 
                                            </div>

                                            <div class="ext">
												<div class="feature-custom">
												<img src="images/ui/cargo.png" class="medium">
												</div>
                                                <h4>Logistic</h4> 
                                            </div>

                                            <div class="ext">
												<div class="feature-custom">
												<img src="images/ui/logistic-svg.png" class="medium">
												</div>
                                                <h4>Flight Ops</h4> 
                                            </div>
											<div class="ext">
												<div class="feature-custom">
												<img src="images/ui/custom.png" class="medium">
												</div>
                                                <h4>Custom Apps</h4> 
                                            </div>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            

            <section id="section-banner" class="no-bottom  img-fluid bg-gradient-to-right text-light relative pos-top">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-4 d-none d-lg-block d-xl-block  text-center">
                            <img class="img-fluid mt-60" src="images/misc/ceo.png" alt="">
							
                        </div>

                        <div class="col-lg-4 col-md-6">
							<div class="p-sm-30 pb-sm-0 mb-sm-0">
								<h2>We are <colorblue>READY</colorblue> to provide various <colorwhiteblue>SOLUTIONS</colorwhiteblue> for every business process you need</h2>
							</div>
                        </div>

                        <div class="col-lg-4 col-md-6">
							<div class="p-sm-30">
                            <p class="lead">We give best solution for your small, medium and enterprise company</p>
                            <div class="spacer-half"></div>
                            <a class="btn-custom" href="#">Get Started</a>
							</div>
                        </div>
                    </div>
                </div>
            </section>
			
			<section id="pricing-table" class="pb40">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 wow fadeInUp">
                            <div class="text-center">
                                <h2><span class="uptitle id-color">EDIFLY SOLUSI INDONESIA PRODUCTS</span>Products</h2>
                                <div class="spacer-20"></div>
                            </div>
                        </div>
						<div class="owl-carousel owl-theme" id="blog-carousel">
							<?php
							$queryproduct = mysqli_query($koneksi, "select * from product where status='publish' ");
									while ($rowquerypro = mysqli_fetch_array($queryproduct)) {
							?>
							<div class="bloglist item">
                                <div class="pricing-s2 mb30 wow fadeInUp" data-wow-delay=".5s">
									<div class="inner">
										<div class="top2">
											<div class="galeriproduk">
											<img src="images/product-logo/<?php echo $rowquerypro['images']; ?>" width="220" height="150" alt="">
											</div>
											<div class="clearfix"></div>
											<h2><?php echo $rowquerypro['product'];?></h2>
											<p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
											<p class="price"><span class="txt">Start from</span><span class="currency">$</span>
												<span class="num opt-1">18.65</span>
												<span class="num opt-2">16.35</span>
												<span class="month">p/mo</span></p>
											<a href="" class="btn-custom mb10">Sign Up Now</a>
										</div>
									</div>
								</div>
                            </div>
							<?php
							}
							?>							
								
                        </div>
                    </div>
				</div>
            </section>

            

            <section id="section-testimonial" class="no-top no-bottom text-light" data-bgimage="url(images/background/1.jpg) center" data-stellar-background-ratio=".2">
                <div class="overlay-gradient">
                    <div class="text-center wow fadeInUp">
                        <h2><span class="uptitle">Testimonial</span>What They Says</h2>
                        <div class="spacer-20"></div>
                    </div>
                    <div class="owl-carousel owl-theme wow fadeInUp" id="testimonial-carousel">
                        <div class="item">
                            <div class="de_testi opt-2">
                                <blockquote>
                                    <p>Great support, like i have never seen before. Thanks to the support team, they are very helpfull. This company provide customers great solution, that makes them best.
                                    </p>
                                    <div class="de_testi_by">
                                        <img alt="" class="rounded-circle" src="images/people/1.jpg"> <span>John, Pixar Studio</span>
                                    </div>
                                </blockquote>
                            </div>
                        </div>
                        <div class="item">
                            <div class="de_testi opt-2">
                                <blockquote>
                                    <p>Great support, like i have never seen before. Thanks to the support team, they are very helpfull. This company provide customers great solution, that makes them best.</p>
                                    <div class="de_testi_by">
                                        <img alt="" class="rounded-circle" src="images/people/2.jpg"> <span>Sarah, Microsoft</span>
                                    </div>
                                </blockquote>
                            </div>
                        </div>
                        <div class="item">
                            <div class="de_testi opt-2">
                                <blockquote>
                                    <p>Great support, like i have never seen before. Thanks to the support team, they are very helpfull. This company provide customers great solution, that makes them best.</p>
                                    <div class="de_testi_by">
                                        <img alt="" class="rounded-circle" src="images/people/3.jpg"> <span>Michael, Apple</span>
                                    </div>
                                </blockquote>
                            </div>
                        </div>
                        <div class="item">
                            <div class="de_testi opt-2">
                                <blockquote>
                                    <p>Great support, like i have never seen before. Thanks to the support team, they are very helpfull. This company provide customers great solution, that makes them best.</p>
                                    <div class="de_testi_by">
                                        <img alt="" class="rounded-circle" src="images/people/4.jpg"> <span>Thomas, Samsung</span>
                                    </div>
                                </blockquote>
                            </div>
                        </div>
                        <div class="item">
                            <div class="de_testi opt-2">
                                <blockquote>
                                    <p>Great support, like i have never seen before. Thanks to the support team, they are very helpfull. This company provide customers great solution, that makes them best.</p>
                                    <div class="de_testi_by">
                                        <img alt="" class="rounded-circle" src="images/people/1.jpg"> <span>John, Pixar Studio</span>
                                    </div>
                                </blockquote>
                            </div>
                        </div>
                        <div class="item">
                            <div class="de_testi opt-2">
                                <blockquote>
                                    <p>Great support, like i have never seen before. Thanks to the support team, they are very helpfull. This company provide customers great solution, that makes them best.</p>
                                    <div class="de_testi_by">
                                        <img alt="" class="rounded-circle" src="images/people/2.jpg"> <span>Sarah, Microsoft</span>
                                    </div>
                                </blockquote>
                            </div>
                        </div>
                        <div class="item">
                            <div class="de_testi opt-2">
                                <blockquote>
                                    <p>Great support, like i have never seen before. Thanks to the support team, they are very helpfull. This company provide customers great solution, that makes them best.</p>
                                    <div class="de_testi_by">
                                        <img alt="" class="rounded-circle" src="images/people/3.jpg"> <span>Michael, Apple</span>
                                    </div>
                                </blockquote>
                            </div>
                        </div>
                        <div class="item">
                            <div class="de_testi opt-2">
                                <blockquote>
                                    <p>Great support, like i have never seen before. Thanks to the support team, they are very helpfull. This company provide customers great solution, that makes them best.</p>
                                    <div class="de_testi_by">
                                        <img alt="" class="rounded-circle" src="images/people/4.jpg"> <span>Thomas, Samsung</span>
                                    </div>
                                </blockquote>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
			
			<section id="section-faq" class="faq">
                <div class="container">
                    <div class="row">
                        <div class="col text-center wow fadeInUp">
                            <h2><span class="uptitle id-color">Frequently Asked Questions</span>Any Questions?</h2>
                            <div class="spacer-20"></div>
                        </div>
                    </div>
					
                    <div class="row wow fadeInUp">
                        <div class="col-md-6">
                            <div class="accordion secondary">
                                <div class="accordion-section">
                                    <div class="accordion-section-title" data-tab="#accordion-1">
                                        What is EDIfly?
                                    </div>
                                    <div class="accordion-section-content" id="accordion-1">
                                        <p>vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
                                    </div>
                                    <div class="accordion-section-title" data-tab="#accordion-2">
                                       How the EDIfly works ?
                                    </div>
                                    <div class="accordion-section-content" id="accordion-2">
                                        <p> vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
						
						<div class="col-md-6">
                            <div class="accordion secondary">
                                <div class="accordion-section text-center" >
										<img class="img-fluid mt-60" src="images/misc/edifly.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
			<section id="section-faq" class="faq">
                <div class="container">
                    <div class="row">
                        <div class="col text-center wow fadeInUp">
                            <h2><span class="uptitle id-color">Frequently Asked Questions</span>Any Questions?</h2>
                            <div class="spacer-20"></div>
                        </div>
                    </div>
					
                    <div class="row wow fadeInUp">
					<div class="col-md-6">
                            <div class="accordion secondary">
                                <div class="accordion-section text-center" >
										<img class="img-fluid mt-60" src="images/misc/edifly.png" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="accordion secondary">
                                <div class="accordion-section">
                                    <div class="accordion-section-title" data-tab="#accordion-1">
                                        What is EDIfly?
                                    </div>
                                    <div class="accordion-section-content" id="accordion-1">
                                        <p>vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
                                    </div>
                                    <div class="accordion-section-title" data-tab="#accordion-2">
                                       How the EDIfly works ?
                                    </div>
                                    <div class="accordion-section-content" id="accordion-2">
                                        <p> vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
						
                    </div>
                </div>
            </section>

            <section id="section-fun-facts" class="pt10 pb10 text-light bg-gradient-to-right">
                <div class="container">

                    <div class="row text-center">
                        <div class="col-md-12 col-sm-12 text-center">
                            <div class="de_count text-center">
                                <h3>This We Are</h3>
                                <span>EDIfly Solusi Indonesia</span>
                            </div>
                        </div>
                    </div>

                </div>
            </section>

            <section class="no-top no-bottom text-light" data-bgimage="url(images/background/9.jpg)" data-stellar-background-ratio=".2">
                <div class="overlay-gradient">
                   <div class="container">
					<div class="row">
                        <div class="col-md text-center wow fadeInUp">
                            <h2><span class="uptitle id-color"></span>Our Event</h2>
                            <div class="spacer-20"></div>
                        </div>
                    </div>
                    <div class="row">
								<?php
									$query_ev= mysqli_query($koneksi, "select *from event order by id_event DESC limit 3");
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
						<div class="col-lg-4 col-md-6 mb30 wow fadeInUp" data-wow-delay=".5s">
							<div class="bloglist item">
                                    <div class="post-content">
                                        <div class="post-image">
                                            <a class="image-popup" href="images/news/1.jpg">
                                                <img alt="" src="images/event/<?php echo $row_query_ev['gambar']; ?>">
                                            </a>
                                            <div class="post-info">
                                                <div class="inner">
                                                    <span class="post-date">4 days ago</span> <span class="post-author">ESI Doc</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="post-text">
                                            <h3><a href="news-single.html"><?php echo $row_query_ev['judul']; ?></a></h3>
                                            </div>
                                    </div>
                                </div>
						</div>
						
						<?php 
						}
						?>
						
						
                    </div>
                </div>
				   
				   
                </div>
            </section>
			
			
			
			<section id="section-logo">

                <div class="container">
				<div class="col-md text-center wow fadeInUp">
                            <h2><span class="uptitle id-color">Our Clients</span></h2>
                            <div class="spacer-20"></div>
                </div>
					<div class="row">						
						<div class="col-md-12 wow fadeInUp" data-wow-delay="0s">
							<div id="owl-logo" class="logo-carousel owl-carousel owl-theme">
									<?php
									$query_cl= mysqli_query($koneksi, "select *from client");
									while ($row_query_cl= mysqli_fetch_array($query_cl)){
									
									?>
									<img src="images/client/<?php echo $row_query_cl['images']; ?>" class="img-fluid" alt="">
									<?php
										}
									?>	
							</div>
                        </div>						
					</div>
                </div>
            </section>
		