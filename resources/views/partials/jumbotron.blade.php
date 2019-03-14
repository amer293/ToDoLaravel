<div class="jumbotron" id="jumbo">
    <div class="container">
        <div id="image" style="width: 500px; ">
            @include('partials.header')
        </div>
        <br>
        <a href="{{route('crud.create')}}" style="width: 100%;" class="btn btn-success"> Add Task</a>
        @foreach ( $todos as $task)
        <div class="row" >
            <div class="col-lg-12">
                    <br>
                <div class="card cardrotate" >
                    
                    <div class="card-body">
                        
                        <h4 style="position: absolute;">{{@$task->body}}</h4>
                        <a  style="float:right; margin: 5px;"  class="btn btn-primary btnanimated" href="{{ route('crud.edit', ['id' => $task->id]) }}">EDIT</a>
                        {!! Form::open(['route' => ['crud.destroy', $task->id], 'method' => 'DELETE']) !!}
                            <button   style="float:right; margin: 5px;" type="submit" class="btn btn-danger btnanimated">Delete</button>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        <br>
        <div style="position:relative; right: 50%; left: 40%;">
                {{$todos->links()}}
        </div>
    </div>
</div>
