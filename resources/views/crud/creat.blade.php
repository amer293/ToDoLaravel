@extends('layouts.default')
<div id="createimg">
        @include('partials.header')
</div>

<div class="jumbotron" id="create">

    <div class="container">
            
        {!! Form::open(['route' => 'crud.store', 'method' => 'POST', 'files' => true]) !!}
            <div class="form-group row">
                <div class="col-sm-9">
                    {!! Form::text('body', 'Type here your task', ['class' => 'form-control', 'autocomplete' => 'off']); !!}
                </div>
                <button type="submit" class="btn btn-success btnanimated">Add Task</button>
            </div>
        {!! Form::close() !!}
        
        
    </div>

</div>
