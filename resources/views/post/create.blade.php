@extends('base')
@section('title') Crear Post @endsection
@section('content')
    <div class="row justify-content-center">
        <div class="col-6">
            <h2> {{ 'Ingresar Nuevo Post:' }} </h2>
            <hr>
            <form action="{{ route('post.store') }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="title" class="form-label">Título:</label>
                    <input type="text" class="form-control" id="title" name="title" aria-describedby="tituloHelp">
                    <div id="tituloHelp" class="form-text">Ingrese el título del Artículo.</div>
                </div>
                <div class="form-group has-feedback">
                    <label class="form-label">Categoria</label>
                    <select name="category_id" class="form-select" required>
                        <option value="">Seleccionar Categoria</option>
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}" > {{ $category->name }} </option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="summary" class="form-label">Resumen:</label>
                    <textarea name="summary" id="summary" class="form-control" col="30" rows="2"></textarea>
                </div>
                <div class="form-group">
                    <label for="description" class="form-label">Descripción:</label>
                    <textarea name="description" id="description" class="form-control" col="30" rows="4"></textarea>
                </div>
                <div class="form-group">
                    <label for="image" class="form-label">Imagen:</label>
                    <input type="file" class="form-control" id="image" name="image">
                </div>
                <div class="form-group">
                    <label for="author" class="form-label">Autor:</label>
                    <input type="text" class="form-control" id="author" name="author">
                </div>
                <button type="submit" class="btn btn-lg btn-primary mt-4"><i class="fas fa-save"></i> Grabar</button>
            </form>
        </div>
    </div>
@endsection
