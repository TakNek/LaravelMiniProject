@extends('layout')

@section('title')
<title>Mes Projets</title>
@endsection

@section('content')
<h1 class='title'>My Projects</h1>
<ul>
    @foreach ($projects as $project)
    <li>
        <a class="is-size-3" href="/projects/{{$project->id}} ">
            {{ $project->title }}
        </a>
    </li>
    @endforeach
</ul>
<a href="http:/projects/create">Create a new project</a>
@endsection