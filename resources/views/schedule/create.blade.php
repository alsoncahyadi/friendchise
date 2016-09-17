@extends('template')

@section('main')
    <div id='schedule'>
    
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
                <h2><b>PENJADWALAN</b></h2>
                <p>Silahkan menambahkan jadwal pengiriman stok disini</p>
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
                                <form method = "POST" action = "{{ url('schedule') }}">
                                    <div class ="form-group">
                                            <h3>Nama Mitra</h3>
                                            @if(!empty($franchiseeInput))                                            
                                                {!! Form::select('nama', $franchiseeInput, null, 
                                                ['type' => 'text', 'class' => 'form-control margbot30', 'id' => 'nama', 'name' => 'nama',                                   'placeholder' => 'Pilih Mitra']) !!}
                                            @else
                                            <input type="text" name="nama" id="nama" class = "form-control margbot30" placeholder="Dedi Supardi">
                                            @endif
                                            
                                            <h3>Tanggal</h3>
                                            <input type="text" name="tanggal" id="tanggal" class = "form-control margbot30" placeholder="TTTT-BB-HH">
                                            <h3>Jumlah Kirim</h3>
                                            <input type="number" name="jumlahkirim" id="jumlahkirim" class = "form-control margbot30" min="0" max="500" placeholder="100">
                                    </div>
                                    <div class="form-group">
                                        <input class = "contact_btn" type="submit" value="Buat Jadwal">
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
@include('footer')
@stop
