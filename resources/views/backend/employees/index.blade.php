@extends('layouts.backend.structure.main')
@section('content')
    <section class="content-header">
        <h1>
            Employees
            <small>List of Employees</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-users"></i> Employees</a></li>
            <li class="active">List of Employees</li>
        </ol>
    </section>

    @include('layouts.backend.notify')

    <section class="content">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="box box-danger">
                    <div class="box-header">
                        <h3 class="box-title">List of Employees</h3>
                    </div>
                    <div class="box-body">
                        <div class="row">
                            <div class="col-sm-12 margin-bottom">
                                <a href="{{route('employees.create')}}" class="btn btn-success pull-right">
                                    <i class="fa fa-plus"></i> Add new employee
                                </a>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped">
                                <thead>
                                <th width="50">ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Address</th>
                                <th width="50" class="text-center">Edit</th>
                                <th width="50" class="text-center">Delete</th>
                                </thead>
                                <tbody>
                                @foreach ($entities as $entity)
                                    <tr>
                                        <td>{{ $entity->id }}</td>
                                        <td><a href="{{route('employees.show', $entity->id)}}">{{ $entity->name }}</a></td>
                                        <td>{{ $entity->email }}</td>
                                        <td>{{ $entity->tel }}</td>
                                        <td>{{ $entity->address }}</td>
                                        <td class="text-center">
                                            <a href="{{route('employees.edit', $entity->id)}}" class="btn btn-sm btn-primary">
                                                <i class="fa fa-pencil"></i>
                                            </a>
                                        </td>
                                        <td class="text-center">
                                            <button type="button" class="btn btn-sm btn-danger" data-toggle="modal"
                                                    data-target="#modal_del_{{$entity->id}}">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                            {!! Form::open(['route' => ['employees.destroy', $entity->id], 'method' => 'DELETE']) !!}
                                                @include('layouts.backend.modal_confirm', ['id' => $entity->id])
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="row">
                            <div class="col-sm-5">Showing 1 to 10 of 10 entities</div>
                            <div class="col-sm-7">{{ $entities->appends(Request::except('page'))->render() }}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection