@extends('layout')

@section('title')
<title>Create a new project</title>
@endsection

@section('content')
<h1 class='title'>Create a new project</h1>
<form method="POST" action="/projects">
    @csrf
    <div class="field">
            <label class="label" for="title">Titre</label>

            <div class="control">
                <input type="text" name="title" placeholder="Titre" class="input {{$errors->has('title') ? "is-danger" : ""}} " value=" {{old('title')}} ">
            </div>
        </div>

        <div class="field">
            <label for="description" class="label">Description</label>

            <div class="control">
                <textarea name="description" class="textarea {{$errors->has('description') ? "is-danger" : ""}} " >
                        {{old('description')}}
                </textarea>
            </div>
        </div>

        <div class="field">
                <button type="submit" class="button is-link">Update project</button>
        </div>

        @if($errors->any())
            <div class="notification is-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </form>
@endsection