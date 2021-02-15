@extends('base')
@section('title') Inicio @endsection
@section('content')
    <table class="table">
        <thead>
            <tr>
                <th>{{ 'Id' }}</th>
                <th>{{ 'Título' }}</th>
                <th>{{ 'Resumen'}}</th>
                <th>{{ 'Descripción'}}</th>
                <th>{{ 'Autores' }}</th>
                <th>{{ 'Imagen'}} </th>
                <th>{{ 'Acciones' }}</th>
            </tr>
        </thead>
        <tbody>
            @if (count($posts) >= 1)
                @foreach ($posts as $post)
                    <tr>
                        <td scope="row"> {{ $post->id }} </td>
                        <td> {{ $post->title }}</td>
                        <td> {{ $post->summary }}</td>
                        <td> {{ $post->description }}</td>
                        <td> {{ $post->author }}</td>
                        <td> {{ $post->image }}</td>
                        <td>
                            <a href="{{ route("post.edit",$post->id)}}" class="btn btn-sm btn-primary">Editar</a>
                            <form action="{{ route("post.destroy", $post->id)}}" method="post">
                                {{ csrf_field() }}
                                {{ method_field("DELETE") }}
                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('¿Desea Eliminar este registro?')">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            @else
                <td scope="row">{{ 'No se encontraron resultados' }}</td>
                <td></td>
            @endif
        </tbody>
    </table>
@endsection
