@extends('layout')

@section('title')
<title>Edit a project</title>
@endsection

@section('content')
<h1 class='title'>Edit a project</h1>
    
    <form method="POST" action="/projects/{{$project->id}}" >
        {{method_field('PATCH')}}
        {{ csrf_field() }}
        <div class="field">
            <label class="label" for="title">Titre</label>

            <div class="control">
                <input type="text" name="title" placeholder="Titre" class="input" value=" {{$project->title}} ">
            </div>
        </div>

        <div class="field">
            <label for="description" class="label">Description</label>

            <div class="control">
                <textarea name="description" class="textarea" >
                        {{ $project->title }}
                </textarea>
            </div>
        </div>

        <div class="field">
                <button type="submit" class="button is-link">Update project</button>
            </div>
    </form>

    <form method="POST" action="/projects/{{$project->id}}" >
        {{method_field('DELETE')}}
        {{ csrf_field() }}
            <div class="field">
                    <button type="submit" class="button is-link">Delete project</button>
            </div>
    </form>
@endsection

