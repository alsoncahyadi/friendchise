<!-- Bakal diturunkan dari template-->

@extends('template')

@section('main')
	<div id='schedule'>
		<h1> Daftar Jadwal </h1>

		<?php if (!empty($scheduleInput)):?>
			<table class="table">
				<thead>
					<tr>
						<th> Nama Mitra </th>
						<th> Tanggal </th>
						<th> Jumlah Kirim </th>
						<th> Aksi </th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($scheduleInput as $item) : ?>
						<tr>
							<td> {{$item->nama}} </td>
							<td> {{$item->tanggal}} </td>
							<td> {{$item->jumlahkirim}} </td>
							<td> 
								<div class="box-button">
									{{ link_to('schedule/'.$item->id, 'Detail', ['class'=>'btn btn-success btn-sm']) }} 	
								</div>
								<div class="box-button">
									{{ link_to('schedule/'.$item->id . '/edit', 'Ubah', ['class'=>'btn btn-success btn-sm']) }} 
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

		<div class="tombol-nav">
			<div>
				<a href="schedule/create" class="btn btn-primary">
					Tambah Jadwal
				</a>
			</div>
		</div>
	</div>
@stop

@section('footer')
	@include('footer')
@stop