@extends('admin.layouts.template')

@section('content')
<form action="{{url('/admin/user/action')}}" method="post">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
	<div class="row page-header">
		<div class="col-sm-6">
			<h1 class="">User Managements</h1>
		</div>
		<div class="col-sm-6 text-right padding-top-20">
			<a class="btn btn-success" href="{{url('admin/user/form')}}" title="Add new User"><i class="fa fa-plus-square" ></i> New</a>
			<button class="btn btn-danger del" type="submit" name = "delete" title="Delete Multiple Users"><i class="fa fa-trash-o" ></i> Delete</button>
		</div>
		<!-- /.col-lg-12 -->
	</div>
	<!-- /.row -->
			<div class="panel panel-default">
                <div class="panel-body">
                    <div class="dataTable_wrapper">
                        <table class="table table-striped table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th><input type="checkbox" id="checkAll"/></th>
									<th>Username</th>
                                    <th>Name</th>
                                    <th>E-mail</th>
                                    <th>Tel</th>
                                    <th>Active</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
							@if($user)
								@foreach($user as $u)
								<tr>
									<td>{{$u->id}}</td>
									<td class="text-center"><input name="id[]" type="checkbox" id="id" value="{{$u->id}}" class="checkboxAll" /></td>
									<td>{{$u->username}}</td>
									<td>{{$u->name}}</td>
									<td>{{$u->email}}</td>
									<td>{{$u->tel}}</td>
									<td class="text-center"><i class="fa {{$u->active == 'Y' ? 'fa-check-circle color-green ':'fa-times-circle color-red'}}"></i></td>
									<td class="text-right">
										<a href="{{url('admin/user/form/'.$u->id)}}" title="" class="edit"><i class="fa fa-edit"></i></a>
										<a href="{{url('admin/user/delete/'.$u->id)}}" title="" class="del"><i class="glyphicon glyphicon-remove"></i></a>
									</td>
								</tr>
								@endforeach
							@endif
							</tbody>
						</table>
					</div>
				</div>
			</div>
</form>
@stop
