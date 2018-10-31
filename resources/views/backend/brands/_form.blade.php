@include('layouts.backend.errors')
<div class="row">
    <div class="col-md-12">
        <div class="form-group">
            {!! Form::label('brand_name', 'Brand name:') !!} 
            <span class="color-red">[<i class="fa fa-asterisk"></i>]</span>
            <div class="input-group">
                <span class="input-group-addon">
                    <i class="fa fa-apple"></i>
                </span>
                {!! Form::text('brand_name', null, ['class' => 'form-control', 'placeholder' => 'Enter brand name']) !!}
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="form-group">
            {!! Form::label('brand_image', 'Image:') !!}
            @include('layouts.backend.upload_image', ['image' => 'brand_image'])
        </div>
    </div>
</div>
@include('layouts.backend.btn_form')