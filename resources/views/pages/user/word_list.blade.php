@extends('layouts.app')
@section('content')
<div>
	<div style="text-align: center;"><h1 style="font-size: 45px;">VOCABULARY LIST</h1></div>
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
				    <a class="dropdown-item" href="{{ route('myWord',Auth::user()->id)}}">Learned word list</a>
				    <a class="dropdown-item" href="#">Unlearned word list</a>
				    <a class="dropdown-item" href="{{ route('showTopicToFilter')}}">Word list by category</a>
				  </div>
			</div>
		</div>
	</div>
		<div class="row">
			@foreach ($words as $word)
			<div class="col-md-12">
				<br><br>
				
				<div class="card" style="width: 50rem; margin:auto;">
			  			<div class="card-body">
			    		<h2 class="card-title" >Vocabulary: {{ $word->word }}</h2>
			    		<h3 class="card-text">Mean of word: {{ $word-> mean}}</h3>
			    		<br>
			    		<form action="{{ route('word.learned', $word->id)}}" method="post">
    					@csrf
    					<button type="submit" class="btn btn-primary">Learn Done</button>
    					</form>
			  			</div>
				</div>
			</div>
			@endforeach
		</div>
@endsection