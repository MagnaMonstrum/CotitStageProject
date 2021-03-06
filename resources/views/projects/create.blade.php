@extends('projects.layout')

        @section('content')


        <h1 class="title">Create a New Project</h1>

        <form method="POST" action="/projects">
            @csrf

                <div class="field">
                    <label class="label" for="title">Project Title</label>

                    <div class="control">

                        <input class="input {{ $errors->has('title') ? 'is-danger' : '' }}" type="text" name="title" value="{{ old('title' )}}" required placeholder="Project title">
                    </div>
                </div>

                <div class="field">

                    <label class="label" for="title">Project Description</label>

                    <div class="control">

                        <textarea class="input {{ $errors->has('description') ? 'is-danger' : ''}}" required  name="description" id="Project description" cols="20" rows="5" placeholder="Project description">{{ old('description' )}}</textarea>

                    </div>
                </div>

                <div class="field">
                    <div class="control">
                        <button type="submit" class="button is-link">Create project</button>
                    </div>
                </div>

            @include('projects.errors')

        </form>


@endsection