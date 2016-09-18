<?php
//HomePage
Route::get('/', 'PagesController@homepage');

//Untuk Login
Route::get('login', 'FranchiseeController@loginGet');
Route::post('login', 'FranchiseeController@loginPost');

////PUSAT
//Dashboard pusat (daftar mitra dan schedule)
Route::get('franchiser/1/list/franchisee', 'FranchiseeController@index');
Route::get('franchiser/1/list/schedule', 'ScheduleController@index');

//Show Detail
Route::get('franchiser/1/show/franchisee/{franchisee}', 'FranchiseeController@showDetail');
Route::get('franchiser/1/show/schedule/{schedule}', 'ScheduleController@showDetail');

//Menampilkan form tambah mitra dan schedule
Route::get('franchiser/1/create/schedule', 'ScheduleController@create');
Route::get('franchiser/1/create/franchisee', 'FranchiseeController@create');

//Menambah mitra dan schedule
Route::post('franchisee', 'FranchiseeController@store');
Route::post('schedule', 'ScheduleController@store');

//Menampilkan menu edit mitra dan schedule (get)
Route::get('franchiser/1/edit/franchisee/{franchisee}', 'FranchiseeController@edit');
Route::get('franchiser/1/edit/schedule/{schedule}', 'ScheduleController@edit');

//MAPS
Route::get('franchiser/1/rekomendasitempat', 'FranchiseeController@recommendation');

//Mengedit mitra dan schedule (patch)
Route::patch('franchisee/{franchisee}', 'FranchiseeController@update');
Route::patch('schedule/{schedule}', 'ScheduleController@update');

//Delete mitra dan schedule
Route::delete('franchisee/{franchisee}', 'FranchiseeController@delete');
Route::delete('schedule/{schedule}', 'ScheduleController@delete');

////MITRA
//Tambahkurang penjualan dan stok (Dashboard mitra)
Route::get('franchisee/{franchisee}', ['uses' =>'FranchiseeController@userdashboard', 'as'=>'userdashboard']);

//Update penjualan dan stok
Route::patch('franchisee/{franchisee}/updatepenjualan', 'FranchiseeController@updatePenjualan');
Route::patch('franchisee/{franchisee}/updatestok', 'FranchiseeController@updateStok');


?>