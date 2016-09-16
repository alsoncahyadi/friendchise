<!-- Bakal diturunkan dari template-->

@extends('template')

<!-- Menambahkan kode ke bagian bawah yield main-->
@section('main')
	<div id = "about">
		<h2> Siapa kita? </h2>
        <p> Geral Bakwan </p>
        <p> Alson Buncit </p>
        <p> Ari Peler </p>
	</div>
@stop

@section('footer')
	<div id = "footer">
		<p>&copy; 2016 FriendChise</p>
	</div>
@stop

<!--
<!DOCTYPE html>
<html>
    <div id = 'about'>
        <h2> Siapa kita? </h2>
        <p> Geral Bakwan </p>
        <p> Alson Buncit </p>
        <p> Ari Peler </p>
    </div>
</html>
-->
