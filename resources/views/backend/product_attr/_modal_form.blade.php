<div class="modal fade" id="{{$id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">{{getBreadcrumb('product_attr.'.$action)}}</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            {!! Form::label('attr_name', getTitle('product_attr.attr_name')) !!}
                            <span class="required"></span>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="fa fa-bullseye"></i>
                                </span>
                                {!! Form::text('attr_name', null, ['class' => 'form-control', 'required']) !!}
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            {!! Form::label('group_id', getTitle('product_attr.group_id')) !!}
                            <span class="required"></span>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="fa fa-cogs"></i>
                                </span>
                                {!! Form::select('group_id', $params['groups'], null, ['class' => 'form-control', 'required', 'placeholder' => getConfig('select_option')]) !!}
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            {!! Form::label('type', getTitle('product_attr.type')) !!}
                            <span class="required"></span>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="fa fa-database"></i>
                                </span>
                                {!! Form::select('type', $params['type'], null, ['class' => 'form-control', 'required', 'placeholder' => getConfig('select_option')]) !!}
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            {!! Form::label('length', getTitle('product_attr.length')) !!}
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="fa fa-superpowers"></i>
                                </span>
                                {!! Form::text('length', null, ['class' => 'form-control']) !!}
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            {!! Form::label('is_null', getTitle('product_attr.is_null')) !!}
                            <span class="required"></span>
                            <div class="input-group">
                                {!! Form::radio('is_null', 0) !!} &nbsp; {{getTitle('product_attr.is_not_null')}} &nbsp;&nbsp;
                                {!! Form::radio('is_null', 1) !!} &nbsp; {{getTitle('product_attr.is_null')}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-success">Confirm</button>
            </div>
        </div>
    </div>
</div>