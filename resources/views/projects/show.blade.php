@extends('layout')

@section('title')
<title></title>
@endsection

@section('content')
<h1 class="title"> {{$project->title}} </h1>
<div class="content">{{$project->description}}</div>
@if ($project->tasks->count())
<div class="box">
        @foreach ($project->tasks as $task)
            <form method="POST" action="/tasks/{{$task->id}} ">
                @method('PATCH')
                @csrf
                <label for="completed" class="checkbox {{$task->completed ? "is-terminedxd" : ""}}">
                    <input type="checkbox" name="completed" onChange="this.form.submit()" {{$task->completed ? "checked" : ""}}>
                    {{$task->description}} 
                </label>
            </form>
        @endforeach
</div>
@endif
    <form method="POST" action="/projects/{{$project->id}}/tasks" class="box">
        @csrf
        <div class="field">
            <label for="description" class="label">
                <div class="control">
                    <input type="text" name="description" placeholder="Nouvelle Task" class="input">
                </div>
            </label>
        </div>

        <div class="field">
                <div class="control">
                    <button type="submit" class="button is-link">Ajouter la Taschke</button>
                </div>
            </label>
        </div>
    </form>
<p>
    <a href="/projects/{{$project->id}}/edit">Edit</a>
</p>
@endsection