@extends('layouts.app')

@section('content')
    <section>
        <div class="container">
            <form action="{{ route('admin.projects.store') }}" method="POST">
                
                @csrf

                <div class="mb-3 py-3">
                    <label for="title" class="form-label">Titolo progetto</label>
                    <input type="text" required class="form-control mb-3" name="title" id="title" placeholder="Titolo del progetto" value="{{ old('title') }}">

                    <label for="content" class="form-label">Contenuto</label>
                    <textarea  class="form-control" name="content" id="title" placeholder="Contenuto del progetto" value="{{ old('content') }}"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
        </div>
    </section>
@endsection