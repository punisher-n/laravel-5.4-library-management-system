@extends('pages.admin.header')

@section('admin-content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Page Header
                <small>Optional description</small>
            </h1>
            <br>
            <div class="row">

                    <div class="col-md-12">
                        <div class="box box-solid">
                            <div class="box-header with-border">
                                <h3 class="box-title"><small>Add Books With their corresponding Shelf number</small></h3>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">


                                    {!! Form::open(['url' => 'home']) !!}
                                <div class="form-group is-empty col-md-4">
                                    <div class="form-group">
                                        {!! Form::label('title', 'Title of the book: ') !!}
                                        {!! Form::text('title', null , ['class' => 'form-control']) !!}
                                    </div>
                                </div>

                                <div class="form-group is-empty col-md-4">
                                    <div class="form-group">
                                        {!! Form::label('author', 'Author of the book: ') !!}
                                        {!! Form::text('author', null , ['class' => 'form-control']) !!}
                                    </div>
                                </div>

                                <div class="form-group is-empty col-md-4">
                                    <div class="form-group">
                                        {!! Form::label('yearpublished', 'Date Published: ') !!}
                                        {!! Form::date('yearpublished', null , ['class' => 'form-control']) !!}
                                    </div>
                                </div>

                                <div class="form-group is-empty col-md-4">
                                    <div class="form-group">
                                        {!! Form::label('floor', 'Floor Number: ') !!}
                                        {!! Form::select('floor', [1, 2, 3], null, ['class' => 'form-control']) !!}
                                    </div>
                                </div>

                                <div class="form-group is-empty col-md-4">
                                    <div class="form-group">
                                            {!! Form::label('shelfno', 'Shelf Number: ') !!}
                                        {!! Form::select('shelfno', [1, 2, 3], null, ['class' => 'form-control']) !!}
                                    </div>
                                </div>

                                <div class="form-group is-empty col-md-4">
                                    <div class="form-group">
                                        {!! Form::label('droono', 'Droo Number: ') !!}
                                        {!! Form::select('droono', [1, 2, 3], null, ['class' => 'form-control']) !!}
                                    </div>
                                </div>

                                <div class="form-group is-empty col-md-4">
                                    <div class="form-group">
                                        {!! Form::label('course', 'Book Course: ') !!}
                                        {!! Form::select('course', ['Java','Multmedia skills', 'Php'], null, ['class' => 'form-control']) !!}
                                    </div>
                                </div>
                                <div class="form-group is-empty col-md-4">
                                    <div class="form-group">
                                        {!! Form::label('borow', 'Its alowed: ') !!}
                                        {!! Form::select('borow', ['Only Teachers','Any One'], null, ['class' => 'form-control']) !!}
                                    </div>
                                </div>
                                <div class="form-group is-empty col-md-4">
                                    <div class="form-group">
                                        {!! Form::label('cover', 'Click to add Book Cover Photo: ') !!}
                                        {!! Form::file('cover', ['class' => 'form-control']) !!}
                                    </div>
                                </div>
                                <div class="form-group is-empty col-md-4">
                                <div class="form-group">
                                    {!! Form::submit('Add Book', ['class' => 'btn btn-primary form-control']) !!}
                                </div>
                                </div>
                                    {!! Form::close() !!}

                                <!--hapa maelezo-->
                            </div>
                            <!-- /.box-body -->
                        </div>
                        <!-- /.box -->
                    </div>


            </div>

        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Your Page Content Here -->

        </section>
        <!-- /.content -->
    </div>
@endsection
@extends('pages.admin.footer')