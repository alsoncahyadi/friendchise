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

    public function create(Request $req) {
    	return view('schedule/create');
    }

    //Pokoknya tiap edit, update, sama delete itu kirim id dari form action-nya
    public function edit($id) {
        $schedule = Schedule::findOrFail($id);

        $inputData = array(
            'scheduleInput' => $schedule
        ); 
        return view('schedule/edit') -> with($inputData);  
    }

    public function update($id, Request $req) {
        $schedule = Schedule::findOrFail($id);
        $schedule->update($req->all());
        return redirect('schedule');
    }

    public function delete($id) {
        $schedules = Schedule::findOrFail($id);
        $schedules->delete();
        return redirect('schedule');
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
        $schedule = Schedule::findOrFail($id);
        //Ubah data Penjualan Tahu yang tadinya masih serialized jadi array unpack
        $unpackserialize = unserialize($schedule['jualtahu']);
        //ambil untuk today (18 sept 2016)
        //$franchisee['jualtahu'] = $unpackserialize['18-09-2016'];
        $inputData = array (
            'scheduleInput' => $schedule
        );
        return view('schedule/showDetails') -> with($inputData); 
    }
}