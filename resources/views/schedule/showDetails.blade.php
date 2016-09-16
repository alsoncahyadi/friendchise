@extends('template')

@section('main')
	<div id="schedule">
		<h2>
			Detail Schedule
		</h2>

		<table class="table table-striped">
			<tr>
				<th>
					Nama Mitra
				</th>
				<td>
					{{ $scheduleInput->nama }}
				</td>
			</tr>

			<tr>
				<th>
					Tanggal Pengiriman
				</th>
				<td>
					{{ $scheduleInput->tanggal }}
				</td>
			</tr>

			<tr>
				<th>
					Jumlah Kirim
				</th>
				<td>
					{{ $scheduleInput->jumlahkirim }}
				</td>
			</tr>
		</table>
	</div>

@stop

@section('footer')
	@include('footer')
@stop