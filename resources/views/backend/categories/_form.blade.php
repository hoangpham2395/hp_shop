@include('layouts.backend.errors')
<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            {!! Form::label('category_name', 'Category name:') !!} 
            <span class="color-red">[<i class="fa fa-asterisk"></i>]</span>
            <div class="input-group">
                <span class="input-group-addon">
                    <i class="fa fa-barcode"></i>
                </span>
                {!! Form::text('category_name', null, ['class' => 'form-control', 'placeholder' => 'Enter category name']) !!}
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            {!! Form::label('parent_id', 'Parent category:') !!} 
            <div class="input-group">
                <span class="input-group-addon">
                    <i class="fa fa-barcode"></i>
                </span>
                @php 
                if (!empty($entity)) {
                    unset($params['parent_category'][$entity->id]);
                }
                @endphp
                {!! Form::select('parent_id', $params['parent_category'], null, ['class' => 'form-control', 'placeholder' => 'Choose parent category...']) !!}
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="form-group">
            {!! Form::label('category_image', 'Image:') !!}
            @include('layouts.backend.upload_image', ['image' => 'category_image'])
        </div>
    </div>
</div>
@include('layouts.backend.btn_form')