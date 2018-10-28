@extends('layouts.backend.structure.main')
@section('content')
    <section class="content-header">
        <h1>
            Employees
            <small>Detail employee</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-users"></i> Employees</a></li>
            <li class="active">Detail employee</li>
        </ol>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box box-danger">
                    <div class="box-header">
                        <h3 class="box-title">Detail employee</h3>
                    </div>
                    <div class="box-body">
                        <div class="row">
                            <div class="col-sm-12 padding-bottom">
                                <a href="{{route('employees.edit', $entity->id)}}" class="btn btn-success margin-right"><i class="fa fa-pencil"></i> Edit employee</a>
                                <a href="{{route('employees.index')}}" class="btn btn-default"><i class="fa fa-reply"></i> Back</a>
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
                                                <th>Name</th>
                                                <td>{{ $entity->name }}</td>
                                            </tr>
                                            <tr>
                                                <th>Email</th>
                                                <td>{{ $entity->email }}</td>
                                            </tr>
                                            <tr>
                                                <th>Phone</th>
                                                <td>{{ $entity->tel }}</td>
                                            </tr>
                                            <tr>
                                                <th>Birthday</th>
                                                <td>{{ $entity->birthday }}</td>
                                            </tr>
                                            <tr>
                                                <th>Avatar</th>
                                                <td>{!! $entity->getAvatar() !!}</td>
                                            </tr>
                                            <tr>
                                                <th>Address</th>
                                                <td>{{ $entity->address }}</td>
                                            </tr>
                                            <tr>
                                                <th>ID number</th>
                                                <td>{{ $entity->id_number }}</td>
                                            </tr>
                                            <tr>
                                                <th>Bank account</th>
                                                <td>{{ $entity->bank_account }}</td>
                                            </tr>
                                            <tr>
                                                <th>Description</th>
                                                <td>{{ $entity->description }}</td>
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