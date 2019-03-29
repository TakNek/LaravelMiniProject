@extends('layout')

@section('title')
<title>Home page</title>
@endsection

@section('content')
<h1>Mon premier template blade</h1>
<ul>
    @foreach ($tasks as $task)
    <li>{{$task}}</li>
    @endforeach
</ul>
@endsection

