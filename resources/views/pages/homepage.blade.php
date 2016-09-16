<!-- Bakal diturunkan dari template-->

@extends('template')

<!-- Menambahkan kode ke bagian bawah yield main-->
@section('main')
	<div id = "homepage">
		<!--<h2> Homepage </h2>
		<p> Welcome Franchisee! </p>-->
		<h2> Welcome Franchisee! </h2>
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
    <div id = 'homepage'>
        <h2> FriendChise </h2>
        <p> Asuy hackathon yuk </p>
    </div>
</html>

-->