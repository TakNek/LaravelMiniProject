@extends('layout')

@section('title')
<title>Mes Projets</title>
@endsection

@section('content')
<h1>My Projects</h1>
<ul>
    @foreach ($projects as $project)
    <li> {{ $project->title }} </li>
    @endforeach
</ul>
@endsection