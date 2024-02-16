@extends('layouts.app')

@section('title', 'Projects')

@section('content')

<div class="container">
  <div class="w-100 d-flex justify-content-end">
    <a href="">
      <button type="button" class="btn btn-primary">Aggiungi</button>
    </a>
</div>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nome Tecnologia</th>
            <th scope="col">Descrizione</th>
            <th scope="col"> </th>
          </tr>
        </thead>
        <tbody>
          @foreach ($technologies as $technology)
          <tr>
            <th scope="row"><a href="">{{ $technology->id }}</a></th>
            <td><a href="">{{ $technology->technology_name }}</a></td>
            <td>{{ $technology->description }}</td>
            <td>
              
              <a href="{{ route('admin.technologies.show', $technology->id) }}">
                <button type="button" class="btn btn-dark">Progetti {{ $technology->technology_name  }}</button>
              </a>
              <a href="">
                <button type="button" class="btn btn-success my-1">Modifica</button>
              </a>
              <!-- Button trigger modal -->
              <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal-{{ $technology->id }}">
                Cancella
              </button>

              <!-- Modal -->
              <div class="modal fade" id="exampleModal-{{ $technology->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h1 class="modal-title fs-5" id="exampleModalLabel">Sei sicuro di voler eliminare {{ $technology->technology_name  }} ?</h1>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Chiudi</button>
                      <form action="" method="POST">
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
    
        
</div>

@endsection