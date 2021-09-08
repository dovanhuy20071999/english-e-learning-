@extends('layouts.app')
@section('content')
<div>
	<h1 style="text-align: center;">My Profile</h1>
	<div class="container">
		@foreach( $datas as $data)
		<div class="col-md-6" style="margin:auto;">
			<span style="font-size: 35px;">Name: {{ $data->name }}</span>
			<br>
			<span style="font-size: 35px;">Email: {{ $data->email }}</span>
			<br>
			<span style="font-size: 35px;">Avata: <img src=""></span>
		</div>
		@endforeach
	</div>
</div>
@endsection