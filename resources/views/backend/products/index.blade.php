@extends('layouts.backend.structure.main')

@section('content')
    @include('layouts.backend.breadcrumb', ['model' => 'products', 'action' => 'index', 'icon' => 'fa-apple'])

    @include('layouts.backend.notify')

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="box box-danger">
                    <div class="box-header">
                        <h3 class="box-title">Search</h3>
                    </div>
                    <div class="box-body">
                        {!! Form::open(['route' => 'products.index', 'method' => 'GET']) !!}
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        {!! Form::label('product_name', getTitle('products.product_name')) !!}
                                    </div>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-apple"></i></span>
                                        {!! Form::text('product_name', Request::input('product_name'), ['class' => 'form-control']) !!}
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        {!! Form::label('price', getTitle('products.price')) !!}
                                    </div>
                                    <div class="inline">
                                        {!! Form::text('price_min', Request::input('price_min'), ['class' => 'form-control']) !!}
                                        <span class="connect-input">~</span>
                                        {!! Form::text('price_max', Request::input('price_max'), ['class' => 'form-control']) !!}
                                    </div>
                                </div>
                            </div>
                            <div class="margin-top"></div>
                            @include('layouts.backend.btn_search')
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="box box-danger">
                    <div class="box-header">
                        <h3 class="box-title">{{getBreadcrumb('products.name')}}</h3>
                    </div>
                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-12 text-right padding-bottom">
                                <a href="{{route('products.create')}}" class="btn btn-success"><i class="fa fa-plus"></i> {{getBreadcrumb('products.add')}}</a>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped">
                                <thead>
                                <th width="50">{{getTitle('products.id')}}</th>
                                <th>{{getTitle('products.product_name')}}</th>
                                <th>{{getTitle('products.brand_id')}}</th>
                                <th>{{getTitle('products.category_id')}}</th>
                                <th>{{getTitle('products.price')}}</th>
                                <th width="50" class="text-center">Edit</th>
                                <th width="50" class="text-center">Delete</th>
                                </thead>
                                <tbody>
                                @foreach ($entities as $entity)
                                    <tr>
                                        <td>{{ $entity->id }}</td>
                                        <td><a href="{{route('products.show', $entity->id)}}">{{$entity->product_name}}</a></td>
                                        <td>{{ (!empty($entity->brand)) ? $entity->brand->brand_name : '' }}</td>
                                        <td>{{ (!empty($entity->category)) ? $entity->category->category_name : '' }}</td>
                                        <td>{{ $entity->getPrice() }}</td>
                                        <td class="text-center">
                                            <a href="{{route('products.edit', $entity->id)}}" class="btn btn-sm btn-primary">
                                                <i class="fa fa-pencil"></i>
                                            </a>
                                        </td>
                                        <td class="text-center">
                                            <button type="button" class="btn btn-sm btn-danger" data-toggle="modal"
                                                    data-target="#modal_del_{{$entity->id}}">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                        </td>
                                        {!! Form::open(['route' => ['products.destroy', $entity->id], 'method' => 'DELETE']) !!}
                                            <!-- Modal -->
                                            <div class="modal fade" id="modal_del_{{$entity->id}}" tabindex="-1" role="dialog"
                                                 aria-labelledby="myModalLabel">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                            <h4 class="modal-title" id="myModalLabel">Delete</h4>
                                                        </div>
                                                        <div class="modal-body">
                                                            Are you sure?
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                                            <button type="submit" class="btn btn-danger">Delete</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        {!! Form::close() !!}
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="row">
                            <div class="col-sm-5">Showing 1 to 10 of 10 entities</div>
                            <div class="col-sm-7">{{ $entities->links() }}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection