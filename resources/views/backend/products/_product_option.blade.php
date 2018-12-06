<div class="model-product-option-info" data-id="{{(!empty($item) && !empty($item->id)) ? $item->id : $index}}">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="box box-danger">
            <div class="box-header">
                <h3 class="box-title">{{getTitle('products.option')}} <span class="panel_heading">{{ is_numeric($index) ? $index + 1 : $index}}</span></h3>
            </div>
            <div class="box-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            {!! Form::label('color', getTitle('products.color')) !!}
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-adjust"></i></span>
                                {!! Form::text('ProductPrice['.$index.'][color]', null, ['class' => 'form-control', 'placeholder' => getTitle('products.color')]) !!}
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            {!! Form::label('price', getTitle('products.price')) !!}
                            <span class="required"></span>
                            <div class="input-group">
                                {!! Form::text('ProductPrice['.$index.'][price]', null, ['class' => 'form-control', 'placeholder' => getTitle('products.price')]) !!}
                                <span class="input-group-addon">VND</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            {!! Form::label('quantity', getTitle('products.quantity')) !!}
                            <span class="required"></span>
                            <div class="input-group">
                                <span class="input-group-addon">1</span>
                                {!! Form::text('ProductPrice['.$index.'][quantity]', null, ['class' => 'form-control', 'placeholder' => getTitle('products.quantity')]) !!}
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            {!! Form::label('origin', getTitle('products.origin')) !!}
                            <span class="required"></span>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-map"></i></span>
                                {!! Form::select('ProductPrice['.$index.'][origin]', $params['origin'], null, ['class' => 'form-control']) !!}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            {!! Form::label('sale', getTitle('products.sale')) !!}
                            {!! Form::textarea('ProductPrice['.$index.'][sale]', null, ['class' => 'form-control', 'placeholder' => getTitle('products.sale'), 'rows' => '3']) !!}
                        </div>
                    </div>
                </div>
                <div class="row">
                    <button type="button" class="btn btn-danger delete-row @if($index == 0) hide @endif" onclick="ProductController.removeProductOption(this)">
                        <i class="fa fa-times-circle"></i> {{getBreadcrumb('products.delete_option')}}
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>