@extends('admin.layouts.template')
@section('stylesheet')
	<link href="{{asset('/assets/css/admin-upload.css')}}" rel="stylesheet" type="text/css"/>
	<link href="{{asset('/assets/lib/plupload/js/jquery.ui.plupload/css/jquery.ui.plupload.css')}}" rel="stylesheet" type="text/css"/>

@stop
@section('content')
<form action="{{url('/admin/upload/action')}}" method="post" enctype="multipart/form-data">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
	<div class="row page-header">
		<div class="col-sm-12">
			<h1 class="">Basic Uploader</h1>
		</div>
		<div class="col-sm-6 text-right padding-top-20 multiupload">
			<ul id="preview" class="preview">
			</ul>
		</div>
		<div class="col-sm-6 text-right padding-top-20">
			<button class="btn btn-success" type="button" id="btn-select" name="btn-select" title="Upload image"><i class="fa fa-picture-o" ></i> Select Image</button>
			<button class="btn btn-danger del" type="submit" name = "btn-delete" title="Delete Multiple image"><i class="fa fa-trash-o" ></i> Delete</button>
		</div>
		<!-- /.col-lg-12 -->
	</div>
	<div class="panel panel-default">
		<div class="panel-body">
			<div class="dataTable_wrapper">
				<div class="row">
				@if($images)
					@foreach($images as $img)
					<div class="col-xs-2 gallery">
						<img src="{{asset('images/uploads/'.$img->image_name)}}" />
					</div>
					@endforeach
				@endif
				</div>
				
			</div>
		</div>
	</div>
</form>
@stop
@section('scripts')
	<script type="text/javascript" src="{{asset('/assets/lib/plupload/js/plupload.full.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('/assets/lib/plupload/js/jquery.plupload.queue/jquery.plupload.queue.min.js') }}"></script>
	<script type="text/javascript" src="{{asset('/assets/lib/plupload/js/jquery.ui.plupload/jquery.ui.plupload.js') }}"></script>
	<script type="text/javascript" src="{{asset('/assets/js/admin-uploader.js') }}"></script>
@stop