@extends('layouts.app')

@section('content')
    <section>
        <div class="container">
            <h1> Projects index </h1>   
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Progetto</th>
                        <th>Contenuto</th>
                        <th>
                            <a href="{{route('admin.projects.create' )}}">Nuovo</a>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($projects as $project)
                        <tr>
                            <td>{{ $project->id }}</td>
                            <td>
                                <a href="{{route('admin.projects.show', $project)}}"> {{ $project->title }}</a>
                            </td>
                            <td>{{ $project->content }}</td>
                            <td>
                                <a href="{{route('admin.projects.edit', $project)}}">Modifica</a>
                            </td>
                            <td>
                                <form action="{{route('admin.projects.destroy', $project)}}" method="POST">
                                    @csrf
                                    @method('DELETE')

                                    <input type="submit" value="Elimina">
                                </form>
                            </td>
                        </tr>
                    @empty
                        <td>Nessun progetto</td>
                    @endforelse
                </tbody>
            </table>
        </div>
    </section>
@endsection