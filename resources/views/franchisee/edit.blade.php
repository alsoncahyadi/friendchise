@extends('template')

@section('main')
    <div id='franchisee'>
        <h2> Edit Franchisee </h2>
        <!--    POST artinya buat ngirim data dari user dan simpan 
                url franchisee artinya di laravelapp.dev/franchisee -->
        
        <!--<form action = "{{ url('franchisee/new') }}" method = "POST"
        accept-charset="UTF-8">-->

        <!--Pilihannya kalo ngk input hidden atau kasih pengecualian di file VerifyCsrfToken-->
        <!--<input name="_token" type="hidden">-->

        <!--Enakan kasih pengecualian biar nanti JSONnya ngk mengandung token-->

        <!-- Form open otomatis pake method POST -->
        <!--{!! Form::open(['url' => 'franchisee']) !!}-->

        <!--
        Yang di bawah ini gak ngerti ngubahnya jadi model binding, jadi pake form aja
        <form action = "{{ url('franchisee/' . $franchiseeInput->id . '/update') }}" 
        method = "PATCH" accept-charset="UTF-8">
        -->

        <!--Kirim idnya juga-->
        {!! Form::model ($franchiseeInput, ['method' => 'PATCH', 
        'action' => ['FranchiseeController@update', $franchiseeInput->id]]) !!}

        <!-- Yang method => PATCH itu sama aja <input name="_method" type= "hidden" value="PATCH"> -->

            <!--Pake form biar bisa form model binding-->

            @include('franchisee/form', ['buttonText' => 'Ubah Informasi'])

            <!--
            <div class ="form-group">
                <label for="nama" class="control-label">
                    Nama Mitra
                </label>
                <input type="text" name="nama" id="nama" class = "form-control">
            </div>

            <div class ="form-group">
                <label for="kecamatan" class="control-label">
                    Kecamatan
                </label>
                <input type="text" name="kecamatan" id="kecamatan" class = "form-control">
            </div>

            <div class ="form-group">
                <label for="kota" class="control-label">
                    Kota
                </label>
                <input type="text" name="kota" id="kota" class = "form-control">
            </div>

            <div class ="form-group">
                <label for="username" class="control-label">
                    Username
                </label>
                <input type="text" name="username" id="username" class = "form-control">
            </div>

            <div class ="form-group">
                <label for="password" class="control-label">
                    Password
                </label>
                <input type="text" name="password" id="password" class = "form-control">
            </div>
            -->
            
            <!--
            <div class="form-group" >
                <label for="jualtahu" class="control-label">
                    Jumlah Penjualan Tahu
                </label>
                <input type="number" name="jualtahu" id="jualtahu" class = "form-control">
            </div>

            <div class="form-group" >
                <label for="stoktahu" class="control-label">
                    Stok Tahu
                </label>
                <input type="number" name="stoktahu" id="stoktahu" class = "form-control">
            </div>            
            -->

        {!! Form::close() !!}
    </div>
@stop

@section('footer')
    @include('footer')
@stop