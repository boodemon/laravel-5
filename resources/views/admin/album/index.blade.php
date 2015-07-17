@extends('admin.layouts.template')

@section('content')
<form action="{{url('/admin/user/action')}}" method="post">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
</form>
@stop