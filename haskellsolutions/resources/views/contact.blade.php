@extends('layouts.app')

@section('content')
    <h1 class="border-bottom"><strong>Contact</strong></h1>
    {!! Form::open(['url' => 'contact/submit']) !!}
        @csrf
        <div class="form-group">
            {{Form::label('name', 'Name')}}
            {{Form::text('name', '', ['class'=>'form-control', 'placeholder' => 'Enter name'])}}
        </div>
        <div class="form-group">
            {{Form::label('email', 'E-Mail Address')}}
            {{Form::text('email', '', ['class'=>'form-control', 'placeholder' => 'example@gmail.com'])}}
        </div>
        <div class="form-group">
            {{Form::label('message', 'Message')}}
            {{Form::textarea('message', '', ['class'=>'form-control', 'placeholder' => 'Type message here...'])}}
        </div>
        <div>
            {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
        </div>
    {!! Form::close() !!}

@endsection