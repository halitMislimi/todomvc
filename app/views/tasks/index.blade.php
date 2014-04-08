@foreach($mytasks as $t)
{{$t->title}}</br>
@endforeach

<a href="{{Route('tasks_create')}}"> Create task </a>
