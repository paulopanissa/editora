@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3>Listagem de Categorias</h3>
                <a href="{{ route('categories.create') }}" class="btn btn-primary btn-sm">Nova Categoria</a>
            </div>

        </div>
        <div class="row">
            <div class="col-12">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>#</th>
                    </tr>
                    </thead>

                    <tbody>
                    @foreach($categories as $category)
                        <tr>
                            <td>{{ $category->id }}</td>
                            <td>{{ $category->name }}</td>
                            <td>
                                <ul>
                                    <li>
                                        <a href="{{ route('categories.edit', ['category' => $category->id]) }}">Editar</a>
                                    </li>
                                    <li>
                                        {!! Form::open(['route' => ['categories.delete', 'category' => $category->id], 'method' => 'DELETE']) !!}
                                            {!! Form::submit('Excluir', ['class' => 'btn btn-link']) !!}
                                        {!! Form::close() !!}
                                    </li>
                                </ul>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                {{ $categories->render('pagination::bootstrap-4') }}
            </div>
        </div>

    </div>
@endsection
