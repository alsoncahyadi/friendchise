<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//Route yang manggil view welcome.blade.php
Route::get('/', 'PagesController@homepage');
/*
Route::get('/', function () {
    //return view('welcome');
    return view('pages/homepage');
});
*/

//Test google map api
Route::get('awal', function() {
	return view('maps/awal.html');
}); 


//Tutorial blade nepal laravel google map api

Route::get('vendor/add', function() {
	return view('add');
});

Route::post('vendor/add', function() {
	return view('vendor');
});

Route::get('vendor/{id}', function($id) {

});

/*
Route::get('add2', function() {
	return view('add');
});
*/

//Route yang ngeget request winner trus ngereturn html page yang isinya string doang
Route::get('winner', function () {
    return 'Selamat, tim Bakwan telah memenangkan Compfest Hackathon 2016';
});

Route::get('about', 'PagesController@about');;
//Sama kaya winner
/*
Route::get('about', function () {
    //return 'Aplikasi <strong>laravelapp</strong> dibuat sebagai latihan untuk mempelajari Laravel.';
    return view('pages.about');
});
*/

//named route/alias

//Variasi satu :

/*
//Bikin route yang namanya halaman rahasia untuk nanti diredirect dari route lain
Route::get('secret-page', ['as' => 'secret', function() {
	return 'You are viewing a <strong>secret</strong> page';
}]);
*/

//Variasi dua :
/*
Route::get('secret-page', function() {
	return 'You are viewing a <strong>secret</strong> page';
}) -> name ('secret');

//Nah, ini route buat redirect ke secret page
Route::get('showsecret', function() {
	return redirect()->route('secret');
});
*/

//Dengan controller
Route::get('secretPage', [
	'as'  => 'secret',
	'uses' => 'SecretController@secretPage'
]);

Route::get('showSecret', 'SecretController@showSecret');

//Keempat route berikut urutannya jgn sampai tertukar

//Menampilkan data mitra
Route::get('franchisee', 'FranchiseeController@index');

//Menampilkan data mitra
Route::get('schedule', 'ScheduleController@index');

//Menampilkan data penjadwalan
Route::get('schedule/create', 'ScheduleController@create');

//Membuat data mitra
Route::get('franchisee/create', 'FranchiseeController@create');

//Route untuk nerima data akun baru
//Route::post('franchisee/new', 'FranchiseeController@store');
Route::post('franchisee', 'FranchiseeController@store');

Route::post('schedule', 'ScheduleController@store');

//Untuk Login
Route::get('franchisee/login', 'FranchiseeController@loginGet');

//Untuk Login
Route::post('franchisee/login', 'FranchiseeController@loginPost');

//Success Login
Route::get('franchisee/successlogin', 'FranchiseeController@loginGet');

//Success Login
Route::post('franchisee/successlogin', 'FranchiseeController@loginPost');

// Halaman update stok dan penjualan 
Route::get('franchisee/user/{franchisee}', ['uses' =>'FranchiseeController@userdashboard', 'as'=>'userdashboard']);

//Kurang Tambah
//Route::post('franchisee/user/{username}', ['uses' =>'FranchiseeController@userdashboard', 'as'=>'userdashboard']);

//Untuk nampilin detail
// Biasanya kalo mau ngasitau itu variabel pake -> { }
//Kalo ini ditaro di atas franchisee/create atau new bakal masalah karena 
//new atau create bakal dianggap id, padahal ngk ada
Route::get('franchisee/{franchisee}', 'FranchiseeController@showDetail');

//Show detail schedule
Route::get('schedule/{scedule}', 'ScheduleController@showDetail');

//Untuk edit data franchisee after clicking button
Route::get('franchisee/{franchisee}/edit', 'FranchiseeController@edit');

//Untuk edit data Schedule after clicking button
Route::get('schedule/{schedule}/edit', 'ScheduleController@edit');

//Untuk post edit/patch button
Route::patch('franchisee/{franchisee}', 'FranchiseeController@update');

//Untuk post edit/patch button schedule
Route::patch('schedule/{schedule}', 'ScheduleController@update');

//Untuk tambahkurang penjualan
Route::patch('franchisee/user/{franchisee}/updatepenjualan', 'FranchiseeController@updatePenjualan');

//Untuk tambahkurang stok
Route::patch('franchisee/user/{franchisee}/updatestok', 'FranchiseeController@updateStok');

//Untuk delete record mitra
//Kalo misal di route ini belom didefinisiin 'FranchiseController@destroy',
//maka ngk bakal dikenali di index.blade.php
Route::delete('franchisee/{franchisee}', 'FranchiseeController@delete');

//Delete record schedule
Route::delete('schedule/{schedule}', 'ScheduleController@delete');

//Route sementara untuk nambahin row awal
Route::get('franchisee/sampledata', function() {
	DB::table('franchisees')->insert([
		[
			'nama' => 'Mitra Kembang Beji',
			'alamat' => 'Jalan Kembang Beji',
			'kecamatan' => 'Beji',
			'kota' => 'Depok',
			'username' => 'mitraKB',
			'password' => 'deketUI',
			'jualtahusimple' => 0,
			'stoktahu' => 0,
		],
		[
			'nama' => 'Mitra Pantai Indah Kapuk',
			'alamat' => ' Cabang Food Plaza, Jalan Pantai Indah Kapuk Boulevard No. 25',
			'kecamatan' => 'Penjaringan',
			'kota' => 'Jakarta Utara',
			'username' => 'mitraPIK',
			'password' => 'deketAncol',
			'jualtahusimple' => 0,
			'stoktahu' => 0,
		],
		[
			'nama' => 'Mitra Gunung Putri',
			'alamat' => 'Jalan Gunung Putri',
			'kecamatan' => 'Gunung Putri',
			'kota' => 'Bogor',
			'username' => 'mitraGP',
			'password' => 'deketKebonRaya',
			'jualtahusimple' => 0,
			'stoktahu' => 0,
		],
	]);
});

//Route untuk graph
Route::get('test', function() {
	return view('test');
});

//Test lavachart
Route::get('lava', "FranchiseeController@chartForJual");

//Test place
Route::get('testplace', function() {
	return view('testplace');
});

//Place
/*
Route::get('place', function() {
	return view('place');
});
*/

//Place
Route::get('place', 'FranchiseeController@testPlace');

//Place
Route::get('geocode', function() {
	return view('geocode');
});

//Untuk return data user
/*
Route::get('franchisee', function() {
	//$franchiseeArray = ['JakSel', 'JakBar', 'JakPus', 'JakUt', 'JakTim'];
	$franchiseeArray = array('JakSel', 'JakBar', 'JakPus', 'JakUt', 'JakTim');
	//return view('franchisee/index', compact('franchiseeArray'));
	//return view('franchisee/index', ['franchisee' => $franchiseeArray]);

	//Jadi yang 'franchiseeInput' itu adalah nama variabel di index.blade.php
	//Sedangkan, $franchiseeArray adalah variabel yang kita input ke 'franchiseeArray'
	return view('franchisee/index') -> with('franchiseeInput', $franchiseeArray);
});
*/

?>



