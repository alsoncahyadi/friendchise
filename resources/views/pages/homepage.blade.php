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
						<a href="/" >
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
								<p><b>Rekomendasi</b> Lokasi</p>
								<span>Sistem akan memberikan rekomendasi lokasi yang strategis baik untuk para mitra baru yang akan bergabung maupun mitra lama yang ingin bergabung.</span>
							</a>
						</div>
						<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-ss-12 margbot30">
							<a class="services_item" href="javascript:void(0);" >
								<p><b>Real Time</b> Monitoring</p>
								<span>Pewaralaba dapat melakukan monitoring hasil penjualan dan status stok terhadap setiap mitra secara Real Time.</span>
							</a>
						</div>
						<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-ss-12 margbot30">
							<a class="services_item" href="javascript:void(0);" >
								<p><b>Fleksibilitas</b> Waralaba</p>
								<span>Sistem mendukung berbagai jenis waralaba yang akan dilayani.</span>
							</a>
						</div>
						<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-ss-12 margbot30">
							<a class="services_item" href="javascript:void(0);" >
								<p><b>Memajukan</b> UKM</p>
								<span>Dengan adanya sistem waralaba seperti ini, diharapkan UKM akan lebih mudah untuk berkembang.</span>
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
							<h2>Mari Bergabung di <b>FriendChise</b></h2>
							<p>Dengan fitur Real-Time Monitoring dan Rekomendasi Tempat Strategis dari sistem, UKM anda akan terpacu untuk berkembang lebih pesat.</p>
							<p>Tunggu apalagi, segera daftarkan akun anda!</p>
							<a class="btn btn-active" href="franchisee/create" ><span data-hover="Ya Saya Mau">Bergabung</span></a>
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
                    <div class="col-lg-2 col-md-2 col-sm-2">
						</div>
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
                        <div class="col-lg-2 col-md-2 col-sm-2">
						</div>
                        <!--
						<div class="col-lg-2 col-md-2 col-sm-2 client_img">
							<img src="images/clients/5.jpg" alt="" />
						</div>
						<div class="col-lg-2 col-md-2 col-sm-2 client_img">
							<img src="images/clients/6.jpg" alt="" />
						</div>
                        -->
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
										<p>Alson Cahyadi</p>
										<span>Back End Programmer</span>
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
										<p>Ari Pratama Zhorifiandi</p>
										<span>Front End Programmer</span>
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
										<p>Geraldi Dzakwan</p>
										<span>Lead Programmer</span>
									</div>
								</div>
								<div class="crewman_social">
									<a href="javascript:void(0);" ><i class="fa fa-twitter"></i></a>
									<a href="javascript:void(0);" ><i class="fa fa-facebook-square"></i></a>
								</div>
							</div>
						</div><!-- crewman3 -->
						
						
					</div><!-- TEAM SLIDER -->
				</div><!-- //ROW -->
			</div><!-- //CONTAINER -->
		</section><!-- //TEAM -->
		
		
	</div><!-- //PAGE -->
	
	<!-- CONTACTS -->
	<section id="contacts">
	</section><!-- //CONTACTS -->
	
		
	
	

</div>
@stop

@section('footer')

@include('footer')

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
