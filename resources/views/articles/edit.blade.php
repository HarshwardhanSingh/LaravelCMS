@extends('layouts.master')

@section('content')
  <div class="row">
    <div class="col-md-6 col-md-offset-3">
      <h3>Edit Article</h3>
      <hr/>
      {!! Form::model($article,array('route'=>array('articles.update',$article->id),'method'=>'put')) !!}
        <div class="form-group">
          <!-- {!! Form::label('title','Article Title') !!} -->
          {!! Form::text('title',null,array('class'=>'form-control','placeholder'=>'Article Title')) !!}
        </div>
        <div class="form-group">
          <!-- {!! Form::label('content','Write Article') !!} -->
          {!! Form::textarea('content',null,array('class'=>'form-control','placeholder'=>'Write Here..','rows'=>'5')) !!}
        </div>
        <div class="form-group">
          <!-- {!! Form::label('slug') !!} -->
          {!! Form::text('slug',null,array('class'=>'form-control','placeholder'=>'Article Slug')) !!}
        </div>
        <div class="form-group">
          {!! Form::token() !!}
          {!! Form::submit('Update',array('class'=>'form-control btn btn-info')) !!}
        </div>
      {!! Form::close() !!}
@endsection
