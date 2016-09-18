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
                        
                   		<!-- MENU -->
					<div class="pull-right">
						<nav class="navmenu center">
							<ul>
								<li ><a href="/franchiser/1/list/franchisee" >Daftar Mitra</a></li>
								<li><a href="/franchiser/1/list/schedule" >Daftar Penjadwalan</a></li>
                                <li ><a href="/franchiser/1/rekomendasitempat" >Rekomendasi Tempat</a></li>
								<li ><a href="/" >Log Out</a></li>
							</ul>
						</nav>
					</div><!-- //MENU -->
                       
                    </div><!-- //MENU BLOCK -->
                </div><!-- //CONTAINER -->
            </header><!-- //HEADER -->
            
            
            <!-- BLOG -->
        <section id="blog">
              <!-- BREADCRUMBS -->
        <section class="breadcrumbs_block clearfix parallax margbot50">
            <div class="container center">
                    <h2><b>DASHBOARD</b> PUSAT</h2>
            </div>
        </section><!-- //BREADCRUMBS -->
            <!-- CONTAINER -->
            <div class="container">
            <h1>Daftar Penjadwalan</h1>
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
                                        <td> {{$item->nama}} <br /><br />
                            	            <div class="box-button">
                                                {{ link_to('franchiser/1/show/schedule/' . $item->id, 'Detail', ['class'=>'mitra_btn']) }} 	
                                            </div>
                                            <div class="box-button">
                                                {{ link_to('franchiser/1/edit/schedule/'.$item->id, 'Ubah', ['class'=>'mitra_btn']) }} 
                                            </div>
                                            <div class="box-button">
                                                {!! Form::open(['method' => 'DELETE', 'action' => ['ScheduleController@delete', $item->id] ]) !!}
            
                                                {!! Form::submit('Hapus', ['class' => 'mitra_btn']) !!}
            
                                                {!! Form::close() !!}
            
                                            </div>
                                            </td>
                                        <td> {{$item->tanggal}} </td>
                                        <td> {{$item->jumlahkirim}} </td>
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
                    {{ link_to('franchiser/1/create/schedule', 'Tambah Jadwal', ['class'=>'contact_btn']) }}
                </div>
                <div class="col-lg-3 col-md-3"></div>
			</div>
		</div>
        
        <div class="tombol-nav margbot80">
			<div class="row">
                <div class="col-lg-5 col-md-5"></div>
                <div class="col-lg-4 col-md-4">
                    <a href="franchisee" class="contact_btn">
                        Monitoring Mitra
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