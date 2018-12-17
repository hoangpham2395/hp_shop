<div class="model-product-option-info" data-id="{{(!empty($item) && !empty($item->id)) ? $item->id : $index}}">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="box box-primary">
            <div class="box-header">
                <h3 class="box-title">{{getTitle('products.option')}} <span class="panel_heading">{{ is_numeric($index) ? $index + 1 : $index}}</span></h3>
            </div>
            <div class="box-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            {!! Form::label('color', getTitle('product_price.color')) !!}
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-adjust"></i></span>
                                {!! Form::text('ProductPrice['.$index.'][color]', null, ['class' => 'form-control', 'placeholder' => getTitle('product_price.color')]) !!}
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            {!! Form::label('price', getTitle('product_price.price')) !!}
                            <div class="input-group">
                                {!! Form::text('ProductPrice['.$index.'][price]', null, ['class' => 'form-control', 'placeholder' => getTitle('product_price.price')]) !!}
                                <span class="input-group-addon">VND</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            {!! Form::label('quantity', getTitle('product_price.quantity')) !!}
                            <div class="input-group">
                                <span class="input-group-addon">1</span>
                                {!! Form::text('ProductPrice['.$index.'][quantity]', null, ['class' => 'form-control', 'placeholder' => getTitle('product_price.quantity')]) !!}
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            {!! Form::label('origin', getTitle('product_price.origin')) !!}
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-map"></i></span>
                                {!! Form::select('ProductPrice['.$index.'][origin]', $params['origin'], null, ['class' => 'form-control']) !!}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            {!! Form::label('quantity', getTitle('product_price.warranty')) !!}
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-handshake-o"></i></span>
                                {!! Form::text('ProductPrice['.$index.'][warranty]', null, ['class' => 'form-control', 'placeholder' => getTitle('product_price.warranty')]) !!}
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            {!! Form::label('sale', getTitle('product_price.sale')) !!}
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-shopping-cart"></i></span>
                                {!! Form::text('ProductPrice['.$index.'][sale]', null, ['class' => 'form-control', 'placeholder' => getTitle('product_price.sale')]) !!}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            {!! Form::label('image', getTitle('product_price.image')) !!}
                            @php
                                $image = 'ProductPrice['.$index.']image';
                                $sessionImage = 'current_file_name';
                                $urlImage = null;

                                //if (!empty($entity->images[0])) {
                                //    $urlImage = $entity->images[0]->getUrlImage();
                                //}

                                //if (Session::has($sessionImage)) {
                                //    $urlImage = getTmpUrl() . '/' . Session::get($sessionImage);
                                //}
                            @endphp

                            <div class="input-group">
                                <div class="fileinput fileinput-new" data-provides="fileinput">
                                    @if ($urlImage)
                                        <div class="fileinput-new thumbnail" style="max-width: 250px;">
                                            <img src="{{ $urlImage }}" alt="Avatar">
                                        </div>
                                    @endif
                                    <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 250px;"></div>
                                    <div>
                                        <span class="btn btn-default btn-file">
                                            <span class="fileinput-new">Select image</span>
                                            <span class="fileinput-exists">Change</span>
                                            <!-- Must have data-name and data-name is same name -> upload success  -->
                                            <input type="file" name="{{$image}}">
                                            <!-- Get name file input for base controller -->
                                            <input type="hidden" name="{{ getConstant('FILE_INPUT_NAME') }}" value="{{$image}}">
                                        </span>
                                        <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <button type="button" class="btn btn-danger delete-row @if($index == 0) hide @endif" onclick="ProductController.removeProductOption(this)">
                            <i class="fa fa-times-circle"></i> {{getBreadcrumb('products.delete_option')}}
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>