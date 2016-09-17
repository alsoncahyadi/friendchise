@extends('template')

@section('main')
    <div id='franchisee'>
	
	<!-- PRELOADER -->
	<img id="preloader" src="<?php public_path() ?>/images/preloader.gif" alt="" />
	<!-- //PRELOADER -->
	<div class="preloader_hide">

	<!-- PAGE -->
	<div id="page" class="single_page">
	
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
					
					<!-- SEARCH FORM -->
					<div id="search-form" class="pull-right">
						<form method="get" action="#">
							<input type="text" name="Search" value="Search" onFocus="if (this.value == 'Search') this.value = '';" onBlur="if (this.value == '') this.value = 'Search';" />
						</form>
					</div><!-- SEARCH FORM -->
					
					<!-- MENU -->
					<!--
					<div class="pull-right">
						<nav class="navmenu center">
							<ul>
								<li class="first scroll_btn"><a href="index.html">Home</a></li>
								<li class="scroll_btn"><a href="index.html#about">About Us</a></li>
								<li class="scroll_btn"><a href="index.html#projects">Projects</a></li>
								<li class="scroll_btn"><a href="index.html#team">Team</a></li>
								<li class="scroll_btn"><a href="index.html#news">News</a></li>
								<li class="scroll_btn last"><a href="index.html#contacts">Contacts</a></li>
								<li class="sub-menu active">
									<a href="javascript:void(0);">Pages</a>
									<ul>
										<li><a href="blog.html">Blog</a></li>
										<li class="active"><a href="blog-post.html">Blog Post</a></li>
										<li><a href="portfolio-post.html">Portfolio Single Work</a></li>
									</ul>
								</li>
							</ul>
						</nav>
					</div>--><!-- //MENU -->
				</div><!-- //MENU BLOCK -->
			</div><!-- //CONTAINER -->
		</header><!-- //HEADER -->
		
		
		<!-- BREADCRUMBS -->
		<section class="breadcrumbs_block clearfix parallax">
			<div class="container center">
				<h2><b>DASH</b>BOARD</h2>
				<p>Pengaturan pada waralaba anda</p>
			</div>
		</section><!-- //BREADCRUMBS -->
		
		
		<!-- BLOG -->
		<section id="blog">
			
			<!-- CONTAINER -->
			<div class="container">
				
				<!-- ROW -->
				<div class="row">
				
					<!-- BLOG BLOCK -->
					<div class="col-lg-2 col-md-2"></div>
					<div class="blog_block col-lg-8 col-md-8 padbot50">
						
						<!-- SINGLE BLOG POST -->
						<div class="single_blog_post clearfix" data-animated="fadeInUp">
							<div class="single_blog_post_content">
							{!! Form::model ($franchiseeInput, ['method' => 'PATCH', 'action' => ['FranchiseeController@updatePenjualan', $franchiseeInput->id]]) !!}
								<div class ="form-group">
									<h2>Penjualan Tahu Jeletot</h2>
									<div class="row  margbot30">
										<div class="col-lg-4">									
												<input type="number" placeholder="TAMBAH PENJUALAN contoh: 5" max ="500" min="-500" name="jumlah" id="jumlah" class = "form-control">
										</div>
										<div class="col-lg-4">
												<input type="text" placeholder="TANGGAL contoh: 18-09-2016" maxlength="10" name="date" id="date" class = "form-control">
										</div>
										<div class="col-lg-2">
												<button id ="updatejual" class="contact_btn" onclick="" >Update</button>
										</div>
										
									</div>
								</div>
							{!! Form::close() !!}
							{!! Form::model ($franchiseeInput, ['method' => 'PATCH', 'action' => ['FranchiseeController@updateStok', $franchiseeInput->id]]) !!}
								<div class ="form-group">
									<h2>Stok Tahu Jeletot</h2>
									<div class="row  margbot30">
										<div class="col-lg-4">
												<input type="number" placeholder="TAMBAH STOK contoh: 5" max ="500" min="-500" name="jumlah" id="jumlah" class = "form-control">
										</div>
										<div class="col-lg-2">
												<button id ="updatestok" class="contact_btn" onclick="" >Update</button>
										</div>
										
									</div>
									<div class="row margbot30">
										<th>
											Penjualan Tahu
										</th>
										<br></br>
										<td>
											<?php
												$unserializedJualtahu = unserialize($franchiseeInput->jualtahu);
												krsort($unserializedJualtahu);
												foreach ($unserializedJualtahu as $tanggal => $jumlah) {
													echo '<strong>(' . $tanggal . '): </strong>' . $jumlah . '<br>';
												}
											?>
										</td>
										<?php echo '<br></br>';?>
										<th>
											Stok Tahu
										</th>
										<td>
											<?php 
												echo '<br></br>';
												echo '<strong>' . $franchiseeInput['stoktahu'] . '</strong>';
											?>
										</td>
									</div>
								</div>

							{!! Form::close() !!}

							</div>

							<!--
							<div class="single_blog_post_content">
								<div class ="form-group">
									<h2>Penjualan Tahu Jeletot</h2>
									<div class="row  margbot30">
										
										<div class="col-lg-4">
												<input type="number" max ="500" min="0" name="jumlah" id="jumlah" class = "form-control">
										</div>
										<div class="col-lg-2">
												<button id ="tambah" class="contact_btn" onclick="" action="{{ url('franchisee/user/alsoncahyadi') }}" >Tambah</button>
										</div>
										<div class="col-lg-2">
												<button id ="kurang" class="contact_btn" onclick="" >Kurangi</button>
										</div>
										
									</div>
								</div>
								<div class ="form-group">
									<h2>Stok Tahu Jeletot</h2>
									<div class="row  margbot30">
										
										<div class="col-lg-4">
												<input type="number" max ="500" min="0" name="jumlah" id="jumlah" class = "form-control">
										</div>
										<div class="col-lg-2">
												<button id ="tambah" class="contact_btn" onclick="" >Tambah</button>
										</div>
										<div class="col-lg-2">
												<button id ="kurang" class="contact_btn" onclick="" >Kurangi</button>
										</div>
										
									</div>
								</div>
							</div>
							-->							
						</div><!-- //SINGLE BLOG POST -->
						
						
						
						
						
					</div><!-- //BLOG BLOCK -->
					<div class="col-lg-2 col-md-2"></div>
	
					
				</div><!-- //ROW -->
			</div><!-- //CONTAINER -->
		</section><!-- //BLOG -->
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
				
				 <p>FriendChise <i class="fa fa-heart"></i>, <a href="http://kuliah.informatika.org/" >Team Bakwan</a></p>
				</div>
			
			</div><!-- //ROW -->
		</div><!-- //CONTAINER -->
	</footer><!-- //FOOTER -->
	
	
	

</div>
	</div>
@stop

@section('footer')
<!-- ini ga gua pake -->
@stop
