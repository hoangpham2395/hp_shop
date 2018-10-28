@include('layouts.backend.errors')
<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            {!! Form::label('name', 'Name:') !!} <span class="color-red">[<i class="fa fa-asterisk"></i>]</span>
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Enter name']) !!}
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            {!! Form::label('email', 'Email:') !!} <span class="color-red">[<i class="fa fa-asterisk"></i>]</span>
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-envelope-open"></i></span>
                {!! Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'Enter email']) !!}
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            {!! Form::label('tel', 'Phone:') !!} <span class="color-red">[<i class="fa fa-asterisk"></i>]</span>
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                {!! Form::text('tel', null, ['class' => 'form-control', 'placeholder' => 'Enter phone']) !!}
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            {!! Form::label('birthday', 'Birthday:') !!} <span class="color-red">[<i class="fa fa-asterisk"></i>]</span>
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-birthday-cake"></i></span>
                {!! Form::text('birthday', null, ['class' => 'datepicker form-control', 'placeholder' => 'Enter birthday']) !!}
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="form-group">
            {!! Form::label('avatar', 'Avatar:') !!}
            @include('layouts.backend.upload_image', ['image' => 'avatar'])
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            {!! Form::label('id_number', 'ID number:') !!} <span class="color-red">[<i class="fa fa-asterisk"></i>]</span>
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                {!! Form::text('id_number', null, ['class' => 'form-control', 'placeholder' => 'Enter id number']) !!}
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            {!! Form::label('bank_account', 'Bank account:') !!}
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-bank"></i></span>
                {!! Form::text('bank_account', null, ['class' => 'form-control', 'placeholder' => 'Enter bank account']) !!}
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="form-group">
            {!! Form::label('description', 'Description:') !!}
            {!! Form::textarea('description', null, ['class' => 'form-control', 'placeholder' => 'Enter description', 'rows' => 5]) !!}
        </div>
    </div>
</div>
@include('layouts.backend.btn_form')