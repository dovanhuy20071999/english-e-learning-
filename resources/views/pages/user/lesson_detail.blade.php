@extends('layouts.app')
@section('content')
<div>
	<div style="text-align: center;"><h1 style="font-size: 45px;">VOCABULARY LIST OF THE LESSON</h1></div>
	<br><br>
	@csrf
	@foreach ($words as $word)
	<div class="card" style="width: 50rem; margin: auto;">
			<input type="hidden" name="id" value="{{$word->id}}">
  			<div class="card-body">
    		<h2 class="card-title">Vocabulary: {{ $word->word }}</h2>
    		<h3 class="card-text">Mean of word: {{ $word-> mean}}</h3>
    		<br>
    		<form action="{{ route('word.learned', $word->id)}}" method="post">
    		@csrf
    		<button type="submit" class="btn btn-primary">Learn Done</button>
    		</form>
  			</div>
	</div>
	<br>
	@endforeach
	<button style="height: 50px; width:150px; margin-left: 1170px;" class="btn btn-warning"><a href="{{ route('exam.start',$words[0]->lesson_id)}}">Problem solving</a></button>
	<hr>
</div>
@endsection