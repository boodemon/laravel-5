@extends('admin.layouts.template-login')
@section('content')<div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Administrator Sign In </h3>
                    </div>
 						@if(Session::has('message'))
						<div class="panel-body bg-danger color-red">
						{{Session::get('message')}}
						</div>
 						@endif
                  <div class="panel-body">
						<form role="form" method="POST" action="{{ url('/admin/login/process') }}">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Username" name="username" type="text" autofocus value="{{old('username')}}"/>
									{!!$errors->first('username', '<span
							class="control-label color-red" for="username">*:message</span>')!!}
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" type="password" value="">
									{!!$errors->first('password', '<span
							class="control-label error" for="password">*:message</span>')!!}
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input name="remember" type="checkbox" value="Remember Me">Remember Me
                                    </label>
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                <button class="btn btn-lg btn-danger btn-block">Login</button>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
@stop
