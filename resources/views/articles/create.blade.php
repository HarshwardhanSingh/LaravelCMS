@extends('layouts.master')

@section('content')
  <div class="row">
    <div class="col-md-6 col-md-offset-3">
      <h3>Create Article</h3>
      <hr/>
      {!! Form::open(array('route'=>'articles.store')) !!}
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
          {!! Form::submit('Save',array('class'=>'form-control btn btn-success')) !!}
        </div>
      {!! Form::close() !!}
@endsection
