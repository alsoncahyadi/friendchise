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
                                    <h5>Sudah memiliki akun? Silahkan melakukan <a href="/login">Login</a>.</h5><br />
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

    <!-- CONTACTS -->
    <section id="contacts">
    </section><!-- //CONTACTS -->
    
    
    
    

    </div>
    
    </div>
@stop

@section('footer')
<!-- FOOTER -->
	@include('footer')
@stop
