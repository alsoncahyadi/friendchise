<!-- Bakal diturunkan dari template-->

@extends('template')

@section('main')
	<div id='franchisee'>
		<h1> Daftar Mitra </h1>

		<?php if (!empty($franchiseeInput)):?>
			<table class="table">
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
						<th> Aksi </th>
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
							<td> 
								<div class="box-button">
									{{ link_to('franchisee/'.$item->id, 'Detail', ['class'=>'btn btn-success btn-sm']) }} 	
								</div>
								<div class="box-button">
									{{ link_to('franchisee/'.$item->id . '/edit', 'Ubah', ['class'=>'btn btn-success btn-sm']) }} 
								</div>
								<div class="box-button">
									{!! Form::open(['method' => 'DELETE', 'action' => ['FranchiseeController@delete', $item->id] ]) !!}

									{!! Form::submit('Hapus', ['class' => 'btn btn-danger btn-sm']) !!}

									{!! Form::close() !!}

								</div>
							</td>
						</tr>
					<?php endforeach ?>
				</tbody>
			</table>
		<?php else: ?>
			<p>There are no franchisee data</p>
		<?php endif ?>

		<!--<div class="table-bottom">-->
		<div class="table-nav">
			<!--
			<div class="pull-left">
				<strong>
					Jumlah mitra : {{$inputJumlah}}
				</strong>
			</div>
			-->
			<!--
			<div class="pull-right">
				Pagination
			</div>
			-->
			<div class="jumlah-data">
					<strong>
						Jumlah mitra : {{$inputJumlah}}
					</strong>	
				</div>
			<div class="paging">
				{{ $franchiseeInput->links() }}
			</div>
		</div>

		<div class="tombol-nav">
			<div>
				<a href="franchisee/create" class="btn btn-primary">
					Tambah Mitra
				</a>
			</div>
		</div>
	</div>
@stop

@section('footer')
	@include('footer')
@stop

<!--
	<ul>
		<?php foreach ($franchiseeInput as $item): ?>
			<li> <?= $item?></li>
		<?php endforeach ?>
	</ul>
-->

<!--
<!DOCTYPE html>
<html>
	<div id='franchisee'>
		<h1> Franchisee </h1>
		<?php if (!empty($franchiseeInput)):?>
			<ul>
				<?php foreach ($franchiseeInput as $item): ?>
					<li> <?= $item?></li>
				<?php endforeach ?>
			</ul>
		<?php else: ?>
			<p>There are no franchisee data</p>
		<?php endif ?>
	</div>
</html>
-->
