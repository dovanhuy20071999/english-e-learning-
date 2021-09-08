@extends('layouts.app')

@section('content')
<section class="multi-choice__main">
  <div class="container">
    <div class="row">
     <h1>{{ trans('RESULT DETAIL OF')}} {{strtoupper($quiz->quiz_name)}}</h1><hr>
     
    	<div class="col-md-12">
        @php $sl=0; @endphp
        @foreach($exams as $key=>$exam)
          @foreach($questions as $ques)
            @if($exam->questions_id==$ques->id)
               <div class="question"> 
                  <span style="font-size:22px;">{{++$sl}}. {{$ques->question}}</span>
               </div>
                <ol class="ul-list" >
                	@foreach($ques->optionsdata as $opt)
                   @if($ques->answer==$exam->ans)
                   <li style="color: green;">&nbsp;<input type="radio" {{$opt->option==$ques->answer ? 'checked' : ''}}  /> {{$opt->option}}   
                   </li>
                 @else
                 @if($opt->option==$ques->answer)
                  <li style="color: green;"><input type="radio" value="{{$opt->option}}" /> {{$opt->option}}   </li>
                  @elseif($opt->option==$exam->ans)
                     <li style="color: red;"><input type="radio" value="{{$opt->option}}" checked="" /> {{$opt->option}}   </li>
                     @else
                        <li><input type="radio" value="{{$opt->option}}"/> {{$opt->option}}</li>
                 @endif
                 @endif
                	@endforeach
                </ol>
                 @if($ques->note!="")
                <div style="color: blue;padding-bottom:20px;" class="answer">
                  <span>Note: {{$ques->note}}</span>
                </div>
                @endif
                @endif
          @endforeach
        @endforeach
    </div>
    <br>
    <div><button class="btn btn-warning"><a href="{{ route('course-list')}}">{{ trans('Back to the course') }}</a></button></div>
    </div>
  </div>
</section>
@endsection