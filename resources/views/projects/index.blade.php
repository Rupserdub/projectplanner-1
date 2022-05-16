@extends('layouts.main')

@section('title')
Projecten
@endsection

@section('content')
    <h1>Projecten</h1>

<ul class="list-group">
@foreach ($projects as $project)
    
<li class="list-group-item">
    {{$project->title}}
    {{$project->username}}
</li>
@endforeach


</ul>
    <a href={{route('projects.create')}}>Create project</a>
@endsection