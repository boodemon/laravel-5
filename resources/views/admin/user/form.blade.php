@extends('admin.layouts.template')

@section('content')
	<div class="row page-header">
		<div class="col-sm-6">
			<h1 class="">{{$id != null ? 'Update' : 'Add New'}} User</h1>
		</div>
		<div class="col-sm-6 text-right padding-top-20">
			<a class="btn btn-default" href="{{url('admin/user/index')}}" title="Back"><i class="fa fa-arrow-left" ></i> Back</a>
		</div>
		<!-- /.col-lg-12 -->
	</div>
	<!-- /.row -->
	<div class="panel panel-default">
		<div class="panel-body">
			<form class="form-horizontal" role="form" method="POST" action="{{ url('/admin/user/form') }}">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">

				<div class="form-group">
					<label class="col-md-4 control-label">Name</label>
					<div class="col-md-6">
						<input type="text" class="form-control" name="name" value="{{ old('name') }}">
					</div>
				</div>

				<div class="form-group">
					<label class="col-md-4 control-label">E-Mail Address</label>
					<div class="col-md-6">
						<input type="email" class="form-control" name="email" value="{{ old('email') }}">
					</div>
				</div>

				<div class="form-group">
					<label class="col-md-4 control-label">Password</label>
					<div class="col-md-6">
						<input type="password" class="form-control" name="password">
					</div>
				</div>

				<div class="form-group">
					<label class="col-md-4 control-label">Confirm Password</label>
					<div class="col-md-6">
						<input type="password" class="form-control" name="password_confirmation">
					</div>
				</div>

				<div class="form-group">
					<div class="col-md-6 col-md-offset-4">
						<button type="submit" class="btn btn-primary">
							Register
						</button>
					</div>
				</div>
			</form>
		</div>
	</div>
	


@endsection
