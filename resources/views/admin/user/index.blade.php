@extends('admin.layouts.template')

@section('content')
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">User Managements</h1>
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
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
							@if($user)
								@foreach($user as $u)
								<tr>
									<td>{{$u->id}}</td>
									<td><input name="id[]" type="checkbox" id="id" value="{{$u->id}}" class="checkboxAll" /></td>
									<td>{{$u->username}}</td>
									<td>{{$u->name}}</td>
									<td>{{$u->email}}</td>
									<td>{{$u->tel}}</td>
									<td class="text-right">
										<a href="{{url('#')}}" title="" class="edit"><i class="fa fa-edit"></i></a>
										<a href="{{url('#')}}" title="" class="del"><i class="glyphicon glyphicon-remove"></i></a>
									</td>
								</tr>
								@endforeach
							@endif
							</tbody>
						</table>
					</div>
				</div>
			</div>
@stop
