@extends('admin.layouts.template')
@section('content')
<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">Blank Page</h1>
		<p>Admin name {{Auth::user()->name}}</p>
	</div>
	<!-- /.col-lg-12 -->
</div>
@stop