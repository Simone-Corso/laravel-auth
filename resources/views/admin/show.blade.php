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
            <h2 scope="row">
                {{ $project->id }}
            </h2>
            <p>
                {{ $project->description }}
            </p>
            <div class="p-5">
            </div>
            <button class="btn btn-sm btn-success">
                Edit
            </button>
            <button class="btn btn-sm btn-warning">
                Delete
            </button>
        </div>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection