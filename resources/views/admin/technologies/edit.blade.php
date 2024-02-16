@extends('layouts.app')

@section('title', 'Crea Technology')

@section('content')

<div class="container">
  <form action="{{ route('admin.technologies.update', $technology->id) }}" method="post">
    @csrf
    @method('PUT')

    <div class="mb-3">
      <label for="technology_name" class="form-label">Nome Tecnologia</label>
      <input type="text" class="form-control" id="technology_name" name="technology_name" value="{{ old('technology_name', $technology->technology_name) }}">
    </div>
    <div class="mb-3">
      <label for="description" class="form-label">Descrizione Tecnologia</label>
      <input type="text" class="form-control" id="description" name="description" value="{{ old('description', $technology->description) }}">
    </div>
    <button type="submit" class="btn btn-primary">Invia</button>
  </form>
</div>

@endsection