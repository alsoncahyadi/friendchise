<!-- Bakal diturunkan dari template-->

@extends('template')

@section('main')
	<div id='franchisee'>
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
    </div>
    
@stop

@section('footer')
@stop

