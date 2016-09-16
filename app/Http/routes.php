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
Route::get('/', 'PagesController@homepage');;
/*
Route::get('/', function () {
    //return view('welcome');
    return view('pages/homepage');
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

//Untuk nampilin detail
// Biasanya kalo mau ngasitau itu variabel pake -> { }
//Kalo ini ditaro di atas franchisee/create atau new bakal masalah karena 
//new atau create bakal dianggap id, padahal ngk ada
Route::get('franchisee/{franchisee}', 'FranchiseeController@showDetail');

//Untuk edit data franchisee after clicking button
Route::get('franchisee/{franchisee}/edit', 'FranchiseeController@edit');

//Untuk post edit/patch button
Route::patch('franchisee/{franchisee}', 'FranchiseeController@update');

//Untuk delete record mitra
//Kalo misal di route ini belom didefinisiin 'FranchiseController@destroy',
//maka ngk bakal dikenali di index.blade.php
Route::delete('franchisee/{franchisee}', 'FranchiseeController@delete');

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



