@extends('layouts.app')
@section('content')
<div>
	<div style="text-align: center;"><h1 style="font-size: 45px;">TOPIC LIST</h1></div>
	<div class="row">
		<div class="col-md-6">
			<h2 style="margin-left: 700px; font-size: 28px;">Select filter:</h2>
		</div>
		<div class="col-md-6">
			<div class="dropdown">
				  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				    Select filter for word list
				  </button>
				  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
				    <a class="dropdown-item" href="{{ route('sortWordAlphabet')}}">Alphabetical word list </a>
				    <a class="dropdown-item" href="#">Learned word list</a>
				    <a class="dropdown-item" href="#">Unlearned word list</a>
				    <a class="dropdown-item" href="{{ route('showTopicToFilter')}}">Word list by category</a>
				  </div>
			</div>
		</div>
	</div>
		<div class="row">
			@foreach ($topics as $topic)
			<div class="col-md-12">
				<br><br>
				
				<div class="card" style="width: 50rem; margin:auto;">
			  			<div class="card-body">
			    		<h2 class="card-title" >Topic: {{ $topic->name }}</h2>
			    		<br>
			    		<a href="{{ route('showWordByTopic',$topic->id) }}" class="btn btn-primary">Show word list</a>
			  			</div>
				</div>
			</div>
			@endforeach
		</div>
@endsection