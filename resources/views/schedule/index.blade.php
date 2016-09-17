<!-- Bakal diturunkan dari template-->

@extends('template')

@section('main')
	<div id='schedule'>
    	<!-- PRELOADER -->
    <img id="preloader" src="<?php public_path() ?>/images/preloader.gif" alt="" />
    <!-- //PRELOADER -->
    <div class="preloader_hide">
		<!-- PAGE -->
        <div id="page" class="single_page margbot80">
        
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
            
            
            <!-- BLOG -->
        <section id="blog">
              <!-- BREADCRUMBS -->
        <section class="breadcrumbs_block clearfix parallax margbot50">
            <div class="container center">
                    <h2><b>Daftar</b> Jadwal </h2>
            </div>
        </section><!-- //BREADCRUMBS -->
            <!-- CONTAINER -->
            <div class="container">
                    <?php if (!empty($scheduleInput)):?>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th> Nama Mitra </th>
                                    <th> Tanggal </th>
                                    <th> Jumlah Kirim </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($scheduleInput as $item) : ?>
                                    <tr>
                                        <td> {{$item->nama}} </td>
                                        <td> {{$item->tanggal}} </td>
                                        <td> {{$item->jumlahkirim}} </td>
                                      </tr>
                                     <tr>
                                        
                                        <td> 
                                            <div class="box-button">
                                                {{ link_to('schedule/'.$item->id, 'Detail', ['class'=>'mitra_btn']) }} 	
                                            </div>
                                            </td>
                                            <td>
                                            <div class="box-button">
                                                {{ link_to('schedule/'.$item->id . '/edit', 'Ubah', ['class'=>'mitra_btn']) }} 
                                            </div>
                                            </td>
                                            <td>
                                            <div class="box-button">
                                                {!! Form::open(['method' => 'DELETE', 'action' => ['ScheduleController@delete', $item->id] ]) !!}
            
                                                {!! Form::submit('Hapus', ['class' => 'mitra_btn']) !!}
            
                                                {!! Form::close() !!}
            
                                            </div>
                                            </td>
                                    </tr>
                                <?php endforeach ?>
                            </tbody>
                        </table>
                    <?php else: ?>
                        <p>There are no schedule data</p>
                    <?php endif ?>
            
                    <!--<div class="table-bottom">-->
                    <div class="table-nav">
                        <div class="jumlah-data">
                                <strong>
                                    
                                </strong>	
                            </div>
                        <div class="paging">
                            
                        </div>
                    </div>
            
                    <div class="tombol-nav margbot30">
			<div class="row">
                <div class="col-lg-5 col-md-5"></div>
                <div class="col-lg-4 col-md-4">
                    <a href="schedule/create" class="contact_btn">
                        Tambah Jadwal
                    </a>
                </div>
                <div class="col-lg-3 col-md-3"></div>
			</div>
		</div>
        
        <div class="tombol-nav margbot80">
			<div class="row">
                <div class="col-lg-5 col-md-5"></div>
                <div class="col-lg-4 col-md-4">
                    <a href="franchisee" class="contact_btn">
                        Dashboard Pusat
                    </a>
                </div>
                <div class="col-lg-3 col-md-3"></div>
			</div>
		</div>
	</div>
    </div><!-- //CONTAINER -->
        </section><!-- //BLOG -->
	</div><!-- PAGE -->
    
   
     <!-- CONTACTS -->
    <section id="contacts">
    </section><!-- //CONTACTS -->
    </div>
@stop

@section('footer')
	@include('footer')
@stop