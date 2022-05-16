@extends('layouts.main')

@section('title')
Projecten
@endsection

@section('content')
<h1>Detail page: {{$project-> title}}</h1>

<p><b>Project owner:</b>   {{ $project->owner['username'] }}</p> 

<p>Other projects by this owner:</p>
<ul>
@foreach ($project->owner->projects as $project)
   <li>{{$project->title}}</li> 
@endforeach

</ul>

<p>{{$project-> description}}</p>

<h3>Tasks</h3>
<ul>
@foreach ($project->tasks as $task)
    <li>{{ $task->title }}</li>
@endforeach
<a href={{route('projects.edit', $project->id)}}>Edit</a>



</ul>


@endsection