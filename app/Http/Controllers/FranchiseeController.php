<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Franchisees;

class FranchiseeController extends Controller
{
    public function index() {
        /*
    	$franchiseeArray = ['Jakarta Selatan', 'Jakarta Barat', 'Jakarta Utara', 'Jakarta Timur', 'Jakarta Pusat'];
    	return view('franchisee/index') -> with('franchiseeInput', $franchiseeArray);
        */
        //Harusnya ngk all, tapi cuma nama, alamat, jualtahu, stok tahu
        //$franchiseeList = Franchisees::all()->sortBy('nama');
        //$franchiseeList = Franchisees::orderBy('nama', 'asc') -> simplePaginate(5);
        $franchiseeList = Franchisees::orderBy('nama', 'asc') -> paginate(5);

        //Iterasi, unpack semua serialize field 
        foreach ($franchiseeList as $item) {
            //Ubah data Penjualan Tahu yang tadinya masih serialized jadi array unpack
            $unpackserialize = unserialize($item['jualtahu']);
            //ambil untuk today (18 sept 2016)
            $item['jualtahu'] = $unpackserialize['18-09-2016'];
        }

        $jumlahSiswa = $franchiseeList -> count();
        $inputData = array (
            'franchiseeInput' => $franchiseeList,
            'inputJumlah' => $jumlahSiswa
        );

        return view('franchisee/index') -> with($inputData);
        //return view('franchisee/index') -> with('franchiseeInput', $franchiseeList, 'inputJumlah', $jumlahSiswa);
    }

    public function create() {
    	return view('franchisee.create');
    }

    //Pokoknya tiap edit, update, sama delete itu kirim id dari form action-nya
    public function edit($id) {

        $franchisee = Franchisees::findOrFail($id);

        $inputData = array(
            'franchiseeInput' => $franchisee
        ); 
        return view('franchisee/edit') -> with($inputData);        
    }

    public function update($id, Request $req) {
        $franchisee = Franchisees::findOrFail($id);
        $franchisee->update($req->all());
        return redirect('franchisee');
    }

    public function delete($id) {
        $franchisee = Franchisees::findOrFail($id);
        $franchisee->delete();
        return redirect('franchisee');
    }

    //Variabel request yang dimaksud adalah class Ill\Http\Request yang diimport
    public function store(Request $req) {

        //Ambil semua data request ke input
        $input = $req->all();
        //Create instance franchisee baru dari data request
        $newJualArray = array(
            '18-09-2016' => 0,
        );
        $serializedJualArray = serialize($newJualArray);

        $input['jualtahu'] = $serializedJualArray;
        //$unserializedJualArray = unserialize($serializedJualArray);
        //$dataFranchisee['jualtahu'] = $unserializedJualArray;

        $input['stoktahu'] = 100;

        Franchisees::create($input);
        return redirect('franchisee');


        /*
        //Dibawah in yg lama yg masih return JSON doang
    	//Injection method
        $dataFranchisee = $req -> all();
        if (!(array_key_exists('jualtahu', $dataFranchisee))) {
            $newJualArray = array(
                '18-09-2016' => 0,
            );
            $serializedJualArray = serialize($newJualArray);

            $dataFranchisee['jualtahu'] = $serializedJualArray;
            //$unserializedJualArray = unserialize($serializedJualArray);
            //$dataFranchisee['jualtahu'] = $unserializedJualArray;
        } 
        if (!(array_key_exists('stoktahu', $dataFranchisee))) {
            $dataFranchisee['stoktahu'] = 100;
        } 
        return $dataFranchisee;
    	//return Redirect::to('franchisee/new');
        */
    }

    //Variabel untuk nangkep detail
    public function showDetail($id) {
        $franchisee = Franchisees::findOrFail($id);
        //Ubah data Penjualan Tahu yang tadinya masih serialized jadi array unpack
        $unpackserialize = unserialize($franchisee['jualtahu']);
        //ambil untuk today (18 sept 2016)
        $franchisee['jualtahu'] = $unpackserialize['18-09-2016'];
        $inputData = array (
            'franchiseeInput' => $franchisee
        );
        return view('franchisee/showDetails') -> with($inputData);        
    }

    public function loginPost(Request $req) {
        $franchiseeList = Franchisees::all();
        $input = $req->all();
        foreach ($franchiseeList as $franchisee) {
            if ($franchisee['username'] == $input['username']) {
                if ($franchisee['password'] == $input['password']) {
                    return view('franchisee/loginsuccess');
                }
            }
        }
        return view('franchisee/login');
    }

    public function loginGet(Request $req) {
        return view('franchisee/login');
    }    
}