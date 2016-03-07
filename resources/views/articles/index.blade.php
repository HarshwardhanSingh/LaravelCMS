@extends('layouts.master')

@section('content')
  <div class="row">
    <div class="col-md-6 col-md-offset-3">
      @foreach($articles as $article)
        <div class="article">
          <h4>{{ link_to_route('articles.show',$article->title,array($article->id)) }}</h4>
          <div class="timestamp">Published at: {{ $article->created_at->format('d-m-y') }}</div>
          @if(\Auth::user())
            @if($article->user_id == \Auth::user()->id)
              <div class="action-btns">
                {{ link_to_route('articles.edit',"Edit",array($article->id),array('class'=>'edit-btn btn btn-primary btn-sm'))}}
                {{ link_to_route('articles.destroy',"Destroy",array($article->id),array('class'=>'edit-btn btn btn-danger btn-sm'))}}
              </div>
            @endif
          @endif
          <div class="body">
            {{ $article->content }}
          </div>
        </div>
      @endforeach
    </div>
  </div>
@endsection
