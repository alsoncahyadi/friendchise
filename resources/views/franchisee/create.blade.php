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
                <h2><b>SIGN</b> UP</h2>
                <p>Silahkan melakukan registrasi terlebih dahulu</p>
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
                                <form method = "POST" action = "{{ url('franchisee') }}">
                                    <div class ="form-group">
                                            <h3>Nama Mitra</h3>
                                            <input type="text" name="nama" id="nama" class = "form-control margbot30">
                                            <h3>Alamat</h3>
                                            <input type="text" name="alamat" id="alamat" class = "form-control margbot30">
                                            <h3>Kecamatan</h3>
                                            <input type="text" name="kecamatan" id="kecamatan" class = "form-control margbot30">
                                            <h3>Kota</h3>
                                            <input type="text" name="kota" id="kota" class = "form-control margbot30">
                                            <h3>Username</h3>
                                            <input type="text" name="username" id="username" class = "form-control margbot30">
                                            <h3>Password</h3>
                                            <input type="password" name="password" id="pass" class = "form-control margbot30">
                                    </div>
                                    <div class="form-group">
                                        <input class = "contact_btn" type="submit" value="Buat Akun">
                                    </div>
                                </form>
                            </div>
                            
                        </div><!-- //SINGLE BLOG POST -->
                        
                        
                        
                        
                        
                    </div><!-- //BLOG BLOCK -->
                    <div class="col-lg-2 col-md-2"></div>
    
                    
                </div><!-- //ROW -->
            </div><!-- //CONTAINER -->
        </section><!-- //BLOG -->
    </div><!-- //PAGE -->

    
    <!-- FOOTER -->
	<footer>
			
		<!-- CONTAINER -->
		<div class="container">
			
			<!-- ROW -->
			<div class="row" data-appear-top-offset="-200" data-animated="fadeInUp">
				
				<div class="col-lg-2 col-md-2 col-sm-2 padbot30">
					
				</div>
				
				<div class="col-lg-8 col-md-8 col-sm-8 padbot30 foot_about_block">
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
				
				<div class="col-lg-2 col-md-2 padbot30">
					
				</div>
			</div><!-- //ROW -->
			<div class="row copyright">
				<div class="col-lg-12 text-center">
				
				 <p>FriendChise <i class="fa fa-check"></i>, <a href="https://hmif.itb.ac.id/" >by Team Bakwan</a></p>
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
