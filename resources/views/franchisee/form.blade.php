            <div class="form">
                {!! Form::label('nama', 'Nama', ['class' => 'input' , 'style'=>'font-size : 18px']) !!}
                {!! Form::text('nama', null, ['class' => 'input']) !!}
            </div>

            <div class="form" >
                {!! Form::label('alamat', 'Alamat', ['class' => 'form' , 'style'=>'font-size : 18px']) !!}
                {!! Form::text('alamat', null, ['class' => 'form-control']) !!}
            </div>

            <div class="form" >
                {!! Form::label('kecamatan', 'Kecamatan', ['class' => 'form' , 'style'=>'font-size : 18px']) !!}
                {!! Form::text('kecamatan', null, ['class' => 'form-control']) !!}
            </div>

            <div class="form" >
                {!! Form::label('kota', 'Kota', ['class' => 'form' , 'style'=>'font-size : 18px']) !!}
                {!! Form::text('kota', null, ['class' => 'form-control']) !!}
            </div>

            <div class="form" >
                {!! Form::label('username', 'Username', ['class' => 'form' , 'style'=>'font-size : 18px']) !!}
                {!! Form::text('username', null, ['class' => 'form-control']) !!}
            </div>

            <div class="form" >
                {!! Form::label('password', 'Password', array('class' => ' form', 'type' => 'password' , 'style'=>'font-size : 18px')) !!}
                {!! Form::text('password', null, ['class' => 'form-control']) !!}
            </div>

            <div class ="form">
                {!! Form::submit($buttonText, ['class' => 'contact_btn  form' , 'style'=>'font-size : 14px; padding : 14px 14px 14px 14px']) !!}
            </div>