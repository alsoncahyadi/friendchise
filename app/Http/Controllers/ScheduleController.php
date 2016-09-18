<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Http\Requests;

use App\Schedule;

use App\Franchisees;

class ScheduleController extends Controller
{
    public function index() {
        //$scheduleList = Schedule::all()->sort('tanggal');
        $scheduleList = Schedule::orderBy('tanggal', 'asc') -> paginate(5);

        $franchisee = Franchisees::all();

        $jumlahSiswa = $scheduleList -> count();
        $inputData = array (
            'scheduleInput' => $scheduleList,
            'inputJumlah' => $jumlahSiswa,
            'franchiseeInput' => $franchisee
        );
        return view('schedule/index') -> with($inputData);
    }

    public function create(Request $req) {
        $franchisee = Franchisees::all();
        $jumlahSiswa = $franchisee -> count();

        $franchiseeList = array();
        for ($i=0; $i<$jumlahSiswa; $i++) {
            /*
            array_push($franchiseeList, $franchisee[$i]['nama'] => $franchisee[$i]['nama']

            );
            */
            $franchiseeList[$franchisee[$i]['nama']] = $franchisee[$i]['nama'];
        }
        $inputData = array(
            'franchiseeInput' => $franchiseeList
        );
    	return view('schedule/create') -> with ($inputData);
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
        return redirect('franchiser/1/list/schedule');
    }

    public function delete($id) {
        $schedules = Schedule::findOrFail($id);
        $schedules->delete();
        return redirect('franchiser/1/list/schedule');
    }

    //Variabel request yang dimaksud adalah class Ill\Http\Request yang diimport
    public function store(Request $req) {
        //Ambil semua data request ke input
        //echo $req['id'];
        $input = $req->all();
        echo $req['nama']+1;
        //$input['nama'] = Franchisees::findOrFail($req['nama']+1)['nama'];
        Schedule::create($input);
        return redirect('franchiser/1/list/schedule');
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