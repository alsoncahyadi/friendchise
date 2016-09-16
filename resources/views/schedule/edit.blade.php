@extends('template')

@section('main')
    <div id='schedule'>
        <h2> Edit Schedule </h2>

        <!--Kirim idnya juga-->
        {!! Form::model ($scheduleInput, ['method' => 'PATCH', 
        'action' => ['ScheduleController@update', $scheduleInput->id]]) !!}

            <div class="form-group">
                {!! Form::label('nama', 'Nama', ['class' => 'control-label']) !!}
                {!! Form::text('nama', null, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group" >
                {!! Form::label('tanggal', 'Tanggal', ['class' => 'control-label']) !!}
                {!! Form::text('tanggal', null, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group" >
                {!! Form::label('jumlahkirim', 'Jumlah Kirim', ['class' => 'control-label']) !!}
                {!! Form::text('jumlahkirim', null, ['class' => 'form-control']) !!}
            </div>

            <div class ="form-group">
                {!! Form::submit('Submit', ['class' => 'btn btn-primary form-control']) !!}
            </div>
        {!! Form::close() !!}
    </div>
@stop

@section('footer')
    @include('footer')
@stop