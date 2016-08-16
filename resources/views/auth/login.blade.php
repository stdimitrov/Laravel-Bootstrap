@extends('parts.doctype')

@include('parts.navbarLog')
<h2> Login page </h2>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"></div>
                <div class="panel-body">

                    {!! Form::open(['route' => 'post_login', 'id' => 'login-form']) !!}

                    {!! Form::label('email', 'Email Address') !!}
                    {!! Form::email('email', null, ['id' => 'email', 'class' => 'form-control', 'placeholder' => 'Email Address', 'require' ]) !!}
                    <br/>
                    {!! Form::label('password', 'Password') !!}
                    {!! Form::password('password', ['id' => 'password', 'class' => 'form-control', 'placeholder' => 'Password', 'require' ]) !!}
                    <br/>
                {!! Form::button('Log In', ['class' => 'btn btn-lg btn-primary btn-block', 'type' => 'submit']) !!}
                {!! Form::close() !!}
                <!--  -->


                </div>
            </div>
        </div>
    </div>
</div>