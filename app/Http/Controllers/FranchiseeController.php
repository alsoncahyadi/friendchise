<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Franchisees;

use View;

use Khill\Lavacharts\Lavacharts;

//require public_path() .'\..\vendor\autoload.php';

//$lava = new Khill\Lavacharts\Lavacharts;

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
        //Ubah data Penjualan Tahu yang tadinya mas             ih serialized jadi array unpack
        $unpackserialize = unserialize($franchisee['jualtahu']);
        //ambil untuk today (18 sept 2016)
        //$franchisee['jualtahu'] = $unpackserialize['18-09-2016'];

        //BUAT GRAPH
        $franchisee = Franchisees::findOrFail($id);
        $unserializedJualtahu = unserialize($franchisee->jualtahu);
        krsort($unserializedJualtahu);

        $inputData = array(
            'franchiseeInput' => $franchisee,
            'franchiseeChart' => $unserializedJualtahu
        );

        return view('franchisee/showDetails') -> with($inputData);        
    }

    public function chartForJual()
    {
        /*
        $viewer = Franchisees::raw('SUM(numberofview) as count')
            ->orderBy('created_at', 'desc')
            ->groupBy(Franchisees::raw("year(created_at)"))
            ->get()->toArray();
        */
        //$viewer = Franchisees::all()->toArray();
        //Test bikin array

        //$viewer = array_column($viewer, 'count');
        
        /*
        $click = Click::select(DB::raw("SUM(numberofclick) as count"))
            ->orderBy("created_at")
            ->groupBy(DB::raw("year(created_at)"))
            ->get()->toArray();
        $click = array_column($click, 'count');
        */
        /*
        return view('chartjs')
                ->with('viewer',json_encode($viewer,JSON_NUMERIC_CHECK));
                //->with('click',json_encode($click,JSON_NUMERIC_CHECK));
        */

                /*
        $stocksTable = \Lava::DataTable();

        $stocksTable->addDateColumn('Day of Month')
                    ->addNumberColumn('Projected')
                    ->addNumberColumn('Official');

        // Random Data For Example
        for ($a = 1; $a < 30; $a++) {
            $stocksTable->addRow([
              '2015-10-' . $a, rand(800,1000), rand(800,1000)
            ]);
        }

        $chart = \Lava::LineChart('MyStocks', $stocksTable);
        */

        $franchisee = Franchisees::findOrFail(1);
        $unserializedJualtahu = unserialize($franchisee->jualtahu);
        krsort($unserializedJualtahu);

        $inputData = array(
            'franchiseeInput' => $unserializedJualtahu
        );

        return view('testchart') -> with($inputData);
    }

    public function loginPost(Request $req) {
        $franchiseeList = Franchisees::all();
        $input = $req->all();
        $errMsg = '';
        foreach ($franchiseeList as $franchisee) {
            if ($franchisee['username'] == $input['username']) {
                if ($franchisee['password'] == $input['password']) {
                    $inputData = array (
                        'franchiseeInput' => $frenchisee,
                    );
                    return view('franchisee/dashboarduser') -> with($inputData);
                } else {
                    $errMsg = "Username dan Password tidak cocok!";
                }
            }
        }
        if ($errMsg == '') {
            $errMsg = 'Username tidak ditemukan!';
        }
        $inputMsg = array (
            'errMsg' => "Login failed! " . $errMsg,
        );
        return view('franchisee/login') -> with($inputMsg);
    }

    public function loginGet(Request $req) {
        $inputMsg = array (
            'errMsg' => '',
        );
        return view('franchisee/login') -> with($inputMsg);
    }

    public function userdashboard($id) {
        $franchisee = Franchisees::findOrFail($id);
        //Ubah data Penjualan Tahu yang tadinya masih serialized jadi array unpack
        $unpackserialize = unserialize($franchisee['jualtahu']);
        //ambil untuk today (18 sept 2016)
        $franchisee['jualtahu'] = $unpackserialize['18-09-2016'];
        $inputData = array (
            'franchiseeInput' => $franchisee
        );
        return view('franchisee/dashboarduser') -> with($inputData);   
    }

    public function updatePenjualan($id, Request $req) {
        //Ambil record
        $franchisee = Franchisees::findOrFail($id);
        //Ambil array jual tahu
        $arrayJualTahu = unserialize($franchisee['jualtahu']);
        //Tamah/kurang
        if ($req->date == '') {
            $req->date = date('d-m-Y');
        }
        if (!array_key_exists($req->date, $arrayJualTahu)) {
            //echo "test";
            $arrayJualTahu[$req->date] = 0;    
        }
        $arrayJualTahu[$req->date] += $req->jumlah;
        //Pack
        $packing = serialize($arrayJualTahu);
        //Update
        $franchisee['jualtahu'] = $packing;
        $franchisee['stoktahu'] -= $req->jumlah;
        $franchisee->save();

        //Dishownya yang unserialized
        //$franchisee['jualtahu'] = $arrayJualTahu[$req->date];
        $inputData = array (
            'franchiseeInput' => $franchisee
        );
        return view('franchisee/showDetails') -> with($inputData);
    }

    public function updateStok($id, Request $req) {
        //Ambil record
        $franchisee = Franchisees::findOrFail($id);

        //Update
        $franchisee['stoktahu'] += $req->jumlah;
        $franchisee->save();

        //Dishownya yang unserialized
        //$franchisee['jualtahu'] = $arrayJualTahu[$req->date];
        $inputData = array (
            'franchiseeInput' => $franchisee
        );
        return view('franchisee/showDetails') -> with($inputData);
    }
}