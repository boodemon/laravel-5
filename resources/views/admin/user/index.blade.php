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
                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th></th>
									<th>Username</th>
                                    <th>Name</th>
                                    <th>E-mail</th>
                                    <th>Tel</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
								<tr>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
@endsection
