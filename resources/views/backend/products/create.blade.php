@extends('layouts.backend.structure.main')
@section('content')
    @include('layouts.backend.breadcrumb', ['model' => 'products', 'action' => 'add', 'icon' => 'fa-apple'])

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="box box-danger">
                    <div class="box-header">
                        <h3 class="box-title">{{getBreadcrumb('products.add')}}</h3>
                    </div>
                    <div class="box-body">
                        <div class="row">
                            <div class="col-sm-12">
                                {!! Form::open(['route' => 'products.store', 'method' => 'POST', 'files' => true]) !!}
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