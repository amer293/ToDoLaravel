@extends('layouts.default')
<div id="createimg">
        @include('partials.header')
</div>
<div class="jumbotron" id="edit">

    <div class="container">

        {!! Form::open(['route' => ['crud.update', $todos->id], 'method' => 'PUT', 'files' => true]) !!}
            <div class="form-group row">
                <div class="col-sm-9">
                    {!! Form::text('body', $todos->body, ['class' => 'form-control', 'autocomplete' => 'off']); !!}
                </div>
                <button type="submit" class="btn btn-success btnanimated">Edit</button>
            </div>
        {!! Form::close() !!}
       
    </div>
