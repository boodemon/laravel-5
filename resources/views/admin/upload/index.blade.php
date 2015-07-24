@extends('admin.layouts.template')
@section('stylesheet')
	<link href="{{asset('/assets/css/admin-upload.css')}}" rel="stylesheet" type="text/css"/>

@stop
@section('content')
<form action="{{url('/admin/upload/action')}}" method="post" enctype="multipart/form-data">
<input type="hidden" id="_token" name="_token" value="{{ csrf_token() }}">
	<div class="row page-header multiupload" id="gallery">
		<div class="col-sm-12">
			<h1 class="">Multi Ajax Uploader</h1>
		</div>
		<div class="col-sm-6 text-right padding-top-20">
			<ul class="preview"></ul>
		</div>
		<div class="col-sm-6 text-right padding-top-20" id="container">
			<button class="btn btn-success" type="button" id="btn-select" name="btn-select" title="Upload image"><i class="fa fa-picture-o" ></i> Select Image</button>
			<button class="btn btn-primary" type="button" id="btn-upload"  name="btn-upload" title="Upload file"><i class="fa fa-upload" ></i> Upload</button>
		</div>
		<!-- /.col-lg-12 -->
	</div>
	
	<div class="panel panel-default">
		<div class="panel-body">
			<div class="dataTable_wrapper">
				<div class="row image-view">
				
				</div>
				
			</div>
		</div>
	</div>
</form>

@stop
@section('scripts')
	<script type="text/javascript" src="{{asset('/assets/lib/plupload/js/plupload.full.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('/assets/js/admin-uploader.js') }}"></script>
@stop