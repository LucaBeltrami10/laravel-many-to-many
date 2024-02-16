@extends('layouts.app')

@section('title', 'Admin Dashboard')

@section('content')

<div class="container text-center">
    <p>Admin space</p>
    <a href="{{ route('admin.projects.index') }}">
        <button type="button" class="btn btn-dark">Tabella Post</button>
    </a>
    <a href="{{ route('admin.projects.deleted') }}">
        <button type="button" class="btn btn-dark">Eliminati di Recente</button>
    </a>
    <a href="">
        <button type="button" class="btn btn-dark">Technologies</button>
    </a>
    <a href="">
        <button type="button" class="btn btn-dark">Types</button>
    </a>
    
</div>


@endsection