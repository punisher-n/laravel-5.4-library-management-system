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
            <center>
            <div class="row">

                <div class="col-md-6">
                    <div class="box box-solid">
                        <div class="box-header with-border">
                            <h3 class="box-title"><small>Add Books With their corresponding Shelf number</small></h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">


                            {!! Form::open(['url' => '/register']) !!}
                            <div class="form-group is-empty col-md-6">
                                <div class="form-group">
                                        {!! Form::label('fname', 'First Name: ') !!}
                                    {!! Form::text('fname', null , ['class' => 'form-control']) !!}
                                </div>
                            </div>

                            <div class="form-group is-empty col-md-6">
                                <div class="form-group">
                                    {!! Form::label('oname', 'Other Name: ') !!}
                                    {!! Form::text('oname', null , ['class' => 'form-control']) !!}
                                </div>
                            </div>
                            <div class="form-group is-empty col-md-6">
                                <div class="form-group">
                                    {!! Form::label('lname', 'Last Name: ') !!}
                                    {!! Form::text('lname', null , ['class' => 'form-control']) !!}
                                </div>
                            </div>

                            <div class="form-group is-empty col-md-6">
                                <div class="form-group">
                                    {!! Form::label('email', 'Email address: ') !!}
                                    {!! Form::email('email', null , ['class' => 'form-control']) !!}
                                </div>
                            </div>


                            <div class="form-group is-empty col-md-6">
                                <div class="form-group">
                                        {!! Form::label('phone', 'Phone number: ') !!}
                                    {!! Form::text('phone', null, ['class' => 'form-control']) !!}
                                </div>
                            </div>
                            <div class="form-group is-empty col-md-6">
                                <div class="form-group">
                                       <label for="password">Password</label>
                                    <input type="password" name="password" class="form-control">
                                </div>
                            </div>


                            <div class="form-group is-empty col-md-6">
                                <div class="form-group">
                                    {!! Form::submit('Save', ['class' => 'btn btn-primary form-control']) !!}
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