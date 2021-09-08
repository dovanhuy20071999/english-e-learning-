@extends('layouts.app')
@section('css')
<style type="text/css">
/*.ul-list li:nth-child(2n+1){
background-color: #b30000;
color: #ffffff;
}
.ul-list li:nth-child(2n+1){
background-color: #ff4d4d;
color: #fff;
}*/
.ul-list li:hover{
background-color: #ffffff;
color: red;
}
.ul-list li{
padding: 10px;
}
.ul-list li a{
font-size:16px;
}
</style>
@endsection
@section('content')
<section class=" ">
<div class="container">
<div class="row">

<section class="company-info-box">
        <div class="company-info">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 aligncenter">

                    <div class="col-md-6 border-dark">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="company-detail bg-light margin-right">
                                    <h3 class="section-title">Exam Result</h3>
                                    <span class="underline left"></span>
                                    <div style="margin:auto;"><table class="table table-bordered table-hover" >
                                    	<thead>
                                    		<tr>
                                    			<th>Sl</th>
                                    			<th>Exam Title</th>
                                    			<th>Date</th>
                                    			<th>Result</th>
                                    			<!-- <th>Details</th> -->
                                    			 
                                    		</tr>
                                    	</thead>
                                    	<tbody>
                                    		@foreach($results as $key=>$res)
                                    		<tr><td>{{++$key}}</td>
                                    			<td style="width: 800px;"> {{$res->quizes->quiz_name}} </td>
                                    			<td style="width: 800px;">{{$res->date}} </td>
                                    			<td>{{$res->yes_ans}}/{{$res->yes_ans+$res->no_ans}} </td>
                                    			 <td><button class="btn btn-outline-info"><a href="{{ route('exam.resultDetail',$res->quizes_id)}}">Details</a></button></td>
                                    			 
                                    		</tr>
                                    		@endforeach
                                    	</tbody>
                                    </table> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


</div>
</div>
</section>
@endsection