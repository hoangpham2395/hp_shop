@include('layouts.backend.errors')
<div class="nav-tabs-custom">
    <ul class="nav nav-tabs">
        <li class="active">
            <a href="#form" data-toggle="tab" aria-expanded="true">Sản phẩm</a>
        </li>
        <li>
            <a href="#info" data-toggle="tab" aria-expanded="true">Thông tin chi tiết</a>
        </li>
    </ul>

    <div class="tab-content">
        <div id="form" class="tab-pane active">
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
                <div class="model-product-option-list">
                    @if(empty($entity) || empty($entity->productPrice->count()))
                        @include('backend.products._product_option', ['index' => 0, 'item' => []])
                    @else
                        @foreach($entity as $index => $item)
                            @include('backend.products._product_option', ['index' => $index, 'item' => $item])
                        @endforeach
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <button type="button" class="btn btn-success" onclick="ProductController.addNewProductOption(this)">
                        <i class="fa fa-plus"></i> {{getBreadcrumb('products.add_option')}}
                    </button>
                </div>
            </div>

            <div id="model_product_option" class="hidden">
                <div class="new-model-product-option">
                    @include('backend.products._product_option', ['index' => 0, 'item' => []])
                </div>
            </div>
        </div>

        <div id="info" class="tab-pane">
            @include('backend.products._product_info')
        </div>
    </div>
</div>
@include('layouts.backend.btn_form')