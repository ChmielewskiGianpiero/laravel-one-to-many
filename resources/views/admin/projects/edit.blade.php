@extends('layouts.app')
@section('content')
    <section>
      <div class="container">
        <form action="{{ route('admin.projects.update',$project) }}" method="POST">
      
        @csrf
        @method('PUT')

        <div class="mb-3">
          <label for="title" class="form-label">Title</label>
          <input type="text" class="form-control" name="title" id="title" placeholder="Titolo del progetto" value="{{ old('title',$project->title) }}">
        </div>
        <div class="mb-3">
          <label for="content"  class="form-label">content</label>
          <textarea class="form-control" id="content" name="content" rows="3">{{ old('content',$project->content) }}</textarea>
        </div>
        <div class="mb-3">
          <input type="submit" class="btn btn-primary " value="Crea">
        </div>
      </form>
      @if ($errors->any())
          <div class="alert alert-danger">
              <ul>
                  @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                  @endforeach
              </ul>
          </div>
      @endif
      </div>
    </section>
@endsection