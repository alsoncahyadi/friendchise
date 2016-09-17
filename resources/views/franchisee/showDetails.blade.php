@extends('template')

@section('main')
	<div id="franchisee">
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
                <h2>Detail <b>{{ $franchiseeInput->nama }}</b></h2>
            </div>
        </section><!-- //BREADCRUMBS -->
            <!-- CONTAINER -->
            <div class="container">

		<table class="table margbot80 ">
			<tr>
				<th>
					Nama Mitra
				</th>
				<td>
					{{ $franchiseeInput->nama }}
				</td>
			</tr>

			<tr>
				<th>
					Alamat
				</th>
				<td>
					{{ $franchiseeInput->alamat }}
				</td>
			</tr>

			<tr>
				<th>
					Kecamatan
				</th>
				<td>
					{{ $franchiseeInput->kecamatan }}
				</td>
			</tr>

			<tr>
				<th>
					Kota
				</th>
				<td>
					{{ $franchiseeInput->kota }}
				</td>
			</tr>

			<tr>
				<th>
					Username
				</th>
				<td>
					{{ $franchiseeInput->username }}
				</td>
			</tr>

			<tr>
				<th>
					Password
				</th>
				<td>
					{{ $franchiseeInput->password }}
				</td>
			</tr>

			<tr>
				<th>
					Penjualan Tahu
				</th>
				<td>
					<?php
						$unserializedJualtahu = unserialize($franchiseeInput->jualtahu);
						krsort($unserializedJualtahu);
						foreach ($unserializedJualtahu as $tanggal => $jumlah) {
							echo '<strong>(' . $tanggal . '): </strong>' . $jumlah . '<br>';
						}
					?>
					<!-- {{ $franchiseeInput->jualtahu }} -->
				</td>
			</tr>

			<tr>
				<th>
					Stok Tahu
				</th>
				<td>
					{{ $franchiseeInput->stoktahu }}
				</td>
			</tr>

			<tr>
				<th>
					Grafik Penjualan
				</th>
				<td>
					<div id="sales-chart"></div>
				</td>
			</tr>

		</table>
        </div><!-- //CONTAINER -->
        </section><!-- //BLOG -->
	</div><!-- PAGE -->
	</div>
    </div>

	<?php
			$salesTable = \Lava::DataTable();

	        $salesTable->addDateColumn('Day of Month')->addNumberColumn('Sales');

	        foreach ($franchiseeChart as $key => $value) {
	        	$salesTable->addRow([
	              $key, $value
	            ]);	
	        }

	        $chart = \Lava::LineChart('MyStocks', $salesTable);

	        echo \Lava::render('LineChart', 'MyStocks', 'sales-chart');
	?>
    


@stop

@section('footer')
@stop