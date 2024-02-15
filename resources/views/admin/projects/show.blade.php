@extends('layouts.app')

@section('title', 'Projects')

@section('content')

<div class="container">
    <div class="w-100">
      <a href="{{ route('admin.projects.edit', $project->id) }}">
        <button type="button" class="btn btn-success">Modifica</button>
      </a>
    </div>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">Colonna</th>
            <th scope="col">Contenuto</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">ID</th>
            <td>{{ $project->id }}</td>
          </tr>
          <tr>
            <th scope="row">Nome Progetto</th>
            <td>{{ $project->project_name }}</td>
          </tr>
          <tr>
            <th scope="row">Tipologia</th>
            <td>{{ $project->type->type }}</td>
          </tr>
          <tr>
            <th scope="row">Linguaggi utilizzati</th>
            <td>{{ $project->language_used }}</td>
          </tr>
          <tr>
            <th scope="row">Framework utilizzati</th>
            <td>{{ $project->framework_used }}</td>
          </tr>
          <tr>
            <th scope="row">Status del lavoro</th>
            <td>{{ $project->status ? 'Completato' : 'In corso' }}</td>
          </tr>
          <tr>
            <th scope="row">Link a repository</th>
            <td>{{ $project->repository_url }}</td>
          </tr>
          <tr>
            <th scope="row">Descrizione</th>
            <td>{{ $project->description }}</td>
          </tr>

          
        </tbody>
      </table>
        
</div>

@endsection