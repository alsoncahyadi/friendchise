            <div class="form-group">
                {!! Form::label('nama', 'Nama', ['class' => 'input' , 'style'=>'font-size : 18px']) !!}
                {!! Form::text('nama', null, ['class' => 'input']) !!}
            </div>

            <div class="form-group" >
                {!! Form::label('alamat', 'Alamat', ['class' => 'control-label form' , 'style'=>'font-size : 18px']) !!}
                {!! Form::text('alamat', null, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group" >
                {!! Form::label('kecamatan', 'Kecamatan', ['class' => 'control-label form' , 'style'=>'font-size : 18px']) !!}
                {!! Form::text('kecamatan', null, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group" >
                {!! Form::label('kota', 'Kota', ['class' => 'control-label form' , 'style'=>'font-size : 18px']) !!}
                {!! Form::text('kota', null, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group" >
                {!! Form::label('username', 'Username', ['class' => 'control-label form' , 'style'=>'font-size : 18px']) !!}
                {!! Form::text('username', null, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group" >
                {!! Form::label('password', 'Password', array('class' => 'control-label form', 'type' => 'password' , 'style'=>'font-size : 18px')) !!}
                {!! Form::text('password', null, ['class' => 'form-control']) !!}
            </div>

            <div class ="form-group">
                {!! Form::submit($buttonText, ['class' => 'contact_btn form-control form' , 'style'=>'font-size : 14px; padding : 14px 14px 14px 14px']) !!}
            </div>