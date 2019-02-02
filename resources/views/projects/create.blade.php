@extends('layout')

@section('content')

    <h1 class='title'>Create a New Project</h1>

    <form method="POST" action="/projects">
        {{ csrf_field() }}

        <div class="field">
            <input type="text" class="input" name="title" placeholder="Project title">
        </div>

        <div class="field">
            <textarea name="description" class="textarea" placeholder="Project description">

            </textarea>
        </div>

        <div class="field">
            <button type="submit" class="button is-link">Create Project</button>
        </div>
    </form>

@endsection