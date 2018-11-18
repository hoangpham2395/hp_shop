@include('layouts.backend.errors')
<div class="row">
    <div class="col-md-12">
        <div class="form-group">
            {!! Form::label('product_name', getTitle('products.product_name')) !!} 
            <span class="required"></span>
            <div class="input-group">
                <span class="input-group-addon">
                    <i class="fa fa-mobile"></i>
                </span>
                {!! Form::text('product_name', null, ['class' => 'form-control', 'placeholder' => getTitle('products.product_name')]) !!}
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            {!! Form::label('brand_id', getTitle('products.brand_id')) !!} 
            <span class="required"></span>
            <div class="input-group">
                <span class="input-group-addon">
                    <i class="fa fa-apple"></i>
                </span>
                {!! Form::select('brand_id', $params['brands'], null, ['class' => 'form-control', 'placeholder' => 'Choose brand...']) !!}
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            {!! Form::label('category_id', getTitle('products.category_id')) !!} 
            <span class="required"></span>
            <div class="input-group">
                <span class="input-group-addon">
                    <i class="fa fa-barcode"></i>
                </span>
                {!! Form::select('category_id', $params['categories'], null, ['class' => 'form-control', 'placeholder' => 'Choose category ...']) !!}
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            {!! Form::label('price', getTitle('products.price')) !!} 
            <span class="required"></span>
            <div class="input-group">
                {!! Form::text('price', null, ['class' => 'form-control', 'placeholder' => getTitle('products.price')]) !!}
                <span class="input-group-addon">VND</span>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="form-group">
            {!! Form::label('product_name', getTitle('products.sale')) !!} 
            {!! Form::textarea('sale', null, ['class' => 'form-control', 'placeholder' => getTitle('products.sale'), 'rows' => '5']) !!}
        </div>
    </div>
</div>
@include('layouts.backend.btn_form')