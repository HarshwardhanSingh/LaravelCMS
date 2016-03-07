@extends('layouts.master')

@section('content')
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="article">
        <h4>{{ $article->title }}</h4>
        <div class="timestamp">Published at: {{ $article->created_at->format('d-m-y') }}</div>
        <div class="body">
          {{ $article->content }}
        </div>
      </div>
    </div>
  </div>
@endsection
