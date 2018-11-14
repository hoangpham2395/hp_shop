<section class="content-header">
	<h1>
		{{getBreadcrumb($model . '.name')}}
		<small>{{getBreadcrumb($model . '.' . $action)}}</small>
	</h1>
	<ol class="breadcrumb">
		<li><a href="#"><i class="fa {{$icon}}"></i> {{getBreadcrumb($model . '.name')}}</a></li>
		<li class="active">{{getBreadcrumb($model . '.' . $action)}}</li>
	</ol>
</section>