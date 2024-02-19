@extends('layouts.app')

@section('title', 'Projects')

@section('content')

<div class="container">
  <div class="w-100 d-flex justify-content-end">
    <a href="{{ route('admin.projects.create') }}">
      <button type="button" class="btn btn-primary">Aggiungi</button>
    </a>
</div>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Progetto</th>
            <th scope="col">Tipologia</th>
            <th scope="col">Linguaggi</th>
            <th scope="col">Framework</th>
            <th scope="col">Status</th>
            <th scope="col">Repository</th>
            <th scope="col"> </th>
          </tr>
        </thead>
        <tbody>
          @foreach ($projects as $project)
          <tr>
            <th scope="row"><a href="{{ route('admin.projects.show', $project->id) }}">{{ $project->id }}</a></th>
            <td><a href="{{ route('admin.projects.show', $project->id) }}">{{ $project->project_name }}</a></td>
            <td>{{ $project->type->type }}</td>
            <td>
             @foreach ($project->technologies->pluck('technology_name') as $technology)
             {{ $prova = $technology . '' }}
            @endforeach
            </td>
            <td>{{ $project->framework_used }}</td>
            <td>{{ $project->status ? 'Completato' : 'In corso' }}</td>
            <td><a href="{{ $project->repository_url }}">{{ $project->repository_url }}</a></td>
            <td>
              <!-- Button trigger modal -->
              <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal-{{ $project->id }}">
                Cancella
              </button>
              <a href="{{ route('admin.projects.edit', $project->id) }}">
                <button type="button" class="btn btn-success">Modifica</button>
              </a>

              <!-- Modal -->
              <div class="modal fade" id="exampleModal-{{ $project->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h1 class="modal-title fs-5" id="exampleModalLabel">Sei sicuro di voler eliminare {{ $project->project_name  }} ?</h1>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Chiudi</button>
                      <form action="{{ route('admin.projects.destroy', $project) }}" method="POST">
                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger">Cancella</button>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </td>
          </tr>
          @endforeach
          
        </tbody>
      </table>
        
</div>

@endsection