@extends('layouts.backend.structure.main')

@section('content')
    <section class="content-header">
        <h1>
            Categories
            <small>List of Categories</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-apple"></i> Categories</a></li>
            <li class="active">List of Categories</li>
        </ol>
    </section>

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
    					{!! Form::open(['route' => 'categories.index', 'method' => 'GET']) !!}
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										{!! Form::label('category_name', 'Category name:') !!}
										<div class="input-group">
											<span class="input-group-addon">
												<i class="fa fa-apple"></i>
											</span>
											{!! Form::text('category_name', Request::input('category_name'), ['class' => 'form-control']) !!}
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12 text-center">
									<a href="{{route('categories.index')}}" class="btn btn-default">
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
                        <h3 class="box-title">List of Categories</h3>
                    </div>
                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-12 text-right padding-bottom">
                            	<a class="btn btn-success" href="{{route('categories.create')}}">
                                    <i class="fa fa-plus"></i> Add new category
                                </a>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped">
                                <thead>
                                <th width="50" class="text-center">ID</th>
                                <th>Category name</th>
                                <th>Category image</th>
                                <th>Parent category</th>
                                <th width="80" class="text-center">Edit</th>
                                <th width="80" class="text-center">Delete</th>
                                </thead>
                                <tbody>
                                @foreach ($entities as $entity)
                                    <tr>
                                        <td class="text-center">{{ $entity->id }}</td>
                                        <td>{{ $entity->category_name }}</td>
                                        <td>{!! $entity->getImage() !!}</td>
                                        <td>{{ $entity->getParentName() }}</td>
                                        <td class="text-center">
                                            <a class="btn btn-sm btn-primary" href="{{route('categories.edit', $entity->id)}}"><i class="fa fa-pencil"></i></button>
                                        </td>
                                        <td class="text-center">
                                            <button type="button" class="btn btn-sm btn-danger" data-toggle="modal"
                                                    data-target="#modal_del_{{$entity->id}}">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                        </td>

                                    	{!! Form::open(['route' => ['categories.destroy', $entity->id], 'method' => 'DELETE']) !!}
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
                            <div class="col-sm-5 table-info">Showing 1 to 10 of 10 entities</div>
                            <div class="col-sm-7 table-paginate">{{ $entities->appends(Request::except('page'))->render() }}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection