@extends('layouts.app')
@section('css')
<style type="text/css">

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
   
                <!-- Go to www.addthis.com/dashboard to customize your tools -->
                <div class="addthis_inline_share_toolbox_v09t"></div><br>
            
<div class="row">
    <div class="col-md-12">
        <h2>List of Exam</h2><br>
        <div class="table-responsive">
        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>Sl</th>
                    <th> Exam Title </th>
                    <th> Exam Time </th>
                    <th> Total Question </th>
                    <th>Action </th>
                </tr>
            </thead>
            <tbody>
 
                    @foreach($quizes as $key=>$quz)
                 
                   
                <tr>
                    <td> {{++$key}} </td>
                    <td> {{$quz->quiz_name}}</td>
                    <td> {{$quz->quiz_time}}</td>
                    <td> {{$quz->number_of_question}}</td>
                    <td><button class="btn btn-success"><a href="{{ route('exam.start',$quz->id) }}">Start Exam</a></button> </td>
                </tr>
               
                 
                @endforeach
               
                 
            </tbody>
        </table>
    </div>
    
    {{$quizes->links()}}
   
</div>
</div>

</div>
</section>
 

@endsection


