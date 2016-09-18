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
				<h2><b>DASHBOARD</b> MITRA</h2>
                <p style="font-style:italic; color:#fff"><strong>"Welcome <?php echo $franchiseeInput->nama ?>!"</strong></p>
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
							{!! Form::model ($franchiseeInput, ['method' => 'PATCH', 'action' => ['FranchiseeController@updatePenjualan', $franchiseeInput->id]]) !!}
                            
									<h2>Update Penjualan Tahu Jeletot</h2>
								<div class ="form-group">
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
                            <h2>Update Stok Tahu Jeletot</h2>
								<div class ="form-group">
									
									<div class="row  margbot50">
										<div class="col-lg-4">
												<input type="number" placeholder="TAMBAH STOK contoh: 5" max ="500" min="-500" name="jumlah" id="jumlah" class = "form-control">
										</div>
										<div class="col-lg-2">
												<button id ="updatestok" class="contact_btn" onclick="" >Update</button>
										</div>
										
									</div>
											<h2>Penjualan Tahu Jeletot</h2>
										<br></br>
                                        <table class="table">
											<?php
											if (!empty($franchiseeInput->jualtahu)) {
												$unserializedJualtahu = unserialize($franchiseeInput->jualtahu);
												krsort($unserializedJualtahu);
												$i = 0;
												foreach ($unserializedJualtahu as $tanggal => $jumlah) {
													if ($i<5) {echo '<tr><th style="width:100px">' . $tanggal . '</th>' .'<td>'. $jumlah.'</td></tr>' ; } $i++;
												}
											}
											?>
                                            </table>
                                            </div>
										<?php echo '<br></br>';?>
											<h2>Stok Tahu Jeletot</h2>
											<?php 
												echo '<strong><h3>' . $franchiseeInput['stoktahu'] . '</h3></strong>';
											?>
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
	
	
	
	
	

</div>
	</div>
@stop

@section('footer')
		@include('footer')
@stop
