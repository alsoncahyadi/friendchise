<!-- Bakal diturunkan dari template-->

@extends('template')

<!-- Menambahkan kode ke bagian bawah yield main-->
@section('main')
	<<!-- PRELOADER -->
<img id="preloader" src="images/preloader.gif" alt="" />
<!-- //PRELOADER -->
<div class="preloader_hide">

	<!-- PAGE -->
	<div id="page">
	
		<!-- HEADER -->
		<header>
			
			<!-- MENU BLOCK -->
			<div class="menu_block">
			
				<!-- CONTAINER -->
				<div class="container clearfix">
					
					<!-- LOGO -->
					<div class="logo pull-left">
						<a href="#" >
						<span class="b1">F</span>
						<span class="b1">R</span>
						<span class="b2">I</span>
						<span class="b2">E</span>
						<span class="b3">N</span>
						<span class="b3">D</span>
						<span class="b4">C</span>
						<span class="b4">H</span>
						<span class="b4">I</span>
						<span class="b5">S</span>
						<span class="b5">E</span>
						</a>
					</div><!-- //LOGO -->
					
					<!-- LOGIN FORM -->
					<div id="login-form" class="pull-right">
						<form method="get" action="#">
							<input type="text" name="username" value="Username" onFocus="if (this.value == 'Username') this.value = '';" onBlur="if (this.value == '') this.value = 'Username';" />
							<input type="password" name="password" value="password" onFocus="if (this.value == 'password') this.value = '';" onBlur="if (this.value == '') this.value = 'password';" />
							<input type="submit" style="position: absolute; left: -9999px; width: 1px; height: 1px;" tabindex="-1" />
						</form>
					</div><!-- SEARCH FORM -->
					
					
				</div><!-- //MENU BLOCK -->
			</div><!-- //CONTAINER -->
		</header><!-- //HEADER -->
		
		
		<!-- HOME -->
		<section id="home" class="padbot0">
				
			<!-- TOP SLIDER -->
			<div class="flexslider top_slider">
				<ul class="slides">
					<li class="slide1">
						<div class="flex_caption1">
							<p class="title1 captionDelay2 FromTop">Integrasi</p>
							<p class="title2 captionDelay4 FromTop">Pelaku</p>
							<p class="title3 captionDelay6 FromTop">Waralaba</p>
							<p class="title4 captionDelay7 FromBottom">Platform yang sangat cocok baik pemilik usaha waralaba maupun mitra usahanya</p>
						</div>
						<!-- <a class="slide_btn FromRight" href="javascript:void(0);" >Read More</a> -->
					<li class="slide2">
						<div class="flex_caption1">
							<p class="title1 captionDelay6 FromLeft">Real</p>
							<p class="title2 captionDelay4 FromLeft">Time</p>
							<p class="title3 captionDelay2 FromLeft">Monitoring</p>
							<p class="title4 captionDelay7 FromLeft">Pewaralaba dapat melakukan monitoring hasil penjualan dan status stok terhadap setiap mitra secara Real Time</p>
						</div>
						<!--<a class="slide_btn FromRight" href="javascript:void(0);" >Read More</a>-->
					</li>
					<li class="slide3">
						<div class="flex_caption1">
							<p class="title1 captionDelay1 FromBottom">Rekomendasi</p>
							<p class="title2 captionDelay2 FromBottom">Lokasi</p>
							<p class="title3 captionDelay3 FromBottom">Strategis</p>
							<p class="title4 captionDelay5 FromBottom">Sistem akan memberikan rekomendasi lokasi yang strategis baik untuk para mitra baru yang akan bergabung maupun mitra lama yang ingin bergabung</p>
						</div>
						<!--<a class="slide_btn FromRight" href="javascript:void(0);" >Read More</a>-->
						
						
					</li>
				</ul>
			</div>
			<div id="carousel">
				<ul class="slides">
					<li><img src="images/slider/slide1_bg.jpg" alt="" /></li>
					<li><img src="images/slider/slide2_bg.jpg" alt="" /></li>
					<li><img src="images/slider/slide3_bg.jpg" alt="" /></li>
				</ul>
			</div><!-- //TOP SLIDER -->
		</section><!-- //HOME -->
		
		
		<!-- ABOUT -->
		<section id="about">
			
			<!-- SERVICES -->
			<div class="services_block padbot40" data-appear-top-offset="-200" data-animated="fadeInUp">
				
				<!-- CONTAINER -->
				<div class="container">
				
					<!-- ROW -->
					<div class="row">
						<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-ss-12 margbot30">
							<a class="services_item" href="javascript:void(0);" >
								<p><b>Easy</b> Customize</p>
								<span>Quality and very comfortable design, does not hurt the eyes and pleasant to use.</span>
							</a>
						</div>
						<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-ss-12 margbot30">
							<a class="services_item" href="javascript:void(0);" >
								<p><b>Modern</b> Design</p>
								<span>Quality and unique design that meets all the requirements and trends of modern web design.</span>
							</a>
						</div>
						<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-ss-12 margbot30">
							<a class="services_item" href="javascript:void(0);" >
								<p><b>Responsive</b> Design</p>
								<span>Design that will be equally beautifully displayed on all your devices, tablet, smartphone or computer.</span>
							</a>
						</div>
						<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-ss-12 margbot30">
							<a class="services_item" href="javascript:void(0);" >
								<p><b>Free</b> Updates & Support</p>
								<span>Hour and great support template. You can always ask a question and we will help you.</span>
							</a>
						</div>
					</div><!-- //ROW -->
				</div><!-- //CONTAINER -->
			</div><!-- //SERVICES -->
			
			
			
			<!-- MULTI PURPOSE -->
			<div class="purpose_block">
				
				<!-- CONTAINER -->
				<div class="container">
					
					<!-- ROW -->
					<div class="row">
					
						<div class="col-lg-7 col-md-7 col-sm-7" data-appear-top-offset="-200" data-animated="fadeInLeft">
							<h2><b>Multi-purpose</b> WordPress Theme</h2>
							<p>We tried to make very high-quality product and so our code is very neat and clean. Whatever anyone could improve and modify the template to your liking.</p>
							<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
							<a class="btn btn-active" href="javascript:void(0);" ><span data-hover="Yes I want it">Byu This theme</span></a>
							<a class="btn" href="javascript:void(0);" >View more templates</a>
						</div>
						
						<div class="col-lg-5 col-md-5 col-sm-5 ipad_img_in" data-appear-top-offset="-200" data-animated="fadeInRight">
							<img class="ipad_img1" src="images/img1.png" alt="" />
						</div>
					</div><!-- //ROW -->
				</div><!-- //CONTAINER -->
			</div><!-- //MULTI PURPOSE -->
		</section><!-- //ABOUT -->
		
		
		<!-- PROJECTS -->
		<section id="projects" class="padbot20">
		
			<!-- CONTAINER -->
		
			
			<!-- OUR CLIENTS -->
			<div class="our_clients">
			
				<!-- CONTAINER -->
				<div class="container" data-appear-top-offset="-200" data-animated="fadeInUp">
					
					<!-- ROW -->
					<div class="row">
						<div class="col-lg-2 col-md-2 col-sm-2 client_img">
							<img src="images/clients/1.jpg" alt="" />
						</div>
						<div class="col-lg-2 col-md-2 col-sm-2 client_img">
							<img src="images/clients/2.jpg" alt="" />
						</div>
						<div class="col-lg-2 col-md-2 col-sm-2 client_img">
							<img src="images/clients/3.jpg" alt="" />
						</div>
						<div class="col-lg-2 col-md-2 col-sm-2 client_img">
							<img src="images/clients/4.jpg" alt="" />
						</div>
						<div class="col-lg-2 col-md-2 col-sm-2 client_img">
							<img src="images/clients/5.jpg" alt="" />
						</div>
						<div class="col-lg-2 col-md-2 col-sm-2 client_img">
							<img src="images/clients/6.jpg" alt="" />
						</div>
					</div><!-- //ROW -->
				</div><!-- CONTAINER -->
			</div><!-- //OUR CLIENTS -->
		</section><!-- //PROJECTS -->
		
		
		<!-- TEAM -->
		<section id="team">
		
			<!-- CONTAINER -->
			<div class="container">
				<h2><b>Our</b> Team</h2>
				
				<!-- ROW -->
				<div class="row" data-appear-top-offset="-200" data-animated="fadeInUp">
						
					<!-- TEAM SLIDER -->
					<div class="owl-demo owl-carousel team_slider">
				
						<!-- crewman1 -->
						<div class="item">
							<div class="crewman_item">
								<div class="crewman">
									<img src="images/team/1.jpg" alt="" />
								</div>
								<div class="crewman_descr center">
									<div class="crewman_descr_cont">
										<p>Sarah Brown</p>
										<span>Director</span>
									</div>
								</div>
								<div class="crewman_social">
									<a href="javascript:void(0);" ><i class="fa fa-twitter"></i></a>
									<a href="javascript:void(0);" ><i class="fa fa-facebook-square"></i></a>
								</div>
							</div>
						</div><!-- crewman1 -->
						
						<!-- crewman2 -->
						<div class="item">
							<div class="crewman_item">
								<div class="crewman">
									<img src="images/team/2.jpg" alt="" />
								</div>
								<div class="crewman_descr center">
									<div class="crewman_descr_cont">
										<p>David Jones</p>
										<span>Creative Director</span>
									</div>
								</div>
								<div class="crewman_social">
									<a href="javascript:void(0);" ><i class="fa fa-google-plus"></i></a>
									<a href="javascript:void(0);" ><i class="fa fa-twitter"></i></a>
									<a href="javascript:void(0);" ><i class="fa fa-facebook-square"></i></a>
								</div>
							</div>
						</div><!-- crewman1 -->
						
						<!-- crewman3 -->
						<div class="item">
							<div class="crewman_item">
								<div class="crewman">
									<img src="images/team/3.jpg" alt="" />
								</div>
								<div class="crewman_descr center">
									<div class="crewman_descr_cont">
										<p>Kate Smith</p>
										<span>Manager</span>
									</div>
								</div>
								<div class="crewman_social">
									<a href="javascript:void(0);" ><i class="fa fa-twitter"></i></a>
									<a href="javascript:void(0);" ><i class="fa fa-facebook-square"></i></a>
								</div>
							</div>
						</div><!-- crewman3 -->
						
						<!-- crewman4 -->
						<div class="item">
							<div class="crewman_item">
								<div class="crewman">
									<img src="images/team/4.jpg" alt="" />
								</div>
								<div class="crewman_descr center">
									<div class="crewman_descr_cont">
										<p>Peter Parker</p>
										<span>Manager</span>
									</div>
								</div>
								<div class="crewman_social">
									<a href="javascript:void(0);" ><i class="fa fa-twitter"></i></a>
									<a href="javascript:void(0);" ><i class="fa fa-facebook-square"></i></a>
								</div>
							</div>
						</div><!-- crewman4 -->
						
						<!-- crewman5 -->
						<div class="item">
							<div class="crewman_item">
								<div class="crewman">
									<img src="images/team/5.jpg" alt="" />
								</div>
								<div class="crewman_descr center">
									<div class="crewman_descr_cont">
										<p>Jim Moss</p>
										<span>Designer</span>
									</div>
								</div>
								<div class="crewman_social">
									<a href="javascript:void(0);" ><i class="fa fa-google-plus"></i></a>
									<a href="javascript:void(0);" ><i class="fa fa-twitter"></i></a>
									<a href="javascript:void(0);" ><i class="fa fa-facebook-square"></i></a>
								</div>
							</div>
						</div><!-- crewman5 -->
						
						<!-- crewman6 -->
						<div class="item">
							<div class="crewman_item">
								<div class="crewman">
									<img src="images/team/6.jpg" alt="" />
								</div>
								<div class="crewman_descr center">
									<div class="crewman_descr_cont">
										<p>John Marks</p>
										<span>Designer</span>
									</div>
								</div>
								<div class="crewman_social">
									<a href="javascript:void(0);" ><i class="fa fa-twitter"></i></a>
									<a href="javascript:void(0);" ><i class="fa fa-facebook-square"></i></a>
								</div>
							</div>
						</div><!-- crewman6 -->
						
						<!-- crewman7 -->
						<div class="item">
							<div class="crewman_item">
								<div class="crewman">
									<img src="images/team/7.jpg" alt="" />
								</div>
								<div class="crewman_descr center">
									<div class="crewman_descr_cont">
										<p>Joe Mades</p>
										<span>Developer</span>
									</div>
								</div>
								<div class="crewman_social">
									<a href="javascript:void(0);" ><i class="fa fa-twitter"></i></a>
									<a href="javascript:void(0);" ><i class="fa fa-facebook-square"></i></a>
								</div>
							</div>
						</div><!-- crewman7 -->
						
						<!-- crewman8 -->
						<div class="item">
							<div class="crewman_item">
								<div class="crewman">
									<img src="images/team/8.jpg" alt="" />
								</div>
								<div class="crewman_descr center">
									<div class="crewman_descr_cont">
										<p>Julia Anderson</p>
										<span>Developer</span>
									</div>
								</div>
								<div class="crewman_social">
									<a href="javascript:void(0);" ><i class="fa fa-google-plus"></i></a>
									<a href="javascript:void(0);" ><i class="fa fa-twitter"></i></a>
									<a href="javascript:void(0);" ><i class="fa fa-facebook-square"></i></a>
								</div>
							</div>
						</div><!-- crewman8 -->
					</div><!-- TEAM SLIDER -->
				</div><!-- //ROW -->
			</div><!-- //CONTAINER -->
		</section><!-- //TEAM -->
		
		
		<!-- NEWS -->
		<section id="news">
		
			<!-- CONTAINER -->
			<div class="container">
				<h2><b>Clients</b> say about us</h2>
				
				<!-- TESTIMONIALS -->
				<div class="testimonials" data-appear-top-offset="-200" data-animated="fadeInUp">
						
					<!-- TESTIMONIALS SLIDER -->
					<div class="owl-demo owl-carousel testim_slider">
						
						<!-- TESTIMONIAL1 -->
						<div class="item">
							<div class="testim_content">“There is nothing scary in the darkness, if you encounter it face-to-face. The inevitable price we pay for our happiness is eternal fear to lose it. When you start thinking a lot about your past, it becomes your present and you can't see your future without it.”</div>
							<div class="testim_author">—  Anna Balashova, <b>Philosopher</b></div>
						</div><!-- TESTIMONIAL1 -->
						
						<!-- TESTIMONIAL2 -->
						<div class="item">
							<div class="testim_content">“There is nothing scary in the darkness, if you encounter it face-to-face. The inevitable price we pay for our happiness is eternal fear to lose it. When you start thinking a lot about your past, it becomes your present and you can't see your future without it.”</div>
							<div class="testim_author">—  Anna Balashova, <b>Philosopher</b></div>
						</div><!-- TESTIMONIAL2 -->
						
						<!-- TESTIMONIAL3 -->
						<div class="item">
							<div class="testim_content">“There is nothing scary in the darkness, if you encounter it face-to-face. The inevitable price we pay for our happiness is eternal fear to lose it. When you start thinking a lot about your past, it becomes your present and you can't see your future without it.”</div>
							<div class="testim_author">—  Anna Balashova, <b>Philosopher</b></div>
						</div><!-- TESTIMONIAL3 -->
					</div><!-- TESTIMONIALS SLIDER -->
				</div><!-- //TESTIMONIALS -->
				
				<!-- RECENT POSTS -->
				<div class="row recent_posts" data-appear-top-offset="-200" data-animated="fadeInUp">
					<div class="col-lg-4 col-md-4 col-sm-4 padbot30 post_item_block">
						<div class="post_item">
							<div class="post_item_img">
								<img src="images/blog/1.jpg" alt="" />
								<a class="link" href="blog-post.html" ></a>
							</div>
							<div class="post_item_content">
								<a class="title" href="blog-post.html" >Inteligent Transitions In UX Design</a>
								<ul class="post_item_inf">
									<li><a href="javascript:void(0);" >Anna</a> |</li>
									<li><a href="javascript:void(0);" >Photography</a> |</li>
									<li><a href="javascript:void(0);" >10 Comments</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-4 padbot30 post_item_block">
						<div class="post_item">
							<div class="post_item_img">
								<img src="images/blog/2.jpg" alt="" />
								<a class="link" href="blog-post.html"></a>
							</div>
							<div class="post_item_content">
								<a class="title" href="blog-post.html" >Recent trends in storytelling</a>
								<ul class="post_item_inf">
									<li><a href="javascript:void(0);" >Anna</a> |</li>
									<li><a href="javascript:void(0);" >Web Design</a> |</li>
									<li><a href="javascript:void(0);" >No comment</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-4 padbot30 post_item_block">
						<div class="post_item">
							<div class="post_item_img">
								<img src="images/blog/3.jpg" alt="" />
								<a class="link" href="blog-post.html"></a>
							</div>
							<div class="post_item_content">
								<a class="title" href="blog-post.html" >Supernatural FX Showreel</a>
								<ul class="post_item_inf">
									<li><a href="javascript:void(0);" >Anna</a> |</li>
									<li><a href="javascript:void(0);" >Creative</a> |</li>
									<li><a href="javascript:void(0);" >3 Comments</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div><!-- RECENT POSTS -->
			</div><!-- //CONTAINER -->
		</section><!-- //NEWS -->
	</div><!-- //PAGE -->
	
	<!-- CONTACTS -->
	<section id="contacts">
	</section><!-- //CONTACTS -->
	
	<!-- FOOTER -->
	<footer>
			
		<!-- CONTAINER -->
		<div class="container">
			
			<!-- ROW -->
			<div class="row" data-appear-top-offset="-200" data-animated="fadeInUp">
				
				<div class="col-lg-4 col-md-4 col-sm-6 padbot30">
					<h4><b>Featured</b> posts</h4>
					<div class="recent_posts_small clearfix">
						<div class="post_item_img_small">
							<img src="images/blog/1.jpg" alt="" />
						</div>
						<div class="post_item_content_small">
							<a class="title" href="blog.html" >As we have developed a unique layout template</a>
							<ul class="post_item_inf_small">
								<li>10 January 2014</li>
							</ul>
						</div>
					</div>
					<div class="recent_posts_small clearfix">
						<div class="post_item_img_small">
							<img src="images/blog/2.jpg" alt="" />
						</div>
						<div class="post_item_content_small">
							<a class="title" href="blog.html" >How much is to develop a design for the game?</a>
							<ul class="post_item_inf_small">
								<li>14 January 2014</li>
							</ul>
						</div>
					</div>
					<div class="recent_posts_small clearfix">
						<div class="post_item_img_small">
							<img src="images/blog/3.jpg" alt="" />
						</div>
						<div class="post_item_content_small">
							<a class="title" href="blog.html" >How to pump designer</a>
							<ul class="post_item_inf_small">
								<li>21 December 2013</li>
							</ul>
						</div>
					</div>
				</div>
				
				<div class="col-lg-4 col-md-4 col-sm-6 padbot30 foot_about_block">
					<h4><b>About</b> us</h4>
					<p>We value people over profits, quality over quantity, and keeping it real. As such, we deliver an unmatched working relationship with our clients.</p>
					<p>Our team is intentionally small, eclectic, and skilled; with our in-house expertise, we provide sharp and</p>
					<ul class="social">
						<li><a href="javascript:void(0);" ><i class="fa fa-twitter"></i></a></li>
						<li><a href="javascript:void(0);" ><i class="fa fa-facebook"></i></a></li>
						<li><a href="javascript:void(0);" ><i class="fa fa-google-plus"></i></a></li>
						<li><a href="javascript:void(0);" ><i class="fa fa-pinterest-square"></i></a></li>
						<li><a href="javascript:void(0);" ><i class="map_show fa fa-map-marker"></i></a></li>
					</ul>
				</div>
				
				<div class="respond_clear"></div>
				
				<div class="col-lg-4 col-md-4 padbot30">
					<h4><b>Contacts</b> Us</h4>
					
					<!-- CONTACT FORM -->
					<div class="span9 contact_form">
						<div id="note"></div>
						<div id="fields">
							<form id="contact-form-face" class="clearfix" action="#">
								<input type="text" name="name" value="Name" onFocus="if (this.value == 'Name') this.value = '';" onBlur="if (this.value == '') this.value = 'Name';" />
								<textarea name="message" onFocus="if (this.value == 'Message') this.value = '';" onBlur="if (this.value == '') this.value = 'Message';">Message</textarea>
								<input class="contact_btn" type="submit" value="Send message" />
							</form>
						</div>
					</div><!-- //CONTACT FORM -->
				</div>
			</div><!-- //ROW -->
			<div class="row copyright">
				<div class="col-lg-12 text-center">
				
				 <p>Crafted with <i class="fa fa-heart"></i>, <a href="http://designscrazed.org/" >Designscrazed</a></p>
				</div>
			
			</div><!-- //ROW -->
		</div><!-- //CONTAINER -->
	</footer><!-- //FOOTER -->
	
	
	<!-- MAP -->
	<div id="map">
		<a class="map_hide" href="javascript:void(0);" ><i class="fa fa-angle-right"></i><i class="fa fa-angle-left"></i></a>
		<iframe src="http://maps.google.com/maps?f=q&amp;give%20a%20hand=s_q&amp;hl=en&amp;geocode=&amp;q=london&amp;sll=37.0625,-95.677068&amp;sspn=42.631141,90.263672&amp;ie=UTF8&amp;hq=&amp;hnear=London,+United+Kingdom&amp;ll=51.500141,-0.126257&amp;spn=0.026448,0.039396&amp;z=14&amp;output=embed" ></iframe>
	</div><!-- //MAP -->

</div>
@stop

@section('footer')
@stop

<!--

<!DOCTYPE html>
<html>
    <div id = 'homepage'>
        <h2> FriendChise </h2>
        <p> Asuy hackathon yuk </p>
    </div>
</html>

-->
