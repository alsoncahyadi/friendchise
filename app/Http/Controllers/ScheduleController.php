<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Http\Requests;

use App\Schedule;

class ScheduleController extends Controller
{
    public function index() {
        $scheduleList = Schedule::all();

        $jumlahSiswa = $scheduleList -> count();
        $inputData = array (
            'scheduleInput' => $scheduleList,
            'inputJumlah' => $jumlahSiswa
        );
        return view('schedule/index') -> with($inputData);
    }

    public function create() {
    	return view('schedule/create');
    }

    //Pokoknya tiap edit, update, sama delete itu kirim id dari form action-nya
    public function edit($id) {

    }

    public function update($id, Request $req) {

    }

    public function delete($id) {

    }

    //Variabel request yang dimaksud adalah class Ill\Http\Request yang diimport
    public function store(Request $req) {
        //Ambil semua data request ke input
        $input = $req->all();
        Schedule::create($input);
        return redirect('schedule');
    }

    //Variabel untuk nangkep detail
    public function showDetail($id) {
        
    }
}