@extends('layouts.backend.structure.main')
@section('content')
    <section class="content-header">
        <h1>
            Brands
            <small>Add new brand</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{route('brands.index')}}"><i class="fa fa-apple"></i> Brands</a></li>
            <li class="active">Add new brand</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="box box-info">
                    <div class="box-header">
                        <h3 class="box-title">Add new brand</h3>
                    </div>
                    <div class="box-body">
                        <div class="row">
                            <div class="col-sm-12">
                                {!! Form::open(['route' => 'brands.store', 'method' => 'POST', 'files' => true]) !!}
                                    @include('backend.brands._form')
                                {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection