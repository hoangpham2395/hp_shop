@extends('layouts.backend.structure.main')
@section('content')
    @include('layouts.backend.breadcrumb', ['model' => 'products', 'action' => 'edit', 'icon' => 'fa-apple'])

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="box box-danger">
                    <div class="box-header">
                        <h3 class="box-title">{{getBreadcrumb('products.edit')}}</h3>
                    </div>
                    <div class="box-body">
                        <div class="row">
                            <div class="col-sm-12">
                                {!! Form::model($entity, ['route' => ['products.update', $entity->id], 'method' => 'PATCH', 'files' => true]) !!}
                                    @include('backend.products._form')
                                {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection