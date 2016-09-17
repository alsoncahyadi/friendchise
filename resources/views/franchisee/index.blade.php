<!-- Bakal diturunkan dari template-->

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
                        
                   
                       
                    </div><!-- //MENU BLOCK -->
                </div><!-- //CONTAINER -->
            </header><!-- //HEADER -->
            
            
            <!-- BLOG -->
        <section id="blog">
              <!-- BREADCRUMBS -->
        <section class="breadcrumbs_block clearfix parallax margbot50">
            <div class="container center">
                <h2><b>Daftar</b> Mitra</h2>
            </div>
        </section><!-- //BREADCRUMBS -->
            <!-- CONTAINER -->
            <div class="container">
            
           
		<?php if (!empty($franchiseeInput)):?>
			<table class="table margbot30">
				<thead>
					<tr>
						<th> Nama Mitra </th>
						<th> Alamat </th>
						<th> Kecamatan </th>
						<th> Kota </th>
						<th> Username </th>
						<th> Password </th>
						<th> Penjualan Tahu Hari Ini</th>
						<th> Stok Tahu</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($franchiseeInput as $item) : ?>
						<tr>
							<td> {{$item->nama}} </td>
							<td> {{$item->alamat}} </td>
							<td> {{$item->kecamatan}} </td>
							<td> {{$item->kota}} </td>
							<td> {{$item->username}} </td>
							<td> {{$item->password}} </td>
							<td> {{$item->jualtahu}} </td>
							<td> {{$item->stoktahu}} </td>
                            </tr>
                            <tr>
                            <td colspan="3">
                            </td>
                            <td>
								<div class="box-button">
									{{ link_to('franchisee/'.$item->id, 'Detail', ['class'=>'mitra_btn']) }} 	
								</div>
                                </td>
                                <td colspan="1">
								<div class="box-button">
									{{ link_to('franchisee/'.$item->id . '/edit', 'Ubah', ['class'=>'mitra_btn']) }} 
								</div>
                                </td>
                                <td colspan="3">
								<div class="box-button">
									{!! Form::open(['method' => 'DELETE', 'action' => ['FranchiseeController@delete', $item->id] ]) !!}

									{!! Form::submit('Hapus', ['class' => 'mitra_btn']) !!}

									{!! Form::close() !!}

								</div>	
                                </td>
                            </td>			
                         </tr>
					<?php endforeach ?>
				</tbody>
			</table>
		<?php else: ?>
			<p>There are no franchisee data</p>
		<?php endif ?>

		<div class="table-nav">
			<div class="jumlah-data">
					<h3>
						Jumlah mitra : {{$inputJumlah}}
					</h3>	
				</div>
			<div class="paging">
				{{ $franchiseeInput->links() }}
			</div>
		</div>

		<div class="tombol-nav margbot80">
			<div class="row">
                <div class="col-lg-5 col-md-5"></div>
                <div class="col-lg-4 col-md-4">
                    <a href="franchisee/create" class="contact_btn">
                        Tambah Mitra
                    </a>
                </div>
                <div class="col-lg-3 col-md-3"></div>
			</div>
		</div>
        
        </div><!-- //CONTAINER -->
        </section><!-- //BLOG -->
	</div><!-- PAGE -->
    
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
@stop

