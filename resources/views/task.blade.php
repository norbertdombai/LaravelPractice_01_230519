@foreach ($tasks as $task)
<form method="POST" action="/task/{{$task->id}}">
    {{csrf_field() }}
    {{method_field('DELETE')}}

    <div class="form-group">
        <input type="submit" class="btn btn-danger delete-user" value="{{$task->title}}">
    </div>
</form>
@endforeach