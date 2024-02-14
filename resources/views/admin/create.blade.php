@extends('layout.admin')

@section('page-title', 'Create new post')

@section('form-action')
    {{ route('admin.posts.store') }}
@endsection

@section('form-method')
    @method('POST')
@endsection