@extends('layouts.admin')

@section('main-content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h2>
                {{ $project->title }} -- <em> (deleted) </em>
            </h2>
        </div>
        <div class="col-12">
            <h2 scope="row">
                {{ $project->id }}
            </h2>
            </div>
                {{-- <button class="btn btn-sm btn-warning">
                    Delete
                </button> --}}
            </p>
        </tr>
        </div>
    </div>
</div>
@endsection