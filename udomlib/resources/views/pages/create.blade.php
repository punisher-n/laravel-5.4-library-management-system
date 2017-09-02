
@extends ('pages.head_test')

@section('content')
<div class="container">
<h2>HIE</h2>
 {!! Form::open(['url' => 'books']) !!}

    <div class="form-group">
        {!! Form::label('name', 'Name: ') !!}
        {!! Form::text('name', null , ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('author', 'Author: ') !!}
        {!! Form::text('author', null , ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('title', 'Title: ') !!}
        {!! Form::text('title', null , ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::submit('Add Book', ['class' => 'btn btn-primary form-control']) !!}
    </div>
    {!! Form::close() !!}
</div>
@endsection

@extends ('pages.footer')

