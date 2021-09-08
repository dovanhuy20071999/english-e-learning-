@extends('layouts.app')
@section('content')
<section class=" " oncopy="return false;" oncut="return false;" onpaste="return false;" oncontextmenu="return false;">
<div class="container">
<div class="row">

@if($questions->count()>0)
<p>
    Exam Time:    &nbsp; <span class="js-timeout" >{{$quiz->quiz_time}}</span>
</p>

<div class="icon-bar" >
    <button class="btn btn-lg">Exam Time CountDown : <span class="js-timeout"></span>  </button>
</div>
    
    <form action="{{ route('exams') }}" method="POST" name="exam">
        {{csrf_field()}}
    <div class="col-md-12">

@foreach($questions as $key=>$ques)
<input type="hidden" name="questions_id{{$key+1}}" value="{{$ques->id}}">

  <input type="hidden" name="ans{{$key+1}}" value="0">
 <h5 > {{$key+1}}. {{$ques->question}}</h5>
  <ol   class="ul-list"  style="list-style-type: lower-alpha;" >
      @foreach($ques->optionsdata as $opt)

      <li><input type="radio" name="ans{{$key+1}}" value="{{$opt->option}}" /> {{$opt->option}}   </li>
   
      @endforeach
     
  </ol>
  @endforeach
  <input type="hidden" name="index" value="<?php echo $key+1 ?>">
  <input type="hidden" name="quizes_id" value="{{$quiz->id}}">
</div>
<input type="submit" class="btn btn-sm" value="submit"  >
</form>

@else

<h2 style="color: red;"> Opps! No Data Found</h2>
@endif
</div>
</div>
</section>

<script src="https://code.jquery.com/jquery-3.5.1.min.js" ></script>
<script type="text/javascript">
    var interval;
    var form=document.forms.exam;
    function countdown() {
      clearInterval(interval);

      interval = setInterval( function() {
          var timer = $('.js-timeout').html();
          timer = timer.split(':');
          var minutes = timer[0];
          var seconds = timer[1];
          seconds -= 1;
          if (minutes < 0) return;
          else if (seconds < 0 && minutes != 0) {
              minutes -= 1;
              seconds = 59;
          }
          else if (seconds < 10 && length.seconds != 2) seconds = '0' + seconds;

          $('.js-timeout').html(minutes + ':' + seconds);

          if (minutes == 0 && seconds == 0) { clearInterval(interval);  form.submit(); alert("Time Over Please Click Ok Button");}
      }, 1000);
    }
    
    $('.js-timeout').text("{{ $quiz->quiz_time }}");
    countdown();
</script>
@endsection