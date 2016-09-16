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
					{{ $franchiseeInput->jualtahu }}
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
		</table>
	</div>

@stop

@section('footer')
	@include('footer')
@stop