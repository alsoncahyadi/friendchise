<?php
//HomePage
Route::get('/', 'PagesController@homepage');

//Untuk Login
Route::get('login', 'FranchiseeController@loginGet');
Route::post('login', 'FranchiseeController@loginPost');

////PUSAT
//Dashboard pusat (daftar mitra dan schedule)
Route::get('franchiser/list/franchisee', 'FranchiseeController@index');
Route::get('franchiser/list/schedule', 'ScheduleController@index');

//Menambah mitra dan schedule
Route::get('franchiser/1/schedule/create', 'ScheduleController@create');
Route::get('franchiser/1/franchisee/create', 'FranchiseeController@create');

//Menampilkan menu edit mitra dan schedule (get)
Route::get('franchiser/1/edit/franchisee/{franchisee}', 'FranchiseeController@edit');
Route::get('franchiser/1/edit/schedule/{schedule}', 'ScheduleController@edit');

//Mengubah mitra dan schedule (patch)
Route::patch('franchisee/{franchisee}', 'FranchiseeController@update');
Route::patch('schedule/{schedule}', 'ScheduleController@update');

//Delete mitra dan schedule
Route::delete('franchisee/{franchisee}', 'FranchiseeController@delete');
Route::delete('schedule/{schedule}', 'ScheduleController@delete');

//Show Detail
Route::get('franchiser/1/show/franchisee/{franchisee}', 'FranchiseeController@showDetail');
Route::get('franchiser/1/show/schedule/{scedule}', 'ScheduleController@showDetail');

//MAPS

////MITRA
//Tambahkurang penjualan dan stok (Dashboard mitra)
Route::get('franchisee/{franchisee}', ['uses' =>'FranchiseeController@userdashboard', 'as'=>'userdashboard']);

//Update penjualan dan stok
Route::patch('franchisee/{franchisee}/updatepenjualan', 'FranchiseeController@updatePenjualan');
Route::patch('franchisee/{franchisee}/updatestok', 'FranchiseeController@updateStok');

?>