@extends('layouts.backend.structure.main')
@section('content')
    @include('layouts.backend.breadcrumb', ['model' => 'products', 'action' => 'show', 'icon' => 'fa-apple'])

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="box box-info">
                    <div class="box-header">
                        <h3 class="box-title">{{getBreadcrumb('products.show')}}</h3>
                    </div>
                    <div class="box-body">
                        <div class="row">
                            <div class="col-sm-12 padding-bottom">
                                <a href="{{route('products.edit', $entity->id)}}" class="btn btn-success margin-right"><i class="fa fa-pencil"></i> {{getBreadcrumb('products.edit')}}</a>
                                <a href="{{route('products.index')}}" class="btn btn-default"><i class="fa fa-reply"></i> Back</a>
                            </div>
                            <div class="col-sm-12">
                                <div class="table-responsive">
                                    <table class="table table-dark table-bordered table-hover">
                                        <thead class="dark">
                                            <th width="150">Field</th>
                                            <th>Value</th>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th>{{getTitle('products.product_name')}}</th>
                                                <td>{{ $entity->product_name }}</td>
                                            </tr>
                                            <tr>
                                                <th>{{getTitle('products.brand_id')}}</th>
                                                <td>{{ (!empty($entity->brand)) ? $entity->brand->brand_name : '' }}</td>
                                            </tr>
                                            <tr>
                                                <th>{{getTitle('products.category_id')}}</th>
                                                <td>{{ (!empty($entity->category)) ? $entity->category->category_name : '' }}</td>
                                            </tr>
                                            <tr>
                                                <th>{{getTitle('products.price')}}</th>
                                                <td>{{ $entity->price }}</td>
                                            </tr>
                                            <tr>
                                                <th>{{getTitle('products.sale')}}</th>
                                                <td>{!! $entity->sale !!}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection