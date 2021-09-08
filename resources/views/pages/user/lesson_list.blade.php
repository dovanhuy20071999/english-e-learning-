@extends('layouts.app')
@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <div class="d-flex justify-content-between align-items-center activity">
                <div style="text-align:center;"><h1>LESSON LIST OF COURSE: {{strtoupper($course->name)}}</h1></div>
                <div class="icons"><i class="fa fa-search"></i><i class="fa fa-ellipsis-h"></i></div>
            </div>
            <div class="mt-3">
                <ul class="list list-inline">
                    @foreach ($lessons as $lesson)
                    <li class="d-flex justify-content-between">
                        <div class="d-flex flex-row align-items-center">
                            <div class="ml-2">
                                <a href="{{ route('lesson.detail', $lesson->id)}}"><h3 class="mb-0">{{ $lesson -> name}}</h3></a>
                            </div>
                        </div>
                        <div class="d-flex flex-row align-items-center">
                            <div class="d-flex flex-column mr-2">
                                <span class="date-time">from course: {{$course->name}}</span>
                        </div>
                    </li>
                    <hr>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection