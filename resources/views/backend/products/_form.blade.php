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
            {!! Form::label('model', getTitle('products.model')) !!} 
            <span class="required"></span>
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-mobile"></i></span>
                {!! Form::text('model', null, ['class' => 'form-control', 'placeholder' => getTitle('products.model')]) !!}
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            {!! Form::label('made_in', getTitle('products.made_in')) !!} 
            <span class="required"></span>
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
                {!! Form::text('made_in', null, ['class' => 'form-control', 'placeholder' => getTitle('products.made_in')]) !!}
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
            {!! Form::label('quantity', getTitle('products.quantity')) !!} 
            <span class="required"></span>
            <div class="input-group">
                <span class="input-group-addon">1</span>
                {!! Form::text('quantity', null, ['class' => 'form-control', 'placeholder' => getTitle('products.quantity')]) !!}
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            {!! Form::label('origin', getTitle('products.origin')) !!} 
            <span class="required"></span>
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-map"></i></span>
                {!! Form::select('origin', $params['origin'], null, ['class' => 'form-control']) !!}
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
    <div class="col-md-6">
        <div class="form-group">
            {!! Form::label('weigh', getTitle('products.weigh')) !!} 
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-balance-scale"></i></span>
                {!! Form::text('weigh', null, ['class' => 'form-control', 'placeholder' => getTitle('products.weigh')]) !!}
                <span class="input-group-addon">g</span>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="form-group">
            {!! Form::label('sale', getTitle('products.sale')) !!} 
            {!! Form::textarea('sale', null, ['class' => 'form-control', 'placeholder' => getTitle('products.sale'), 'rows' => '3']) !!}
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            {!! Form::label('color', getTitle('products.color')) !!} 
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-adjust"></i></span>
                {!! Form::text('color', null, ['class' => 'form-control', 'placeholder' => getTitle('products.color')]) !!}
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            {!! Form::label('os', getTitle('products.os')) !!} 
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-android"></i></span>
                {!! Form::text('os', null, ['class' => 'form-control', 'placeholder' => getTitle('products.os')]) !!}
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            {!! Form::label('type_screen', getTitle('products.type_screen')) !!} 
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-desktop"></i></span>
                {!! Form::text('type_screen', null, ['class' => 'form-control', 'placeholder' => getTitle('products.type_screen')]) !!}
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            {!! Form::label('size_screen', getTitle('products.size_screen')) !!} 
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-desktop"></i></span>
                {!! Form::text('size_screen', null, ['class' => 'form-control', 'placeholder' => getTitle('products.size_screen')]) !!}
                <span class="input-group-addon">inches</span>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            {!! Form::label('color_screen', getTitle('products.color_screen')) !!} 
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-adjust"></i></span>
                {!! Form::text('color_screen', null, ['class' => 'form-control', 'placeholder' => getTitle('products.color_screen')]) !!}
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            {!! Form::label('resolution_screen', getTitle('products.resolution_screen')) !!} 
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-desktop"></i></span>
                {!! Form::text('resolution_screen', null, ['class' => 'form-control', 'placeholder' => getTitle('products.resolution_screen')]) !!}
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            {!! Form::label('before_camera', getTitle('products.before_camera')) !!} 
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-camera"></i></span>
                {!! Form::text('before_camera', null, ['class' => 'form-control', 'placeholder' => getTitle('products.before_camera')]) !!}
                <span class="input-group-addon">MP</span>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            {!! Form::label('after_camera', getTitle('products.after_camera')) !!} 
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-camera"></i></span>
                {!! Form::text('after_camera', null, ['class' => 'form-control', 'placeholder' => getTitle('products.after_camera')]) !!}
                <span class="input-group-addon">MP</span>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            {!! Form::label('function_camera', getTitle('products.function_camera')) !!} 
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-camera"></i></span>
                {!! Form::text('function_camera', null, ['class' => 'form-control', 'placeholder' => getTitle('products.function_camera')]) !!}
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            {!! Form::label('connect', getTitle('products.connect')) !!} 
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-share-alt"></i></span>
                {!! Form::text('connect', null, ['class' => 'form-control', 'placeholder' => getTitle('products.connect')]) !!}
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            {!! Form::label('battery', getTitle('products.battery')) !!} 
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-battery"></i></span>
                {!! Form::text('battery', null, ['class' => 'form-control', 'placeholder' => getTitle('products.battery')]) !!}
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            {!! Form::label('type_battery', getTitle('products.type_battery')) !!} 
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-battery"></i></span>
                {!! Form::text('type_battery', null, ['class' => 'form-control', 'placeholder' => getTitle('products.type_battery')]) !!}
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            {!! Form::label('chipset', getTitle('products.chipset')) !!} 
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-microchip"></i></span>
                {!! Form::text('chipset', null, ['class' => 'form-control', 'placeholder' => getTitle('products.chipset')]) !!}
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            {!! Form::label('gpu', getTitle('products.gpu')) !!} 
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-microchip"></i></span>
                {!! Form::text('gpu', null, ['class' => 'form-control', 'placeholder' => getTitle('products.gpu')]) !!}
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            {!! Form::label('ram', getTitle('products.ram')) !!} 
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-share-alt-square"></i></span>
                {!! Form::text('ram', null, ['class' => 'form-control', 'placeholder' => getTitle('products.ram')]) !!}
                <span class="input-group-addon">GB</span>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            {!! Form::label('internal_memory', getTitle('products.internal_memory')) !!} 
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-cloud-upload"></i></span>
                {!! Form::text('internal_memory', null, ['class' => 'form-control', 'placeholder' => getTitle('products.internal_memory')]) !!}
                <span class="input-group-addon">GB</span>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            {!! Form::label('cpu', getTitle('products.cpu')) !!} 
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-microchip"></i></span>
                {!! Form::text('cpu', null, ['class' => 'form-control', 'placeholder' => getTitle('products.cpu')]) !!}
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            {!! Form::label('speed_cpu', getTitle('products.speed_cpu')) !!} 
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-rocket"></i></span>
                {!! Form::text('speed_cpu', null, ['class' => 'form-control', 'placeholder' => getTitle('products.speed_cpu')]) !!}
                <span class="input-group-addon">GHz</span>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            {!! Form::label('jack_phone', getTitle('products.jack_phone')) !!} 
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-headphones"></i></span>
                {!! Form::text('jack_phone', null, ['class' => 'form-control', 'placeholder' => getTitle('products.jack_phone')]) !!}
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            {!! Form::label('film', getTitle('products.film')) !!} 
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-video-camera"></i></span>
                {!! Form::text('film', null, ['class' => 'form-control', 'placeholder' => getTitle('products.film')]) !!}
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            {!! Form::label('sensor', getTitle('products.sensor')) !!} 
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-hand-pointer-o"></i></span>
                {!! Form::text('sensor', null, ['class' => 'form-control', 'placeholder' => getTitle('products.sensor')]) !!}
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            {!! Form::label('warranty', getTitle('products.warranty')) !!} 
            <span class="required"></span>
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-handshake-o"></i></span>
                {!! Form::text('warranty', null, ['class' => 'form-control', 'placeholder' => getTitle('products.warranty')]) !!}
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            {!! Form::label('number_sim', getTitle('products.number_sim')) !!} 
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-floppy-o"></i></span>
                {!! Form::text('number_sim', null, ['class' => 'form-control', 'placeholder' => getTitle('products.number_sim')]) !!}
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            {!! Form::label('type_sim', getTitle('products.type_sim')) !!} 
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-floppy-o"></i></span>
                {!! Form::select('type_sim', $params['type_sim'], null, ['class' => 'form-control', 'placeholder' => 'Choose type sim...']) !!}
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="form-group">
            {!! Form::label('description', getTitle('products.description')) !!} 
            {!! Form::textarea('description', null, ['class' => 'form-control', 'placeholder' => getTitle('products.description'), 'rows' => '5']) !!}
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="form-group">
            {!! Form::label('image', 'Ảnh đại diện:') !!}
            @php 
                $image = 'image';
                $sessionImage = 'current_file_name';
                $urlImage = null;

                if (!empty($entity->images[0])) {
                    $urlImage = $entity->images[0]->getUrlImage();
                }

                if (Session::has($sessionImage)) {
                    $urlImage = getTmpUrl() . '/' . Session::get($sessionImage);
                }
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
@include('layouts.backend.btn_form')