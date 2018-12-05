@extends('layouts.backend.structure.main')

@section('content')
    @include('layouts.backend.breadcrumb', ['model' => 'products', 'action' => 'group', 'icon' => 'fa-bullseye'])

    @include('layouts.backend.notify')

    <!-- Search -->
    <section class="content content-custom">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="box box-info">
                    <div class="box-header">
                        <h3 class="box-title">Search</h3>
                    </div>
                    <div class="box-body">
                        {!! Form::open(['route' => 'product_attr.index', 'method' => 'GET']) !!}
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    {!! Form::label('attr_name', getTitle('product_attr.attr_name')) !!}
                                    <div class="input-group">
											<span class="input-group-addon">
												<i class="fa fa-bullseye"></i>
											</span>
                                        {!! Form::text('attr_name', Request::input('attr_name'), ['class' => 'form-control']) !!}
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    {!! Form::label('group_id', getTitle('product_attr.group_id')) !!}
                                    <div class="input-group">
											<span class="input-group-addon">
												<i class="fa fa-cogs"></i>
											</span>
                                        {!! Form::select('group_id', $params['groups'], Request::input('group_id'), ['class' => 'form-control']) !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <a href="{{route('product_attr.index')}}" class="btn btn-default">
                                    <i class="fa fa-refresh"></i> Reset
                                </a>
                                {!! Form::button('<i class="fa fa-search"></i> Search', ['type' => 'submit', 'class' => 'btn btn-primary']) !!}
                            </div>
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="box box-info">
                    <div class="box-header">
                        <h3 class="box-title">{{getBreadcrumb('product_attr.index')}}</h3>
                    </div>
                    <div class="box-body">
                        <div class="row padding-bottom">
                            <div class="col-sm-6">

                            </div>
                            <div class="col-sm-6">
                                <button type="button" class="btn btn-success pull-right"data-toggle="modal" data-target="#modal_create">
                                    <i class="fa fa-plus"></i> {{getBreadcrumb('product_attr.add')}}
                                </button>
                                {!! Form::open(['route' => 'product_attr.store', 'method' => 'POST']) !!}
                                <!-- Modal -->
                                @include('backend.product_attr._modal_form', ['id' => 'modal_create', 'action' => 'add', 'params' => $params])
                                {!! Form::close() !!}
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped">
                                <thead>
                                <th width="50" class="text-center">{{getTitle('product_attr.id')}}</th>
                                <th>{{getTitle('product_attr.attr_name')}}</th>
                                <th>{{getTitle('product_attr.group_id')}}</th>
                                <th>{{getTitle('product_attr.type')}}</th>
                                <th>{{getTitle('product_attr.length')}}</th>
                                <th>{{getTitle('product_attr.is_null')}}</th>
                                <th width="80" class="text-center">Edit</th>
                                <th width="80" class="text-center">Delete</th>
                                </thead>
                                <tbody>
                                @foreach ($entities as $entity)
                                    <tr>
                                        <td class="text-center">{{ $entity->id }}</td>
                                        <td>{{ $entity->attr_name }}</td>
                                        <td>{{ (!empty($entity->group)) ? $entity->group->group : '' }}</td>
                                        <td>{{ array_get($params, 'type.'.$entity->type) }}</td>
                                        <td>{{ $entity->length }}</td>
                                        <td>{{ $entity->getTextIsNull() }}</td>
                                        <td class="text-center">
                                            <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#modal_upd_{{$entity->id}}"><i class="fa fa-pencil"></i></button>
                                        </td>

                                        {!! Form::model($entity, ['route' => ['product_attr.update', $entity->id], 'method' => 'PATCH']) !!}
                                        <!-- Modal -->
                                            @include('backend.product_attr._modal_form', ['id' => 'modal_upd_'.$entity->id, 'action' => 'edit', 'params' => $params])
                                        {!! Form::close() !!}

                                        <td class="text-center">
                                            <button type="button" class="btn btn-sm btn-danger" data-toggle="modal"
                                                    data-target="#modal_del_{{$entity->id}}">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                        </td>

                                        {!! Form::open(['route' => ['product_attr.destroy', $entity->id], 'method' => 'DELETE']) !!}
                                            <!-- Modal -->
                                            @include('layouts.backend.modal_confirm_delete', ['id' => 'modal_del_'.$entity->id, 'alias' => 'product_attr'])
                                        {!! Form::close() !!}
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="row">
                            <div class="col-sm-5 table-info">Showing 1 to 10 of 10 entities</div>
                            <div class="col-sm-7 table-paginate">{{ $entities->appends(Request::except('page'))->render() }}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection