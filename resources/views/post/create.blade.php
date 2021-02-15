@extends('base')
@section('title') Crear Post @endsection
@section('content')
    <form action="{{ route('post.store') }}" method="post">
        {{ csrf_field() }}
        <div class="mb-3">
            <label for="title" class="form-label">Título:</label>
            <input type="text" class="form-control" id="title" name="title" aria-describedby="tituloHelp">
            <div id="tituloHelp" class="form-text">Ingrese el título del Artículo.</div>
        </div>
        <div class="mb-3">
            <label for="summary" class="form-label">Resumen:</label>
            <textarea name="summary" id="summary" class="form-control" col="30" rows="3"></textarea>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Descripción:</label>
            <textarea name="description" id="description" class="form-control" col="30" rows="3"></textarea>
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Imagen:</label>
            <input type="text" class="form-control" id="image" name="image">
        </div>
        <div class="mb-3">
            <label for="author" class="form-label">Autor:</label>
            <input type="text" class="form-control" id="author" name="author">
        </div>
        <button type="submit" class="btn btn-primary">Grabar</button>
    </form>
@endsection
