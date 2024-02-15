@extends('layouts.admin')

@section('title, Creating a new project')

@section('main-content')
<div class="container">
    <div class="row">


        <div class="col-12">

            <form action="{{ route('admin.projects.store') }}" method="POST">
                @csrf

                <div class="mb-3 input-group">
                <label for="title" class="label">Title:</label>
                <input type="text" name="title" id="title" value="{{ old('title')}}">
                </div>

                <div class="mb-3 input-group">
                <label for="description" class="label">Description:</label>
                <input type="text" name="description" id="description" value="{{ old('description')}}">
                </div>

                <div class="mb-3 input-group">
                <label for="thumb" class="label">Project image url:</label>
                <input type="text" name="thumb" id="thumb" value="{{ old('thumb')}}">
                </div>

            </form>

            <h2>
                {{ $project->title }}
            </h2>
        </div>
        <div class="col-12">
        <img src="{{$project->thumb}}" alt="{{$project->title}}">
            <p>
                {{ $project->description }}
            </p>
            <div class="p-5">
            </div>
            <button class="btn btn-sm btn-success">
                Edit
            </button>
            <button class="btn btn-sm btn-warning" onclick="return confirm('Sei sicuro di voler eliminare questo elemento?');">
            <a href="{{ route('admin.delete-show', ['project' => $project->id]) }}">
                    Delete
                </a>
            </button>
        </div>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection