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
    
</div>


@endsection