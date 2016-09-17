@extends('template')

@section('main')
	<div id="franchisee">
		<h2>
			Detail Franchisee
		</h2>

		<table class="table table-striped">
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
	@include('footer')
@stop