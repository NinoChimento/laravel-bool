
@extends('layouts.layout')

@section('main')
<input type="number">
<select name="name" id="name">
    <option value="all">all</option>
    @foreach ($students as $student)
<option value="{{$student["name"]}}">{{$student["name"]}}</option>
    @endforeach
</select>
<div class="wrap-students">
        @foreach ($students as $key => $student)
            <div class="studente">
            <div class="info">
                 <img src="{{$student["img"]}}" alt="">
            <a href="{{route("showStudent",["id"=> $key])}}"><h2>{{$student["name"]}}</h2></a>
                 <h4>Anni: {{$student["age"]}}</h4>
            </div>
            <h4>{{$student["job"]}}</h4>
            <p>{{$student["description"]}}</p>
    </div>
    @endforeach
    
</div>

@endsection
@section('script')
    <script src="{{asset("js/app.js")}}"></script>
@endsection