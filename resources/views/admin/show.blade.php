@extends('layouts.admin')

@section('main-content')
<div class="container">
    <div class="row">
        <div class="col-12">
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