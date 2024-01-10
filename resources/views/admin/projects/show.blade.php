@extends('layouts.app')

@section('content')
    <section>
        <div class="container">
            <h1> {{ $project->title }} </h1>
            <p> {{ $project->content}} </p>
        </div>
    </section>
@endsection