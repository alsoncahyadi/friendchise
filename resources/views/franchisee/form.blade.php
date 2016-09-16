            <div class="form-group">
                {!! Form::label('nama', 'Nama', ['class' => 'control-label']) !!}
                {!! Form::text('nama', null, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group" >
                {!! Form::label('alamat', 'Alamat', ['class' => 'control-label']) !!}
                {!! Form::text('alamat', null, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group" >
                {!! Form::label('kecamatan', 'Kecamatan', ['class' => 'control-label']) !!}
                {!! Form::text('kecamatan', null, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group" >
                {!! Form::label('kota', 'Kota', ['class' => 'control-label']) !!}
                {!! Form::text('kota', null, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group" >
                {!! Form::label('username', 'Username', ['class' => 'control-label']) !!}
                {!! Form::text('username', null, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group" >
                {!! Form::label('password', 'Password', array('class' => 'control-label', 'type' => 'password')) !!}
                {!! Form::text('password', null, ['class' => 'form-control']) !!}
            </div>

            <div class ="form-group">
                {!! Form::submit($buttonText, ['class' => 'btn btn-primary form-control']) !!}
            </div>