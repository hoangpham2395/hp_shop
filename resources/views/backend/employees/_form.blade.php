@include('layouts.backend.errors')
<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            {!! Form::label('name', getTitle('employees.name')) !!} <span class="required"></span>
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => getTitle('employees.name')]) !!}
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            {!! Form::label('email', getTitle('employees.email')) !!} <span class="required"></span>
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-envelope-open"></i></span>
                {!! Form::text('email', null, ['class' => 'form-control', 'placeholder' => getTitle('employees.email')]) !!}
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            {!! Form::label('tel', getTitle('employees.tel')) !!} <span class="required"></span>
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                {!! Form::text('tel', null, ['class' => 'form-control', 'placeholder' => getTitle('employees.tel')]) !!}
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            {!! Form::label('birthday', getTitle('employees.birthday')) !!} <span class="required"></span>
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-birthday-cake"></i></span>
                {!! Form::text('birthday', null, ['class' => 'datepicker form-control', 'placeholder' => getTitle('employees.birthday')]) !!}
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            {!! Form::label('address', getTitle('employees.address')) !!} <span class="required"></span>
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
                {!! Form::text('address', null, ['class' => 'form-control', 'placeholder' => getTitle('employees.address')]) !!}
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            {!! Form::label('job_id', getTitle('employees.job_id')) !!} <span class="required"></span>
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-suitcase"></i></span>
                {!! Form::select('job_id', $params['jobs'], null, ['class' => 'form-control', 'placeholder' => '--- Select job ---']) !!}
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="form-group">
            {!! Form::label('avatar', getTitle('employees.avatar')) !!}
            @include('layouts.backend.upload_image', ['image' => 'avatar'])
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            {!! Form::label('id_number', getTitle('employees.id_number')) !!} <span class="required"></span>
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                {!! Form::text('id_number', null, ['class' => 'form-control', 'placeholder' => getTitle('employees.id_number')]) !!}
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            {!! Form::label('bank_account', getTitle('employees.bank_account')) !!}
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-bank"></i></span>
                {!! Form::text('bank_account', null, ['class' => 'form-control', 'placeholder' => getTitle('employees.bank_account')]) !!}
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="form-group">
            {!! Form::label('description', getTitle('employees.description')) !!}
            {!! Form::textarea('description', null, ['class' => 'form-control', 'placeholder' => getTitle('employees.description'), 'rows' => 5]) !!}
        </div>
    </div>
</div>
@include('layouts.backend.btn_form')